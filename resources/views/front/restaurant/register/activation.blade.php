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
                                <li class="active"><a href="{{route('front.register_payment')}}" class="cond-restaurant-settings1">Payment Information</a></li>
                                <li class="active"><a href="{{route('front.register_activation')}}" class="cond-restaurant-settings1">Activation</a></li>
                            </ul>
                            <div id="restaurant-sets-holder">
                                <form class="form-fields-set foodbakery-dev-restaurant-form" method="post">
                                    <ul class="register-add-restaurant-tab-container activation-tab-container" style="display: block;">
                                        <li>
                                            <div class="activation-tab-message">
                                                <div class="media-holder">
                                                    <figure>
                                                        <img src="{{asset('front/extra-images/thankyou-image.png')}}" alt="Thank You">
                                                    </figure>
                                                </div>
                                                <div class="text-holder">
                                                    <strong>Thank You</strong>
                                                    <span>You have successfully created your restaurant, to add more
                                                        details, go
                                                        to your email inbox for login details.</span>
                                                </div>
                                                <div class="thankyou-contacts">
                                                    <p>For cancellation or more infomation Please Contact Us</p>
                                                    <ul class="list-inline clearfix">
                                                        <li><i class="icon-phone4"></i>+1 301 1213 1216</li>
                                                        <li><i class="icon-fax"></i>+1 202 3239 1216</li>
                                                        <li><i class="icon-envelope-o"></i>info@example.com</li>
                                                    </ul>
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
