@extends('front.master')

@section('title')
    Restaurant || How it Work
@endsection

@section('content')

<div class="sub-header align-center">
    <div class="subheader-holder" style=" background:url({{asset('front/extra-images/subheader-img2-1.jpg')}})  no-repeat ; background-size: cover; padding-top: 60px; padding-bottom: 30px; margin-top: 0px; margin-bottom: 0px; min-height: 186px !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="text-holder">
                        <div class="page-title ">
                            <h1 style="color:#ffffff !important;">How it works</h1>
                        </div>
                        <p style="color:#ffffff !important;">A great restaurant website</p>
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
                        <li><a href="{{route('front.index')}}">Home</a></li>
                        <li class="active">How it works</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Section Start -->
<div class="main-section">
    <!-- How-it-Works Page Start -->
    <div class="page-section  cs-page-sec-184984  nopadding cs-nomargin" style="padding-top: 0px; padding-bottom: 30px;">
        <div class="container">
            <div class="row">
                <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="image-frame fancy align-left">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="img-holder">
                                            <figure>
                                                <img alt="" src="{{asset('front/extra-images/img-frame1.jpg')}}">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                        <div class="text-holder">
                                            <h2>The system is set up to better satisfy the needs of waiting
                                                customers
                                                and help restaurants more efficiently manage wait lists and
                                                reservations.</h2>
                                            Scelerisque vestibulum tristique himenaeos in metus ipsum non nunc
                                            at magna
                                            turpis ipsum, urna ligula non lectus eu curae per leo duis ultricies
                                            scelerisque facilisis diam mattis netus aptent tincidunt ac nam
                                            aenean
                                            cubilia diam faucibus aliquam, velit tristique.
                                            <br>
                                            <br>
                                            mentum commodo magna cubilia nulla lectus tortor phasellus fusce
                                            etiam
                                            porttitor, cubilia nulla luctus nisl nec condimentum primis,
                                            curabitur
                                            condimentum sit lobortis posuere.
                                            <br>
                                            <br>
                                            <div class="default-btn">
                                                <a class="bgcolor" style="background-color:#c33332 !important;" href="#">Read More</a>
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
    </div>
    <div class="page-section nopadding cs-nomargin" style="padding-top: 60px; padding-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <img style="width: 100%;" src="{{asset('front/extra-images/video-img.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-section  nopadding cs-nomargin" style="padding-top: 60px; padding-bottom: 30px; background: #ffffff;">
        <div class="container">
            <div class="row">
                <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="cs-section-title" style="text-align:center!important;">
                                <h2 style="color:#2f313a !important;">Our Services</h2>
                                <span style="color:#a5a5a5;">Our ServicesOur ServicesOur ServicesOur ServicesOur
                                    ServicesOur Services</span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="cs-icon-boxes-listtop-center">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="icon-boxes fancy top-center">
                                            <div class="img-holder">
                                                <figure>
                                                    <a href="#">
                                                        <i class="cs-color icon-location_city icon-md" style="color:#a4a6ad !important;line-height:50px;"></i>
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <h3 style="color:#2f313a !important;">
                                                    <a href="#" style="color:#2f313a !important;">Grocery
                                                        Markets</a>
                                                </h3>
                                                <span style="color: #a1a3aa;">Deli Counter, Specialty Items,
                                                    Advanced
                                                    Orders</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="icon-boxes fancy top-center">
                                            <div class="img-holder">
                                                <figure>
                                                    <a href="#">
                                                        <i class="cs-color icon-spoon-knife icon-md" style="color:#a4a6ad !important;line-height:50px;"></i>
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <h3 style="color:#2f313a !important;">
                                                    <a href="#" style="color:#2f313a !important;">Restaurants</a>
                                                </h3>
                                                <span style="color: #a1a3aa;">Cafes, Delis, Juice Bars, Coffee
                                                    and
                                                    Bagels</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="icon-boxes fancy top-center">
                                            <div class="img-holder">
                                                <figure>
                                                    <a href="#">
                                                        <i class="cs-color icon-glass icon-md" style="color:#a4a6ad !important;line-height:50px;"></i>
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <h3 style="color:#2f313a !important;">
                                                    <a href="#" style="color:#2f313a !important;">Wine &
                                                        Getränkekarte</a>
                                                </h3>
                                                <span style="color: #a1a3aa;">Weinkarte, auf die wir ein
                                                    bisschen stolz
                                                    sind</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="icon-boxes fancy top-center">
                                            <div class="img-holder">
                                                <figure>
                                                    <a href="#">
                                                        <i class="cs-color icon-kitchen icon-md" style="color:#a4a6ad !important;line-height:50px;"></i>
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <h3 style="color:#2f313a !important;">
                                                    <a href="#" style="color:#2f313a !important;">Good
                                                        Kitchen</a>
                                                </h3>
                                                <span style="color: #a1a3aa;">The system is set up to better
                                                    satisfy the
                                                    needs</span>
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
    </div>
    <div class="page-section nopadding cs-nomargin" style="padding-top: 80px; padding-bottom: 80px;">
        <div class="container">
            <div class="row">
                <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="section-title align-left">
                                <h3>Top Restaurants</h3>
                                <p>Explore restaurants, bars, and cafés by locality</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="company-holder fancy">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="company-logo">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{asset('front/extra-images/fb-restaurant-01.jpg')}}" class="img-grid wp-post-image" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <div class="post-title">
                                                    <h6><a href="#">Jet’s Kitchen</a></h6>
                                                </div>
                                                <div class="company-rating">
                                                    Reviews Coming Soon
                                                    <div class="list-option">
                                                        <a href="#" class="shortlist-btn" data-toggle="modal" data-target="#sign-in">
                                                            <i class="icon-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="company-logo">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{asset('front/extra-images/listing-logo18.png')}}" class="img-grid wp-post-image" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <div class="post-title">
                                                    <h6><a href="#">Restaurant Demo</a></h6>
                                                </div>
                                                <div class="company-rating">
                                                    <div class="rating-star">
                                                        <span class="rating-box" style="width: 100%;"></span>
                                                    </div>
                                                    <span class="reviews">(1)</span>
                                                    <div class="list-option">
                                                        <a href="#" class="shortlist-btn" data-toggle="modal" data-target="#sign-in">
                                                            <i class="icon-heart-o"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="company-logo">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{asset('front/extra-images/fb-restaurant-04.jpg')}}" class="img-grid wp-post-image" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <div class="post-title">
                                                    <h6><a href="#">Golden Chick Fries</a></h6>
                                                </div>
                                                <div class="company-rating">
                                                    Reviews Coming Soon
                                                    <div class="list-option">
                                                        <a href="#" class="shortlist-btn" data-toggle="modal" data-target="#sign-in">
                                                            <i class="icon-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="company-logo">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{asset('front/extra-images/fb-restaurant-06.jpg')}}" class="img-grid wp-post-image" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <div class="post-title">
                                                    <h6><a href="#">Dragon Express</a></h6>
                                                </div>
                                                <div class="company-rating">
                                                    Reviews Coming Soon
                                                    <div class="list-option">
                                                        <a href="#" class="shortlist-btn" data-toggle="modal" data-target="#sign-in">
                                                            <i class="icon-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="company-logo">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{asset('front/extra-images/listing-logo03.png')}}" class="img-grid wp-post-image" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <div class="post-title">
                                                    <h6><a href="#">Nature Healthy Food</a></h6>
                                                </div>
                                                <div class="company-rating">
                                                    <div class="rating-star">
                                                        <span class="rating-box" style="width: 100%;"></span>
                                                    </div>
                                                    <span class="reviews">(1)</span>
                                                    <div class="list-option">
                                                        <a href="#" class="shortlist-btn" data-toggle="modal" data-target="#sign-in">
                                                            <i class="icon-heart-o"></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="company-logo">
                                                <figure>
                                                    <a href="#">
                                                        <img src="{{asset('front/extra-images/listing-logo09.png')}}" class="img-grid wp-post-image" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <div class="post-title">
                                                    <h6><a href="#">Menu & Drinks</a></h6>
                                                </div>
                                                <div class="company-rating">
                                                    Reviews Coming Soon
                                                    <div class="list-option">
                                                        <a href="#" class="shortlist-btn" data-toggle="modal" data-target="#sign-in">
                                                            <i class="icon-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="fancy-button-prev"> <i class="icon-arrow_back"></i></div>
                                <div class="fancy-button-next"><i class="icon-arrow_forward"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- How-it-Works Page End -->
</div>
<!-- Main Section End -->
@endsection
