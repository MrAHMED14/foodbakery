@extends('front.master')

@section('title')
    Home - FoodBakery
@endsection

@section('content')
    {{-- 7 Sections --}}
    <div class="main-section">
        <div class="page-section nopadding cs-nomargin"
            style="padding-top: 100px; padding-bottom: 100px; margin-bottom: 0px; background: url({{ asset('front/extra-images/cover-image-2.png') }}) no-repeat center / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="element-title">
                            <h1
                                style="font: 700 Normal 30px / 40px 'Montserrat', sans-serif !important; letter-spacing: 1px !important; text-transform: uppercase !important; font-size: 40px; color: #0c0c0c; line-height: 50px; margin-bottom: 5px; text-align:center;">
                                We are in the business of food<br>our restaurants do</h1>
                            <p
                                style="font-size: 18px; letter-spacing: .5px; color: #505050; text-align:center; margin-bottom: 25px;">
                                Discover, explore, and enjoy delicious meals.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="main-search fancy bg-holder" style="margin-bottom: 0; border-radius: 10px;">
                            <form method="GET" action="{{ route('front.listings') }}">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
                                        <div class="field-holder">
                                            <span class="foodbakery-search-location-icon"><i class="icon-search"></i></span>
                                            <input type="text" name="search" placeholder="Resturant name"
                                                style="border-radius: 5px;padding-left: 35px; text-transform: initial !important;">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                        <div class="field-holder">
                                            <ul>
                                                <li class="select-location">
                                                    <div class="foodbakery-locations-fields-group foodbakery-focus-out">
                                                        <span class="foodbakery-search-location-icon"><i
                                                                class="icon-location"></i></span>
                                                        <span id="foodbakery_radius_location_open333"
                                                            class="foodbakery-radius-location"><i
                                                                class="icon-target5"></i></span>
                                                        <input type="text" class="location-field-text filter"
                                                            placeholder="All Locations" style="border-radius: 5px;">
                                                    </div>
                                                    <div class="select-location" id="foodbakery-radius-range333"
                                                        style="display: none;">
                                                        <div class="select-popup popup-open">
                                                            <a id="location_close_popup333" href="javascript:0;"
                                                                class="location-close-popup">
                                                                <i class="icon-times"></i></a>
                                                            <input type="hidden" class="foodbakery-radius"
                                                                {{-- name="foodbakery_radius" --}} value="10">
                                                            <p>Show with in</p>
                                                            <input id="ex16b333" type="text" data-value="10"
                                                                value="10" style="display: none;"
                                                                style="border-radius: 5px;">
                                                            <script>
                                                                jQuery(document).ready(function() {
                                                                    var elem = jQuery("#ex16b333");
                                                                    if (elem.length != "") {
                                                                        elem.slider({
                                                                            step: 1,
                                                                            min: 0,
                                                                            max: 500,
                                                                            value: 10,
                                                                        });
                                                                        elem.on("slideStop", function() {
                                                                            var rang_slider_val = elem.val();
                                                                            jQuery("#ex16b333CurrentSliderValLabel").html(rang_slider_val);
                                                                            jQuery("#range-hidden-foodbakery-radius333").val(rang_slider_val);
                                                                            //foodbakery_restaurant_content("333");
                                                                        });
                                                                        elem.on("slide", function() {
                                                                            jQuery("#ex16b333CurrentSliderValLabel").html(elem.val());
                                                                        });
                                                                    }

                                                                    $("#foodbakery_radius_location_open333").click(function() {
                                                                        $("#foodbakery-radius-range333").show();
                                                                    });
                                                                    $("#location_close_popup333").click(function() {
                                                                        $("#foodbakery-radius-range333").hide();
                                                                    });
                                                                });
                                                            </script>
                                                            <span>Miles: <span
                                                                    id="ex16b333CurrentSliderValLabel">10</span></span><br>
                                                            <p class="my-location">of <i
                                                                    class="cs-color icon-location-arrow"></i><a
                                                                    id="foodbakery-geo-location-all"
                                                                    class="cs-color foodbakery-geo-location313324"
                                                                    href="javascript:void(0)">My location</a></p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        <div class="field-holder">
                                            <input type="submit" value="Search" style="border-radius: 5px;">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section nopadding cs-nomargin"
            style="margin-top: 0px;padding-top: 40px;padding-bottom: 40px;margin-bottom: 0px;background: #c33333;">
            <!-- Container Start -->
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="counter-sec">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-xs-4 ">
                                    <div class="counter-holder">
                                        <div class="text-holder">
                                            <i class="icon- icon-check-circle" style="color:#ffffff !important"></i>
                                            <strong class="count" style="color:#ffffff !important">18</strong>
                                            <span style="color:#ffffff !important">Restaurant</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-4 ">
                                    <div class="counter-holder">
                                        <div class="text-holder">
                                            <i class="icon- icon-check-circle" style="color:#ffffff !important"></i>
                                            <strong class="count" style="color:#ffffff !important">9</strong>
                                            <span style="color:#ffffff !important">People Served</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-4 ">
                                    <div class="counter-holder">
                                        <div class="text-holder">
                                            <i class="icon- icon-check-circle" style="color:#ffffff !important"></i>
                                            <strong class="count" style="color:#ffffff !important">49</strong>
                                            <span style="color:#ffffff !important">Registered Users</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Container Start -->
        </div>

        <div class="page-section nopadding cs-nomargin"
            style="margin-top: 0px;padding-top: 80px;padding-bottom: 0px;margin-bottom: 0px;background: #ffffff;">
            <!-- Container Start -->
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cs-section-title" style="text-align:center!important;">
                            <h2
                                style="font: 700 Normal 30px / 40px 'Montserrat', sans-serif !important; letter-spacing: 1px !important; text-transform: uppercase !important; color: #0c0c0c !important; ">
                                How it works</h2>
                            <span style="color:#aaaaaa;">Find and enjoy the best food experiences in Tiaret – it’s
                                easy!</span>
                        </div>
                    </div>
                    <div class="cs-icon-boxes-listtop-center">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="icon-boxes modern top-center">
                                    <div class="img-holder">
                                        <figure>
                                            <a href="{{ route('front.listings') }}"><img
                                                    src="{{ asset('front/extra-images/how-to-work2.png') }}"
                                                    alt="Choose a restaurant"></a>
                                        </figure>
                                    </div>
                                    <div class="text-holder">
                                        <h3><a href="{{ route('front.listings') }}">Select a restaurant</a></h3>
                                        <p>Explore top-rated spots in Tiaret, ranging from traditional to trendy.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="icon-boxes modern top-center">
                                    <div class="img-holder">
                                        <figure>
                                            <a href="{{ route('front.listings') }}"><img
                                                    src="{{ asset('front/extra-images/how-to-work3.png') }}"
                                                    alt="Pick Your Favorite Dishes"></a>
                                        </figure>
                                    </div>
                                    <div class="text-holder">
                                        <h3><a href="{{ route('front.listings') }}">Pick Your Favorite Dishes</a></h3>
                                        <p>Check the menus and pick something delicious, it’s all in one place.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="icon-boxes modern top-center">
                                    <div class="img-holder">
                                        <figure>
                                            <a href="{{ route('front.listings') }}"><img
                                                    src="{{ asset('front/extra-images/how-to-work1.png') }}"
                                                    alt="Pickup or Delivery"></a>
                                        </figure>
                                    </div>
                                    <div class="text-holder">
                                        <h3><a class="text-reddd" href="{{ route('front.listings') }}">Pickup or
                                                Delivery</a></h3>
                                        <p>No matter what, your meal is just a few steps away.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Popular Restaurants --}}
        <div class="page-section nopadding cs-nomargin"
            style="margin-top: 0px;padding-top: 45px;padding-bottom: 60px;margin-bottom: 0px;background: #ffffff;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cs-section-title" style="text-align:center!important;">
                            <h2
                                style="font: 700 Normal 30px / 40px 'Montserrat', sans-serif !important; letter-spacing: 1px !important; text-transform: uppercase !important; color: #0c0c0c !important; ">
                                Choose from Most Popular</h2>
                            <span style="color:#aaaaaa;">The most popular places, chosen by food lovers like you.</span>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="listing grid-listing three-cols">
                                @foreach ($popularRestaurants as $popularRestaurant)
                                    <div class="col-md-4 col-xs-6 grid-listing-col">
                                        <div class="img-holder">
                                            <figure>
                                                <a href="{{ route('front.listing_details', $popularRestaurant->id) }}"><img
                                                        style="border-top-left-radius: 5px; border-top-right-radius: 5px; height: 240px; width: 100%; object-fit: cover;"
                                                        src="{{ $popularRestaurant->getThumbnail() ? asset('storage/' . $popularRestaurant->getThumbnail()) : asset('front/extra-images/cover-photo20-359x212.jpg') }}"
                                                        alt=""></a>
                                                <figcaption class="listing-meta">
                                                    <div class="listing-inner clearfix" style="left: 1;">
                                                        <div class="list-rating">
                                                            <div
                                                                style="display: flex; align-items: center; width: 100%; gap: 5px;">
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                    @if ($i <= floor($popularRestaurant->averageRating()))
                                                                        <span class="icon-star-full"
                                                                            style="color: #ff981a;"></span>
                                                                    @elseif ($i - $popularRestaurant->averageRating() <= 0.5)
                                                                        <span class="icon-star-half-empty"
                                                                            style="color: #ff981a;"></span>
                                                                    @else
                                                                        <span class="icon-star-outlined"
                                                                            style="color: #ff981a;"></span>
                                                                    @endif
                                                                @endfor
                                                                <span
                                                                    class="reviews">({{ $popularRestaurant->reviewsCount() }})</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                            @if ($popularRestaurant->isOpenNow())
                                                <span class="restaurant-status open"><em
                                                        class="bookmarkRibbon"></em>Open</span>
                                            @else
                                                <span class="restaurant-status close"><em
                                                        class="bookmarkRibbon"></em>Close</span>
                                            @endif
                                        </div>
                                        <div class="text-holder">
                                            <div class="listing-inner">
                                                <h4><a
                                                        href="{{ route('front.listing_details', $popularRestaurant->id) }}">{{ $popularRestaurant->name }}</a>
                                                </h4>
                                                <p>
                                                    @foreach ($popularRestaurant->cuisines as $cuisine)
                                                        <span>{{ $cuisine->name }}
                                                            @if (!$loop->last)
                                                                ,
                                                            @endif
                                                        </span>
                                                    @endforeach
                                                </p>
                                                <div class="min-order">Min Order <span class="price">£15.00</span></div>
                                            </div>
                                            <div class="listing-footer">
                                                <div class="listing-inner clearfix" style="background-color: #ffffff;">
                                                    <div class="img-holder">
                                                        <a href="#"><img
                                                                src="{{ $popularRestaurant->restaurant_logo ? asset('storage/' . $popularRestaurant->restaurant_logo) : asset('front/extra-images/restaurant-placeholder.png') }}"
                                                                style="aspect-ratio: 1 / 1; object-fit: cover; object-position: center;"></a>
                                                    </div>
                                                    <div class="text-holder">
                                                        <p>{{ $popularRestaurant->state }}, {{ $popularRestaurant->city }}
                                                        </p>
                                                        <p class="deliver-time"><span class="icon-motorcycle2"></span>10
                                                            min</p>
                                                        <p class="pickup-time"><span class="icon-clock4"></span>15 min
                                                        </p>
                                                        <a href="{{ route('front.listing_details', $popularRestaurant->id) }}"
                                                            class="ordernow-btn bgcolor">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section nopadding cs-nomargin"
            style="margin-top: 0px;padding-top: 30px;padding-bottom: 0px;margin-bottom: 0px;background: #c33333;">
            <!-- Container Start -->
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cs-calltoaction simple">
                            <div class="cs-text">
                                <strong style="color:#ffffff !important;">DISCOVER THE BEST OF TIARET'S FOOD
                                    SCENE!</strong>
                                <span style="color:rgb(255,255,255);">Delicious dishes, warm atmosphere, and great offers
                                    await.</span>
                            </div>
                            <a href="{{ route('front.listings') }}" class="csborder-color cs-color"
                                style="background-color:#f7f7f7 !important;  color:#435061 !important;">EXPLORE
                                RESTAURANTS</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Container Start -->
        </div>

        <div class="page-section parallex-bg nopadding cs-nomargin" data-type="background"
            style="margin-top: 0px;padding-top: 110px;padding-bottom: 90px;margin-bottom: 0px;background: url({{ asset('front/extra-images/call-to-action-paralax.jpg') }}) no-repeat center top / cover fixed #ffffff;">
            <!-- Container Start -->
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="cs-calltoaction fancy text-center">
                            <div class="img-holder">
                                <i class=" icon-restaurant_menu "></i>
                            </div>
                            <div class="cs-text">
                                <strong style="color:#ffffff !important;">JUST A FEW CLICKS TO YOUR NEXT MEAL!</strong>
                                <span style="color:rgb(255,255,255);">Enjoy mouthwatering meals freshly prepared for
                                    you</span>
                            </div>
                            <a href="{{ route('front.listings') }}" class="csborder-color cs-color"
                                style="background-color:#c33333 !important;  color:#ffffff !important;">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Container Start -->
        </div>

        {{-- Featured Restaurants --}}
        <div class="page-section nopadding cs-nomargin"
            style="margin-top: 0px;padding-top: 90px;padding-bottom: 10px;margin-bottom: 0px; background: #ffffff;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cs-section-title" style="text-align:center!important;">
                            <h2
                                style="font: 700 Normal 30px / 40px 'Montserrat', sans-serif !important; letter-spacing: 1px !important; text-transform: uppercase !important; color: #0c0c0c !important; ">
                                Featured restaurants</h2>
                            <span style="color:#aaaaaa;">Featured Eateries You Don’t Want to Miss</span>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="listing fancy fancy-simple">
                            <ul class="row">
                                @foreach ($featuredRestaurants as $featuredRestaurant)
                                    <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="list-post" style="border-radius: 10px; box-shadow: none;">
                                            <div class="img-holder">
                                                <figure style="height: 120px; width: 120px; border-radius: 5px;">
                                                    <a
                                                        href="{{ route('front.listing_details', $featuredRestaurant->id) }}"><img
                                                            src="{{ $featuredRestaurant->restaurant_logo ? asset('storage/' . $featuredRestaurant->restaurant_logo) : asset('front/extra-images/restaurant-placeholder.png') }}"
                                                            alt=""></a>
                                                </figure>
                                            </div>
                                            @if ($featuredRestaurant->isOpenNow())
                                                <span class="restaurant-status open"><em
                                                        class="bookmarkRibbon"></em>Open</span>
                                            @else
                                                <span class="restaurant-status close"><em
                                                        class="bookmarkRibbon"></em>Close</span>
                                            @endif
                                            <div class="text-holder" style="padding: 0;">
                                                <div class="post-title">
                                                    <h5><a
                                                            href="{{ route('front.listing_details', $featuredRestaurant->id) }}">{{ $featuredRestaurant->name }}</a>
                                                    </h5>
                                                </div>
                                                <address>
                                                    @foreach ($featuredRestaurant->cuisines as $cuisine)
                                                        <span>{{ $cuisine->name }}
                                                            @if (!$loop->last)
                                                                ,
                                                            @endif
                                                        </span>
                                                    @endforeach
                                                </address>
                                                <div class="list-rating">
                                                    <div
                                                        style="display: flex; align-items: center; width: 100%; gap: 5px;">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= floor($featuredRestaurant->averageRating()))
                                                                <span class="icon-star-full"
                                                                    style="color: #ff981a;"></span>
                                                            @elseif ($i - $featuredRestaurant->averageRating() <= 0.5)
                                                                <span class="icon-star-half-empty"
                                                                    style="color: #ff981a;"></span>
                                                            @else
                                                                <span class="icon-star-outlined"
                                                                    style="color: #ff981a;"></span>
                                                            @endif
                                                        @endfor
                                                        <span
                                                            class="reviews">({{ $featuredRestaurant->reviewsCount() }})</span>
                                                    </div>
                                                </div>
                                                <div class="delivery-potions">
                                                    <div class="post-time"><i class="icon-check_circle"></i>Min £15.00
                                                    </div>
                                                    <div class="post-time"><i class="icon-motorcycle"></i>10 min</div>
                                                    <div class="post-time"><i class="icon-clock4"></i>15 min</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section nopadding cs-nomargin"
            style="margin-top: 0px;padding-top: 60px;padding-bottom: 30px;margin-bottom: 0px;background: #ffffff;">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="element-title align-center">
                            <h2
                                style="font: 700 Normal 30px / 40px 'Montserrat', sans-serif !important; letter-spacing: 1px !important; text-transform: uppercase !important; color: #0c0c0c !important; ">
                                we caters for business and events</h2>
                        </div>
                        <div class="company-logo fancy">
                            <ul>
                                <li>
                                    <figure><a href="#"><img
                                                src="{{ asset('front/extra-images/partners-logo1.png') }}"
                                                alt=""></a></figure>
                                </li>
                                <li>
                                    <figure><a href="#"><img
                                                src="{{ asset('front/extra-images/partners-logo2.png') }}"
                                                alt=""></a></figure>
                                </li>
                                <li>
                                    <figure><a href="#"><img
                                                src="{{ asset('front/extra-images/partners-logo3.png') }}"
                                                alt=""></a></figure>
                                </li>
                                <li>
                                    <figure><a href="#"><img
                                                src="{{ asset('front/extra-images/partners-logo4.png') }}"
                                                alt=""></a></figure>
                                </li>
                                <li>
                                    <figure><a href="#"><img
                                                src="{{ asset('front/extra-images/partners-logo5.png') }}"
                                                alt=""></a></figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section nopadding cs-nomargin"
            style="margin-top: 0px;padding-top: 52px;padding-bottom: 0px;margin-bottom: 0px;background: #ffffff;">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="main-post promo-box" style="text-align: center;">
                            <div class="img-frame order-1 order-sm-2" style="margin-right: 0;">
                                <figure><img src="{{ asset('front/extra-images/mobilesection.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="column-text order-2 order-sm-1">
                                <h3 style="color:#000000 !important;">FoodBakery in your mobile! Get our app</h3>
                                <div class="promo-content">Get our app, it's the fastest way to order food on the
                                    go.</div>
                                <a class="app-btn" href="#"><img
                                        src="{{ asset('front/extra-images/apple-store.png') }}"
                                        style="height: 50px; width: 100%;" alt=""></a>
                                <a class="app-btn" href="#"><img
                                        src="{{ asset('front/extra-images/google-play.png') }}"
                                        style="height: 50px; width: 100%;" alt=""></a>
                                <form>
                                    <div class="field-holder">
                                        <input class="field-input" type="email" placeholder="YOUR EMAIL"
                                            style="border-radius: 5px;">
                                        <label class="field-label-btn">
                                            <input class="field-btn" type="button" value="Send Link"
                                                style="border-bottom-right-radius: 4px; border-top-right-radius: 4px;">
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
