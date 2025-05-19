<?php

namespace App\Http\Controllers;

use App\Models\CuisineType;
use App\Models\Dish;
use App\Models\Menu;
use App\Models\PhotoGallery;
use App\Models\Restaurant;
use App\Models\User;
use App\Services\CartService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RestaurantController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }
    /*
        * "Display all the restaurants"
    */
    public function index(Request $request)
    {
        $maxRestaurants = 10;
        $query = $request->input('search');
        $cuisineTypesInput = $request->input('cuisine_types');
        $openStatus = $request->input('open_status');
        $preOrder = $request->input('pre_order');
        $booking = $request->input('booking');
        $location = $request->input('location');
        $sortBy = $request->input('sort_by', 'best_match');

        $restaurantsQuery = Restaurant::where('is_verified', 1);

        if ($query) {
            $searchIds = Restaurant::search($query)->get()->pluck('id');
            $restaurantsQuery = Restaurant::where('is_verified', 1)
                                          ->whereIn('id', $searchIds);
        }

        if ($cuisineTypesInput) {
            $restaurantsQuery = $restaurantsQuery->whereHas('cuisines', function ($query) use ($cuisineTypesInput) {
                $query->whereIn('cuisine_types.id', $cuisineTypesInput);
            });
        }

        if ($openStatus === 'open') {
            $restaurantsQuery->whereHas('openingHours', function ($q) {
                $now = Carbon::now()->timezone('+01:00');
                $currentDay = $now->format('l');
                $currentTime = $now->format('H:i:s');

                $q->where('day', $currentDay)
                    ->where('is_closed', false)
                    ->whereTime('opening_time', '<=', $currentTime)
                    ->whereTime('closing_time', '>=', $currentTime);
            });
        } elseif ($openStatus === 'closed') {
            $restaurantsQuery->where(function ($q) {
                $now = Carbon::now()->timezone('+01:00');
                $currentDay = $now->format('l');
                $currentTime = $now->format('H:i:s');

                $q->whereDoesntHave('openingHours', function ($subQ) use ($currentDay, $currentTime) {
                    $subQ->where('day', $currentDay)
                        ->where('is_closed', false)
                        ->whereTime('opening_time', '<=', $currentTime)
                        ->whereTime('closing_time', '>=', $currentTime);
                });
            });
        }

        if ($preOrder === 'yes') {
            $restaurantsQuery->where('accepts_orders', true);
        } elseif ($preOrder === 'no') {
            $restaurantsQuery->where('accepts_orders', false);
        }

        if ($booking === 'yes') {
            $restaurantsQuery->where('accepts_reservations', true);
        } elseif ($booking === 'no') {
            $restaurantsQuery->where('accepts_reservations', false);
        }

        if ($location) {
            $restaurantsQuery->where(function ($q) use ($location) {
                $q->where('address', 'like', "%{$location}%")
                  ->orWhere('commune', 'like', "%{$location}%")
                  ->orWhere('wilaya', 'like', "%{$location}%");
            });
        }

        switch ($sortBy) {
            case 'alphabetical':
                $restaurantsQuery->orderBy('name', 'asc');
                break;

            case 'ratings':
                $restaurantsQuery->withAvg('reviews', 'rating')->orderByDesc('reviews_avg_rating');
                break;

            default:
                $restaurantsQuery->orderBy('id', 'asc');
        }

        $restaurants = $restaurantsQuery->paginate($maxRestaurants)->withQueryString();

        $cuisineTypes = CuisineType::all();

        return view('front.listings', compact(
            'restaurants',
            'query',
            'cuisineTypes',
            'cuisineTypesInput',
            'openStatus',
            'preOrder',
            'booking',
            'location',
            'sortBy'
        ));
    }

    /*
        * "Display the specified restaurant"
    */
    public function show(Restaurant $restaurant)
    {
        if (!$restaurant->is_verified) {
            abort(404);
        }

        $cart = $this->cartService->getCart();
        $totalPrice = $this->cartService->getTotalPrice();

        $recommended = $restaurant->reviews()->where('rating', '>=', 3)->count();
        $totalReviews = $restaurant->reviews()->count();
        $recommendedPercentage = $totalReviews > 0 ? round(($recommended / $totalReviews) * 100) : 0;

        return view('front.details', compact('restaurant', 'cart', 'totalPrice','recommendedPercentage'));
    }

    /*
        * "Register a new restaurant"
    */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // Restaurant Information
            'restaurant_name' => 'required|string|max:255',
            'restaurant_address' => 'required|string|max:255',
            'restaurant_commune' => 'required|string|max:255',
            'restaurant_wilaya' => 'required|string|max:255',
            'restaurant_phone' => 'required|string|max:20',
            'restaurant_email' => 'required|string|max:255|unique:restaurants,email',
            'restaurant_latitude' => 'nullable|numeric|between:-90,90',
            'restaurant_longitude' => 'nullable|numeric|between:-180,180',
            'restaurant_description' => 'nullable|string|max:255',
            'restaurant_capacity' => 'nullable|integer',
            'restaurant_payment_options' => 'nullable|string|max:255',
            'restaurant_accepts_orders' => 'nullable|boolean',
            'restaurant_accepts_reservations' => 'nullable|boolean',
            'restaurant_logo' => 'nullable|file|mimes:jpeg,jpg,png|max:2048',
            'restaurant_cover_photo' => 'nullable|file|mimes:jpeg,jpg,png|max:2048',
            'restaurant_minimum_order' => 'nullable|numeric',
            'restaurant_maximum_order' => 'nullable|numeric',
            'restaurant_delivery_fee' => 'nullable|numeric',
            'cuisine_types' => 'nullable|array',
            'cuisine_types.*' => 'exists:cuisine_types,id',

            //# User Information
            'user_name' => 'required|string|max:255',
            'manager_phone' => 'nullable|string|max:20',
            'user_email' => 'required|email|unique:users,email',
            'user_password' => 'required|confirmed'
        ]);

        try {
            DB::beginTransaction();

            // Create the user
            $user = User::create([
                'name' => $validatedData['user_name'],
                'email' => $validatedData['user_email'],
                'phone' => $validatedData['manager_phone'] ?? null,
                'role' => User::ROLE_RESTAURANT,
                'password' => Hash::make($validatedData['user_password']),
            ]);

            $logoPath = $request->file('restaurant_logo') ? $request->file('restaurant_logo')->store('restaurants/logos', 'public') : null;
            $coverPhotoPath = $request->file('restaurant_cover_photo') ? $request->file('restaurant_cover_photo')->store('restaurants/covers', 'public') : null;

            // Create the restaurant
            $restaurant = Restaurant::create([
                'name' => $validatedData['restaurant_name'],
                'address' => $validatedData['restaurant_address'],
                'commune' => $validatedData['restaurant_commune'],
                'wilaya' => $validatedData['restaurant_wilaya'],
                'phone' => $validatedData['restaurant_phone'],
                'email' => $validatedData['restaurant_email'],
                'latitude' => $validatedData['restaurant_latitude'],
                'longitude' => $validatedData['restaurant_longitude'],
                'description' => $validatedData['restaurant_description'],
                'capacity' => $validatedData['restaurant_capacity'] ?? 0,
                'payment_options' => $validatedData['restaurant_payment_options'],
                'accepts_orders' => $validatedData['restaurant_accepts_orders'] ?? false,
                'accepts_reservations' => $validatedData['restaurant_accepts_reservations'] ?? false,
                'restaurant_logo' => $logoPath,
                'cover_photo' => $coverPhotoPath,
                'minimum_order' => $validatedData['restaurant_minimum_order'] ?? 0,
                'maximum_order' => $validatedData['restaurant_maximum_order'] ?? 0,
                'user_id' => $user->id,
            ]);

            if (isset($validatedData['cuisine_types'])) {
                $restaurant->cuisines()->attach($validatedData['cuisine_types']);
            }

            DB::commit();

            session()->flash('success', 'Restaurant registered successfully!');
            return redirect()->route('login');
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Failed to register restaurant. Please try again.' /*. $e->getMessage()*/);
            return back();
        }
    }

    public function update(Request $request)
    {
        $user = User::findOrFail(Auth::id());
        $restaurant = $user->restaurant;

        if (!$restaurant) {
            return redirect()->back()->with('error', 'Restaurant not found.');
        }

        $request->validate([
            'cover_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'restaurant_logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'restaurant_name' => 'required|string|max:255',
            'restaurant_phone' => 'nullable|string|max:20',
            'restaurant_capacity' => 'nullable|integer',
            'manager_phone' => 'nullable|string|max:20',
            'manager_name' => 'required|string|max:255',
            'contact_email' => 'nullable|email',
            'restaurant_description' => 'required|string',
            'accepts_orders' => 'required|boolean',
            'accepts_reservations' => 'required|boolean',
            'minimum_order' => 'nullable|numeric|min:0',
            'maximum_order' => 'nullable|numeric|min:0',
            'session_duration' => 'nullable|numeric|min:10',
            'cuisine_types' => 'nullable|array',
            'cuisine_types.*' => 'exists:cuisine_types,id',
        ]);

        if ($request->hasFile('cover_photo')) {
            $coverPath = $request->file('cover_photo')->store('restaurants/covers', 'public');
            $restaurant->cover_photo = $coverPath;
        }

        if ($request->hasFile('restaurant_logo')) {
            $logoPath = $request->file('restaurant_logo')->store('restaurants/logos', 'public');
            $restaurant->restaurant_logo = $logoPath;
        }

        $restaurant->name = $request->restaurant_name;
        $restaurant->phone = $request->restaurant_phone;
        $restaurant->email = $request->contact_email;
        $restaurant->capacity = $request->restaurant_capacity;
        $restaurant->description = $request->restaurant_description;
        $restaurant->accepts_orders = $request->accepts_orders;
        $restaurant->accepts_reservations = $request->accepts_reservations;
        $restaurant->minimum_order = $request->minimum_order;
        $restaurant->maximum_order = $request->maximum_order;
        $restaurant->session_duration = $request->session_duration;

        if (isset($request->cuisine_types)) {
            $restaurant->cuisines()->sync($request->cuisine_types);
        } else {
            $restaurant->cuisines()->sync([]);
        }

        $restaurant->save();

        $user->name = $request->manager_name;
        $user->phone = $request->manager_phone;
        $user->save();

        return redirect()->back()->with('success', 'Restaurant information updated successfully.');
    }

    public function updateLocation(Request $request)
    {
        $user = User::findOrFail(Auth::id());
        $restaurant = $user->restaurant;

        if (!$restaurant) {
            return redirect()->back()->with('error', 'Restaurant not found.');
        }

        $request->validate([
            'address' => 'required|string|max:255',
            'wilaya' => 'required|string|max:100',
            'commune' => 'required|string|max:100',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
        ]);

        $restaurant->update([
            'address' => $request->address,
            'wilaya' => $request->wilaya,
            'commune' => $request->commune,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        return back()->with('success', 'Location updated successfully.');
    }

    public function updateOpeningHours(Request $request)
    {
        $user = User::findOrFail(Auth::id());
        $restaurant = $user->restaurant;

        if (!$restaurant) {
            return redirect()->back()->with('error', 'Restaurant not found.');
        }

        $request->validate([
            'opening_times' => 'required|array',
            'closing_times' => 'required|array',
            'is_closed' => 'nullable|array',
        ]);

        foreach (['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day) {
            $openingTime = $request->opening_times[$day] ?? null;
            $closingTime = $request->closing_times[$day] ?? null;
            $isClosed = isset($request->is_closed[$day]);

            if (!$isClosed) {
                if (!$openingTime || !$closingTime) {
                    return back()->with('error', 'Please provide both opening and closing times for ' . $day);
                }

                if (Carbon::parse($openingTime)->gte(Carbon::parse($closingTime))) {
                    return back()->with('error', 'Opening time must be before closing time on ' . $day);
                }
            }

            $openingHour = $restaurant->openingHours()->firstOrNew(['day' => $day]);
            $openingHour->opening_time = $openingTime;
            $openingHour->closing_time = $closingTime;
            $openingHour->is_closed = $isClosed;
            $openingHour->restaurant_id = $restaurant->id;
            $openingHour->save();
        }

        return back()->with('success', 'Opening hours updated successfully.');
    }

    public function storeMenu(Request $request)
    {
        $request->validate([
            'menu_name' => 'required|string|max:255',
            'menu_description' => 'nullable|string|max:500',
        ]);

        $restaurant = Auth::user()->restaurant;

        if (!$restaurant) {
            return back()->with('error', 'Restaurant not found.');
        }

        $existingMenu = $restaurant->menus()->where('name', $request->menu_name)->first();
        if ($existingMenu) {
            return back()->with('error', 'You already have a menu with this name.');
        }

        $menu = new Menu();
        $menu->name = $request->menu_name;
        $menu->description = $request->menu_description;
        $menu->restaurant_id = $restaurant->id;
        $menu->save();

        return back()->with('success', 'Menu created successfully.');
    }

    public function updateMenu(Request $request, Menu $menu)
    {
        $request->validate([
            'menu_name' => 'required|string|max:255',
            'menu_description' => 'nullable|string|max:500',
        ]);

        $restaurant = Auth::user()->restaurant;

        if (!$restaurant) {
            return back()->with('error', 'Restaurant not found.');
        }

        if ($menu->restaurant_id !== $restaurant->id) {
            return back()->with('error', 'You do not have permission to update this menu.');
        }

        $existingMenu = $restaurant->menus()
            ->where('name', $request->menu_name)
            ->where('id', '!=', $menu->id)
            ->first();

        if ($existingMenu) {
            return back()->with('error', 'You already have a menu with this name.');
        }

        $menu->name = $request->menu_name;
        $menu->description = $request->menu_description;
        $menu->save();

        return back()->with('success', 'Menu updated successfully.');
    }

    public function destroyMenu(Menu $menu)
    {
        $restaurant = Auth::user()->restaurant;

        if (!$restaurant) {
            return back()->with('error', 'Restaurant not found.');
        }

        if ($menu->restaurant_id !== $restaurant->id) {
            return back()->with('error', 'You do not have permission to delete this menu.');
        }

        $menu->delete();

        return back()->with('success', 'Menu deleted successfully.');
    }

    public function storeDish(Request $request)
    {
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'dish_name' => 'required|string|max:255',
            'dish_description' => 'nullable|string|max:500',
            'dish_price' => 'required|numeric|min:0',
            'dish_image' => 'nullable|file|mimes:jpeg,jpg,png|max:2048',
        ]);

        $restaurant = Auth::user()->restaurant;

        if (!$restaurant) {
            return back()->with('error', 'Restaurant not found.');
        }

        $menu = $restaurant->menus()->find($request->menu_id);
        if (!$menu) {
            return back()->with('error', 'Menu not found.');
        }

        $imagePath = $request->file('dish_image') ? $request->file('dish_image')->store('restaurants/dishes', 'public') : null;

        $dish = new Dish();
        $dish->name = $request->dish_name;
        $dish->description = $request->dish_description;
        $dish->price = $request->dish_price;
        $dish->dish_image = $imagePath;
        $dish->menu_id = $menu->id;
        $dish->save();

        return back()->with('success', 'Dish created successfully.');
    }

    public function updateDish(Request $request, Dish $dish)
    {
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'dish_name' => 'required|string|max:255',
            'dish_description' => 'nullable|string|max:500',
            'dish_price' => 'required|numeric|min:0',
            'dish_image' => 'nullable|file|mimes:jpeg,jpg,png|max:2048',
        ]);

        $restaurant = Auth::user()->restaurant;

        if (!$restaurant) {
            return back()->with('error', 'Restaurant not found.');
        }

        $menu = $restaurant->menus()->where('id', $request->menu_id)->first();
        if (!$menu) {
            return back()->with('error', 'Menu not found.');
        }

        if ($menu->restaurant_id !== $restaurant->id) {
            return back()->with('error', 'You do not have permission to update this menu.');
        }

        $existingDish = $menu->dishes()
            ->where('name', $request->dish_name)
            ->where('id', '!=', $dish->id)
            ->first();

        if ($existingDish) {
            return back()->with('error', 'You already have a dish with this name in this menu.');
        }

        if ($request->hasFile('dish_image')) {
            $imagePath = $request->file('dish_image')->store('restaurants/dishes', 'public');
            $dish->dish_image = $imagePath;
        }

        $dish->menu_id = $menu->id;
        $dish->name = $request->dish_name;
        $dish->price = $request->dish_price;
        $dish->description = $request->dish_description;
        $dish->save();

        return back()->with('success', 'Dish updated successfully.');
    }

    public function destroyDish(Dish $dish)
    {
        $restaurant = Auth::user()->restaurant;

        if (!$restaurant) {
            return back()->with('error', 'Restaurant not found.');
        }

        if ($dish->menu->restaurant_id !== $restaurant->id) {
            return back()->with('error', 'You do not have permission to delete this dish.');
        }

        $dish->delete();

        return back()->with('success', 'Dish deleted successfully.');
    }

    public function gallery()
    {
        return view('front.restaurant.gallery');
    }

    public function uploadPhotos(Request $request)
    {
        $request->validate([
            'photos' => 'required|array',
            'photos.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'is_thumbnail' => 'nullable|boolean',
        ]);

        $restaurant = Auth::user()->restaurant;
        $photos = $request->file('photos');
        $setAsThumbnail = $request->input('is_thumbnail', false);

        if ($setAsThumbnail && count($photos) < 1) {
            return back()->withErrors(['photos' => 'You must upload at least one photo to set as thumbnail.']);
        }

        if ($setAsThumbnail) {
            $restaurant->photoGallery()->update(['is_thumbnail' => false]);
        }

        foreach ($photos as $index => $photo) {
            $path = $photo->store('restaurants/gallery', 'public');

            $restaurant->photoGallery()->create([
                'image_url' => $path,
                'is_thumbnail' => $setAsThumbnail && $index === 0, // Set only for the first image
            ]);
        }

        return back()->with('success', 'Photos uploaded successfully.');
    }

    public function destroyPhotos($id)
    {
        $photo = PhotoGallery::findOrFail($id);

        if ($photo->restaurant_id !== Auth::user()->restaurant->id) {
            abort(403);
        }

        $photo->delete();

        return redirect()->back()->with('success', 'Image deleted.');
    }

    public function registerRestaurant()
    {
        $cuisineTypes = CuisineType::all();
        return view('front.restaurant.register.register', compact('cuisineTypes'));
    }

    public function registerPackage()
    {
        return view('front.restaurant.register.package');
    }

    public function registerPayment()
    {
        return view('front.restaurant.register.payment');
    }

    public function registerActivation()
    {
        return view('front.restaurant.register.activation');
    }

    public function restaurantDashboard()
    {
        $orders = Auth::user()->restaurant->orders()->where('status', 'Processing')->latest()->paginate(10);
        return view('front.restaurant.index', compact('orders'));
    }

    public function restaurant()
    {
        $cuisineTypes = CuisineType::all();
        return view('front.restaurant.restaurant', compact('cuisineTypes'));
    }

    public function location()
    {
        return view('front.restaurant.location');
    }

    public function openClose()
    {
        return view('front.restaurant.open-close');
    }

    public function menuBuilder()
    {
        $menus = Auth::user()->restaurant->menus;
        return view('front.restaurant.menu-builder', compact('menus'));
    }

    public function orders()
    {
        return view('front.restaurant.orders');
    }

    public function bookings()
    {
        return view('front.restaurant.bookings');
    }

    public function reviews()
    {
        return view('front.restaurant.reviews');
    }

    public function memberships()
    {
        return view('front.restaurant.memberships');
    }

    public function withdrawals()
    {
        return view('front.restaurant.withdrawals');
    }

    public function earnings()
    {
        return view('front.restaurant.earnings');
    }

    public function statement()
    {
        return view('front.restaurant.statement');
    }

    public function teamManagement()
    {
        return view('front.restaurant.team-management');
    }

    public function changePassword()
    {
        return view('front.restaurant.change-pass');
    }
}
