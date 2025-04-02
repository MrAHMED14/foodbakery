<!-- Header Start -->
<header id="header">
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="logo">
                        <figure>
                            <a href="{{ route('front.index') }}" class="light-logo">
                                <img src="{{ asset('front/extra-images/main-logo.png') }}" alt="FoodBakery">
                            </a>
                        </figure>
                    </div>
                    <div class="main-nav">
                        <nav id="site-navigation" class="main-navigation">
                            <ul>
                                <li><a href="{{ route('front.listings') }}">Restaurants</a></li>
                                <li>
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="{{ route('front.price') }}">Price Plans</a></li>
                                        <li><a href="{{ route('front.how') }}">How it works</a></li>
                                        <li><a href="{{ route('front.faq') }}">FAQ’s</a></li>
                                        <li><a href="{{ route('front.contact') }}">Contact</a></li>
                                    </ul>
                                    <!--End Sub Menu -->
                                </li>
                                <li><a href="{{ route('front.blog') }}">Blogs</a></li>
                            </ul>
                        </nav><!-- .main-navigation -->
                    </div>
                    <div class="main-location">
                        <ul>
                            <li class="location-has-children">
                                <a href="#"><i class="icon-compass-with-white-needles"></i>Feel Like Eating</a>
                                <ul>

                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-05-1.png') }}">Apple
                                            Juice</a> <span></span> </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-19-1.png') }}">BB.Q</a><span></span>
                                    </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-22-1.png') }}">Beef
                                            Roast</a> <span></span> </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-10-1.png') }}">Carrot
                                            Juice</a> <span></span> </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-03-1.png') }}">Cheese
                                            Burger</a> <span></span> </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-07-1.png') }}">Chicken
                                            Roast</a> <span></span> </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-01-1.png') }}">Chines
                                            Soup</a> <span></span> </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-18-1.png') }}">Cold
                                            Coffee</a> <span></span> </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-23-1.png') }}">Cold
                                            Drink</a> <span></span> </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-28-1.png') }}">Cupcake</a><span></span>
                                    </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-21-1.png') }}">Doughnut</a><span></span>
                                    </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-25-1.png') }}">Drum
                                            Stick</a> <span></span> </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-11-1.png') }}">Egg
                                            Fry</a> <span></span> </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-12-1.png') }}">Fish
                                            Fry</a> <span></span> </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-13-1.png') }}">Fresh
                                            Juice</a> <span></span> </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-30-1.png') }}">Hot
                                            Dogs</a> <span></span> </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-26-1.png') }}">Ice
                                            Cream</a> <span></span> </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-15-1.png') }}">Magi</a>
                                        <span></span>
                                    </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-09-1.png') }}">Noodles</a>
                                        <span></span>
                                    </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-14-1.png') }}">Pastry</a><span></span>
                                    </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-29-1.png') }}">Pizza</a><span></span>
                                    </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-06-1.png') }}">Potato
                                            Fries</a> <span></span> </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-24-1.png') }}">Prawns</a>
                                        <span></span>
                                    </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-17-1.png') }}">Sham
                                            pane</a> <span></span> </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-27-1.png') }}">Shawarma</a><span></span>
                                    </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-04-1.png') }}">Soda
                                            water</a> <span></span> </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-16-1.png') }}">Stakes</a>
                                        <span></span>
                                    </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-22-1.png') }}">Steam
                                            Roast</a> <span></span> </li>
                                    <li><a href="{{ route('front.listings') }}"><img alt=""
                                                src="{{ asset('front/extra-images/food-icon-02-1.png') }}">Tea</a><span></span>
                                    </li>

                                </ul>
                            </li>
                            <li class="location-has-children choose-location">
                                <a href="#"><i class="icon-location-pin2"></i>Choose location</a>
                                <ul>
                                    <li class="select-location">
                                        <div class="foodbakery-locations-fields-group">
                                            <form action="#">
                                                <span id="foodbakery_radius_location_open"
                                                    class="foodbakery-radius-location"><i
                                                        class="icon-target5"></i></span>
                                                <span class="foodbakery-input-cross foodbakery-input-cross-header"
                                                    style="display:none;">
                                                    <i class="icon-cross"></i></span>
                                                <input type="text" value="" name="location"
                                                    placeholder="All Locations" autocomplete="off">

                                                <span><span class="loc-icon-holder"><i
                                                            class="icon-target3"></i></span></span>
                                                <div class="select-location" id="foodbakery-radius-range622192"
                                                    style="display: none;">
                                                    <div class="select-popup popup-open">
                                                        <a id="location_close_popup622192" href="javascript:0;"
                                                            class="location-close-popup">
                                                            <i class="icon-times"></i></a>
                                                        <input type="hidden" class="foodbakery-radius"
                                                            name="foodbakery_radius" value="10">
                                                        <p>Show with in</p>
                                                        <input id="ex16b313324" type="text" data-value="10"
                                                            value="10" style="display: none;">
                                                        <script>
                                                            jQuery(document).ready(function() {
                                                                var elem = jQuery("#ex16b313324");
                                                                if (elem.length != "") {
                                                                    elem.slider({
                                                                        step: 1,
                                                                        min: 0,
                                                                        max: 500,
                                                                        value: 10,
                                                                    });
                                                                    elem.on("slideStop", function() {
                                                                        var rang_slider_val = elem.val();
                                                                        jQuery("#ex16b313324CurrentSliderValLabel").html(rang_slider_val);
                                                                        jQuery("#range-hidden-foodbakery-radius622192").val(rang_slider_val);
                                                                        //foodbakery_restaurant_content("622192");
                                                                    });
                                                                    elem.on("slide", function() {
                                                                        jQuery("#ex16b313324CurrentSliderValLabel").html(elem.val());
                                                                    });
                                                                }

                                                                $("#foodbakery_radius_location_open").click(function() {
                                                                    $("#foodbakery-radius-range622192").show();
                                                                });
                                                                $("#location_close_popup622192").click(function() {
                                                                    $("#foodbakery-radius-range622192").hide();
                                                                });
                                                            });
                                                        </script>
                                                        <span>Miles: <span
                                                                id="ex16b313324CurrentSliderValLabel">10</span></span><br>
                                                        <p class="my-location">of <i
                                                                class="cs-color icon-location-arrow"></i><a
                                                                id="foodbakery-geo-location-all"
                                                                class="cs-color foodbakery-geo-location313324"
                                                                href="javascript:void(0)">My location</a></p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="popular-location">Popular Locations</li>
                                    <li>
                                        <ul>
                                            <li><a href="{{ route('front.result') }}">Tiaret</a></li>
                                            <li><a href="{{ route('front.result') }}">Sougueur</a></li>
                                            <li><a href="{{ route('front.result') }}">Mahdia</a></li>
                                            <li><a href="{{ route('front.result') }}">Chalala</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    @auth
                        @if (Auth::user()->role == 'client')
                            {{-- Buyer --}}
                            <div class="login-option">
                                <div class="user-dashboard-menu">
                                    <ul>
                                        <li class="user-dashboard-menu-children">
                                            <a href="javascript:void(0);" class="">
                                                <figure class="profile-image">
                                                    <img src="{{ asset('front/extra-images/team-medium-img1.jpg') }}"
                                                        alt="">
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
                                                <li><a href="{{ route('buyer.shortlists') }}"><i
                                                            class="icon-heart"></i>Shortlists</a></li>
                                                <li><a href="{{ route('buyer.statement') }}"><i
                                                            class="icon-file-text22"></i>Statement</a></li>
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
                        @elseif (Auth::user()->role == 'vender')
                            {{-- Restaurent --}}
                            <div class="login-option">
                                <div class="user-dashboard-menu">
                                    <ul>
                                        <li class="user-dashboard-menu-children">
                                            <a href="javascript:void(0);" class="">
                                                <figure class="profile-image">
                                                    <img src="{{ asset('front/extra-images/listing-logo18.png') }}"
                                                        alt="">
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
                                                <li><a href="{{ route('restaurant.reviews') }}"><i
                                                            class="icon-comment2"></i>Reviews</a></li>
                                                <li><a href="{{ route('restaurant.memberships') }}"><i
                                                            class="icon-card_membership"></i>Memberships</a></li>
                                                <li><a href="{{ route('restaurant.withdrawals') }}"><i
                                                            class="icon-bill"></i>Withdrawals</a></li>
                                                <li><a href="{{ route('restaurant.earnings') }}"><i
                                                            class="icon-money"></i>Earnings</a></li>
                                                <li><a href="{{ route('restaurant.statement') }}"><i
                                                            class="icon-file-text22"></i>Statement</a></li>
                                                <li><a href="{{ route('restaurant.team_management') }}"><i
                                                            class="icon-flow-tree"></i>Team Management</a></li>
                                                <li><a href="{{ route('restaurant.change_password') }}"><i
                                                            class="icon-unlock-alt"></i>Change Password</a></li>
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
                        @elseif (Auth::user()->role == 'admin')
                            {{-- ADMIN --}}
                            <div class="login-option">
                                <div class="user-dashboard-menu">
                                    <ul>
                                        <li class="user-dashboard-menu-children">
                                            <a href="javascript:void(0);" class="">
                                                <figure class="profile-image">
                                                    <img src="{{ asset('front/extra-images/listing-logo18.png') }}"
                                                        alt="">
                                                </figure>
                                                {{ Auth::user()->name }}
                                            </a>
                                            <ul>
                                                <li class="active"><a href="{{ route('admin.dashboard') }}"><i
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
                            <a class="cs-color cs-popup-joinus-btn login-popup" data-target="#sign-in"
                                data-toggle="modal" href="#user-register">Login / Register</a><a class="get-start-btn"
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
