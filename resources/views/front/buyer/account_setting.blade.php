@extends('front.buyer.master')

@section('title')
    Restaurant || Account Setting
@endsection

@section('content')
<!-- Main Section Start -->
<div class="main-section">
    <div class="page-section restaurant-detail-image-section" style=" background: url({{asset('front/extra-images/banner-img-2.jpg')}}) no-repeat scroll 0 0 / cover;">
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
                                    <img src="{{asset('front/extra-images/team-medium-img1.jpg')}}" alt="">
                                </figure>
                            </div>
                            <div class="text-holder">
                                <span class="restaurant-title">Buyer Demo</span>
                                <ul class="user-info-contact">
                                    <li class="cell"><i class="icon-phone"></i><a href="tel:0123456789">012 3456 789</a></li>
                                    <li class="email"><i class="icon-mail5"></i><a href="mailto:dum4@chimpgroup.com">dum4@chimpgroup.com</a></li>
                                </ul>
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
                @include('front.buyer.body.menu')
                <!-- menu End -->
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="user-dashboard loader-holder">
                        <div class="user-holder">
                            <div class="user-profile">
                                <div class="element-title has-border">
                                    <h5>Account Settings</h5>
                                </div>
                                <div class="row">
                                    <form id="publisher_profile">
                                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="field-holder">
                                                        <label>Full Name*</label>
                                                        <input type="text" class="foodbakery-dev-req-field" value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="field-holder">
                                                        <label>Email Address *</label>
                                                        <input type="text" class="foodbakery-dev-req-field" value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="field-holder">
                                                        <label>Phone Number *</label>
                                                        <input type="text" class="foodbakery-dev-req-field" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <div class="user-profile-images">
                                                <div class="current-img">
                                                    <div class="row mt">
                                                        <div id="cropContainerModal" data-def-img="{{asset('front/extra-images/team-medium-img1.jpg')}}" data-img-type="default">
                                                            <figure>
                                                                <a><img src="{{asset('front/extra-images/team-medium-img1.jpg')}}" alt=""></a>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <span>Upload a profile picture or choose one of the following</span>
                                                </div>
                                                <div class="upload-file">
                                                    <input id="file-1" type="file" class="hide">
                                                    <button type="button"><span>Upload Picture</span></button>
                                                </div>
                                                <ul class="uploaded-img">
                                                    <li>
                                                        <figure>
                                                            <img data-attachment_id="2570" src="{{asset('front/extra-images/icon1.png')}}" alt="">
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <img data-attachment_id="2571" src="{{asset('front/extra-images/icon2.png')}}" alt="">
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <img data-attachment_id="2572" src="{{asset('front/extra-images/icon3.png')}}" alt="">
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <img data-attachment_id="2573" src="{{asset('front/extra-images/icon4.png')}}" alt="">
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <img data-attachment_id="2574" src="{{asset('front/extra-images/icon5.png')}}" alt="">
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <img data-attachment_id="2575" src="{{asset('front/extra-images/icon6.png')}}" alt="">
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <img data-attachment_id="2576" src="{{asset('front/extra-images/icon7.png')}}" alt="">
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <img data-attachment_id="2577" src="{{asset('front/extra-images/icon8.png')}}" alt="">
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <img data-attachment_id="2578" src="{{asset('front/extra-images/icon9.png')}}" alt="">
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <img data-attachment_id="2579" src="{{asset('front/extra-images/icon10.png')}}" alt="">
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <img data-attachment_id="2580" src="{{asset('front/extra-images/icon11.png')}}" alt="">
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <img data-attachment_id="2581" src="{{asset('front/extra-images/icon12.png')}}" alt="">
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <img data-attachment_id="2582" src="{{asset('front/extra-images/icon13.png')}}" alt="">
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <img data-attachment_id="2583" src="{{asset('front/extra-images/icon14.png')}}" alt="">
                                                        </figure>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="opt-conts">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Country *</label>
                                                            <div class="select-holder">
                                                                <select data-placeholder="Select Country" class="form-control chosen-select form-select-country dir-map-search foodbakery-dev-req-field" id="loc_country_publisher" name="foodbakery_post_loc_country_publisher">
                                                                    <option value="">Select Country</option>
                                                                    <option value="barry" data-name="">Barry</option>
                                                                    <option value="cardiff" data-name="">Cardiff</option>
                                                                    <option value="cowbridge" data-name="">Cowbridge</option>
                                                                    <option value="england" data-name="">England</option>
                                                                    <option value="llantwit-major" data-name="">Llantwit Major</option>
                                                                    <option value="northern-ireland" data-name="">Northern Ireland</option>
                                                                    <option value="penarth" data-name="">Penarth</option>
                                                                    <option value="scotland" data-name="">Scotland</option>
                                                                    <option value="wales" data-name="">Wales</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>State</label>
                                                            <div class="select-holder">
                                                                <select data-placeholder="Select State" class="chosen-select">
                                                                    <option value="">Select State</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>City</label>
                                                            <div class="select-holder">
                                                                <select data-placeholder="Select City" class="chosen-select">
                                                                    <option value="">Select City</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Latitude</label>
                                                            <input type="text" placeholder="Latitude" class="form-control gllpLatitude" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Longitude</label>
                                                            <input type="text" placeholder="Longitude" class="form-control gllpLongitude" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Find On Map</label>
                                                            <input type="text" placeholder="Type Your Address" class="foodbakery-search-location">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="field-holder"></div>
                                                        <div class="field-holder search-location-map input-button-loader">
                                                            <input type="button" class="acc-submit cs-section-update cs-color gllpSearchButton" value="Search Location">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="cs-map-section">
                                                            <img style="width:100%;height: 100%;" src="{{asset('front/extra-images/map-location.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="element-title has-border">
                                                <h5>Change Password</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-holder">
                                                <label> Current Password*</label>
                                                <input type="password">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-holder">
                                                <label> New Password*</label>
                                                <input type="password">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-holder">
                                                <label> Confirm New Password* </label>
                                                <input type="password">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-holder">
                                                <button name="button" type="button" class="btn-submit">Save</button>
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
    </div>
</div>
<!-- Main Section End -->
@endsection
