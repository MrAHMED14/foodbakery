@extends('front.master')

@section('title')
    Restaurant || Register Restaurant
@endsection

@section('content')
<!-- Main Section Start -->
<div class="main-section">
    <div class="page-section nopadding cs-nomargin" style="margin-top: 0px;padding-top: 60px;padding-bottom: 60px;margin-bottom: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="user-dashboard loader-holder">
                        <div class="user-holder">
                            <ul class="restaurant-settings-nav progressbar-nav">
                                <li class="active"><a href="{{route('front.register_restaurant')}}" class="cond-restaurant-settings1">Information</a></li>
                                <li class="active"><a href="{{route('front.register_package')}}" class="cond-restaurant-settings1">Select Package</a></li>
                                <li class="active processing"><a href="{{route('front.register_payment')}}" class="cond-restaurant-settings1">Payment Information</a></li>
                                <li><a href="{{route('front.register_activation')}}" class="cond-restaurant-settings1">Activation</a></li>
                            </ul>
                            <div id="restaurant-sets-holder">
                                <form class="form-fields-set foodbakery-dev-restaurant-form" method="post" action="register-activation.html">
                                    <ul id="foodbakery-dev-main-con-12331647" class="register-add-restaurant-tab-container payment-information-tab-container">
                                        <li>
                                            <div class="row">
                                                <div class="section-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="reservation-form packages-form">
                                                        <form class="foodbakery-dev-payment-form">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="payment-summary-fields">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                                <div class="field-holder">
                                                                                    <label>First Name</label>
                                                                                    <input type="text" class="foodbakery-dev-req-field" name="trans_first_name" placeholder="First Name" value="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                                <div class="field-holder">
                                                                                    <label>Last Name</label>
                                                                                    <input type="text" class="foodbakery-dev-req-field" name="trans_last_name" placeholder="Last Name" value="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                                <div class="field-holder">
                                                                                    <label>Email</label>
                                                                                    <input type="text" class="foodbakery-dev-req-field foodbakery-email-field" name="trans_email" placeholder="Email" value="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                                <div class="field-holder">
                                                                                    <label>Phone Number</label>
                                                                                    <input type="text" class="foodbakery-dev-req-field foodbakery-number-field" name="trans_phone_number" placeholder="Phone Number" value="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="field-holder">
                                                                                    <label>Address</label>
                                                                                    <textarea class="foodbakery-dev-req-field" name="trans_address"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="element-title">
                                                                        <h4>Payment Methods</h4>
                                                                        <span class="element-slogan">(Click one of
                                                                            the
                                                                            options
                                                                            below)</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="field-holder">
                                                                        <div class="payment-holder">
                                                                            <div class="payment-section">
                                                                                <ul class="payment-list row">
                                                                                    <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                        <div class="payment-box">
                                                                                            <input type="radio" id="foodbakery_paypal_gateway_7284823" checked="checked" name="foodbakery_restaurant_gateway" value="FOODBAKERY_PAYPAL_GATEWAY">
                                                                                            <label for="foodbakery_paypal_gateway_7284823"><img alt="" src="{{asset('front/extra-images/Paypal.png')}}"></label>
                                                                                            <span>Pay with
                                                                                                Paypal</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                        <div class="payment-box">
                                                                                            <input type="radio" id="foodbakery_authorizedotnet_gateway_8257993" name="foodbakery_restaurant_gateway" value="FOODBAKERY_AUTHORIZEDOTNET_GATEWAY">
                                                                                            <label for="foodbakery_authorizedotnet_gateway_8257993"><img alt="" src="{{asset('front/extra-images/Authorize.net_.png')}}"></label>
                                                                                            <span>Pay with
                                                                                                Authorize.net</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                        <div class="payment-box">
                                                                                            <input type="radio" id="foodbakery_pre_bank_transfer_9499784" name="foodbakery_restaurant_gateway" value="FOODBAKERY_PRE_BANK_TRANSFER">
                                                                                            <label for="foodbakery_pre_bank_transfer_9499784"><img alt="" src="{{asset('front/extra-images/Bank-Transfer.png')}}"></label>
                                                                                            <span>Pay with Pre Bank
                                                                                                Transfer</span>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                        <div class="payment-box">
                                                                                            <input type="radio" id="foodbakery_skrill_gateway_8930496" name="foodbakery_restaurant_gateway" value="FOODBAKERY_SKRILL_GATEWAY">
                                                                                            <label for="foodbakery_skrill_gateway_8930496"><img alt="" src="{{asset('front/extra-images/Skrill.png')}}"></label>
                                                                                            <span>Pay with
                                                                                                Skrill-MoneyBooker</span>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <input class="previous back-bg-color" type="submit" value="Back" id="btn-back-payment-information">&nbsp;
                                                                            <button onclick="location.href='register-activation.html';" id="register-restaurant-order" class="submit bgcolor btn-submit" type="submit">Submit Order</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
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
