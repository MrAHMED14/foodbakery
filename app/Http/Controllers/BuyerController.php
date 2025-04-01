<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function buyerDashboard(){
        return view('front.buyer.index');
    }

    public function bookings(){
        return view('front.buyer.bookings');
    }

    public function reviews(){
        return view('front.buyer.reviews');
    }

    public function orders(){
        return view('front.buyer.orders');
    }

    public function shortlists(){
        return view('front.buyer.shortlists');
    }

    public function statement(){
        return view('front.buyer.statement');
    }

    public function account_setting(){
        return view('front.buyer.account_setting');
    }
}
