@extends('front.restaurant.master')

@section('title')
    Restaurant || Change Password
@endsection

@section('content')
<!-- Main Section Start -->
<div class="main-section">
    @include('front.restaurant.body.header')

    <div class="page-section account-header buyer-logged-in">
        <div class="container">
            <div class="row">
                <!-- ========== menu Start ========== -->
                @include('front.restaurant.body.menu')
                <!-- menu End -->
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="user-dashboard loader-holder">
                        <div class="user-holder">
                            <div class="row">
                                <form method="POST" action="{{ route('restaurant.changePassword') }}" id="publisher_profile" autocomplete="off">
                                    @csrf

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="element-title has-border">
                                            <h5>Change Password</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-holder">
                                            <label> Current Password *</label>
                                            <input autocomplete="off" type="password" name="current_password"
                                                class="foodbakery-dev-req-field">

                                            @error('current_password')
                                                <div class="text-danger" style="font-size: 12px;">
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-holder">
                                            <label> New Password *</label>
                                            <input type="password" name="new_password"
                                                class="foodbakery-dev-req-field">

                                            @error('new_password')
                                                <div class="text-danger" style="font-size: 12px;">
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-holder">
                                            <label> Confirm New Password *</label>
                                            <input type="password" name="new_password_confirmation"
                                                class="foodbakery-dev-req-field">

                                            @error('new_password_confirmation')
                                                <div class="text-danger" style="font-size: 12px;">
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-holder">
                                            <button type="submit" class="btn-submit">Change
                                                Password</button>
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
<!-- Main Section End -->
@endsection
