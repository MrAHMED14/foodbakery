<?php

namespace App\Http\Controllers;

use App\Models\CuisineType;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RestaurantController extends Controller
{
    /*
        * "Display all the restaurants"
    */
    public function index(Request $request)
    {
        /*
        * display only verified restaurants
        * paginate the results
        * search the results
        * filter by multiple cuisine types
        */

        $maxRestaurants = 10;
        $query = $request->input('search');
        $cuisineTypesInput = $request->input('cuisine_types'); // Get the selected cuisine types

        $restaurantsQuery = Restaurant::where('is_verified', 1);

        if ($query) {
            $restaurantsQuery = Restaurant::search($query)->where('is_verified', 1);
        }

        // Filter by multiple cuisine
        if ($cuisineTypesInput) {
            $restaurantsQuery = $restaurantsQuery->whereHas('cuisines', function($query) use ($cuisineTypesInput) {
                $query->whereIn('cuisine_types.id', $cuisineTypesInput);
            });
        }

        $restaurants = $restaurantsQuery->paginate($maxRestaurants);

        $cuisineTypes = CuisineType::all();

        // dd($restaurants);
        return view('front.listings', compact('restaurants', 'query', 'cuisineTypes', 'cuisineTypesInput'));
    }

    /*
        * "Display the specified restaurant"
    */
    public function show(Restaurant $restaurant)
    {
        return view('front.details', compact('restaurant'));
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
            'restaurant_city' => 'required|string|max:255',
            'restaurant_state' => 'required|string|max:255',
            'restaurant_phone' => 'required|string|max:20',
            'restaurant_email' => 'required|string|max:255|unique:restaurants',
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
            'cuisine_types' => 'nullable|array',  // This allows multiple cuisine types
            'cuisine_types.*' => 'exists:cuisine_types,id', // Ensure the selected cuisine types exist in the DB

            //# User Information
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|email|unique:users',
            'user_password' => 'required|confirmed'
        ]);

        try {
            DB::beginTransaction();

            // Create the user
            $user = User::create([
                'name' => $validatedData['user_name'],
                'email' => $validatedData['user_email'],
                'role' => User::ROLE_RESTAURANT,
                'password' => Hash::make($validatedData['user_password']),
            ]);


            // Handle file uploads with storage paths
            $logoPath = $request->file('restaurant_logo') ? $request->file('restaurant_logo')->store('logos', 'public') : null;
            $coverPhotoPath = $request->file('restaurant_cover_photo') ? $request->file('restaurant_cover_photo', 'public')->store('cover_photos') : null;

            // Create the restaurant
            $restaurant = Restaurant::create([
                'name' => $validatedData['restaurant_name'],
                'address' => $validatedData['restaurant_address'],
                'city' => $validatedData['restaurant_city'],
                'state' => $validatedData['restaurant_state'],
                'phone' => $validatedData['restaurant_phone'],
                'email' => $validatedData['restaurant_email'],
                'latitude' => $validatedData['restaurant_latitude'],
                'longitude' => $validatedData['restaurant_longitude'],
                'description' => $validatedData['restaurant_description'],
                'capacity' => $validatedData['restaurant_capacity'],
                'payment_options' => $validatedData['restaurant_payment_options'],
                'accepts_orders' => $validatedData['restaurant_accepts_orders'] ?? false,
                'accepts_reservations' => $validatedData['restaurant_accepts_reservations'] ?? false,
                'restaurant_logo' => $logoPath,
                'cover_photo' => $coverPhotoPath,
                'minimum_order' => $validatedData['restaurant_minimum_order'],
                'maximum_order' => $validatedData['restaurant_maximum_order'],
                'delivery_fee' => $validatedData['restaurant_delivery_fee'],
                'user_id' => $user->id,

                //TODO: REMOVE THIS
                'is_verified' => 1,
            ]);

            if (isset($validatedData['cuisine_types'])) {
                $restaurant->cuisines()->attach($validatedData['cuisine_types']);
            }

            DB::commit();

            session()->flash('success', 'Restaurant registered successfully!');
            return redirect()->route('login');
        }catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'Failed to register restaurant. Please try again.');
            return back();
        }
    }

    /*
        !-----------------------------------------------------------------------!
        !---------------------------* UNCHANGED CODE *--------------------------!
        !-----------------------------------------------------------------------!
    */
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
        return view('front.restaurant.index');
    }

    public function restaurant()
    {
        return view('front.restaurant.restaurant');
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
        return view('front.restaurant.menu-builder');
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
