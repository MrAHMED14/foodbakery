@php
    $user = Auth::user();
@endphp

@extends('front.restaurant.master')

@section('title')
    Restaurant || Account Setting
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
                                <form method="POST" action="{{ route('restaurant.update.location') }}">
                                    @csrf

                                    <ul class="restaurant-settings-nav progressbar-nav">
                                        <li class="cond-restaurant-settings active">
                                            <a href="{{ route('restaurant.restaurant') }}">Restaurant Settings</a>
                                        </li>
                                        <li class="cond-restaurant-settings active processing">
                                            <a href="{{ route('restaurant.location') }}">Location/Map</a>
                                        </li>
                                        <li class="cond-restaurant-settings">
                                            <a href="{{ route('restaurant.open_close') }}">Restaurant Open/Close</a>
                                        </li>
                                    </ul>

                                    <div class="form-fields-set">
                                        <ul>
                                            <li>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="element-title">
                                                            <h4>Location</h4>
                                                        </div>
                                                    </div>

                                                    {{-- Address --}}
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Address *</label>
                                                            <input type="text" name="address" placeholder="Address"
                                                                required
                                                                value="{{ old('address', $user->restaurant->address) }}">

                                                            @error('address')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- State --}}
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>State *</label>
                                                            <input type="text" name="state" placeholder="State"
                                                                required
                                                                value="{{ old('state', $user->restaurant->state) }}">

                                                            @error('state')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- City --}}
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>City *</label>
                                                            <input type="text" name="city" placeholder="City" required
                                                                value="{{ old('city', $user->restaurant->city) }}">

                                                            @error('city')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- Latitude --}}
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Latitude *</label>
                                                            <input type="number" name="latitude" min="-90"
                                                                max="90" step="0.000001" placeholder="Latitude"
                                                                value="{{ old('latitude', $user->restaurant->latitude) }}">

                                                            @error('latitude')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- Longitude --}}
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Longitude *</label>
                                                            <input type="number" name="longitude" min="-180"
                                                                max="180" step="0.000001" placeholder="Longitude"
                                                                value="{{ old('longitude', $user->restaurant->longitude) }}">

                                                            @error('longitude')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- Search Location --}}
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Find On Map</label>
                                                            <input type="text" placeholder="Type Your Address"
                                                                class="foodbakery-search-location">
                                                            <button class="btn-submit" style="margin-top: 10px; ">Search
                                                                Location</button>
                                                        </div>
                                                    </div>

                                                    {{-- Map Section --}}
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="cs-map-section">
                                                            <iframe width="100" height="280" id="gmap_canvas"
                                                                src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        {{-- Submit Button --}}
                                        <div class="field-holder">
                                            <button type="submit" class="btn-submit">Save</button>
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
