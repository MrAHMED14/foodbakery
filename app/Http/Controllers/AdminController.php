<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Review;
use App\Models\ReviewResponse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('back.index');
    }

    public function restaurants(Request $request)
    {
        $query = $request->input('search');
        $isVerified = $request->input('is_verified');
        $perPage = 10;

        $restaurants = Restaurant::search($query)
            ->when($isVerified !== null && $isVerified !== '', fn($q) => $q->where('is_verified', $isVerified))
            ->orderBy('id', 'asc')
            ->paginate($perPage);

        return view('back.restaurants', compact('restaurants', 'query', 'isVerified'));
    }

    public function toggleRestaurantVerification(Restaurant $restaurant)
    {
        $restaurant->update(['is_verified' => !$restaurant->is_verified]);
        return back()->with('success', 'Verification status updated!');
    }

    public function users(Request $request)
    {
        $query = $request->input('search');
        $role = $request->input('role');
        $perPage = 10;

        if (empty($role)) {
            $users = User::search($query)->orderBy('id', 'asc')->paginate($perPage);
        } else {
            $users = User::search($query)
                ->where('role', $role)->orderBy('id', 'asc')->paginate($perPage);
        }

        return view('back.users', compact('users', 'query', 'role'));
    }

    public function reviews(Request $request)
    {
        $userSearch = $request->input('user');
        $restaurantSearch = $request->input('restaurant');
        $rating = $request->input('rating');
        $perPage = 10;

        $reviews = Review::with(['user', 'restaurant', 'response'])
            ->when($userSearch, function ($query) use ($userSearch) {
                $query->whereHas('user', function ($q) use ($userSearch) {
                    $q->where('name', 'like', "%{$userSearch}%")
                        ->orWhere('email', 'like', "%{$userSearch}%")
                        ->orWhere('id', $userSearch);
                });
            })
            ->when($restaurantSearch, function ($query) use ($restaurantSearch) {
                $query->whereHas('restaurant', function ($q) use ($restaurantSearch) {
                    $q->where('name', 'like', "%{$restaurantSearch}%")
                        ->orWhere('email', 'like', "%{$restaurantSearch}%")
                        ->orWhere('id', $restaurantSearch);
                });
            })
            ->when($rating, function ($query) use ($rating) {
                $query->where('rating', $rating);
            })
            ->orderBy('created_at', 'desc')
            ->paginate($perPage)
            ->appends($request->query());

        return view('back.reviews', compact('reviews', 'userSearch', 'restaurantSearch', 'rating'));
    }

    public function destroyReview($id)
    {
        Review::findOrFail($id)->delete();
        return back()->with('success', 'Review deleted');
    }

    public function destroyReply($id)
    {
        ReviewResponse::findOrFail($id)->delete();
        return back()->with('success', 'Reply deleted');
    }

    public function adminProfile()
    {
        return view('back.admin-profile');
    }

    public function adminProfileUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'profile_picture' => 'nullable|image|max:2048',
        ]);

        $user = User::findOrFail(Auth::id());
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('users/', 'public');
            $user->photo = $path;
        }

        $user->save();

        return back()->with('success', 'Profile updated successfully!');
    }

    public function adminProfileUpdatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'Current password does not match']);
        }

        $user = User::findOrFail(Auth::id());

        if ($request->current_password === $request->new_password) {
            return back()->withErrors(['new_password' => 'New password must be different from current password']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password updated successfully!');
    }
}
