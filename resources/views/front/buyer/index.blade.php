@extends('front.buyer.master')

@section('title')
    My Account
@endsection

@section('content')
    <!-- Main Section Start -->
    <div class="main-section">
        @include('front.buyer.body.header')

        <div class="page-section account-header buyer-logged-in">
            <div class="container">
                <div class="row">
                    <!-- ========== menu Start ========== -->
                    @include('front.buyer.body.menu')
                    <!-- menu End -->
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="user-dashboard">
                            <div class="user-holder">
                                <div id="close-me" class="user-message" style="background-color:#1e73be; text-align: center;">
                                    <h2 style="text-align: center;">Welcome to your account</h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="user-suggest-list listing simple">
                                            <div class="element-title">
                                                <h5>Suggested Restaurants</h5>
                                            </div>
                                            <ul class="user-suggest-list-holder">
                                                @foreach ($suggestedRestaurants as $restaurant)
                                                    <li>
                                                        <div class="suggest-list-holder">
                                                            <div class="img-holder">
                                                                <figure>
                                                                    <a href="{{ route('front.listing_details', $restaurant->id) }}">
                                                                        <img src="{{ $restaurant->restaurant_logo ? asset('storage/' . $restaurant->restaurant_logo) : asset('front/extra-images/restaurant-placeholder.png') }}"
                                                                            class="img-list wp-post-image" style="border-radius: 5px; aspect-ratio: 1 / 1; object-fit: cover; object-position: center;" alt="logo">
                                                                    </a>
                                                                </figure>
                                                            </div>
                                                            <div class="text-holder">
                                                                <div class="post-title">
                                                                    <h5><a href="{{ route('front.listing_details', $restaurant->id) }}">
                                                                        {{ $restaurant->name }}
                                                                    </a></h5>
                                                                </div>

                                                                <span class="post-categories">
                                                                    @foreach ($restaurant->cuisines as $cuisine){{ $cuisine->name }}@if (!$loop->last), @endif @endforeach
                                                                </span>

                                                                <div class="list-option">
                                                                    <a href="{{ route('front.listing_details', $restaurant->id) }}" class="viewmenu-btn">View Menu</a>
                                                                </div>

                                                                <div class="delivery-potions">
                                                                    @if ($restaurant->accepts_orders)
                                                                        <div class="post-time">
                                                                            <i class="icon-motorcycle"></i>
                                                                            <div class="time-tooltip">
                                                                                <div class="time-tooltip-holder">
                                                                                    <b class="tooltip-label">Pre orders</b>
                                                                                    <b class="tooltip-info">This restaurant allows Pre orders.</b>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    @if ($restaurant->accepts_reservations)
                                                                        <div class="post-time">
                                                                            <i class="icon-table22"></i>
                                                                            <div class="time-tooltip">
                                                                                <div class="time-tooltip-holder">
                                                                                    <b class="tooltip-label">Booking</b>
                                                                                    <b class="tooltip-info">This restaurant allows Booking.</b>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif

                                                                    <span>{{ $restaurant->address }},{{ $restaurant->commune }}, {{ $restaurant->wilaya }}</span>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Section End -->
@endsection
