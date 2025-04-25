<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
        return view('front.index');
    }

    public function indexNew()
    {
        $verifiedRestaurants = Restaurant::where('is_verified', true);

        $popularRestaurants = (clone $verifiedRestaurants)
            ->where('is_popular', true)
            ->latest()
            ->take(6)
            ->get();

        $featuredRestaurants = (clone $verifiedRestaurants)
            ->where('is_featured', true)
            ->latest()
            ->take(6)
            ->get();

        return view('front.index-new', compact('popularRestaurants', 'featuredRestaurants'));
    }


    public function contact()
    {
        return view('front.contact_us');
    }

    public function faq()
    {
        return view('front.faq');
    }

    public function how()
    {
        return view('front.how');
    }

    public function result()
    {
        return view('front.result');
    }

    public function price()
    {
        return view('front.price');
    }

    public function single()
    {
        return view('front.single');
    }

    public function listing()
    {
        return view('front.listings');
    }

    public function listingDetails()
    {
        return view('front.details');
    }

    public function blog()
    {
        return view('front.blog');
    }

    public function blogDetail()
    {
        return view('front.blog-detail');
    }
}
