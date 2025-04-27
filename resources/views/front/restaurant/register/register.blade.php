@php
    $wilayas = json_decode(file_get_contents(storage_path('app/wilaya.json')));
    $communes = json_decode(file_get_contents(storage_path('app/communes.json')));
@endphp

@extends('front.master')

@section('title')
    Register Restaurant
@endsection

@section('content')
    <div class="main-section">
        <div class="page-section nopadding cs-nomargin"
            style="margin-top: 0px;padding-top: 60px;padding-bottom: 60px;margin-bottom: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="user-dashboard loader-holder" style="border-radius: 10px;">
                            <div class="user-holder">
                                <div id="restaurant-sets-holder">
                                    <form method="POST" action="{{ route('front.restaurants.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <ul class="register-add-restaurant-tab-container activation-tab-container"
                                            style="display: block;">
                                            <li>
                                                <h2 style="margin-bottom: 40px;">Register Restaurant</h2>
                                                <div class="form-fields-set">
                                                    <ul>
                                                        <li>
                                                            {{-- Form fields --}}
                                                            <div class="row">
                                                                {{-- Cover Image --}}
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="restaurant-info">
                                                                        <div>
                                                                            <div style="width: 100%; height: 100%;">
                                                                                <img style="width: 100%; height: 250px; object-fit: cover; border:1px solid rgb(218, 213, 213); border-radius: 5px;"
                                                                                    id="cover-image"
                                                                                    src="{{ asset('front/extra-images/cover-placeholder.png') }}"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="upload-file">
                                                                                <button type="button"
                                                                                    class="upload-btn foodbakery-dev-gallery-upload-btn"
                                                                                    style="margin-top: 15px; text-align: center;"
                                                                                    onclick="document.getElementById('file-2').click();">
                                                                                    <span>Upload cover image</span>
                                                                                </button>

                                                                                <button type="button"
                                                                                    id="remove-photo-2-btn"
                                                                                    onclick="resetCoverImage()"
                                                                                    style="display: none; margin-top: 15px; text-align: center;">
                                                                                    <span><i class="icon-cross"></i></span>
                                                                                </button>

                                                                                <input id="file-2" type="file"
                                                                                    name="restaurant_cover_photo"
                                                                                    class="hide" accept="image/*">

                                                                                @error('restaurant_cover_photo')
                                                                                    <div class="text-danger"
                                                                                        style="font-size: 12px;">
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
                                                                                            <img class="thumbnail"
                                                                                                id="logo-image"
                                                                                                src="{{ asset('front/extra-images/user-placeholder.png') }}"
                                                                                                style="padding: 0;aspect-ratio: 1 / 1; object-fit: cover; object-position: center;"
                                                                                                alt="">
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div>
                                                                            <div class="upload-file"
                                                                                style="margin-top: 15px;">
                                                                                <button type="button"
                                                                                    class="upload-btn foodbakery-dev-gallery-upload-btn"
                                                                                    onclick="document.getElementById('file-1').click();">
                                                                                    <span>Upload Logo</span>
                                                                                </button>

                                                                                <button type="button"
                                                                                    id="remove-photo-1-btn"
                                                                                    onclick="resetLogoImage()"
                                                                                    style="display: none; margin-top: 10px; text-align: center;">
                                                                                    <span><i class="icon-cross"></i></span>
                                                                                </button>

                                                                                <input id="file-1" type="file"
                                                                                    name="restaurant_logo" class="hide"
                                                                                    accept="image/*">

                                                                                @error('restaurant_logo')
                                                                                    <div class="text-danger"
                                                                                        style="font-size: 12px;">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                            <p>Max Upload Size: 2MB</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <h4 style="margin-bottom: 20px;">Restaurant Information
                                                                    </h4>
                                                                </div>

                                                                {{-- Restaurant name --}}
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div class="field-holder">
                                                                        <label>Restaurant name *</label>
                                                                        <input type="text" name="restaurant_name"
                                                                            placeholder="Enter restaurant name"
                                                                            class="foodbakery-dev-req-field" required>

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
                                                                        <label>Restaurant phone *</label>
                                                                        <input type="tel" name="restaurant_phone"
                                                                            placeholder="Enter restaurant phone"
                                                                            class="foodbakery-dev-req-field" required>

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
                                                                        <label>Manager Name *</label>
                                                                        <input type="text" name="user_name"
                                                                            placeholder="Enter manager name"
                                                                            class="foodbakery-dev-req-field" required>

                                                                        @error('user_name')
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
                                                                        <label>Restaurant Contact Email *</label>
                                                                        <input type="email" name="restaurant_email"
                                                                            placeholder="i.e alard@example.com"
                                                                            class="foodbakery-dev-req-field" required>

                                                                        @error('restaurant_email')
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
                                                                        <label>Description</label>
                                                                        <div class="foodbakery_editor1">
                                                                            <textarea name="restaurant_description" placeholder="Enter restaurant description"></textarea>

                                                                            @error('restaurant_description')
                                                                                <div class="text-danger"
                                                                                    style="font-size: 12px;">
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
                                                                        <select class="chosen-select"
                                                                            name="restaurant_accepts_orders">
                                                                            <option value="1">
                                                                                Yes</option>
                                                                            <option value="0">
                                                                                No</option>
                                                                        </select>

                                                                        @error('restaurant_accepts_orders')
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
                                                                        <select class="chosen-select"
                                                                            name="restaurant_accepts_reservations">
                                                                            <option value="1">
                                                                                Yes</option>
                                                                            <option value="0">
                                                                                No</option>
                                                                        </select>

                                                                        @error('restaurant_accepts_reservations')
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
                                                                            <option value="delivery_and_pickup">Delivery
                                                                                &amp; Pickup
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                {{-- Minimum Delivery Order --}}
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div class="field-holder">
                                                                        <label>Minimum Delivery Order</label>
                                                                        <input type="number"
                                                                            name="restaurant_minimum_order"
                                                                            placeholder="i.e 10">

                                                                        @error('restaurant_minimum_order')
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
                                                                        <input type="number"
                                                                            name="restaurant_maximum_order"
                                                                            placeholder="i.e 10">

                                                                        @error('restaurant_maximum_order')
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
                                                                        <input type="number"
                                                                            name="restaurant_delivery_fee"
                                                                            placeholder="Enter delivery fee">

                                                                        @error('restaurant_delivery_fee')
                                                                            <div class="text-danger" style="font-size: 12px;">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                {{-- Payment Options --}}
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="field-holder">
                                                                        <label>Payment Options</label>
                                                                        <select class="chosen-select"
                                                                            name="restaurant_payment_options">
                                                                            <option value="cash">
                                                                                Cash
                                                                            </option>
                                                                            <option value="visa">
                                                                                Visa
                                                                            </option>
                                                                            <option value="mastercard">
                                                                                MasterCard
                                                                            </option>
                                                                            <option value="paypal">
                                                                                PayPal
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                {{-- Cuisine types --}}
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="foodbakery-dev-appended-cats">
                                                                        <div class="field-holder">
                                                                            <label>Cuisine types</label>
                                                                            <select class="multiple chosen-select" multiple
                                                                                name="cuisine_types[]">
                                                                                <option disabled>Select cuisine types
                                                                                </option>
                                                                                @foreach ($cuisineTypes as $cuisine)
                                                                                    <option value="{{ $cuisine->id }}">
                                                                                        {{ $cuisine->name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <h4 style="margin-bottom: 20px;">Restaurant Address
                                                                    </h4>
                                                                </div>

                                                                {{-- Wilaya --}}
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="field-holder">
                                                                        <label>Wilaya *</label>
                                                                        <select id="wilayaSelect" name="restaurant_wilaya" class="form-control" required>
                                                                            <option value="">Select Wilaya</option>
                                                                        </select>
                                                                        @error('restaurant_wilaya')
                                                                            <div class="text-danger" style="font-size: 12px;">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                {{-- Commune --}}
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="field-holder">
                                                                        <label>Commune *</label>
                                                                        <select id="communeSelect" name="restaurant_commune" class="form-control" required>
                                                                            <option value="">Select Commune</option>
                                                                        </select>
                                                                        @error('restaurant_commune')
                                                                            <div class="text-danger" style="font-size: 12px;">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                {{-- Address --}}
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="field-holder">
                                                                        <label>Address *</label>
                                                                        <input type="text" name="restaurant_address"
                                                                            placeholder="Address" required>
                                                                        @error('restaurant_address')
                                                                            <div class="text-danger" style="font-size: 12px;">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                {{-- Latitude --}}
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="field-holder">
                                                                        <label>Latitude</label>
                                                                        <input id="latitude" type="number" name="restaurant_latitude"
                                                                            min="-90" max="90" step="0.000001"
                                                                            placeholder="Latitude">
                                                                        @error('restaurant_latitude')
                                                                            <div class="text-danger" style="font-size: 12px;">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                {{-- Longitude --}}
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="field-holder">
                                                                        <label>Longitude</label>
                                                                        <input id="longitude" type="number" name="restaurant_longitude"
                                                                            min="-180" max="180" step="0.000001"
                                                                            placeholder="Longitude">
                                                                        @error('restaurant_longitude')
                                                                            <div class="text-danger" style="font-size: 12px;">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                {{-- Map Section --}}
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="cs-map-section" style="border-radius: 10px;">
                                                                        <div id="map" style="width: 100%; height: 400px; border-radius: 10px;"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <h4 style="margin-bottom: 20px;">Account Information
                                                                    </h4>
                                                                </div>

                                                                {{-- Email --}}
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="field-holder">
                                                                        <label>Email *</label>
                                                                        <input type="email" name="user_email"
                                                                            placeholder="Enter your login email" required>

                                                                        @error('user_email')
                                                                            <div class="text-danger" style="font-size: 12px;">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                {{-- Password --}}
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="field-holder">
                                                                        <label>Password *</label>
                                                                        <input type="password" name="user_password"
                                                                            placeholder="Enter your password" required>

                                                                        @error('user_password')
                                                                            <div class="text-danger" style="font-size: 12px;">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                {{-- Confirm Password --}}
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="field-holder">
                                                                        <label>Confirm Password *</label>
                                                                        <input type="password"
                                                                            name="user_password_confirmation"
                                                                            placeholder="Confirm your password" required>
                                                                        @error('user_password_confirmation')
                                                                            <div class="text-danger" style="font-size: 12px;">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>

                                                    {{-- Submit button --}}
                                                    <div class="field-holder">
                                                        <button type="submit" class="btn-submit">Submit</button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>

                                    <script>
                                        const defaultLogoImage =
                                            "{{ asset('front/extra-images/user-placeholder.png') }}";

                                        const defaultCoverImage =
                                            "{{ asset('front/extra-images/cover-placeholder.png') }}";

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
    </div>

    <script>
        const wilayas = @json($wilayas);
        const communes = @json($communes);

        $(document).ready(function () {
            wilayas.forEach(function (wilaya) {
                $('#wilayaSelect').append(`<option value="${wilaya.name}" data-id="${wilaya.id}">${wilaya.name}</option>`);
            });

            $('#wilayaSelect').on('change', function () {
                let wilayaId = $(this).find(':selected').data('id');
                $('#communeSelect').empty().append('<option value="">Select Commune</option>');

                communes.forEach(function (commune) {
                    if (commune.wilaya_id == wilayaId) {
                        $('#communeSelect').append(`<option value="${commune.name}">${commune.name}</option>`);
                    }
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const latInput = document.getElementById('latitude');
            const lngInput = document.getElementById('longitude');

            const fallbackLat = 35.384126;
            const fallbackLng = 1.314610;

            function initLeafletMap(lat, lng) {
                const map = L.map('map').setView([lat, lng], 13);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap contributors'
                }).addTo(map);

                const marker = L.marker([lat, lng], { draggable: true }).addTo(map);

                latInput.value = lat.toFixed(6);
                lngInput.value = lng.toFixed(6);

                marker.on('dragend', function () {
                    const pos = marker.getLatLng();
                    latInput.value = pos.lat.toFixed(6);
                    lngInput.value = pos.lng.toFixed(6);
                });

                function updateMarkerFromInputs() {
                    const updatedLat = parseFloat(latInput.value);
                    const updatedLng = parseFloat(lngInput.value);
                    if (!isNaN(updatedLat) && !isNaN(updatedLng)) {
                        const newLatLng = L.latLng(updatedLat, updatedLng);
                        marker.setLatLng(newLatLng);
                        map.setView(newLatLng, 15);
                    }
                }

                latInput.addEventListener('input', updateMarkerFromInputs);
                lngInput.addEventListener('input', updateMarkerFromInputs);

                L.Control.geocoder({
                    defaultMarkGeocode: false
                }).on('markgeocode', function (e) {
                    const latlng = e.geocode.center;
                    marker.setLatLng(latlng);
                    map.setView(latlng, 15);
                    latInput.value = latlng.lat.toFixed(6);
                    lngInput.value = latlng.lng.toFixed(6);
                }).addTo(map);
            }

            // Try to get user location
            navigator.geolocation.getCurrentPosition(
                function (position) {
                    initLeafletMap(position.coords.latitude, position.coords.longitude);
                },
                function () {
                    initLeafletMap(fallbackLat, fallbackLng);
                }
            );
        });
    </script>
@endsection
