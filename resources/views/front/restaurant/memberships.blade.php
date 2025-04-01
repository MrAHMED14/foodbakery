@extends('front.restaurant.master')

@section('title')
    Restaurant || Memberships
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
                            <form>
                                <ul class="membership-info-main">
                                    <li id="membership_current">
                                        <div class="element-title">
                                            <h4>Current Membership</h4>
                                            <div class="buy-new-pakg-actions">
                                                <label>
                                                    <a id="update_membership" href="#">Update Membership</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="restaurant-info-sec">
                                            <ul class="restaurant-pkg-points">
                                                <li>
                                                    <label>Expiry</label>
                                                    <span class="info-expiry-date">Jul 8,2020</span>
                                                </li>
                                                <li>
                                                    <label>Status</label>
                                                    <span>Active</span>
                                                </li>
                                                <li>
                                                    <label>Featured</label>
                                                    <span><i class="icon-minus"></i></span>
                                                </li>
                                                <li>
                                                    <label>Top Category</label>
                                                    <span><i class="icon-minus"></i></span>
                                                </li>
                                                <li>
                                                    <label>Number of Pictures</label>
                                                    <span>0</span>
                                                </li>
                                                <li>
                                                    <label>Number of Tags</label>
                                                    <span>6</span>
                                                </li>
                                                <li>
                                                    <label>Reviews</label>
                                                    <span><i class="icon-check"></i></span>
                                                </li>
                                                <li>
                                                    <label>Phone Number</label>
                                                    <span><i class="icon-check"></i></span>
                                                </li>
                                                <li>
                                                    <label>Website Link</label>
                                                    <span><i class="icon-check"></i></span>
                                                </li>
                                                <li>
                                                    <label>Social Impressions Reach</label>
                                                    <span><i class="icon-check"></i></span>
                                                </li>
                                                <li>
                                                    <label>Respond to Reviews</label>
                                                    <span><i class="icon-check"></i></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li id="membership_buy" style="display:none;">
                                        <div class="row">
                                            <div class="packages-main-holder">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="element-title">
                                                        <h4>Buy Membership</h4>
                                                    </div>
                                                </div>
                                                <div class="buy-new-pakg-actions">
                                                    <a id="cancel_btn_membership" href="#" class="foodbakery-dev-cancel-pkg">
                                                        <i class="icon-cross2"></i>
                                                    </a>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div id="new-packages-103966" class="dir-new-packages">
                                                        <div class="all-pckgs-sec">
                                                            <div class="foodbakery-pkg-holder">
                                                                <div class="foodbakery-pkg-header">
                                                                    <div class="pkg-title-price pull-left">
                                                                        <label class="pkg-title">Basic Free</label>
                                                                        <span class="pkg-price">Price: £0.00</span>
                                                                    </div>
                                                                    <div class="pkg-detail-btn pull-right">
                                                                        <input type="radio" id="package-623">
                                                                        <a href="#package_detail_623" data-toggle="collapse" class="foodbakery-dev-detail-pkg collapsed">Detail</a>
                                                                    </div>
                                                                </div>
                                                                <div id="package_detail_623" class="collapse">
                                                                    <div class="package-info-sec restaurant-info-sec">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <ul class="restaurant-pkg-points">
                                                                                    <li>
                                                                                        <label>Membership Duration</label>
                                                                                        <span>15 Days</span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Restaurant Duration</label>
                                                                                        <span>15 Days</span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Number of Tags</label>
                                                                                        <span>6 </span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Reviews</label>
                                                                                        <span>off </span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Phone Number</label>
                                                                                        <span><i class="icon-check"></i></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Website Link</label>
                                                                                        <span>off </span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Social Impressions Reach</label>
                                                                                        <span>off </span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Respond to Reviews</label>
                                                                                        <span>off </span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="pgk-action-btns">
                                                                                    <a href="#" class="pkg-choose-btn">Choose Membership</a>
                                                                                    <a href="#" class="pkg-cancel-btn">Cancel</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="foodbakery-pkg-holder">
                                                                <div class="foodbakery-pkg-header">
                                                                    <div class="pkg-title-price pull-left">
                                                                        <label class="pkg-title">Premium</label>
                                                                        <span class="pkg-price">Price: £90.00</span>
                                                                    </div>
                                                                    <div class="pkg-detail-btn pull-right">
                                                                        <input type="radio" id="package-624">
                                                                        <a href="#package_detail_624" data-toggle="collapse" class="foodbakery-dev-detail-pkg collapsed">Detail</a>
                                                                    </div>
                                                                </div>
                                                                <div id="package_detail_624" class="collapse">
                                                                    <div class="package-info-sec restaurant-info-sec">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <ul class="restaurant-pkg-points">
                                                                                    <li>
                                                                                        <label>Membership Duration</label>
                                                                                        <span>30 Days</span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Restaurant Duration</label>
                                                                                        <span>90 Days</span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Number of Tags</label>
                                                                                        <span>6</span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Reviews</label>
                                                                                        <span><i class="icon-check"></i></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Phone Number</label>
                                                                                        <span><i class="icon-check"></i></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Website Link</label>
                                                                                        <span><i class="icon-check"></i></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Social Impressions Reach</label>
                                                                                        <span><i class="icon-check"></i></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Respond to Reviews</label>
                                                                                        <span><i class="icon-check"></i></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="pgk-action-btns">
                                                                                    <a href="#" class="pkg-choose-btn">Choose Membership</a>
                                                                                    <a href="#" class="pkg-cancel-btn">Cancel</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="foodbakery-pkg-holder">
                                                                <div class="foodbakery-pkg-header">
                                                                    <div class="pkg-title-price pull-left">
                                                                        <label class="pkg-title">Standard</label>
                                                                        <span class="pkg-price">Price: £20.00</span>
                                                                    </div>
                                                                    <div class="pkg-detail-btn pull-right">
                                                                        <input type="radio" id="package-2595">
                                                                        <a href="#package_detail_625" data-toggle="collapse" class="foodbakery-dev-detail-pkg collapsed">Detail</a>
                                                                    </div>
                                                                </div>
                                                                <div id="package_detail_625" class="collapse">
                                                                    <div class="package-info-sec restaurant-info-sec">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <ul class="restaurant-pkg-points">
                                                                                    <li>
                                                                                        <label>Membership Duration</label>
                                                                                        <span>30 Days</span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Restaurant Duration</label>
                                                                                        <span>30 Days</span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Featured Restaurants</label>
                                                                                        <span><i class="icon-check"></i></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Top Categories Restaurants</label>
                                                                                        <span><i class="icon-check"></i></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Number of Tags</label>
                                                                                        <span>6 </span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Reviews</label>
                                                                                        <span><i class="icon-check"></i></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Phone Number</label>
                                                                                        <span><i class="icon-check"></i></span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Website Link</label>
                                                                                        <span>off </span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Social Impressions Reach</label>
                                                                                        <span>off </span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <label>Respond to Reviews</label>
                                                                                        <span><i class="icon-check"></i></span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="package-featured pakg-switch">
                                                                                    <span>Featured :</span>
                                                                                    <input id="package-featured-2595" type="checkbox" class="cmn-toggle cmn-toggle-round" name="foodbakery_restaurant_featured">
                                                                                    <label for="package-featured-2595"></label>
                                                                                </div>
                                                                                <div class="package-top-cat pakg-switch">
                                                                                    <span>Top Category :</span>
                                                                                    <input id="package-top-cat-2595" type="checkbox" class="cmn-toggle cmn-toggle-round" name="foodbakery_restaurant_top_cat">
                                                                                    <label for="package-top-cat-2595"></label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="pgk-action-btns">
                                                                                    <a href="#" class="pkg-choose-btn">Choose Membership</a>
                                                                                    <a href="#" class="pkg-cancel-btn">Cancel</a>
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
                                    </li>
                                </ul>
                            </form>
                            <div class="user-packages">
                                <div class="element-title">
                                    <h5>Subscribed Memberships</h5>
                                </div>
                            </div>
                            <div class="user-packages-list">
                                <div class="all-pckgs-sec">
                                    <div class="foodbakery-pkg-holder">
                                        <div class="foodbakery-pkg-header">
                                            <div class="pkg-title-price pull-left">
                                                <label class="pkg-title">Premium</label>
                                                <span class="pkg-price">Price: £101.70</span>
                                            </div>
                                            <div class="pkg-detail-btn pull-right">
                                                <a href="#package_detail_22618" data-toggle="collapse" class="collapsed">Detail</a>
                                            </div>
                                        </div>
                                        <div class="collapse" id="package_detail_22618">
                                            <div class="package-info-sec restaurant-info-sec">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <ul class="restaurant-pkg-points">
                                                            <li><label>Expiry Date</label><span>May 9,2020 </span></li>
                                                            <li><label>Restaurants Duration</label><span>90 Days</span></li>
                                                            <li><label>Feature Restaurant</label><span>0 </span></li>
                                                            <li><label>Top Category Restaurant</label><span>0 </span></li>
                                                            <li><label>Number of Tags</label><span>6 </span></li>
                                                            <li><label>Reviews</label><span><i class="icon-check"></i></span></li>
                                                            <li><label>Phone Number</label><span><i class="icon-check"></i></span></li>
                                                            <li><label>Website Link</label><span><i class="icon-check"></i></span></li>
                                                            <li><label>Social Impressions Reach</label><span><i class="icon-check"></i></span></li>
                                                            <li><label>Respond to Reviews</label><span><i class="icon-check"></i></span></li>
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
            </div>
        </div>
    </div>
</div>
<!-- Main Section End -->
@endsection
