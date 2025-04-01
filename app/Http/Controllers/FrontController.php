<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index(){
        return view('front.index');
    }

    public function contact(){
        return view('front.contact_us');
    }

    public function faq(){
        return view('front.faq');
    }

    public function how(){
        return view('front.how');
    }

    public function result(){
        return view('front.result');
    }

    public function price(){
        return view('front.price');
    }

    public function single(){
        return view('front.single');
    }

    public function listing(){
        return view('front.listings');
    }

    public function listingDetails(){
        return view('front.details');
    }

    public function blog(){
        return view('front.blog');
    }

    public function blogDetail(){
        return view('front.blog-detail');
    }
}
