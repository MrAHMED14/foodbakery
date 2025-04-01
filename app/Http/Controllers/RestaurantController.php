<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function registerRestaurant(){
        return view('front.restaurant.register.register');
    }

    public function registerPackage(){
        return view('front.restaurant.register.package');
    }

    public function registerPayment(){
        return view('front.restaurant.register.payment');
    }

    public function registerActivation(){
        return view('front.restaurant.register.activation');
    }

    public function restaurantDashboard(){
        return view('front.restaurant.index');
    }

    public function restaurant(){
        return view('front.restaurant.restaurant');
    }

    public function location(){
        return view('front.restaurant.location');
    }

    public function openClose(){
        return view('front.restaurant.open-close');
    }

    public function menuBuilder(){
        return view('front.restaurant.menu-builder');
    }

    public function orders(){
        return view('front.restaurant.orders');
    }

    public function bookings(){
        return view('front.restaurant.bookings');
    }

    public function reviews(){
        return view('front.restaurant.reviews');
    }

    public function memberships(){
        return view('front.restaurant.memberships');
    }

    public function withdrawals(){
        return view('front.restaurant.withdrawals');
    }

    public function earnings(){
        return view('front.restaurant.earnings');
    }

    public function statement(){
        return view('front.restaurant.statement');
    }

    public function teamManagement(){
        return view('front.restaurant.team-management');
    }

    public function changePassword(){
        return view('front.restaurant.change-pass');
    }
}
