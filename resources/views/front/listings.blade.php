@php
    $currentSort = request('sort_by', 'best_match');
@endphp

@extends('front.master')

@section('title')
    Restaurant listings
@endsection

@section('content')
    {{-- Header --}}
    <div class="sub-header align-center">
        <div class="subheader-holder"
            style="background:url({{ asset('front/extra-images/listing-cover.png') }}) no-repeat; background-position: bottom; background-size: cover; padding-top: 70px; padding-bottom: 40px; margin-top: 0px; margin-bottom: 0px; min-height: 186px !important;">
            <div class="container ">
                <div class="row">
                    <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                <div class="row">
                                    <div class="listing-main-search">
                                        <div class="main-search">
                                            {{-- Search --}}
                                            <form action="{{ route('front.listings') }}" method="GET" id="searchForm">
                                                <div class="restaurant-search-element-container row">
                                                    {{-- <div class="col-lg-12 col-md-12 col-sm-24 col-xs-24">
                                                        <div class="field-holder">
                                                            <span class="restaurant-element-search-btn">
                                                                <i class="icon-search5"></i>
                                                            </span>

                                                            <input type="text" name="search" placeholder="Search restaurants..." value="{{ request('search') }}" id="searchInput">
                                                        </div>
                                                    </div> --}}

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <span class="restaurant-element-search-btn">
                                                                <i class="icon-search5"></i>
                                                            </span>

                                                            <input type="text" name="search" placeholder="Search restaurants..." value="{{ request('search') }}" id="searchInput">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <span>
                                                                <i class="icon-location search-by-location-icon"></i>
                                                            </span>

                                                            <ul>
                                                                <li class="select-location">
                                                                    <div class="foodbakery-locations-fields-group foodbakery-focus-out">
                                                                        <input type="text" class="location-field-text filter" placeholder="All Locations">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <script>
                                                document.getElementById('searchInput').addEventListener('keypress', function(event) {
                                                    if (event.key === 'Enter') {
                                                        event.preventDefault();
                                                        document.getElementById('searchForm').submit();
                                                    }
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    {{-- Main Section --}}
    <div class="main-section">
        <div class="page-section nopadding cs-nomargin" style="padding-bottom: 10px;margin-bottom: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <aside class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="filter-wrapper">
                                    <div class="foodbakery-filters listing-filter">
                                        {{-- Filter --}}
                                        <form method="GET" action="{{ route('front.listings') }}">
                                            {{-- Cuisines --}}
                                            <div class="filter-holder panel-default">
                                                <div class="filter-heading">
                                                    <h6><i class="icon-food"></i>Cuisines</h6>
                                                </div>
                                                <div class="select-categories cuisines-custom-scrollbar" style="max-height: 300px; overflow-y: auto;">
                                                    <ul class="filter-list cs-parent-checkbox-list" id="cuisine-list">
                                                        @foreach ($cuisineTypes as $index => $cuisine)
                                                            <li class="{{ $index >= 8 ? 'extra-cuisine' : '' }}" style="{{ $index >= 8 ? 'display: none;' : '' }}">
                                                                <div class="checkbox">
                                                                    <input type="checkbox"
                                                                        id="{{ 'restaurant_cuisine_types-' . $cuisine->id }}"
                                                                        name="cuisine_types[]"
                                                                        value="{{ $cuisine->id }}"
                                                                        {{ is_array(request('cuisine_types')) && in_array($cuisine->id, request('cuisine_types')) ? 'checked' : '' }}>
                                                                    <label for="{{ 'restaurant_cuisine_types-' . $cuisine->id }}">
                                                                        {{ $cuisine->name }}
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>

                                                @if ($cuisineTypes->count() > 8)
                                                    <button type="button" class="expand" style="background: transparent; border: none; padding: 0;" id="toggle-cuisine-list">
                                                        See more cuisines
                                                    </button>
                                                @endif

                                                <script>
                                                    $(document).ready(function () {
                                                        var isExpanded = false;

                                                        $('#toggle-cuisine-list').on('click', function () {
                                                            if (!isExpanded) {
                                                                $('.extra-cuisine').css('display', 'block');
                                                                $(this).text('Show Less cuisines');
                                                            } else {
                                                                $('.extra-cuisine').css('display', 'none');
                                                                $(this).text('See more cuisines');
                                                            }

                                                            isExpanded = !isExpanded;
                                                        });
                                                    });
                                                </script>

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
                                                                <input type="checkbox" id="restaurant_timings_open" name="open_status" value="open" {{ request('open_status') === 'open' ? 'checked' : '' }}>
                                                                <label for="restaurant_timings_open">Open Now
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input type="checkbox" id="restaurant_timings_close" class="restaurant_timings_close" name="open_status" value="closed" {{ request('open_status') === 'closed' ? 'checked' : '' }}>
                                                                <label for="restaurant_timings_close">Closed Now
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
                                                                <input type="checkbox" id="restaurant_pre_order_yes" class="restaurant_pre_order_yes" name="pre_order" value="yes" {{ request('pre_order') === 'yes' ? 'checked' : '' }}>
                                                                <label for="restaurant_pre_order_yes">Yes
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input type="checkbox" id="restaurant_pre_order_no" class="restaurant_pre_order_no" name="pre_order" value="no" {{ request('pre_order') === 'no' ? 'checked' : '' }}>
                                                                <label for="restaurant_pre_order_no">No
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            {{-- Booking --}}
                                            <div class="filter-holder panel-default">
                                                <div class="filter-heading">
                                                    <h6><i class="icon-table2"></i>Booking</h6>
                                                </div>
                                                <div class="select-categories">
                                                    <ul class="filter-list cs-checkbox-list">
                                                        <li>
                                                            <div class="checkbox">
                                                                <input type="checkbox" id="specials_1" class="specials" name="booking" value="yes" {{ request('booking') === 'yes' ? 'checked' : '' }}>
                                                                <label for="specials_1">Yes</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="checkbox">
                                                                <input type="checkbox" id="specials_2" class="specials" name="booking" value="no" {{ request('booking') === 'no' ? 'checked' : '' }}>
                                                                <label for="specials_2">No</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <button type="submit" style="width: 100%; background-color: #c33333; border: none; border-radius: 3px; color: #fff; text-align: center; padding: 5px 10px;">Apply Filter</button>
                                            <a href="{{ route('front.listings') }}" class="btn" style="width: 100%; margin-top: 2px;">Reset</a>
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
                                                Search result for <span style="color: rgb(32, 31, 31);">"{{ $query }}"</span>
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
                                <div class="order-sort-results" style="border-radius: 3px;">
                                    <h5>Sort By</h5>
                                    <ul>
                                        <li class="{{ $currentSort === 'best_match' ? 'active' : '' }}">
                                            <a href="{{ request()->fullUrlWithQuery(['sort_by' => 'best_match']) }}">
                                                <i class="icon-thumbs-up2"></i> Best Match
                                            </a>
                                        </li>
                                        <li class="{{ $currentSort === 'alphabetical' ? 'active' : '' }}">
                                            <a href="{{ request()->fullUrlWithQuery(['sort_by' => 'alphabetical']) }}">
                                                <i class="icon-sort-alpha-asc"></i> Alphabetical
                                            </a>
                                        </li>
                                        <li class="{{ $currentSort === 'ratings' ? 'active' : '' }}">
                                            <a href="{{ request()->fullUrlWithQuery(['sort_by' => 'ratings']) }}">
                                                <i class="icon-star-o"></i> Ratings
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="message-box" style="border: none; background-color: #00a474; border-radius: 3px;">
                                    <strong>Can’t find a Restaurant?</strong>
                                    <span>If you can't find the Restaurant that you want to Order,
                                        request to add
                                        in our list</span>
                                    <a href="{{ route('front.contact') }}" class="request-btn">Restaurant Request</a>
                                </div>

                                <div class="message-box" style="border: none; background-color: #fa9918; border-radius: 3px;">
                                    <strong>I’ m not Listed!</strong><span>is your restaurant or
                                        business not
                                        listed on over site</span>
                                    <a href="{{ route('front.register_restaurant') }}" class="request-btn">Add Your business!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
