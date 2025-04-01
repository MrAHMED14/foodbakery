@extends('front.master')

@section('title')
    Restaurant || Listings
@endsection

@section('content')
<!-- Main Section Start -->
<div class="sub-header align-center">
    <div class="subheader-holder" style=" background:url({{asset('front/extra-images/subheader-img2-1.jpg')}})  no-repeat; background-size: cover; padding-top: 60px; padding-bottom: 30px; margin-top: 0px; margin-bottom: 0px; min-height: 186px !important;">
        <!-- Container Start -->
        <div class="container ">
            <div class="row">
                <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <!--Element Section Start-->
                            <!--Foodbakery Element Start-->
                            <div class="row">
                                <!-- Column Start -->
                                <div class="listing-main-search">
                                    <div class="main-search">
                                        <form action="#">
                                            <div class="restaurant-search-element-container row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="field-holder"> <span class="restaurant-element-search-btn"><i class="icon-search5"></i> </span>
                                                        <input placeholder="Resturant name" name="search_title" value="" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="field-holder"> <span> <i class="icon-location search-by-location-icon"></i>
                                                        </span>
                                                        <ul>
                                                            <li class="select-location">
                                                                <div class="foodbakery-locations-fields-group foodbakery-focus-out">
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
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <!-- Column End -->
                            </div>
                            <!--Foodbakery Element End-->
                        </div>
                    </div><!-- end section row -->
                </div>
            </div>
        </div>
        <!-- End Container Start -->
    </div>
    <div class="breadcrumbs align-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul>
                        <li><a href="{{route('front.index')}}">Home</a></li>
                        <li class="active">Listings</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-section">
    <div class="page-section nopadding cs-nomargin" style="margin-top: 0px; padding-top: 0px; padding-bottom: 10px;margin-bottom: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <aside class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                            <div class="filter-wrapper">
                                <div class="foodbakery-filters listing-filter">
                                    <div class="filter-holder panel-default">
                                        <div class="filter-heading">
                                            <h6><i class="icon-food"></i>Cuisines</h6>
                                        </div>
                                        <div class="select-categories">
                                            <ul class="filter-list cs-checkbox-list">
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="foodbakery_restaurant_category_1" class="foodbakery_restaurant_category" value="apple-juice">
                                                        <label for="foodbakery_restaurant_category_1">Apple
                                                            Juice</label>
                                                        <span>(5)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="foodbakery_restaurant_category_2" class="foodbakery_restaurant_category" value="apple-juice">
                                                        <label for="foodbakery_restaurant_category_2">BB.Q</label>
                                                        <span>(2)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="foodbakery_restaurant_category_3" class="foodbakery_restaurant_category" value="apple-juice">
                                                        <label for="foodbakery_restaurant_category_3">Beef
                                                            Roast</label>
                                                        <span>(3)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="foodbakery_restaurant_category_4" class="foodbakery_restaurant_category" value="apple-juice">
                                                        <label for="foodbakery_restaurant_category_4">Carrot
                                                            Juice</label>
                                                        <span>(1)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="foodbakery_restaurant_category_5" class="foodbakery_restaurant_category" value="apple-juice">
                                                        <label for="foodbakery_restaurant_category_5">Cheese
                                                            Burger</label>
                                                        <span>(6)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="foodbakery_restaurant_category_6" class="foodbakery_restaurant_category" value="apple-juice">
                                                        <label for="foodbakery_restaurant_category_6">Cheicken
                                                            Roast</label>
                                                        <span>(2)</span>
                                                    </div>
                                                </li>
                                                <li class="expand">See more cuisines</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="filter-holder panel-default">
                                        <div class="filter-heading">
                                            <h6><i class="icon-clock4"></i>Opening Status</h6>
                                        </div>
                                        <div class="select-categories restaurant_timings">
                                            <ul class="filter-list cs-parent-checkbox-list">
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="restaurant_timings_open" name="restaurant_timings_checkbox" class="" value="open">
                                                        <label for="restaurant_timings_open">Open Now
                                                            <span>(5)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="restaurant_timings_close" name="restaurant_timings_checkbox" class="restaurant_timings_close" value="close">
                                                        <label for="restaurant_timings_close">Closed Now
                                                            <span>(10)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="filter-holder panel-default">
                                        <div class="filter-heading">
                                            <h6><i class="icon-external-link"></i>Pre Orders</h6>
                                        </div>

                                        <div class="select-categories restaurant_pre_order">
                                            <ul class="filter-list cs-parent-checkbox-list">
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="restaurant_pre_order_yes" name="restaurant_pre_order_checkbox" class="restaurant_pre_order_yes" value="yes">
                                                        <label for="restaurant_pre_order_yes">Yes
                                                            <span>(11)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="restaurant_pre_order_no" name="restaurant_pre_order_checkbox" class="restaurant_pre_order_no" value="no">
                                                        <label for="restaurant_pre_order_no">No <span>(4)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="filter-holder panel-default">
                                        <div class="filter-heading">
                                            <h6><i class="icon-folder_special"></i>Specials</h6>
                                        </div>
                                        <div class="select-categories">
                                            <ul class="filter-list cs-checkbox-list">
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="specials_1" class="specials" value="deals">
                                                        <label for="specials_1">Deals</label>
                                                        <span>(5)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="specials_2" class="specials" value="free-delivery">
                                                        <label for="specials_2">Free Delivery</label>
                                                        <span>(12)</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                            <div class="listing-sorting-holder">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h4>15 Restaurant's found</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="listing simple">
                                <ul>
                                    <li>
                                        <div class="img-holder">
                                            <figure>
                                                <a href="#"><img src="{{asset('front/extra-images/listing-logo18.png')}}" class="img-list wp-post-image" alt=""></a>
                                            </figure>
                                            <span class="restaurant-status close"><em class="bookmarkRibbon"></em>Close</span>
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
                                                    <a href="{{route('front.listing_details')}}">Restaurant Demo</a>
                                                    <span class="sponsored text-color">Sponsored</span>
                                                </h5>
                                            </div>
                                            <span class="post-categories"><span>Type of food :
                                                </span> Apple
                                                Juice</span>
                                            <div class="delivery-potions">
                                                <div class="post-time">
                                                    <i class="icon-motorcycle"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Delivery
                                                                time</b> <b class="tooltip-info">Your order will
                                                                be
                                                                delivered in 10 minutes.</b> </div>
                                                    </div>
                                                </div>
                                                <div class="post-time">
                                                    <i class="icon-clock4"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Pickup
                                                                time</b> <b class="tooltip-info">You
                                                                can pickup order in
                                                                15 minutes.</b> </div>
                                                    </div>
                                                </div>
                                                <span>Totnes, Devon</span>
                                            </div>
                                        </div>
                                        <div class="list-option">

                                            <a href="javascript:void(0);" class="shortlist-btn" data-toggle="modal" data-target="#sign-in"><i class="icon-heart4"></i> </a>
                                            <a href="#" class="viewmenu-btn text-color">View Menu</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <figure>
                                                <a href="#"> <img src="{{asset('front/extra-images/fb-restaurant-01.jpg')}}" class="img-list wp-post-image" alt=""> </a>
                                            </figure>
                                            <span class="restaurant-status close"><em class="bookmarkRibbon"></em>Close</span>
                                        </div>
                                        <div class="text-holder">
                                            <div class="post-title">
                                                <h5>
                                                    <a href="{{route('front.listing_details')}}">Jet’s Kitchen</a>
                                                </h5>
                                            </div>
                                            <span class="post-categories"><span>Type of food :
                                                </span> Chines
                                                Soup, Egg Fry, Fish Fry</span>
                                            <div class="delivery-potions">
                                                <div class="post-time">
                                                    <i class="icon-motorcycle"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Delivery
                                                                time</b> <b class="tooltip-info">Your order will
                                                                be
                                                                delivered in 10 minutes.</b> </div>
                                                    </div>
                                                </div>
                                                <div class="post-time">
                                                    <i class="icon-clock4"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Pickup
                                                                time</b> <b class="tooltip-info">You
                                                                can pickup order in
                                                                15 minutes.</b> </div>
                                                    </div>
                                                </div>
                                                <span>Montrose, Angus</span>
                                            </div>
                                        </div>
                                        <div class="list-option">

                                            <a href="javascript:void(0);" class="shortlist-btn" data-toggle="modal" data-target="#sign-in"><i class="icon-spinner icon-spin"></i></a>
                                            <a href="#" class="viewmenu-btn text-color">View Menu</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <figure>
                                                <a href="#"><img src="{{asset('front/extra-images/fb-restaurant-04.jpg')}}" class="img-list wp-post-image" alt=""> </a>
                                            </figure>
                                            <span class="restaurant-status close"><em class="bookmarkRibbon"></em>Close</span>
                                        </div>
                                        <div class="text-holder">
                                            <div class="post-title">
                                                <h5>
                                                    <a href="{{route('front.listing_details')}}">Golden Chick Fries</a>
                                                    <span class="sponsored text-color">Sponsored</span>
                                                </h5>
                                            </div>
                                            <span class="post-categories"><span>Type of food :
                                                </span>
                                                Doughnut, Hot Dogs, Ice Cream</span>
                                            <div class="delivery-potions">
                                                <div class="post-time">
                                                    <i class="icon-motorcycle"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Delivery
                                                                time</b>
                                                            <b class="tooltip-info">Your order will
                                                                be
                                                                delivered in 10 minutes.</b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-time">
                                                    <i class="icon-clock4"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Pickup
                                                                time</b>
                                                            <b class="tooltip-info">You can pickup
                                                                order in
                                                                15 minutes.</b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span>Leyton, Greater London</span>
                                            </div>
                                        </div>
                                        <div class="list-option">

                                            <a href="javascript:void(0);" class="shortlist-btn" data-toggle="modal" data-target="#sign-in">
                                                <i class="icon-heart-o"></i> </a>
                                            <a href="#" class="viewmenu-btn text-color">View Menu</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <figure>
                                                <a href="#"><img src="{{asset('front/extra-images/fb-restaurant-06.jpg')}}" class="img-list wp-post-image" alt=""> </a>
                                            </figure>
                                            <span class="restaurant-status open"><em class="bookmarkRibbon"></em>Open</span>
                                        </div>
                                        <div class="text-holder">
                                            <div class="post-title">
                                                <h5>
                                                    <a href="{{route('front.listing_details')}}">Dragon Express</a>
                                                </h5>
                                            </div>
                                            <span class="post-categories"><span>Type of food :
                                                </span> Apple
                                                Juice, Carrot Juice, Ice Cream</span>
                                            <div class="delivery-potions">
                                                <div class="post-time">
                                                    <i class="icon-motorcycle"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Delivery
                                                                time</b> <b class="tooltip-info">Your order will
                                                                be
                                                                delivered in 10 minutes.</b> </div>
                                                    </div>
                                                </div>
                                                <div class="post-time">
                                                    <i class="icon-clock4"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Pickup
                                                                time</b> <b class="tooltip-info">You
                                                                can pickup order in
                                                                15 minutes.</b> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-option">

                                            <a href="javascript:void(0);" class="shortlist-btn" data-toggle="modal" data-target="#sign-in">
                                                <i class="icon-heart-o"></i> </a>
                                            <a href="#" class="viewmenu-btn text-color">View Menu</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <figure>
                                                <a href="#"><img src="{{asset('front/extra-images/xlisting-logo03.png.pagespeed.ic_.aT-o9LinEJ.png')}}" class="img-list wp-post-image" alt=""> </a>
                                            </figure>
                                            <span class="restaurant-status close"><em class="bookmarkRibbon"></em>Close</span>
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
                                                    <a href="{{route('front.listing_details')}}">Nature Healthy Food</a>
                                                </h5>
                                            </div>
                                            <span class="post-categories"><span>Type of food :
                                                </span> Apple
                                                Juice, Chicken Roast, Chines Soup, Magi</span>
                                            <div class="delivery-potions">
                                                <div class="post-time">
                                                    <i class="icon-motorcycle"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Delivery
                                                                time</b> <b class="tooltip-info">Your order will
                                                                be
                                                                delivered in 10 minutes.</b> </div>
                                                    </div>
                                                </div>
                                                <div class="post-time">
                                                    <i class="icon-clock4"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Pickup
                                                                time</b> <b class="tooltip-info">You
                                                                can pickup order in
                                                                15 minutes.</b> </div>
                                                    </div>
                                                </div>
                                                <span>Bristol, Bristol</span>
                                            </div>
                                        </div>
                                        <div class="list-option">

                                            <a href="javascript:void(0);" class="shortlist-btn" data-toggle="modal" data-target="#sign-in"><i class="icon-heart-o"></i> </a>
                                            <a href="#" class="viewmenu-btn text-color">View Menu</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <figure>
                                                <a href="#"> <img src="{{asset('front/extra-images/listing-logo09.png')}}" class="img-list wp-post-image" alt=""> </a>
                                            </figure>
                                            <span class="restaurant-status open"><em class="bookmarkRibbon"></em>Open</span>
                                        </div>
                                        <div class="text-holder">
                                            <div class="post-title">
                                                <h5>
                                                    <a href="{{route('front.listing_details')}}">Menu &amp; Drinks</a>
                                                </h5>
                                            </div>
                                            <span class="post-categories"><span>Type of food :
                                                </span>
                                                Chicken
                                                Roast, Chines Soup, Cold Coffee, Cold Drink, Hot
                                                Dogs</span>
                                            <div class="delivery-potions">
                                                <div class="post-time">
                                                    <i class="icon-motorcycle"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Delivery
                                                                time</b> <b class="tooltip-info">Your order will
                                                                be
                                                                delivered in 10 minutes.</b> </div>
                                                    </div>
                                                </div>
                                                <div class="post-time">
                                                    <i class="icon-clock4"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Pickup
                                                                time</b> <b class="tooltip-info">You
                                                                can pickup order in
                                                                15 minutes.</b> </div>
                                                    </div>
                                                </div>
                                                <span>Acle, Norfolk</span>
                                            </div>
                                        </div>
                                        <div class="list-option">

                                            <a href="javascript:void(0);" class="shortlist-btn" data-toggle="modal" data-target="#sign-in"><i class="icon-heart-o"></i> </a>
                                            <a href="#" class="viewmenu-btn text-color">View Menu</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <figure>
                                                <a href="#"><img src="{{asset('front/extra-images/fb-restaurant-09.png')}}" class="img-list wp-post-image" alt=""> </a>
                                            </figure>
                                            <span class="restaurant-status close"><em class="bookmarkRibbon"></em>Close</span>
                                        </div>
                                        <div class="text-holder">
                                            <div class="post-title">
                                                <h5>
                                                    <a href="{{route('front.listing_details')}}">Burger King</a>
                                                </h5>
                                            </div>
                                            <span class="post-categories"><span>Type of food :
                                                </span> Beef
                                                Roast, Doughnut, Prawns</span>
                                            <div class="delivery-potions">
                                                <div class="post-time">
                                                    <i class="icon-motorcycle"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Delivery
                                                                time</b> <b class="tooltip-info">Your order will
                                                                be
                                                                delivered in 10 minutes.</b> </div>
                                                    </div>
                                                </div>
                                                <div class="post-time">
                                                    <i class="icon-clock4"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Pickup
                                                                time</b> <b class="tooltip-info">You
                                                                can pickup order in
                                                                15 minutes.</b> </div>
                                                    </div>
                                                </div>
                                                <span>Bridport, Dorset</span>
                                            </div>
                                        </div>
                                        <div class="list-option">

                                            <a href="javascript:void(0);" class="shortlist-btn" data-toggle="modal" data-target="#sign-in">
                                                <i class="icon-heart-o"></i> </a>
                                            <a href="#" class="viewmenu-btn text-color">View Menu</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <figure>
                                                <a href="#"> <img src="{{asset('front/extra-images/listing-logo13.png')}}" class="img-list wp-post-image" alt=""> </a>
                                            </figure>
                                            <span class="restaurant-status open"><em class="bookmarkRibbon"></em>Open</span>
                                        </div>
                                        <div class="text-holder">
                                            <div class="post-title">
                                                <h5>
                                                    <a href="{{route('front.listing_details')}}">Restaurant &amp; Cousine</a>
                                                    <span class="sponsored text-color">Sponsored</span>
                                                </h5>
                                            </div>
                                            <span class="post-categories"><span>Type of food :
                                                </span> Apple
                                                Juice,
                                                BB.Q, Beef Roast</span>
                                            <div class="delivery-potions">
                                                <div class="post-time">
                                                    <i class="icon-motorcycle"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Delivery
                                                                time</b> <b class="tooltip-info">Your order will
                                                                be
                                                                delivered in 10 minutes.</b> </div>
                                                    </div>
                                                </div>
                                                <div class="post-time">
                                                    <i class="icon-clock4"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Pickup
                                                                time</b> <b class="tooltip-info">You
                                                                can pickup order in
                                                                15 minutes.</b> </div>
                                                    </div>
                                                </div>
                                                <span>Bedford, Bedfordshire</span>
                                            </div>
                                        </div>
                                        <div class="list-option">

                                            <a href="javascript:void(0);" class="shortlist-btn" data-toggle="modal" data-target="#sign-in"><i class="icon-heart-o"></i> </a>
                                            <a href="#" class="viewmenu-btn text-color">View Menu</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <figure>
                                                <a href="#"><img src="{{asset('front/extra-images/fb-restaurant-11.png')}}" class="img-list wp-post-image" alt=""> </a>
                                            </figure>
                                            <span class="restaurant-status open"><em class="bookmarkRibbon"></em>Open</span>
                                        </div>
                                        <div class="text-holder">
                                            <div class="post-title">
                                                <h5>
                                                    <a href="{{route('front.listing_details')}}">Domino’s Pizza</a>
                                                    <span class="sponsored text-color">Sponsored</span>
                                                </h5>
                                            </div>
                                            <span class="post-categories"><span>Type of food :
                                                </span> Apple
                                                Juice, BB.Q, Beef Roast</span>
                                            <div class="delivery-potions">
                                                <div class="post-time">
                                                    <i class="icon-motorcycle"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Delivery
                                                                time</b> <b class="tooltip-info">Your order will
                                                                be
                                                                delivered in 10 minutes.</b> </div>
                                                    </div>
                                                </div>
                                                <div class="post-time">
                                                    <i class="icon-clock4"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Pickup
                                                                time</b> <b class="tooltip-info">You
                                                                can pickup order in
                                                                15 minutes.</b> </div>
                                                    </div>
                                                </div>
                                                <span>Neston, Cheshire</span>
                                            </div>
                                        </div>
                                        <div class="list-option">

                                            <a href="javascript:void(0);" class="shortlist-btn" data-toggle="modal" data-target="#sign-in"><i class="icon-heart-o"></i> </a>
                                            <a href="#" class="viewmenu-btn text-color">View Menu</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <figure>
                                                <a href="#"><img src="{{asset('front/extra-images/fb-restaurant-13.png')}}" class="img-list wp-post-image" alt=""> </a>
                                            </figure>
                                            <span class="restaurant-status close"><em class="bookmarkRibbon"></em>Close</span>
                                        </div>
                                        <div class="text-holder">
                                            <div class="post-title">
                                                <h5>
                                                    <a href="{{route('front.listing_details')}}">KFC – Kentucky</a>
                                                </h5>
                                            </div>
                                            <span class="post-categories"><span>Type of food :
                                                </span> Chines
                                                Soup, Cold Coffee, Cold Drink</span>
                                            <div class="delivery-potions">
                                                <div class="post-time">
                                                    <i class="icon-motorcycle"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Delivery
                                                                time</b> <b class="tooltip-info">Your order will
                                                                be
                                                                delivered in 10 minutes.</b> </div>
                                                    </div>
                                                </div>
                                                <div class="post-time">
                                                    <i class="icon-clock4"></i>
                                                    <div class="time-tooltip">
                                                        <div class="time-tooltip-holder"> <b class="tooltip-label">Pickup
                                                                time</b> <b class="tooltip-info">You
                                                                can pickup order in
                                                                15 minutes.</b> </div>
                                                    </div>
                                                </div>
                                                <span>Eton, Berkshire</span>
                                            </div>
                                        </div>
                                        <div class="list-option">

                                            <a href="javascript:void(0);" class="shortlist-btn" data-toggle="modal" data-target="#sign-in"><i class="icon-heart-o"></i> </a>
                                            <a href="#" class="viewmenu-btn text-color">View Menu</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="page-nation">
                                        <ul class="pagination pagination-large">
                                            <li class="disabled"><span>Prev</span></li>
                                            <li class="active"><span><a class="page-numbers active">1</a></span></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="order-sort-results">
                                <h5>Sort By</h5>
                                <ul>
                                    <li class="active"><a href="#" class="sort-by-best_match"><i class="icon-thumbs-up2"></i>Best
                                            Match</a></li>
                                    <li><a href="#" class="sort-by-alphabetical"><i class="icon-sort-alpha-asc"></i>Alphabetical</a>
                                    </li>
                                    <li><a href="#" class="sort-by-ratings"> <i class="icon-star-o"></i>Ratings</a></li>
                                    <li><a href="#" class="sort-by-minimum_order_value"><i class="icon-user-minus"></i>Minimum order
                                            value</a>
                                    </li>
                                    <li><a href="#" class="sort-by-delivery_fee"><i class="icon-dollar"></i>Delivery fee</a></li>
                                    <li><a href="#" class="sort-by-fastest_delivery"><i class="icon-fast-forward"></i>Fastest
                                            delivery</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="message-box" style="background-color: #00a474;">
                                <strong>Can’t find a Restaurant?</strong>
                                <span>If you can't find the Restaurant that you want to Order,
                                    request to add
                                    in our list</span>
                                <a href="#" class="request-btn">Restaurant Request</a>
                            </div>
                            <div class="message-box" style="background-color: #fa9918;">
                                <strong>I‘ m not Listed!</strong><span>is your restaurant or
                                    business not
                                    listed on over site</span>
                                <a href="#" class="request-btn">Add Your business!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Section End -->
@endsection
