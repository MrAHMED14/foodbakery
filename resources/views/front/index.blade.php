@extends('front.master')

@section('title')
    FoodBakery
@endsection

@section('content')
<!-- Main Section Start -->
<div class="main-section">
    <!-- Home Pages Elements Strat -->
    <!-- Main Search Start -->
    <div class="page-section nopadding cs-nomargin" style="padding-top: 100px; padding-bottom: 100px; margin-bottom: 0px; background: url({{asset('front/extra-images/bg-image1.jpg')}}) no-repeat center / cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="element-title">
                        <h1 style="font-size: 40px; color: #505050; text-transform: uppercase; line-height: 50px; margin-bottom: 25px; text-align:center;">
                            We are in the business of food<br>our restaurants do</h1>
                        <p style="font-size: 18px; letter-spacing: 1px; color: #505050; text-align:center;">
                            Ridiculus sociosqu
                            cursus neque cursus curae ante scelerisque vehicula.</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="main-search fancy bg-holder">
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
                                    <div class="field-holder">
                                        <input type="text" placeholder="Resturant name">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                    <div class="field-holder">
                                        <ul>
                                            <li class="select-location">
                                                <div class="foodbakery-locations-fields-group foodbakery-focus-out">
                                                    <span class="foodbakery-search-location-icon"><i class="icon-location"></i></span>
                                                    <span id="foodbakery_radius_location_open333" class="foodbakery-radius-location"><i class="icon-target5"></i></span>
                                                    <input type="text" class="location-field-text filter" placeholder="All Locations">
                                                </div>
                                                <div class="select-location" id="foodbakery-radius-range333" style="display: none;">
                                                    <div class="select-popup popup-open">
                                                        <a id="location_close_popup333" href="javascript:0;" class="location-close-popup">
                                                            <i class="icon-times"></i></a>
                                                        <input type="hidden" class="foodbakery-radius" name="foodbakery_radius" value="10">
                                                        <p>Show with in</p>
                                                        <input id="ex16b333" type="text" data-value="10" value="10" style="display: none;">
                                                        <script>
                                                            jQuery(document).ready(function () {
                                                                var elem = jQuery("#ex16b333");
                                                                if (elem.length != "") {
                                                                    elem.slider({
                                                                        step: 1,
                                                                        min: 0,
                                                                        max: 500,
                                                                        value: 10,
                                                                    });
                                                                    elem.on("slideStop", function () {
                                                                        var rang_slider_val = elem.val();
                                                                        jQuery("#ex16b333CurrentSliderValLabel").html(rang_slider_val);
                                                                        jQuery("#range-hidden-foodbakery-radius333").val(rang_slider_val);
                                                                        //foodbakery_restaurant_content("333");
                                                                    });
                                                                    elem.on("slide", function () {
                                                                        jQuery("#ex16b333CurrentSliderValLabel").html(elem.val());
                                                                    });
                                                                }

                                                                $("#foodbakery_radius_location_open333").click(function () {
                                                                    $("#foodbakery-radius-range333").show();
                                                                });
                                                                $("#location_close_popup333").click(function () {
                                                                    $("#foodbakery-radius-range333").hide();
                                                                });
                                                            });
                                                        </script>
                                                        <span>Miles: <span id="ex16b333CurrentSliderValLabel">10</span></span><br>
                                                        <p class="my-location">of <i class="cs-color icon-location-arrow"></i><a id="foodbakery-geo-location-all" class="cs-color foodbakery-geo-location313324" href="javascript:void(0)">My location</a></p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <div class="field-holder">
                                        <input type="submit" value="Search">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="counter-sec">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-xs-4 ">
                                <div class="counter-holder counter-one">
                                    <div class="text-holder">
                                        <i class="icon- icon-check-circle"></i>
                                        <strong class="count">16</strong>
                                        <span>Restaurant</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-4 ">
                                <div class="counter-holder counter-two">
                                    <div class="text-holder">
                                        <i class="icon- icon-check-circle"></i>
                                        <strong class="count">151</strong>
                                        <span>People Served</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-4 ">
                                <div class="counter-holder counter-three">
                                    <div class="text-holder">
                                        <i class="icon- icon-check-circle"></i>
                                        <strong class="count">40</strong>
                                        <span>Registered Users</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Search End -->
    <!-- Browse By Cuisine Section Start -->
    <div class="page-section nopadding cs-nomargin" style="margin-top: 0px;padding-top: 30px;padding-bottom: 0px;margin-bottom: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="element-title align-left">
                        <h2>Browse by cuisine</h2>
                        <p>Discover restaurants by type of meal</p>
                    </div>
                    <div class="categories-holder">
                        <div class="col-lg-2 col-sm-4 col-xs-6">
                            <div class="col-lg-2 col-sm-4 col-xs-6">
                                <div class="categories-list">
                                    <a href="{{route('front.listings')}}">
                                        <img alt="" src="{{asset('front/extra-images/food-icon-19-1.png')}}">
                                        <h6><span>BB.Q</span></h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-xs-6">
                            <div class="categories-list">
                                <a href="{{route('front.listings')}}">
                                    <img alt="" src="{{asset('front/extra-images/food-icon-22-1.png')}}">
                                    <h6><span>Beef Roast</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-xs-6">
                            <div class="categories-list">
                                <a href="{{route('front.listings')}}">
                                    <img alt="" src="{{asset('front/extra-images/food-icon-07-1.png')}}">
                                    <h6><span>Chicken Roast</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-xs-6">
                            <div class="categories-list">
                                <a href="{{route('front.listings')}}">
                                    <img alt="" src="{{asset('front/extra-images/food-icon-28-1.png')}}">
                                    <h6><span>Cupcake</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-xs-6">
                            <div class="categories-list">
                                <a href="{{route('front.listings')}}">
                                    <img alt="" src="{{asset('front/extra-images/food-icon-21-1.png')}}">
                                    <h6><span>Doughnut</span></h6>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-xs-6">
                            <div class="categories-list">
                                <a href="{{route('front.listings')}}">
                                    <img alt="" src="{{asset('front/extra-images/food-icon-02-1.png')}}">
                                    <h6><span>Tea</span></h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Browse By Cuisine Section End -->
    <!-- Popular Localities Section Start -->
    <!--
    <div class="page-section nopadding cs-nomargin" style="margin-top: 0px;padding-top: 0px;padding-bottom: 60px;margin-bottom: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="element-title align-left">
                        <h2>Popular Localities In And Around Geelong</h2>
                        <p>Explore restaurants, bars, and cafés by locality</p>
                    </div>
                    <div class="location-holder">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <ul class="location-list">
                                <li>
                                    <a href="#">England</a>
                                    <span>(28 places)</span>
                                </li>
                                <li>
                                    <a href="#">Cheshire</a>
                                    <span>(3 places)</span>
                                </li>
                                <li>
                                    <a href="#">Devon</a>
                                    <span>(3 places)</span>
                                </li>
                                <li>
                                    <a href="#">Bedfordshire</a>
                                    <span>(2 places)</span>
                                </li>
                                <li>
                                    <a href="#">Bedfordshire</a>
                                    <span>(2 places)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <ul class="location-list">
                                <li>
                                    <a href="#">Fowey</a>
                                    <span>(2 places)</span>
                                </li>
                                <li>
                                    <a href="#">Bude</a>
                                    <span>(2 places)</span>
                                </li>
                                <li>
                                    <a href="#">Kent</a>
                                    <span>(2 places)</span>
                                </li>
                                <li>
                                    <a href="#">Maidstone</a>
                                    <span>(2 places)</span>
                                </li>
                                <li>
                                    <a href="#">Scotland</a>
                                    <span>(2 places)</span>
                                </li>
                                <li>
                                    <a href="#">Bedford</a>
                                    <span>(1 places)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <ul class="location-list">
                                <li>
                                    <a href="#">Bridport</a>
                                    <span>(1 places)</span>
                                </li>
                                <li>
                                    <a href="#">Bude</a>
                                    <span>(1 places)</span>
                                </li>
                                <li>
                                    <a href="#">Cambridgeshire</a>
                                    <span>(1 places)</span>
                                </li>
                                <li>
                                    <a href="#">County Down</a>
                                    <span>(1 places)</span>
                                </li>
                                <li>
                                    <a href="#">Crewe</a>
                                    <span>(1 places)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <ul class="location-list">
                                <li>
                                    <a href="#">Huntingdon</a>
                                    <span>(1 places)</span>
                                </li>
                                <li>
                                    <a href="#">Honiton</a>
                                    <span>(0 places)</span>
                                </li>
                                <li>
                                    <a href="#">Stony Stratford</a>
                                    <span>(0 places)</span>
                                </li>
                                <li>
                                    <a href="#">Wales</a>
                                    <span>(0 places)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="more-btn-holder">
                                <a class="more-btn" href="#">See more locations</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    -->
    <!-- Popular Localities Section End -->
    <!-- Top Restarurants Section Start -->
    <div class="page-section nopadding cs-nomargin" style="margin-top: 0px;padding-top: 60px;padding-bottom: 0px;margin-bottom: 0px;background: #ffffff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="element-title align-left">
                        <h2>Top Restaurants</h2>
                        <p>Explore restaurants, bars, and cafés by locality</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="company-logo">
                        <ul>
                            <li class="has-border">
                                <figure>
                                    <a href="#"><img src="{{asset('front/extra-images/listing-logo18.png')}}" class="attachment-full size-full wp-post-image" alt=""></a>
                                </figure>
                            </li>
                            <li class="has-border">
                                <figure>
                                    <a href="#"><img src="{{asset('front/extra-images/fb-restaurant-02.jpg')}}" class="attachment-full size-full wp-post-image" alt=""></a>
                                </figure>
                            </li>
                            <li class="has-border">
                                <figure>
                                    <a href="#"><img src="{{asset('front/extra-images/fb-restaurant-04.jpg')}}" class="attachment-full size-full wp-post-image" alt=""></a>
                                </figure>
                            </li>
                            <li class="has-border">
                                <figure>
                                    <a href="#"><img src="{{asset('front/extra-images/fb-restaurant-06.jpg')}}" class="attachment-full size-full wp-post-image" alt=""></a>
                                </figure>
                            </li>
                            <li class="has-border">
                                <figure>
                                    <a href="#"><img src="{{asset('front/extra-images/xlisting-logo03.png.pagespeed.ic_.aT-o9LinEJ.png')}}" class="attachment-full size-full wp-post-image" alt=""></a>
                                </figure>
                            </li>
                            <li class="has-border">
                                <figure>
                                    <a href="#"><img src="{{asset('front/extra-images/listing-logo09.png')}}" class="attachment-full size-full wp-post-image" alt=""></a>
                                </figure>
                            </li>
                            <li class="has-border">
                                <figure>
                                    <a href="#"><img src="{{asset('front/extra-images/listing-logo18.png')}}" class="attachment-full size-full wp-post-image" alt=""></a>
                                </figure>
                            </li>
                            <li class="has-border">
                                <figure>
                                    <a href="#"><img src="{{asset('front/extra-images/fb-restaurant-09.png')}}" class="attachment-full size-full wp-post-image" alt=""></a>
                                </figure>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Restarurants Section End -->
    <!-- Choose From Most Popular Listin Start -->
    <div class="page-section nopadding cs-nomargin" style="margin-top: 0px;padding-top: 60px;padding-bottom: 50px;margin-bottom: 0px;background: #ffffff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="element-title align-center">
                        <h2>Choose From Most Popular</h2>
                        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="listing fancy">
                        <ul class="row">
                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="list-post featured">
                                    <div class="img-holder">
                                        <figure><a href="#"><img src="{{asset('front/extra-images/listing-logo18.png')}}" class="img-thumb wp-post-image" alt=""></a></figure>
                                        <span class="restaurant-status close">
                                            <em class="bookmarkRibbon"></em>Close
                                        </span>
                                    </div>
                                    <div class="text-holder">
                                        <div class="list-rating">
                                            <div class="rating-star">
                                                <span class="rating-box" style="width: 100%;"></span>
                                            </div>
                                            <span class="reviews">(1)</span>
                                        </div>
                                        <div class="post-title">
                                            <h5>
                                                <a href="#">Restaurant Demo</a>
                                                <span class="sponsored text-color">Sponsored</span>
                                            </h5>
                                        </div>
                                        <address> <span>Type of food : </span> Apple Juice</address>
                                        <div class="delivery-potions">
                                            <div class="post-time">
                                                <i class="icon-motorcycle"></i>
                                                <div class="time-tooltip">
                                                    <div class="time-tooltip-holder"> <b class="tooltip-label">Delivery
                                                            time</b>
                                                        <b class="tooltip-info">Your order will be
                                                            delivered in 10
                                                            minutes.</b> </div>
                                                </div>
                                            </div>
                                            <div class="post-time">
                                                <i class="icon-clock4"></i>
                                                <div class="time-tooltip">
                                                    <div class="time-tooltip-holder"> <b class="tooltip-label">Pickup time</b>
                                                        <b class="tooltip-info">You can pickup order in
                                                            15
                                                            minutes.</b> </div>
                                                </div>
                                            </div>
                                            <span>Totnes</span>
                                        </div>
                                    </div>
                                    <div class="list-option">
                                        <a href="javascript:void(0);" class="shortlist-btn" data-toggle="modal" data-target="#sign-in">
                                            <i class="icon-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="list-post featured">
                                    <div class="img-holder">
                                        <figure><a href="#"><img src="{{asset('front/extra-images/fb-restaurant-01.jpg')}}" class="img-thumb wp-post-image" alt=""></a></figure>
                                        <span class="restaurant-status close">
                                            <em class="bookmarkRibbon"></em>Close
                                        </span>
                                    </div>
                                    <div class="text-holder">
                                        <div class="list-rating">
                                            <div class="rating-star">
                                                <span class="rating-box" style="width: 100%;"></span>
                                            </div>
                                            <span class="reviews">(1)</span>
                                        </div>
                                        <div class="post-title">
                                            <h5>
                                                <a href="#">Jet’s Kitchen</a>
                                                <span class="sponsored text-color">Sponsored</span>
                                            </h5>
                                        </div>
                                        <address> <span>Type of food : </span> Chines Soup, Egg Fry,
                                            Fish Fry
                                        </address>
                                        <div class="delivery-potions">
                                            <div class="post-time">
                                                <i class="icon-motorcycle"></i>
                                                <div class="time-tooltip">
                                                    <div class="time-tooltip-holder"> <b class="tooltip-label">Delivery
                                                            time</b>
                                                        <b class="tooltip-info">Your order will be
                                                            delivered in 10
                                                            minutes.</b> </div>
                                                </div>
                                            </div>
                                            <div class="post-time">
                                                <i class="icon-clock4"></i>
                                                <div class="time-tooltip">
                                                    <div class="time-tooltip-holder"> <b class="tooltip-label">Pickup time</b>
                                                        <b class="tooltip-info">You can pickup order in
                                                            15
                                                            minutes.</b> </div>
                                                </div>
                                            </div>
                                            <span>Totnes</span>
                                        </div>
                                    </div>
                                    <div class="list-option">
                                        <a href="javascript:void(0);" class="shortlist-btn" data-toggle="modal" data-target="#sign-in">
                                            <i class="icon-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="list-post featured">
                                    <div class="img-holder">
                                        <figure><a href="#"><img src="{{asset('front/extra-images/fb-restaurant-04.jpg')}}" class="img-thumb wp-post-image" alt=""></a></figure>
                                        <span class="restaurant-status close">
                                            <em class="bookmarkRibbon"></em>Close
                                        </span>
                                    </div>
                                    <div class="text-holder">
                                        <div class="list-rating">
                                            <div class="rating-star">
                                                <span class="rating-box" style="width: 100%;"></span>
                                            </div>
                                            <span class="reviews">(1)</span>
                                        </div>
                                        <div class="post-title">
                                            <h5>
                                                <a href="#">Golden Chick Fries</a>
                                                <span class="sponsored text-color">Sponsored</span>
                                            </h5>
                                        </div>
                                        <address> <span>Type of food : </span> Doughnut, Hot Dogs, Ice
                                            Cream
                                        </address>
                                        <div class="delivery-potions">
                                            <div class="post-time">
                                                <i class="icon-motorcycle"></i>
                                                <div class="time-tooltip">
                                                    <div class="time-tooltip-holder"> <b class="tooltip-label">Delivery
                                                            time</b>
                                                        <b class="tooltip-info">Your order will be
                                                            delivered in 10
                                                            minutes.</b> </div>
                                                </div>
                                            </div>
                                            <div class="post-time">
                                                <i class="icon-clock4"></i>
                                                <div class="time-tooltip">
                                                    <div class="time-tooltip-holder"> <b class="tooltip-label">Pickup time</b>
                                                        <b class="tooltip-info">You can pickup order in
                                                            15
                                                            minutes.</b> </div>
                                                </div>
                                            </div>
                                            <span>Totnes</span>
                                        </div>
                                    </div>
                                    <div class="list-option">
                                        <a href="javascript:void(0);" class="shortlist-btn" data-toggle="modal" data-target="#sign-in">
                                            <i class="icon-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="list-post featured">
                                    <div class="img-holder">
                                        <figure><a href="#"><img src="{{asset('front/extra-images/fb-restaurant-06.jpg')}}" class="img-thumb wp-post-image" alt=""></a></figure>
                                        <span class="restaurant-status open"><em class="bookmarkRibbon"></em>Open</span>
                                    </div>
                                    <div class="text-holder">
                                        <div class="list-rating">
                                            <div class="rating-star">
                                                <span class="rating-box" style="width: 100%;"></span>
                                            </div>
                                            <span class="reviews">(1)</span>
                                        </div>
                                        <div class="post-title">
                                            <h5>
                                                <a href="#">Dragon Express</a>
                                                <span class="sponsored text-color">Sponsored</span>
                                            </h5>
                                        </div>
                                        <address> <span>Type of food : </span> Apple Juice, Carrot
                                            Juice, Ice Cream
                                        </address>
                                        <div class="delivery-potions">
                                            <div class="post-time">
                                                <i class="icon-motorcycle"></i>
                                                <div class="time-tooltip">
                                                    <div class="time-tooltip-holder"> <b class="tooltip-label">Delivery
                                                            time</b>
                                                        <b class="tooltip-info">Your order will be
                                                            delivered in 10
                                                            minutes.</b> </div>
                                                </div>
                                            </div>
                                            <div class="post-time">
                                                <i class="icon-clock4"></i>
                                                <div class="time-tooltip">
                                                    <div class="time-tooltip-holder"> <b class="tooltip-label">Pickup time</b>
                                                        <b class="tooltip-info">You can pickup order in
                                                            15
                                                            minutes.</b> </div>
                                                </div>
                                            </div>
                                            <span>Bristol</span>
                                        </div>
                                    </div>
                                    <div class="list-option">
                                        <a href="javascript:void(0);" class="shortlist-btn" data-toggle="modal" data-target="#sign-in">
                                            <i class="icon-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="list-post featured">
                                    <div class="img-holder">
                                        <figure><a href="#"><img src="{{asset('front/extra-images/xlisting-logo03.png.pagespeed.ic_.aT-o9LinEJ.png')}}" class="img-thumb wp-post-image" alt=""></a></figure>
                                        <span class="restaurant-status close">
                                            <em class="bookmarkRibbon"></em>Close
                                        </span>
                                    </div>
                                    <div class="text-holder">
                                        <div class="list-rating">
                                            <div class="rating-star">
                                                <span class="rating-box" style="width: 100%;"></span>
                                            </div>
                                            <span class="reviews">(1)</span>
                                        </div>
                                        <div class="post-title">
                                            <h5>
                                                <a href="#">Nature Healthy Food</a>
                                                <span class="sponsored text-color">Sponsored</span>
                                            </h5>
                                        </div>
                                        <address> <span>Type of food : </span> Apple Juice, Chicken
                                            Roast, Chines
                                            Soup, Magi</address>
                                        <div class="delivery-potions">
                                            <div class="post-time">
                                                <i class="icon-motorcycle"></i>
                                                <div class="time-tooltip">
                                                    <div class="time-tooltip-holder"> <b class="tooltip-label">Delivery
                                                            time</b>
                                                        <b class="tooltip-info">Your order will be
                                                            delivered in 10
                                                            minutes.</b> </div>
                                                </div>
                                            </div>
                                            <div class="post-time">
                                                <i class="icon-clock4"></i>
                                                <div class="time-tooltip">
                                                    <div class="time-tooltip-holder"> <b class="tooltip-label">Pickup time</b>
                                                        <b class="tooltip-info">You can pickup order in
                                                            15
                                                            minutes.</b> </div>
                                                </div>
                                            </div>
                                            <span>Totnes</span>
                                        </div>
                                    </div>
                                    <div class="list-option">
                                        <a href="javascript:void(0);" class="shortlist-btn" data-toggle="modal" data-target="#sign-in">
                                            <i class="icon-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="list-post featured">
                                    <div class="img-holder">
                                        <figure><a href="#"><img src="{{asset('front/extra-images/listing-logo09.png')}}" class="img-thumb wp-post-image" alt=""></a></figure>
                                        <span class="restaurant-status open">
                                            <em class="bookmarkRibbon"></em>open
                                        </span>
                                    </div>
                                    <div class="text-holder">
                                        <div class="list-rating">
                                            <div class="rating-star">
                                                <span class="rating-box" style="width: 100%;"></span>
                                            </div>
                                            <span class="reviews">(1)</span>
                                        </div>
                                        <div class="post-title">
                                            <h5>
                                                <a href="#">Menu & Drinks</a>
                                                <span class="sponsored text-color">Sponsored</span>
                                            </h5>
                                        </div>
                                        <address> <span>Type of food : </span> Chicken Roast, Chines
                                            Soup, Cold
                                            Coffee, Cold Drink, Hot Dogs</address>
                                        <div class="delivery-potions">
                                            <div class="post-time">
                                                <i class="icon-motorcycle"></i>
                                                <div class="time-tooltip">
                                                    <div class="time-tooltip-holder"> <b class="tooltip-label">Delivery
                                                            time</b>
                                                        <b class="tooltip-info">Your order will be
                                                            delivered in 10
                                                            minutes.</b> </div>
                                                </div>
                                            </div>
                                            <div class="post-time">
                                                <i class="icon-clock4"></i>
                                                <div class="time-tooltip">
                                                    <div class="time-tooltip-holder"> <b class="tooltip-label">Pickup time</b>
                                                        <b class="tooltip-info">You can pickup order in
                                                            15
                                                            minutes.</b> </div>
                                                </div>
                                            </div>
                                            <span>Acle</span>
                                        </div>
                                    </div>
                                    <div class="list-option">
                                        <a href="javascript:void(0);" class="shortlist-btn" data-toggle="modal" data-target="#sign-in">
                                            <i class="icon-heart-o"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Choose From Most Popular Listing End -->
    <!-- Choose From Most Popular Section Start -->
    <div class="page-section nopadding cs-nomargin" style="margin-top: 0px;padding-top: 54px;padding-bottom: 36px;margin-bottom: 0px;background: #ebedf3;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="element-title align-center">
                        <h2>Choose From Most Popular</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="testimonial default">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="text-holder">
                                    <p>I love you, FoodBakery Just ordered me some grub, and I tell you,
                                        you folks
                                        make that part of my life easy.</p>
                                    <div class="img-holder">
                                        <figure><img src="{{asset('front/extra-images/testimonial-img1.jpg')}}" alt=""></figure>
                                    </div>
                                    <div class="author-detail">
                                        <div class="auther-name"><span>@mangafox</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="text-holder">
                                    <p>Made my first @FoodBakery order today. So great to be able to
                                        order food and
                                        not have to talk to anyone.</p>
                                    <div class="img-holder">
                                        <figure><img src="{{asset('front/extra-images/testimonial-img2.jpg')}}" alt=""></figure>
                                    </div>
                                    <div class="author-detail">
                                        <div class="auther-name"><span>@mangafox</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="text-holder">
                                    <p>Shout out to Food Bakery for making my life so so easy! Simply
                                        amazing and
                                        worth it for!</p>
                                    <div class="img-holder">
                                        <figure><img src="{{asset('front/extra-images/testimonial-img3.jpg')}}" alt=""></figure>
                                    </div>
                                    <div class="author-detail">
                                        <div class="auther-name"><span>@ReddPhoeno</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="text-holder">
                                    <p>Seriously, @FoodBakery makes it easy for my coworkers and I to
                                        order food and
                                        get it to our office in a jiffy. FOOD!</p>
                                    <div class="img-holder">
                                        <figure><img src="{{asset('front/extra-images/testimonial-img4.jpg')}}" alt=""></figure>
                                    </div>
                                    <div class="author-detail">
                                        <div class="auther-name"><span>@HubWub</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Choose From Most Popular Section End -->
    <!-- Colunm Text Section Start -->
    <div class="page-section nopadding cs-nomargin" style="margin-top: 0px;padding-top: 80px;padding-bottom: 0px;margin-bottom: 0px;background: #ffffff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="main-post promo-box">
                        <div class="img-frame">
                            <figure><img src="{{asset('front/extra-images/main-post-img-1.png')}}" alt="#">
                            </figure>
                        </div>
                        <div class="column-text">
                            <h3 style="color:#000000 !important;">FoodBakery in your mobile! Get our app
                            </h3>
                            <div class="promo-content">Get our app, it's the fastest way to order food
                                on the go.
                            </div>
                            <a class="app-btn" href="#"><img src="{{asset('front/extra-images/app-img1-1.png')}}" alt=""></a>
                            <a class="app-btn" href=""><img src="{{asset('front/extra-images/app-img2-1.png')}}" alt=""></a>
                            <form>
                                <div class="field-holder"><input class="field-input" type="email" placeholder="Your Email">
                                    <label class="field-label-btn"><input class="field-btn" type="submit" value="Send Link"></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Colunm Text Section End -->
    <!-- Client logo Section Start -->
    <div class="page-section  nopadding cs-nomargin" style="margin-top: 0px;padding-top: 20px;padding-bottom: 10px;margin-bottom: 0px;background: #69bbc0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="company-logo simple">
                        <ul>
                            <li>
                                <figure><a href="#"><img src="{{asset('front/extra-images/fb-clients-1.png')}}" alt=""></a></figure>
                            </li>
                            <li>
                                <figure><a href="#"><img src="{{asset('front/extra-images/fb-clients-2.png')}}" alt=""></a></figure>
                            </li>
                            <li>
                                <figure><a href="#"><img src="{{asset('front/extra-images/fb-clients-3.png')}}" alt=""></a></figure>
                            </li>
                            <li>
                                <figure><a href="#"><img src="{{asset('front/extra-images/fb-clients-4.png')}}" alt=""></a></figure>
                            </li>
                            <li>
                                <figure><a href="#"><img src="{{asset('front/extra-images/fb-clients-5.png')}}" alt=""></a></figure>
                            </li>
                            <li>
                                <figure><a href="#"><img src="{{asset('front/extra-images/fb-clients-6.png')}}" alt=""></a></figure>
                            </li>
                            <li>
                                <figure><a href="#"><img src="{{asset('front/extra-images/fb-clients-7.png')}}" alt=""></a></figure>
                            </li>
                            <li>
                                <figure><a href="#"><img src="{{asset('front/extra-images/fb-clients-8.png')}}" alt=""></a></figure>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Client logo Section End -->
    <!-- Home Pages Elements End  -->
</div>
<!-- Main Section End -->
@endsection
