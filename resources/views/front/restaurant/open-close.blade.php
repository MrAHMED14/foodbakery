@extends('front.restaurant.master')

@section('title')
    Restaurant || Account Setting
@endsection

@section('content')
<!-- Main Section Start -->
<div class="main-section">
    <div class="page-section restaurant-detail-image-section" style=" background: url({{asset('front/extra-images/cover-photo01.jpg')}}) no-repeat scroll 0 0 / cover;">
        <!-- Container Start -->
        <div class="container">
            <!-- Row Start -->
            <div class="row">
                <!-- Column Start -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="company-info-detail">
                        <div class="company-info">
                            <div class="img-holder">
                                <figure>
                                    <img src="{{asset('front/extra-images/listing-logo18.png')}}" alt="">
                                </figure>
                            </div>

                            <div class="text-holder">
                                <span class="restaurant-title">Restaurant Demo</span>
                                <div class="text">
                                    <i class="icon-local_pizza"></i>
                                    <p>Apple Juice</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <div class="page-section account-header buyer-logged-in">
        <div class="container">
            <div class="row">
                <!-- ========== menu Start ========== -->
                @include('front.restaurant.body.menu')
                <!-- menu End -->
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="user-dashboard loader-holder">
                        <div class="user-holder">
                            <form action="restaurant-open-close.html">
                                <ul class="restaurant-settings-nav progressbar-nav">
                                    <li class="cond-restaurant-settings active">
                                        <a href="{{route('restaurant.restaurant')}}">Restaurant Settings</a>
                                    </li>
                                    <li class="cond-restaurant-settings active">
                                        <a href="{{route('restaurant.location')}}">Location/Map</a>
                                    </li>
                                    <li class="cond-restaurant-settings active processing">
                                        <a href="{{route('restaurant.open_close')}}">Restaurant Open/Close</a>
                                    </li>
                                </ul>

                                <div class="form-fields-set">
                                    <ul>
                                        <li>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="element-title">
                                                        <h4>Opening Hours</h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="field-holder">
                                                        <div class="time-list">
                                                            <ul>
                                                                <li>
                                                                    <div class="open-close-time opening-time">
                                                                        <div class="day-sec">
                                                                            <span>Monday</span>
                                                                        </div>
                                                                        <div class="time-sec">
                                                                            <select class="chosen-select">
                                                                                <option value="12:15 am">12:15 am</option>
                                                                                <option value="12:30 am">12:30 am</option>
                                                                                <option value="01:00 am">01:00 am</option>
                                                                                <option value="01:15 am">01:15 am</option>
                                                                                <option value="01:30 am">01:30 am</option>
                                                                                <option value="02:00 am">02:00 am</option>
                                                                                <option value="02:15 am">02:15 am</option>
                                                                                <option value="02:30 am">02:30 am</option>
                                                                                <option value="03:00 am">03:00 am</option>
                                                                                <option value="03:15 am">03:15 am</option>
                                                                            </select>
                                                                            <span class="option-label">to</span>
                                                                            <select class="chosen-select">
                                                                                <option value="12:15 am">12:15 am</option>
                                                                                <option value="12:30 am">12:30 am</option>
                                                                                <option value="01:00 am">01:00 am</option>
                                                                                <option value="01:15 am">01:15 am</option>
                                                                                <option value="01:30 am">01:30 am</option>
                                                                                <option value="02:00 am">02:00 am</option>
                                                                                <option value="02:15 am">02:15 am</option>
                                                                                <option value="02:30 am">02:30 am</option>
                                                                                <option value="03:00 am">03:00 am</option>
                                                                                <option value="03:15 am">03:15 am</option>
                                                                            </select>
                                                                            <a href="#"><i class="icon-close2"></i></a>
                                                                        </div>
                                                                        <div class="close-time">
                                                                            <a href="#">Closed <span>(Click to add opening Hours)</span></a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="open-close-time opening-time">
                                                                        <div class="day-sec">
                                                                            <span>Tuesday</span>
                                                                        </div>
                                                                        <div class="time-sec">
                                                                            <select class="chosen-select">
                                                                                <option value="12:15 am">12:15 am</option>
                                                                                <option value="12:30 am">12:30 am</option>
                                                                                <option value="01:00 am">01:00 am</option>
                                                                                <option value="01:15 am">01:15 am</option>
                                                                                <option value="01:30 am">01:30 am</option>
                                                                                <option value="02:00 am">02:00 am</option>
                                                                                <option value="02:15 am">02:15 am</option>
                                                                                <option value="02:30 am">02:30 am</option>
                                                                                <option value="03:00 am">03:00 am</option>
                                                                                <option value="03:15 am">03:15 am</option>
                                                                            </select>
                                                                            <span class="option-label">to</span>
                                                                            <select class="chosen-select">
                                                                                <option value="12:15 am">12:15 am</option>
                                                                                <option value="12:30 am">12:30 am</option>
                                                                                <option value="01:00 am">01:00 am</option>
                                                                                <option value="01:15 am">01:15 am</option>
                                                                                <option value="01:30 am">01:30 am</option>
                                                                                <option value="02:00 am">02:00 am</option>
                                                                                <option value="02:15 am">02:15 am</option>
                                                                                <option value="02:30 am">02:30 am</option>
                                                                                <option value="03:00 am">03:00 am</option>
                                                                                <option value="03:15 am">03:15 am</option>
                                                                            </select>
                                                                            <a href="#"><i class="icon-close2"></i></a>
                                                                        </div>
                                                                        <div class="close-time">
                                                                            <a href="#">Closed <span>(Click to add opening Hours)</span></a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="open-close-time opening-time">
                                                                        <div class="day-sec">
                                                                            <span>Wednesday</span>
                                                                        </div>
                                                                        <div class="time-sec">
                                                                            <select class="chosen-select">
                                                                                <option value="12:15 am">12:15 am</option>
                                                                                <option value="12:30 am">12:30 am</option>
                                                                                <option value="01:00 am">01:00 am</option>
                                                                                <option value="01:15 am">01:15 am</option>
                                                                                <option value="01:30 am">01:30 am</option>
                                                                                <option value="02:00 am">02:00 am</option>
                                                                                <option value="02:15 am">02:15 am</option>
                                                                                <option value="02:30 am">02:30 am</option>
                                                                                <option value="03:00 am">03:00 am</option>
                                                                                <option value="03:15 am">03:15 am</option>
                                                                            </select>
                                                                            <span class="option-label">to</span>
                                                                            <select class="chosen-select">
                                                                                <option value="12:15 am">12:15 am</option>
                                                                                <option value="12:30 am">12:30 am</option>
                                                                                <option value="01:00 am">01:00 am</option>
                                                                                <option value="01:15 am">01:15 am</option>
                                                                                <option value="01:30 am">01:30 am</option>
                                                                                <option value="02:00 am">02:00 am</option>
                                                                                <option value="02:15 am">02:15 am</option>
                                                                                <option value="02:30 am">02:30 am</option>
                                                                                <option value="03:00 am">03:00 am</option>
                                                                                <option value="03:15 am">03:15 am</option>
                                                                            </select>
                                                                            <a href="#"><i class="icon-close2"></i></a>
                                                                        </div>
                                                                        <div class="close-time">
                                                                            <a href="#">Closed <span>(Click to add opening Hours)</span></a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="open-close-time opening-time">
                                                                        <div class="day-sec">
                                                                            <span>Thursday</span>
                                                                        </div>
                                                                        <div class="time-sec">
                                                                            <select class="chosen-select">
                                                                                <option value="12:15 am">12:15 am</option>
                                                                                <option value="12:30 am">12:30 am</option>
                                                                                <option value="01:00 am">01:00 am</option>
                                                                                <option value="01:15 am">01:15 am</option>
                                                                                <option value="01:30 am">01:30 am</option>
                                                                                <option value="02:00 am">02:00 am</option>
                                                                                <option value="02:15 am">02:15 am</option>
                                                                                <option value="02:30 am">02:30 am</option>
                                                                                <option value="03:00 am">03:00 am</option>
                                                                                <option value="03:15 am">03:15 am</option>
                                                                            </select>
                                                                            <span class="option-label">to</span>
                                                                            <select class="chosen-select">
                                                                                <option value="12:15 am">12:15 am</option>
                                                                                <option value="12:30 am">12:30 am</option>
                                                                                <option value="01:00 am">01:00 am</option>
                                                                                <option value="01:15 am">01:15 am</option>
                                                                                <option value="01:30 am">01:30 am</option>
                                                                                <option value="02:00 am">02:00 am</option>
                                                                                <option value="02:15 am">02:15 am</option>
                                                                                <option value="02:30 am">02:30 am</option>
                                                                                <option value="03:00 am">03:00 am</option>
                                                                                <option value="03:15 am">03:15 am</option>
                                                                            </select>
                                                                            <a href="#"><i class="icon-close2"></i></a>
                                                                        </div>
                                                                        <div class="close-time">
                                                                            <a href="#">Closed <span>(Click to add opening Hours)</span></a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="open-close-time opening-time">
                                                                        <div class="day-sec">
                                                                            <span>Friday</span>
                                                                        </div>
                                                                        <div class="time-sec">
                                                                            <select class="chosen-select">
                                                                                <option value="12:15 am">12:15 am</option>
                                                                                <option value="12:30 am">12:30 am</option>
                                                                                <option value="01:00 am">01:00 am</option>
                                                                                <option value="01:15 am">01:15 am</option>
                                                                                <option value="01:30 am">01:30 am</option>
                                                                                <option value="02:00 am">02:00 am</option>
                                                                                <option value="02:15 am">02:15 am</option>
                                                                                <option value="02:30 am">02:30 am</option>
                                                                                <option value="03:00 am">03:00 am</option>
                                                                                <option value="03:15 am">03:15 am</option>
                                                                            </select>
                                                                            <span class="option-label">to</span>
                                                                            <select class="chosen-select">
                                                                                <option value="12:15 am">12:15 am</option>
                                                                                <option value="12:30 am">12:30 am</option>
                                                                                <option value="01:00 am">01:00 am</option>
                                                                                <option value="01:15 am">01:15 am</option>
                                                                                <option value="01:30 am">01:30 am</option>
                                                                                <option value="02:00 am">02:00 am</option>
                                                                                <option value="02:15 am">02:15 am</option>
                                                                                <option value="02:30 am">02:30 am</option>
                                                                                <option value="03:00 am">03:00 am</option>
                                                                                <option value="03:15 am">03:15 am</option>
                                                                            </select>
                                                                            <a href="#"><i class="icon-close2"></i></a>
                                                                        </div>
                                                                        <div class="close-time">
                                                                            <a href="#">Closed <span>(Click to add opening Hours)</span></a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="open-close-time opening-time">
                                                                        <div class="day-sec">
                                                                            <span>Saturday</span>
                                                                        </div>
                                                                        <div class="time-sec">
                                                                            <select class="chosen-select">
                                                                                <option value="12:15 am">12:15 am</option>
                                                                                <option value="12:30 am">12:30 am</option>
                                                                                <option value="01:00 am">01:00 am</option>
                                                                                <option value="01:15 am">01:15 am</option>
                                                                                <option value="01:30 am">01:30 am</option>
                                                                                <option value="02:00 am">02:00 am</option>
                                                                                <option value="02:15 am">02:15 am</option>
                                                                                <option value="02:30 am">02:30 am</option>
                                                                                <option value="03:00 am">03:00 am</option>
                                                                                <option value="03:15 am">03:15 am</option>
                                                                            </select>
                                                                            <span class="option-label">to</span>
                                                                            <select class="chosen-select">
                                                                                <option value="12:15 am">12:15 am</option>
                                                                                <option value="12:30 am">12:30 am</option>
                                                                                <option value="01:00 am">01:00 am</option>
                                                                                <option value="01:15 am">01:15 am</option>
                                                                                <option value="01:30 am">01:30 am</option>
                                                                                <option value="02:00 am">02:00 am</option>
                                                                                <option value="02:15 am">02:15 am</option>
                                                                                <option value="02:30 am">02:30 am</option>
                                                                                <option value="03:00 am">03:00 am</option>
                                                                                <option value="03:15 am">03:15 am</option>
                                                                            </select>
                                                                            <a href="#"><i class="icon-close2"></i></a>
                                                                        </div>
                                                                        <div class="close-time">
                                                                            <a href="#">Closed <span>(Click to add opening Hours)</span></a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="open-close-time">
                                                                        <div class="day-sec">
                                                                            <span>Sunday</span>
                                                                        </div>
                                                                        <div class="time-sec">
                                                                            <select class="chosen-select">
                                                                                <option value="12:15 am">12:15 am</option>
                                                                                <option value="12:30 am">12:30 am</option>
                                                                                <option value="01:00 am">01:00 am</option>
                                                                                <option value="01:15 am">01:15 am</option>
                                                                                <option value="01:30 am">01:30 am</option>
                                                                                <option value="02:00 am">02:00 am</option>
                                                                                <option value="02:15 am">02:15 am</option>
                                                                                <option value="02:30 am">02:30 am</option>
                                                                                <option value="03:00 am">03:00 am</option>
                                                                                <option value="03:15 am">03:15 am</option>
                                                                            </select>
                                                                            <span class="option-label">to</span>
                                                                            <select class="chosen-select">
                                                                                <option value="12:15 am">12:15 am</option>
                                                                                <option value="12:30 am">12:30 am</option>
                                                                                <option value="01:00 am">01:00 am</option>
                                                                                <option value="01:15 am">01:15 am</option>
                                                                                <option value="01:30 am">01:30 am</option>
                                                                                <option value="02:00 am">02:00 am</option>
                                                                                <option value="02:15 am">02:15 am</option>
                                                                                <option value="02:30 am">02:30 am</option>
                                                                                <option value="03:00 am">03:00 am</option>
                                                                                <option value="03:15 am">03:15 am</option>
                                                                            </select>
                                                                            <a href="#"><i class="icon-close2"></i></a>
                                                                        </div>
                                                                        <div class="close-time">
                                                                            <a href="#">Closed <span>(Click to add opening Hours)</span></a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div>
                                        <div class="field-holder">
                                            <div class="payment-holder input-button-loader">
                                                <input class="update-restaurant" type="submit" value="Update Restaurant">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Section End -->
@endsection
