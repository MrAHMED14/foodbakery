<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BuyerController extends Controller
{

    public function update(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = User::find(Auth::id());
        if (!$user) {
            return back()->with('error', 'User not found.');
        }

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('users/', 'public');
            $user->photo = $path;
        }

        $user->update($request->only('name', 'phone'));
        $user->save();

        return back()->with('success', 'Profile updated successfully.');
    }


    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password'     => 'required|min:8|confirmed',
        ]);

        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        $user = User::find(Auth::id());
        if (!$user) {
            return back()->withErrors(['user' => 'User not found']);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('success', 'Password updated successfully.');
    }

    public function buyerDashboard()
    {
        return view('front.buyer.index');
    }

    public function bookings()
    {
        return view('front.buyer.bookings');
    }

    public function reviews()
    {
        return view('front.buyer.reviews');
    }

    public function orders()
    {
        return view('front.buyer.orders');
    }

    public function shortlists()
    {
        return view('front.buyer.shortlists');
    }

    public function statement()
    {
        return view('front.buyer.statement');
    }

    public function account_setting()
    {
        return view('front.buyer.account_setting');
    }
}
