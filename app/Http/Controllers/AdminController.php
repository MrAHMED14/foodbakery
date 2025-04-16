<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

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

        if ($request->ajax()) {
            return view('back.body.restaurant-table', compact('restaurants'))->render();
        }

        return view('back.restaurants', compact('restaurants', 'query', 'isVerified'));
    }

    public function toggleRestaurantVerification(Restaurant $restaurant)
    {
        $restaurant->update(['is_verified' => !$restaurant->is_verified]);
        return back()->with('success', 'Verification status updated!');
    }

}
