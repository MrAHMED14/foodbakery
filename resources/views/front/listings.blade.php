@extends('front.master')

@section('title')
    Restaurant || Listings
@endsection

@section('content')
    <!-- Main Section Start -->
    <div class="sub-header align-center">
        <div class="subheader-holder"
            style="background:url({{ asset('front/extra-images/listing-cover.png') }}) no-repeat; background-position: bottom; background-size: cover; padding-top: 70px; padding-bottom: 40px; margin-top: 0px; margin-bottom: 0px; min-height: 186px !important;">
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
                                            <form action="{{ route('front.listings') }}" method="GET" id="searchForm">
                                                <div class="restaurant-search-element-container row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="field-holder"> <span
                                                                class="restaurant-element-search-btn"><i
                                                                    class="icon-search5"></i> </span>
                                                            <input type="text" name="search"
                                                                placeholder="Search restaurants..."
                                                                value="{{ request('search') }}" id="searchInput">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="field-holder"> <span> <i
                                                                    class="icon-location search-by-location-icon"></i>
                                                            </span>
                                                            <ul>
                                                                <li class="select-location">
                                                                    <div
                                                                        class="foodbakery-locations-fields-group foodbakery-focus-out">
                                                                        <span id="foodbakery_radius_location_open333"
                                                                            class="foodbakery-radius-location"><i
                                                                                class="icon-target5"></i></span>
                                                                        <input type="text"
                                                                            class="location-field-text filter"
                                                                            placeholder="All Locations">
                                                                    </div>
                                                                    <div class="select-location"
                                                                        id="foodbakery-radius-range333"
                                                                        style="display: none;">
                                                                        <div class="select-popup popup-open">
                                                                            <a id="location_close_popup333"
                                                                                href="javascript:0;"
                                                                                class="location-close-popup">
                                                                                <i class="icon-times"></i></a>
                                                                            <input type="hidden" class="foodbakery-radius"
                                                                                name="foodbakery_radius" value="10">
                                                                            <p style="color: rgb(14, 13, 13);">Show with in</p>
                                                                            <input id="ex16b333" type="text"
                                                                                data-value="10" value="10"
                                                                                style="display: none;">
                                                                            <script>
                                                                                document.getElementById('searchInput').addEventListener('keypress', function(event) {
                                                                                    if (event.key === 'Enter') {
                                                                                        event.preventDefault();
                                                                                        document.getElementById('searchForm').submit();
                                                                                    }
                                                                                });
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
                                                                            <p class="my-location"><i
                                                                                    class="cs-color icon-location-arrow"></i><a
                                                                                    id="foodbakery-geo-location-all"
                                                                                    class="cs-color foodbakery-geo-location313324"
                                                                                    href="javascript:void(0)">My
                                                                                    location</a></p>
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
                            <li><a href="{{ route('front.index') }}">Home</a></li>
                            <li class="active">Listings</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-section">
        <div class="page-section nopadding cs-nomargin" style="padding-bottom: 10px;margin-bottom: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <aside class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="filter-wrapper">
                                    <div class="foodbakery-filters listing-filter">
                                        <form method="GET" action="{{ route('front.listings') }}">
                                            {{-- Cuisines --}}
                                            <div class="filter-holder panel-default">
                                                <div class="filter-heading">
                                                    <h6><i class="icon-food"></i>Cuisines</h6>
                                                </div>
                                                <!-- Cuisine type filter as checkboxes -->
                                                <div class="select-categories">
                                                    <ul class="filter-list cs-parent-checkbox-list">
                                                        @foreach ($cuisineTypes as $cuisine)
                                                            <li>
                                                                <div class="checkbox">
                                                                    <input type="checkbox"
                                                                        id={{ 'restaurant_cuisine_types-' . $cuisine->id }}
                                                                        name="cuisine_types[]" value="{{ $cuisine->id }}"
                                                                        class=""
                                                                        {{ is_array(request('cuisine_types')) && in_array($cuisine->id, request('cuisine_types')) ? 'checked' : '' }}>
                                                                    <label
                                                                        for={{ 'restaurant_cuisine_types-' . $cuisine->id }}>{{ $cuisine->name }}
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>

                                            {{-- Opening Status --}}
                                            <div class="filter-holder panel-default">
                                                <div class="filter-heading">
                                                    <h6><i class="icon-clock4"></i>Opening Status</h6>
                                                </div>
                                                <div class="select-categories restaurant_timings">
                                                    <ul class="filter-list cs-parent-checkbox-list">
                                                        <li>
                                                            <div class="checkbox">
                                                                <input type="checkbox" id="restaurant_timings_open"
                                                                    {{-- name="restaurant_timings_checkbox" --}} class=""
                                                                    value="open">
                                                                <label for="restaurant_timings_open">Open Now
                                                                    <span>(5)</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input type="checkbox" id="restaurant_timings_close"
                                                                    {{-- name="restaurant_timings_checkbox" --}}
                                                                    class="restaurant_timings_close" value="close">
                                                                <label for="restaurant_timings_close">Closed Now
                                                                    <span>(10)</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            {{-- Pre Orders --}}
                                            <div class="filter-holder panel-default">
                                                <div class="filter-heading">
                                                    <h6><i class="icon-external-link"></i>Pre Orders</h6>
                                                </div>

                                                <div class="select-categories restaurant_pre_order">
                                                    <ul class="filter-list cs-parent-checkbox-list">
                                                        <li>
                                                            <div class="checkbox">
                                                                <input type="checkbox" id="restaurant_pre_order_yes"
                                                                    {{-- name="restaurant_pre_order_checkbox" --}}
                                                                    class="restaurant_pre_order_yes" value="yes">
                                                                <label for="restaurant_pre_order_yes">Yes
                                                                    <span>(11)</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input type="checkbox" id="restaurant_pre_order_no"
                                                                    {{-- name="restaurant_pre_order_checkbox" --}}
                                                                    class="restaurant_pre_order_no" value="no">
                                                                <label for="restaurant_pre_order_no">No
                                                                    <span>(4)</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            {{-- Specials --}}
                                            <div class="filter-holder panel-default">
                                                <div class="filter-heading">
                                                    <h6><i class="icon-folder_special"></i>Specials</h6>
                                                </div>
                                                <div class="select-categories">
                                                    <ul class="filter-list cs-checkbox-list">
                                                        <li>
                                                            <div class="checkbox">
                                                                <input type="checkbox" id="specials_1" class="specials"
                                                                    value="deals">
                                                                <label for="specials_1">Deals</label>
                                                                <span>(5)</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input type="checkbox" id="specials_2" class="specials"
                                                                    value="free-delivery">
                                                                <label for="specials_2">Free Delivery</label>
                                                                <span>(12)</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <button type="submit" style="width: 100%;">Filter</button>
                                        </form>
                                    </div>
                                </div>
                            </aside>

                            {{-- Restaurant listing --}}
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="listing-sorting-holder">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        @if (isset($query))
                                            <h4>
                                                Search result for "{{ $query }}"
                                            </h4>
                                        @endif
                                        <h4>
                                            {{ $restaurants->total() }}
                                            Restaurant{{ $restaurants->total() > 1 ? 's' : '' }} found
                                        </h4>
                                    </div>

                                </div>

                                {{-- Restaurant listing --}}
                                <div class="listing simple">
                                    <ul>
                                        @foreach ($restaurants as $restaurant)
                                            <x-restaurant-card :restaurant="$restaurant" />
                                        @endforeach
                                    </ul>
                                </div>

                                {{-- Pagination --}}
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="page-nation" style="text-align: center;">
                                            {{ $restaurants->links('pagination::bootstrap-4') }}
                                        </div>
                                    </div>
                                </div>

                            </div>

                            {{-- Sort --}}
                            <div class="section-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="order-sort-results">
                                    <h5>Sort By</h5>
                                    <ul>
                                        <li class="active"><a href="#" class="sort-by-best_match"><i
                                                    class="icon-thumbs-up2"></i>Best
                                                Match</a></li>
                                        <li><a href="#" class="sort-by-alphabetical"><i
                                                    class="icon-sort-alpha-asc"></i>Alphabetical</a>
                                        </li>
                                        <li><a href="#" class="sort-by-ratings"> <i
                                                    class="icon-star-o"></i>Ratings</a></li>
                                        <li><a href="#" class="sort-by-minimum_order_value"><i
                                                    class="icon-user-minus"></i>Minimum order
                                                value</a>
                                        </li>
                                        <li><a href="#" class="sort-by-delivery_fee"><i
                                                    class="icon-dollar"></i>Delivery fee</a></li>
                                        <li><a href="#" class="sort-by-fastest_delivery"><i
                                                    class="icon-fast-forward"></i>Fastest
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
