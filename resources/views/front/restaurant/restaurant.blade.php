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
                                <form method="POST" action="{{ route('restaurant.update') }}" enctype="multipart/form-data">
                                    @csrf

                                    <ul class="restaurant-settings-nav progressbar-nav">
                                        <li class="cond-restaurant-settings active processing">
                                            <a href="{{ route('restaurant.restaurant') }}">Restaurant Settings</a>
                                        </li>
                                        <li class="cond-restaurant-settings">
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
                                                    {{-- Cover Image --}}
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="restaurant-info">
                                                            <div>
                                                                <div style="width: 100%; height: 100%;">
                                                                    <img style="width: 100%; height: 250px; object-fit: cover; border:1px solid rgb(218, 213, 213); border-radius: 5px;"
                                                                        id="cover-image"
                                                                        src="{{ $user->restaurant->cover_photo ? asset('storage/' . $user->restaurant->cover_photo) : asset('front/extra-images/cover-placeholder.png') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="upload-file">
                                                                    <button type="button"
                                                                        class="upload-btn foodbakery-dev-gallery-upload-btn"
                                                                        style="margin-top: 15px; text-align: center;"
                                                                        onclick="document.getElementById('file-2').click();">
                                                                        <span>Upload cover image</span>
                                                                    </button>

                                                                    <button type="button" id="remove-photo-2-btn"
                                                                        onclick="resetCoverImage()"
                                                                        style="display: none; margin-top: 15px; text-align: center;">
                                                                        <span><i class="icon-cross"></i></span>
                                                                    </button>

                                                                    <input id="file-2" type="file" name="cover_photo"
                                                                        class="hide" accept="image/*">

                                                                    @error('cover_photo')
                                                                        <div class="text-danger" style="font-size: 12px;">
                                                                            {{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- Logo Image --}}
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="restaurant-info">
                                                            <div class="img-holder">
                                                                <ul class="foodbakery-gallery-holder">
                                                                    <li class="gal-img">
                                                                        <div class="drag-list">
                                                                            <div class="item-thumb">
                                                                                <img class="thumbnail" id="logo-image"
                                                                                    src="{{ $user->restaurant->restaurant_logo ? asset('storage/' . $user->restaurant->restaurant_logo) : asset('front/extra-images/user-placeholder.png') }}"
                                                                                    style="aspect-ratio: 1 / 1; padding: 0;"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div>
                                                                <h1><strong>{{ $user->restaurant->name }}</strong></h1>
                                                                <div class="upload-file" style="margin-top: 15px;">
                                                                    <button type="button"
                                                                        class="upload-btn foodbakery-dev-gallery-upload-btn"
                                                                        onclick="document.getElementById('file-1').click();">
                                                                        <span>Upload Logo</span>
                                                                    </button>

                                                                    <button type="button" id="remove-photo-1-btn"
                                                                        onclick="resetLogoImage()"
                                                                        style="display: none; margin-top: 10px; text-align: center;">
                                                                        <span><i class="icon-cross"></i></span>
                                                                    </button>

                                                                    <input id="file-1" type="file"
                                                                        name="restaurant_logo" class="hide"
                                                                        accept="image/*">

                                                                    @error('restaurant_logo')
                                                                        <div class="text-danger" style="font-size: 12px;">
                                                                            {{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <p>Max Upload Size: 2MB</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- Restaurant name --}}
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Restaurant name *</label>
                                                            <input type="text" name="restaurant_name"
                                                                value="{{ old('restaurant_name', $user->restaurant->name) }}"
                                                                placeholder="Enter restaurant name"
                                                                class="foodbakery-dev-req-field">

                                                            @error('restaurant_name')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- Restaurant phone --}}
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Restaurant phone</label>
                                                            <input type="tel" name="restaurant_phone"
                                                                value="{{ old('restaurant_phone', $user->restaurant->phone) }}"
                                                                placeholder="Enter restaurant phone"
                                                                class="foodbakery-dev-req-field">

                                                            @error('restaurant_phone')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- Manager Name --}}
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Manager Name</label>
                                                            <input type="text" name="manager_name"
                                                                value="{{ old('manager_name', $user->name) }}"
                                                                placeholder="Enter manager name"
                                                                class="foodbakery-dev-req-field">

                                                            @error('manager_name')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- Manager Contact phone --}}
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Manager Contact phone</label>
                                                            <input type="tel" name="manager_phone"
                                                                value="{{ old('manager_phone', $user->phone) }}"
                                                                placeholder="Enter manager contact phone"
                                                                class="foodbakery-dev-req-field">

                                                            @error('manager_phone')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- Contact Email --}}
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Contact Email</label>
                                                            <input type="email" name="contact_email"
                                                                value="{{ old('contact_email', $user->restaurant->email) }}"
                                                                placeholder="i.e alard@example.com"
                                                                class="foodbakery-dev-req-field">

                                                            @error('contact_email')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- Capacity --}}
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Capacity</label>
                                                            <input type="number" name="restaurant_capacity"
                                                                value="{{ old('restaurant_capacity', $user->restaurant->capacity) }}"
                                                                placeholder="Enter max tables number on the restaurant"
                                                                class="foodbakery-dev-req-field">

                                                            @error('restaurant_capacity')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- Description --}}
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Description *</label>
                                                            <div class="foodbakery_editor1">
                                                                <textarea name="restaurant_description" placeholder="Enter restaurant description">{{ old('restaurant_description', $user->restaurant->description) }}</textarea>

                                                                @error('restaurant_description')
                                                                    <div class="text-danger" style="font-size: 12px;">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                                <script>
                                                                    jQuery(document).ready(function() {
                                                                        jQuery(".foodbakery_editor1 textarea").jqte();
                                                                    });
                                                                </script>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- Restaurant Pre-Order --}}
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Restaurant Pre-Order</label>
                                                            <select class="chosen-select" name="accepts_orders">
                                                                <option value="1"
                                                                    {{ $user->restaurant->accepts_orders == 1 ? 'selected' : '' }}>
                                                                    Yes</option>
                                                                <option value="0"
                                                                    {{ $user->restaurant->accepts_orders == 0 ? 'selected' : '' }}>
                                                                    No</option>
                                                            </select>

                                                            @error('accepts_orders')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- Table Booking --}}
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Table Booking</label>
                                                            <select class="chosen-select" name="accepts_reservations">
                                                                <option value="1"
                                                                    {{ $user->restaurant->accepts_reservations == 1 ? 'selected' : '' }}>
                                                                    Yes</option>
                                                                <option value="0"
                                                                    {{ $user->restaurant->accepts_reservations == 0 ? 'selected' : '' }}>
                                                                    No</option>
                                                            </select>

                                                            @error('accepts_reservations')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Delivery/Pickup</label>
                                                            <select class="chosen-select">
                                                                <option value="delivery">Delivery</option>
                                                                <option value="pickup">Pickup</option>
                                                                <option value="delivery_and_pickup">Delivery &amp; Pickup
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    {{-- Minimum Delivery Order --}}
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Minimum Delivery Order</label>
                                                            <input type="number" name="minimum_order"
                                                                value="{{ old('minimum_order', $user->restaurant->minimum_order) }}"
                                                                placeholder="i.e 10">

                                                            @error('minimum_order')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- Maximum Delivery Order --}}
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Maximum Delivery Order</label>
                                                            <input type="number" name="maximum_order"
                                                                value="{{ old('maximum_order', $user->restaurant->maximum_order) }}"
                                                                placeholder="i.e 10">

                                                            @error('maximum_order')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- Delivery Fee --}}
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Delivery Fee</label>
                                                            <input type="number" name="delivery_fee"
                                                                value="{{ old('delivery_fee', $user->restaurant->delivery_fee) }}"
                                                                placeholder="Enter delivery fee">

                                                            @error('delivery_fee')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="foodbakery-dev-appended-cats">
                                                            <div class="field-holder">
                                                                <label>Cuisine types *</label>
                                                                <select class="multiple chosen-select" multiple
                                                                    name="cuisine_types[]">
                                                                    <option disabled>Select cuisine types</option>
                                                                    @foreach ($cuisineTypes as $cuisine)
                                                                        <option value="{{ $cuisine->id }}"
                                                                            {{ $user->restaurant->cuisines->contains('id', $cuisine->id) ? 'selected' : '' }}>
                                                                            {{ $cuisine->name }}
                                                                        </option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        {{-- Submit button --}}
                                        <div class="field-holder">
                                            <button type="submit" class="btn-submit">Save</button>
                                        </div>
                                    </div>
                                </form>

                                <script>
                                    const defaultLogoImage =
                                        "{{ $user->restaurant->restaurant_logo ? asset('storage/' . $user->restaurant->restaurant_logo) : asset('front/extra-images/user-placeholder.png') }}";

                                    const defaultCoverImage =
                                        "{{ $user->restaurant->cover_photo ? asset('storage/' . $user->restaurant->cover_photo) : asset('front/extra-images/cover-placeholder.png') }}";

                                    document.getElementById('file-1').addEventListener('change', function(event) {
                                        const [file] = event.target.files;
                                        if (file) {
                                            document.getElementById('logo-image').src = URL.createObjectURL(file);
                                            document.getElementById('remove-photo-1-btn').style.display =
                                                'inline-block'; // Show the remove button
                                        }
                                    });

                                    document.getElementById('file-2').addEventListener('change', function(event) {
                                        const [file] = event.target.files;
                                        if (file) {
                                            document.getElementById('cover-image').src = URL.createObjectURL(file);
                                            document.getElementById('remove-photo-2-btn').style.display =
                                                'inline-block'; // Show the remove button
                                        }
                                    });

                                    function resetLogoImage() {
                                        document.getElementById('logo-image').src = defaultLogoImage;
                                        document.getElementById('file-1').value = ""; // Clear the selected file
                                        document.getElementById('remove-photo-1-btn').style.display = 'none'; // Hide the remove button
                                    }

                                    function resetCoverImage() {
                                        document.getElementById('cover-image').src = defaultCoverImage;
                                        document.getElementById('file-2').value = ""; // Clear the selected file
                                        document.getElementById('remove-photo-2-btn').style.display = 'none'; // Hide the remove button
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Section End -->
@endsection
