@extends('front.master')

@section('title')
    Restaurant || Register Restaurant
@endsection

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('front.restaurants.store') }}" enctype="multipart/form-data">
            @csrf

            <h2 style="margin-top: 40px">Register Restaurant</h2>

            <!-- Restaurant Info -->
            <div>
                <label>Restaurant Name</label>
                <input type="text" name="restaurant_name" required>
            </div>

            <div>
                <label>Address</label>
                <input type="text" name="restaurant_address" required>
            </div>

            <div>
                <label>City</label>
                <input type="text" name="restaurant_city" required>
            </div>

            <div>
                <label>State</label>
                <input type="text" name="restaurant_state" required>
            </div>

            <div>
                <label>Phone</label>
                <input type="text" name="restaurant_phone" required>
            </div>

            <div>
                <label>Email</label>
                <input type="email" name="restaurant_email" required>
            </div>

            <div>
                <label>Latitude</label>
                <input type="text" name="restaurant_latitude">
            </div>

            <div>
                <label>Longitude</label>
                <input type="text" name="restaurant_longitude">
            </div>

            <div>
                <label>Description</label>
                <textarea name="restaurant_description"></textarea>
            </div>

            <div>
                <label>Capacity</label>
                <input type="number" name="restaurant_capacity">
            </div>

            <div>
                <label>Payment Option</label>
                <input type="text" name="restaurant_payment_options">
            </div>

            <div>
                <label>Accepts Orders?</label>
                <input type="checkbox" name="restaurant_accepts_orders" value="1">
            </div>

            <div>
                <label>Accepts Reservations?</label>
                <input type="checkbox" name="restaurant_accepts_reservations" value="1">
            </div>

            <div>
                <label>Restaurant Logo</label>
                <input type="file" name="restaurant_logo">
            </div>

            <div>
                <label>Cover Photo</label>
                <input type="file" name="restaurant_cover_photo">
            </div>

            <div>
                <label>Minimum Order</label>
                <input type="number" step="0.01" name="restaurant_minimum_order">
            </div>

            <div>
                <label>Maximum Order</label>
                <input type="number" step="0.01" name="restaurant_maximum_order">
            </div>

            <div>
                <label>Delivery Fee</label>
                <input type="number" step="0.01" name="restaurant_delivery_fee">
            </div>

            <!-- Cuisine Types (Multiple Checkboxes) -->
            <div>
                <label>Cuisine Types:</label><br>
                @foreach ($cuisineTypes as $cuisine)
                    <input type="checkbox" name="cuisine_types[]" value="{{ $cuisine->id }}">
                    {{ $cuisine->name }}<br>
                @endforeach
            </div>

            <hr>

            <h2>Account Information</h2>

            <!-- User Info -->
            <div>
                <label>Name</label>
                <input type="text" name="user_name" required>
            </div>

            <div>
                <label>Email</label>
                <input type="email" name="user_email" required>
            </div>

            <div>
                <label>Password</label>
                <input type="password" name="user_password" required>
            </div>

            <div>
                <label>Confirm Password</label>
                <input type="password" name="user_password_confirmation" required>
            </div>

            <button type="submit" style="margin: 40px 0">Register Restaurant</button>
        </form>
    </div>
@endsection
