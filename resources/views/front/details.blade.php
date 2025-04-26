@extends('front.master')

@section('title')
    {{ $restaurant->name }} - FoodBakery
@endsection

@section('content')
    <div class="sub-header align-center">
        {{-- Heading --}}
        <div class="restaurant-detail-image-section"
            style="background: url('{{ $restaurant->cover_photo ? asset('storage/' . $restaurant->cover_photo) : asset('front/extra-images/cover-placeholder.png') }}') center center / cover no-repeat; padding-top: 60px; padding-bottom: 30px; margin-top: 0px; margin-bottom: 0px; min-height: 186px !important;">
            <!-- Container Start -->
            <div class="container">
                <!-- Row Start -->
                <div class="row">
                    <!-- Column Start -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="company-info-detail">
                            <div class="company-info" style="text-align: left">
                                <div class="img-holder">
                                    <figure>
                                        <img src="{{ $restaurant->restaurant_logo ? asset('storage/' . $restaurant->restaurant_logo) : asset('front/extra-images/restaurant-placeholder.png') }}"
                                            alt="{{ $restaurant->name . ' logo' }}" style="aspect-ratio: 1 / 1; object-fit: cover; object-position: center;">
                                    </figure>
                                </div>
                                <div class="text-holder">
                                    <div>
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= floor($restaurant->averageRating()))
                                                <span class="icon-star-full" style="color: #ff981a;"></span>
                                            @elseif ($i - $restaurant->averageRating() <= 0.5)
                                                <span class="icon-star-half-empty" style="color: #ff981a;"></span>
                                            @else
                                                <span class="icon-star-outlined" style="color: #ff981a;"></span>
                                            @endif
                                        @endfor
                                        <span class="reviews">({{ $restaurant->reviewsCount() }} Reviews)</span>
                                    </div>
                                    <span class="restaurant-title">{{ $restaurant->name }}</span>
                                    <div class="text">
                                        <i class="icon-local_pizza"></i>
                                        @foreach ($restaurant->cuisines as $cuisine)
                                            <span style="margin-top: 10px; color: white;">
                                                {{ $cuisine->name }}
                                                @if (!$loop->last)
                                                    ,
                                                @endif
                                            </span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="delivery-timing reviews-sortby">
                                <div class="text">
                                    <p>
                                        <span style="display: flex; align-items: center; justify-content: center;">
                                            <i class="icon-motorcycle"></i>
                                            @if ($restaurant->delivery_fee)
                                                Delivery fee: £{{ $restaurant->delivery_fee }}
                                            @else
                                                Delivery fee: Free
                                            @endif
                                        </span>
                                        @if ($restaurant->minimum_order && $restaurant->maximum_order)
                                            <span>Min Order : £{{ $restaurant->minimum_order }} Max Order :
                                                £{{ $restaurant->maximum_order }}</span>
                                        @endif
                                    </p>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#" class="reviews-sortby-active">
                                            <span>Status :</span>
                                            @if ($restaurant->isOpenNow())
                                                <span>Open</span>
                                            @else
                                                <span class="opend-time open-day">Closed</span>
                                            @endif
                                            <i class="icon-chevron-small-down"></i>
                                        </a>
                                        <ul class="delivery-dropdown">
                                            @foreach ($restaurant->openingHours as $openingHour)
                                                <li>
                                                    <a href="#">
                                                        <span class="opend-day">{{ $openingHour->day }}</span>
                                                        <span class="opend-time">
                                                            <small>:</small>
                                                            @if ($openingHour->is_closed)
                                                                <span class="opend-time close-day">Closed</span>
                                                            @else
                                                                {{ \Carbon\Carbon::parse($openingHour->opening_time)->format('h:i A') }}
                                                                -
                                                                {{ \Carbon\Carbon::parse($openingHour->closing_time)->format('h:i A') }}
                                                            @endif
                                                        </span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Column End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>

        {{-- Breadcrumbs --}}
        <div class="breadcrumbs align-left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul>
                            <li><a href="{{ route('front.index') }}">Home</a></li>
                            <li><a href="{{ route('front.listings') }}">Listings</a></li>
                            <li class="active">Listing Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-section" style="padding-top: 10px">
        <div class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-24">
                        <div class="tabs-holder horizontal">
                            {{-- Navigation --}}
                            <ul class="sticky nav nav-tabs" style="z-index: 2;">
                                <li class="active"><a data-toggle="tab" href="#home"><i
                                            class="icon- icon-room_service"></i>Menu</a></li>
                                <li><a data-toggle="tab" href="#menu1"><i class="icon- icon-textsms"></i>Reviews
                                        ({{ $restaurant->reviewsCount() }})</a></li>

                                @if ($restaurant->accepts_reservations)
                                <li><a data-toggle="tab" href="#menu2"><i class="icon- icon-food"></i>Book a Table
                                    </a></li>
                                @endif

                                <li><a data-toggle="tab" href="#menu3"><i class="icon- icon-info3"></i>Restaurant
                                        Info</a>
                                </li>
                            </ul>

                            {{-- Navigation tab's --}}
                            <div class="tab-content">
                                {{-- Menu --}}
                                <div id="home" class="tab-pane fade in active">
                                    <div class="menu-itam-holder">
                                        {{-- Search Box --}}
                                        {{-- <div class="field-holder sticky-search">
                                            <input id="menu-srch-6272" data-id="6272"
                                                class="input-field dev-menu-search-field" type="text"
                                                placeholder="Search food item">
                                        </div> --}}

                                        {{-- Menu Items --}}
                                        <div id="menu-item-list-6272" class="menu-itam-list" style="margin-top: 20px;">
                                            @if ($restaurant->menus->isEmpty())
                                                <div class="element-title">
                                                    <h3 style="padding-bottom: 20px">
                                                        No menu items available for this restaurant.
                                                    </h3>
                                                </div>
                                            @endif

                                            @foreach ($restaurant->menus as $menu)
                                                <div class="element-title" id="menu-category-{{ $menu->id }}">
                                                    <h5 class="text-color">{{ $menu->name }}</h5>
                                                    <span>{{ $menu->description }}</span>
                                                </div>
                                                <ul>
                                                    @foreach ($menu->dishes as $dish)
                                                        <li>
                                                            <div class="image-holder">
                                                                <a href="{{ $dish->dish_image ? asset('storage/' . $dish->dish_image) : asset('front/extra-images/dish-placeholder.png') }}"
                                                                   class="single-lightbox"
                                                                   data-lg-size="1400-933"
                                                                   data-lg-id="dish-{{ $dish->id }}">
                                                                    <img src="{{ $dish->dish_image ? asset('storage/' . $dish->dish_image) : asset('front/extra-images/dish-placeholder.png') }}"
                                                                         style="aspect-ratio: 1 / 1; object-fit: cover; object-position: center;"
                                                                         alt="{{ $dish->description }}">
                                                                </a>
                                                            </div>

                                                            <div class="text-holder">
                                                                <h6>{{ $dish->name }}</h6>
                                                                <span>{{ $dish->description }}</span>
                                                            </div>
                                                            <div class="price-holder"
                                                                style="display: flex; align-items: center; gap: 10px;">
                                                                <span class="price">£{{ $dish->price }}</span>

                                                                @if (Auth::check() && Auth::user()->isUser() && $restaurant->accepts_orders)
                                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="dish_id"
                                                                            value="{{ $dish->id }}">
                                                                        <button type="submit"
                                                                            style="background-color: transparent; display: inline-block; line-height: 21px; width: 22px; height: 22px; text-align: center; border: 1px solid #c33332; border-radius: 50%;"
                                                                            class="restaurant-add-menu-btn restaurant-add-menu-btn-21">
                                                                            <i class="icon-plus4 text-color"></i>
                                                                        </button>
                                                                    </form>
                                                                @endif
                                                            </div>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                {{-- Reviews --}}
                                <div id="menu1" class="tab-pane fade">
                                    <div class="reviews-holder">
                                        <div class="add-new-review-holder" style="display: none;">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="elements-title">
                                                        <h3>Rate and Write a Review</h3>
                                                        <a href="#" class="close-post-new-reviews-btn">Close</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                                                    style="text-align: center;">Please login
                                                    in order to post review.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviwes-restaurant-holder">
                                            {{-- Over all Rating --}}
                                            <div class="over-all-rating-holder">
                                                <div class="overall-ratings-container">
                                                    <div class="overall-rating">
                                                        <h6>Customer Reviews For Food Bakery</h6>
                                                        <ul class="reviews-box"
                                                            style="border: none; padding: 0; margin: 0;">
                                                            <li>
                                                                <div style="display: flex; align-items: center; gap: 5px;">
                                                                    <em>{{ $restaurant->roundedRating() }}</em>
                                                                    <div class="">
                                                                        @for ($i = 1; $i <= 5; $i++)
                                                                            @if ($i <= floor($restaurant->averageRating()))
                                                                                <span class="icon-star-full"
                                                                                    style="color: #ffc107; font-size: 15px;"></span>
                                                                            @elseif ($i - $restaurant->averageRating() <= 0.5)
                                                                                <span class="icon-star-half-empty"
                                                                                    style="color: #ffc107; font-size: 15px;"></span>
                                                                            @else
                                                                                <span class="icon-star-outlined"
                                                                                    style="color: #ffc107; font-size: 15px;"></span>
                                                                            @endif
                                                                        @endfor
                                                                    </div>
                                                                </div>
                                                                <span class="reviews-count">(based on
                                                                    {{ $restaurant->reviewsCount() }}
                                                                    reviews)</span>
                                                            </li>
                                                            <li>
                                                                <div class="icon-holder"><i class="icon-smile"></i>
                                                                </div>
                                                                <p><span>100%</span> of diners recommend this
                                                                    restaurant
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Add Review --}}
                                            @if (Auth::check() && !Auth::user()->isRestaurant())
                                                <div style="margin-bottom: 20px;">
                                                    <form action="{{ route('reviews.store') }}" method="POST">
                                                        @csrf

                                                        <div style="margin-bottom: 20px;">
                                                            <input type="hidden" name="restaurant_id"
                                                                value="{{ $restaurant->id }}" required>

                                                            <label style="font-weight: bold;">Your Rating:</label>
                                                            <div id="star-rating"
                                                                style="font-size: 20px; color: #ddd; cursor: pointer;">
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                    <i class="fa fa-star"
                                                                        data-value="{{ $i }}"></i>
                                                                @endfor
                                                            </div>
                                                            <input type="hidden" name="rating" id="rating"
                                                                value="0">

                                                            @error('rating')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <div style="margin-bottom: 20px;">
                                                            <label style="font-weight: bold;">Your Review:</label>
                                                            <div class="field-holder field-textarea">
                                                                <textarea style="border-radius: 3px; background-color: #fbfcfd; color: #9fa1a9;" name="comment" rows="5"
                                                                    placeholder="Write your review here..." class="input-field" required>{{ old('comment') }}</textarea>
                                                            </div>

                                                            @error('comment')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}</div>
                                                            @enderror
                                                        </div>

                                                        <button type="submit" class="btn-submit"
                                                            style="padding: 8px 20px; background: #28a745; color: white; border: none; cursor: pointer;">
                                                            Submit Review
                                                        </button>
                                                    </form>

                                                    <script>
                                                        $(document).ready(function() {
                                                            $('#star-rating i').on('click', function() {
                                                                let rating = $(this).data('value');
                                                                $('#rating').val(rating);

                                                                $('#star-rating i').css('color', '#ddd');

                                                                $('#star-rating i').each(function(index) {
                                                                    if (index < rating) {
                                                                        $(this).css('color', '#ffc107');
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                            @endif

                                            {{-- Reviews List --}}
                                            <div class="review-listing">
                                                <div class="elements-title">
                                                    <h5>Customer Reviews For {{ $restaurant->name }}</h5>
                                                </div>

                                                {{-- Reviews --}}
                                                <ul class="review-restaurant" id="review-list">
                                                    @if ($restaurant->reviews->isEmpty())
                                                        <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="reviews-alert">
                                                                <div class="media-holder">
                                                                    <img src="https://foodbakery.chimpgroup.com/wp-content/plugins/wp-foodbakery/assets/frontend/images/icon-review.png"
                                                                        alt="review not found">
                                                                </div>
                                                                <div class="text-holder">
                                                                    <strong><span
                                                                            style="color: black; font-size: 15px; display: inline; text-align: left;">No
                                                                            reviews yet.</span><br /> Be the first to leave
                                                                        a review!</strong>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endif

                                                    @foreach ($restaurant->reviews as $review)
                                                        <li class="review-item col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <div class="list-holder ">
                                                                <div class="review-text">
                                                                    <div class="review-title">
                                                                        <h6>{{ $review->user->name }}</h6>
                                                                        <div class="rating-holder">
                                                                            <div style="font-size: 15px; color: #ddd;">
                                                                                @for ($i = 1; $i <= 5; $i++)
                                                                                    @if ($i <= $review->rating)
                                                                                        <i class="fa fa-star"
                                                                                            data-value="{{ $i }}"
                                                                                            style="color:#ffc107;"></i>
                                                                                    @else
                                                                                        <i class="fa fa-star"
                                                                                            data-value="{{ $i }}"></i>
                                                                                    @endif
                                                                                @endfor
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        style="color: #7d808d">{{ $review->created_at->diffForHumans() }}</span>
                                                                    <p>{{ $review->comment }}</p>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        @if ($review->response)
                                                            <li class="reply-item col-lg-12 col-md-12 col-sm-12 col-xs-12 review_reply">
                                                                <div class="list-holder ">
                                                                    <div class="review-text">
                                                                        <div class="review-title">
                                                                            <h6>
                                                                                Restaurant Owner:
                                                                                {{ $restaurant->user->name }} </h6>
                                                                            <div class="rating-holder">
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            style="color: #7d808d">{{ $review->response->created_at->diffForHumans() }}</span>
                                                                        <p>
                                                                            {{ $review->response->reply }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @elseif (Auth::check() && Auth::user()->id === $restaurant->user_id)
                                                            <li
                                                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 review_reply">
                                                                <div class="list-holder ">
                                                                    <div class="review-title">
                                                                        <h6>Your Reply</h6>
                                                                    </div>
                                                                    <form
                                                                        action="{{ route('reviews.reply', $review->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <textarea style="border-radius: 3px; background-color: #fbfcfd; color: #9fa1a9;" name="reply" rows="2"
                                                                            placeholder="Write your reply here..." required></textarea>
                                                                        <button type="submit"
                                                                            class="btn-submit">Reply</button>
                                                                    </form>
                                                                </div>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>

                                                <div id="pagination-controls" style="text-align: center; margin-top: 15px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Book a Table --}}
                                @if ($restaurant->accepts_reservations)
                                    <div id="menu2" class="tab-pane fade">
                                        <div class="booking-info-sec">
                                            <form action="{{ route('reservation.reserve') }}" method="POST">
                                                @csrf

                                                <div class="row">
                                                    <div class="booking-info">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <h5>Book This Restaurant</h5>
                                                                    <p class="booking-desc">All kinds of dining
                                                                        experiences
                                                                        are waiting to be discovered. Check out the best
                                                                        restaurants and Book Using following Form.</p>
                                                                </div>

                                                                <input type="hidden" name="restaurant_id"
                                                                    value="{{ $restaurant->id }}" hidden>

                                                                {{-- First Name --}}
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div class="field-holder has-icon">
                                                                        <i class="icon icon-user"></i>
                                                                        <input type="text" name="first_name"
                                                                            placeholder="First Name" class="input-field"
                                                                            id="first-name" required>

                                                                        @error('first_name')
                                                                            <div class="text-danger" style="font-size: 12px;">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                {{-- Last Name --}}
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div class="field-holder has-icon"><i
                                                                            class="icon icon-user"></i><input
                                                                            type="text" name="last_name"
                                                                            placeholder="Last Name" class="input-field"
                                                                            id="lastname-booking" required>

                                                                        @error('last_name')
                                                                            <div class="text-danger" style="font-size: 12px;">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                {{-- Reservation Date --}}
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div class="field-holder">
                                                                        <div class="">
                                                                            <input type="datetime-local"
                                                                                name="reservation_date"
                                                                                class="form-control booking-date" required>
                                                                            @error('reservation_date')
                                                                                <div class="text-danger"
                                                                                    style="font-size: 12px;">
                                                                                    {{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                {{-- Number of Tables --}}
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div class="field-holder has-icon"><i
                                                                            class="icon icon-table"></i>
                                                                        <select class="chosen-select"
                                                                            style="display: none;" name="nbr_table">
                                                                            <option selected="selected" value="">
                                                                                Number of Tables
                                                                            </option>
                                                                            <option value="1">1 Table</option>
                                                                            <option value="2">2 Tables</option>
                                                                            <option value="3">3 Tables</option>
                                                                            <option value="4">4 Tables</option>
                                                                            <option value="5">5 Tables</option>
                                                                        </select>
                                                                        @error('nbr_table')
                                                                            <div class="text-danger" style="font-size: 12px;">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                {{-- Your Instructions --}}
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="field-holder has-icon field-textarea">
                                                                        <i class="icon icon-mode_edit"></i>
                                                                        <textarea placeholder="Your Instructions" class="input-field"></textarea>
                                                                    </div>
                                                                </div>

                                                                {{-- Submit Btn --}}
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="field-holder">
                                                                        <div class="submit-btn">
                                                                            <button type="submit"
                                                                                class="field-btn bgcolor booking-submit-btn input-button-loader">Submit</button>
                                                                            <span class="booking-loader"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endif

                                {{-- Restaurant Info --}}
                                <div id="menu3" class="tab-pane fade">
                                    <div class="contact-info-detail">
                                        <h5>{{ $restaurant->name }}</h5>

                                        <p class="restaurant-desc">{{ $restaurant->description }}</p>

                                        <div class="map-sec-holder">
                                            <div class="cs-map-section" style="border-radius: 10px;">
                                                <div id="restaurantMap"
                                                    style="width: 100%; height: 400px; border-radius: 10px; z-index: 10;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="contact-info">
                                                    <h5>Contact details</h5>
                                                    <p>{{ $restaurant->address }}, {{ $restaurant->wilaya }}</p>
                                                    <p>
                                                        <span><strong>Manager email:</strong>
                                                            {{ $restaurant->user->email }}</span>
                                                    </p>
                                                    <ul>
                                                        <li class="cell"><i class="icon-phone"></i><a
                                                                href="#">{{ $restaurant->phone }}</a></li>
                                                        <li class="pizzaeast"><i class="icon-globe2"></i><a
                                                                href="#">http://www.chimpgroup.com</a></li>
                                                        <li class="email"><i class="icon-mail5"></i><a
                                                                class="text-color"
                                                                href="#">{{ $restaurant->email }}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="widget widget-timing">
                                                    <h5>Opening Hours</h5>

                                                    <ul>
                                                        @foreach ($restaurant->openingHours as $openingHour)
                                                            <li>
                                                                <span>{{ $openingHour->day }}</span>
                                                                @if ($openingHour->is_closed)
                                                                    Closed
                                                                @else
                                                                    {{ \Carbon\Carbon::parse($openingHour->opening_time)->format('h:i A') }}
                                                                    -
                                                                    {{ \Carbon\Carbon::parse($openingHour->closing_time)->format('h:i A') }}
                                                                @endif
                                                                </span>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Photo Gallery --}}
                                        <div style="width: 100%; margin-top: 10px;">
                                            @if ($restaurant->photoGallery->isNotEmpty())
                                                <div class="restaurant-gallery" style="margin-top: 20px;">
                                                    <div id="lightgallery"
                                                        style="display: flex; flex-wrap: wrap; gap: 10px;">
                                                        @foreach ($restaurant->photoGallery->take(4) as $index => $photo)
                                                            <a href="{{ asset('storage/' . $photo->image_url) }}"
                                                                data-lg-size="1600-1067"
                                                                style="flex: 1 1 calc(25% - 10px); max-width: calc(25% - 10px); position: relative; border-radius: 8px; overflow: hidden; display: block;">

                                                                <img src="{{ asset('storage/' . $photo->image_url) }}"
                                                                    style="width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block; border-radius: 8px;">

                                                                @if ($index === 3 && $restaurant->photoGallery->count() > 4)
                                                                    <div
                                                                        style="
                                                                            position: absolute;
                                                                            top: 0;
                                                                            left: 0;
                                                                            width: 100%;
                                                                            height: 100%;
                                                                            background: rgba(0, 0, 0, 0.6);
                                                                            color: white;
                                                                            display: flex;
                                                                            align-items: center;
                                                                            justify-content: center;
                                                                            font-size: 1.5rem;
                                                                            font-weight: bold;
                                                                        ">
                                                                        +{{ $restaurant->photoGallery->count() - 4 }}
                                                                    </div>
                                                                @endif
                                                            </a>
                                                        @endforeach

                                                        @foreach ($restaurant->photoGallery->slice(4) as $photo)
                                                            <a href="{{ asset('storage/' . $photo->image_url) }}"
                                                                data-lg-size="1600-1067" style="display: none;">
                                                                <img src="{{ asset('storage/' . $photo->image_url) }}"
                                                                    style="display: none;">
                                                            </a>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Basket Section --}}
                    <div class="sticky-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="user-order-holder">
                            <div class="user-order">
                                <h6><i class="icon-shopping-basket"></i>Your Basket</h6>
                                @if ($restaurant->accepts_orders == 0)
                                    <span class="error-message pre-order-msg">This restaurant does not accept pre-orders.</span>
                                @endif
                                <span class="discount-info" style="display: block;">If you have a discount code,<br>
                                    you will
                                    be able to input it<br> at the payments stage.</span>

                                <div id="dev-menu-orders-list">
                                    <ul class="categories-order">
                                        @if (empty($cart))
                                            <li class="">
                                                <span>There are no items in your basket.</span>
                                            </li>
                                        @else
                                            @foreach ($cart as $restaurantId => $dishes)
                                                @foreach ($dishes as $dish)
                                                    <li id="dish-{{ $dish['dish_id'] }}">
                                                        <div
                                                            style="display: flex; align-items: center; justify-content: space-between;">
                                                            <form action="{{ route('cart.removeDish') }}" method="POST"
                                                                class="dev-menu-item-form">
                                                                @csrf
                                                                <input type="hidden" name="restaurant_id"
                                                                    value="{{ $restaurantId }}">
                                                                <input type="hidden" name="dish_id"
                                                                    value="{{ $dish['dish_id'] }}">

                                                                <button type="submit"
                                                                    class="btn-cross dev-remove-menu-item"
                                                                    style="background: transparent; border: none;"><i
                                                                        class="icon-cross3"></i></button>
                                                            </form>
                                                            <a>{{ $dish['name'] }}</a>
                                                            <span class="category-price">x{{ $dish['quantity'] }} -
                                                                £{{ $dish['price'] }}</span>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            @endforeach
                                        @endif
                                    </ul>

                                    <div class="price-area dev-menu-price-con">
                                        {{-- <ul>
                                            <li>Subtotal <span class="price">£<em
                                                        class="dev-menu-subtotal">20.00</em></span></li>
                                        </ul> --}}
                                        <p class="total-price">Total <span
                                                class="price dev-menu-grtotal">£{{ $totalPrice }}</span></p>
                                    </div>
                                </div>

                                <a href="{{ route('order.checkout') }}" class="menu-order-confirm">Confirm Order</a>
                                <span class="menu-loader"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            document.querySelectorAll('.single-lightbox').forEach(function (el) {
            lightGallery(el, {
                dynamic: false,
                download: false,
                selector: 'this',
                controls: false,
                loop: false,
                closable: true,
                thumbnail: false,
                plugins: [lgZoom],
            });
        });

            lightGallery(document.getElementById('lightgallery'), {
                plugins: [lgZoom, lgThumbnail],
                thumbnail: true,
                zoom: true,
                download: false,
                fullScreen: true,
                selector: 'a'
            });
        });
    </script>

    <script>
        const lat = {{ $restaurant->latitude ?? 0 }};
        const lng = {{ $restaurant->longitude ?? 0 }};
        let restaurantMap = L.map('restaurantMap', {
            center: [lat, lng],
            zoom: 17,
            zoomControl: true,
            dragging: true,
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(restaurantMap);

        const marker = L.marker([lat, lng]).addTo(restaurantMap);

        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            const target = $(e.target).attr("href");
            if (target === '#menu3') {
                setTimeout(() => {
                    restaurantMap.invalidateSize();
                    restaurantMap.setView([lat, lng]);
                }, 300);
            }
        });
    </script>

    <script>
        $(document).ready(function () {
            const pageSize = 5;
            const reviewElements = [];

            function refreshReviewGroups() {
                reviewElements.length = 0;
                let $allItems = $("#review-list > li");

                for (let i = 0; i < $allItems.length; i++) {
                    let $item = $($allItems[i]);

                    if ($item.hasClass('review-item')) {
                        let group = [$item];
                        let $next = $item.next();

                        if ($next.length && $next.hasClass('reply-item')) {
                            group.push($next);
                        }

                        reviewElements.push(group);
                    }
                }
            }

            let currentPage = 1;

            function renderReviews() {
                $("#review-list").empty();

                let start = (currentPage - 1) * pageSize;
                let paginated = reviewElements.slice(start, start + pageSize);

                paginated.forEach(group => {
                    group.forEach($el => $("#review-list").append($el));
                });

                renderPagination(reviewElements.length);
            }

            function renderPagination(total) {
                const totalPages = Math.ceil(total / pageSize);
                let html = '<ul class="pagination">';

                for (let i = 1; i <= totalPages; i++) {
                    let activeClass = i === currentPage ? 'active' : '';
                    html += `
                        <li class="page-item ${activeClass}">
                            <a href="javascript:void(0);" class="page-link page-btn" data-page="${i}">${i}</a>
                        </li>`;
                }

                html += '</ul>';
                $("#pagination-controls").html(html);
            }

            refreshReviewGroups();
            renderReviews();

            $("#pagination-controls").on("click", ".page-btn", function () {
                currentPage = parseInt($(this).data("page"));
                renderReviews();
            });
        });
    </script>


@endsection
