@php
    $cuisineTypes = \App\Models\CuisineType::all();
@endphp

<header id="header">
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="logo">
                        <figure>
                            <a href="{{ route('front.index') }}" class="light-logo">
                                <img src="{{ asset('front/extra-images/foodbakery.svg') }}" style="width: 100%; height: 25px; margin: 12.5px 0;" alt="FoodBakery">
                            </a>
                        </figure>
                    </div>
                    <div class="main-nav">
                        <nav id="site-navigation" class="main-navigation">
                            <ul>
                                <li><a href="{{ route('front.listings') }}">Restaurants</a></li>
                                <li><a href="{{ route('front.contact') }}">Contact us</a></li>
                            </ul>
                        </nav><!-- .main-navigation -->
                    </div>
                    <div class="main-location">
                        <ul>
                            <li class="location-has-children">
                                <a href="#"><i class="icon-compass-with-white-needles"></i>Feel Like Eating</a>
                                <ul>
                                    @foreach ($cuisineTypes as $cuisineType)
                                        <li>
                                            <a href="{{ route('front.listings', ['cuisine_types' => [$cuisineType->id]]) }}">
                                                {{ $cuisineType->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="location-has-children choose-location">
                                <a href="#"><i class="icon-location-pin2"></i>Choose location</a>
                                <ul>
                                    <li class="popular-location">Popular Locations</li>
                                    <li>
                                        <ul>
                                            <li><a href="{{ route('front.listings', ['location' => "tiaret"]) }}">Tiaret</a></li>
                                            <li><a href="{{ route('front.listings', ['location' => "sougueur"]) }}">Sougueur</a></li>
                                            <li><a href="{{ route('front.listings', ['location' => "mahdia"]) }}">Mahdia</a></li>
                                            <li><a href="{{ route('front.listings', ['location' => "chalala"]) }}">Chalala</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    @auth
                        @if (Auth::user()->isUser())
                            {{-- Buyer --}}
                            <div class="login-option">
                                <div class="user-dashboard-menu">
                                    <ul>
                                        <li class="user-dashboard-menu-children">
                                            <a href="javascript:void(0);" class="">
                                                <figure class="profile-image">
                                                    <img src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : asset('front/extra-images/user-placeholder.png') }}" alt="{{ Auth::user()->name }}"  style="aspect-ratio: 1 / 1; object-fit: cover; object-position: center;">
                                                </figure>
                                                {{ Auth::user()->name }}
                                            </a>
                                            <ul>
                                                <li class="active"><a href="{{ route('buyer.dashboard') }}"><i
                                                            class="icon-dashboard3"></i>Dashboard</a></li>
                                                <li><a href="{{ route('buyer.bookings') }}" class="btn-edit-profile"><i
                                                            class="icon-file-text2"></i>My Bookings</a></li>
                                                <li><a href="{{ route('buyer.reviews') }}" class="btn-edit-profile"><i
                                                            class="icon-comment2"></i>My Reviews</a></li>
                                                <li><a href="{{ route('buyer.orders') }}" class="btn-edit-profile"><i
                                                            class="icon-add_shopping_cart"></i>My Orders</a></li>
                                                <li><a href="{{ route('buyer.account_setting') }}"><i
                                                            class="icon-build"></i>Account Settings</a></li>
                                                <li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <button type="submit"
                                                            style="text-align: left;width: 100%; background: none; border: none; padding: 10px 20px;">
                                                            <i class="icon-log-out"
                                                                style="color: #f97456; font-size: 16px; margin-right: 10px;"></i>
                                                            Sign out
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @elseif (Auth::user()->isRestaurant())
                            {{-- Restaurent --}}
                            <div class="login-option">
                                <div class="user-dashboard-menu">
                                    <ul>
                                        <li class="user-dashboard-menu-children">
                                            <a href="javascript:void(0);" class="">
                                                <figure class="profile-image">
                                                    <img src="{{ Auth::user()->restaurant->restaurant_logo ? asset('storage/' . Auth::user()->restaurant->restaurant_logo) : asset('front/extra-images/restaurant-placeholder.png') }}" alt="{{Auth::user()->restaurant->name }}" style="aspect-ratio: 1 / 1; object-fit: cover; object-position: center;">
                                                </figure>
                                                {{ Auth::user()->name }}
                                            </a>
                                            <ul>
                                                <li class="active"><a href="{{ route('restaurant.dashboard') }}"><i
                                                            class="icon-dashboard3"></i>Dashboard</a></li>
                                                <li><a href="{{ route('restaurant.restaurant') }}"><i
                                                            class="icon-building"></i>My Restaurant</a></li>
                                                <li><a href="{{ route('restaurant.menu_builder') }}"><i
                                                            class="icon-menu5"></i>Menu Builder</a></li>
                                                <li><a href="{{ route('restaurant.orders') }}"><i
                                                            class="icon-add_shopping_cart"></i>Orders</a></li>
                                                <li><a href="{{ route('restaurant.bookings') }}"><i
                                                            class="icon-file-text2 "></i>Bookings</a></li>
                                                <li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <button type="submit"
                                                            style="text-align: left;width: 100%;background: none; border: none; padding: 10px 20px;">
                                                            <i class="icon-log-out"
                                                                style="color: #f97456; font-size: 16px; margin-right: 10px;"></i>
                                                            Sign out
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @elseif (Auth::user()->isAdmin())
                            {{-- ADMIN --}}
                            <div class="login-option">
                                <div class="user-dashboard-menu">
                                    <ul>
                                        <li class="user-dashboard-menu-children">
                                            <a href="javascript:void(0);" class="">
                                                <figure class="profile-image">
                                                    <img src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : asset('front/extra-images/user-placeholder.png') }}"
                                                        alt="" style="aspect-ratio: 1 / 1; object-fit: cover; object-position: center;">
                                                </figure>
                                                {{ Auth::user()->name }}
                                            </a>
                                            <ul>
                                                <li class="active"><a href="{{ route('admin.index') }}"><i
                                                            class="icon-dashboard3"></i>Dashboard</a></li>
                                                <li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <button type="submit"
                                                            style="text-align: left;width: 100%;background: none; border: none; padding: 10px 20px;">
                                                            <i class="icon-log-out"
                                                                style="color: #f97456; font-size: 16px; margin-right: 10px;"></i>
                                                            Sign out
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    @else
                        {{-- Login/Register --}}
                        <div class="login-option">
                            <a class="cs-color cs-popup-joinus-btn login-popup" href="{{ route('login') }}">Login / Register</a><a class="get-start-btn"
                                href="{{ route('front.register_restaurant') }}">
                                Register
                                Restaurant </a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
