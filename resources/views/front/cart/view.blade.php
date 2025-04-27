@extends('front.master')

@section('title')
    Restaurant || Cart
@endsection

@section('content')
    <div class="container" style="padding: 100px 0px;">
        <h1>Your Cart</h1>

        <ul>
            @foreach ($cart as $restaurantId => $dishes)
                <li><strong>Restaurant: {{ \App\Models\Restaurant::find($restaurantId)->name }}</strong></li>
                <ul>
                    @foreach ($dishes as $dish)
                        <li>
                            {{ $dish['name'] }} - @currency($dish['price']) x {{ $dish['quantity'] }}
                        </li>
                    @endforeach
                </ul>
            @endforeach
        </ul>

        <h4 style="margin-bottom: 40px;">Total: @currency($totalPrice)</h4>

        <form action="{{ route('checkout') }}" method="POST" style="margin-top: 20px;">
            @csrf
            <div>
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" value="{{ old('address') }}" required>
            </div>

            <div>
                <label for="commune">Commune:</label>
                <input type="text" name="commune" id="commune" value="{{ old('commune') }}" required>
            </div>

            <div>
                <label for="wilaya">Wilaya:</label>
                <input type="text" name="wilaya" id="wilaya" value="{{ old('wilaya') }}" required>
            </div>

            <div>
                <label for="order_type">Order Type:</label>
                <select name="order_type" id="order_type" required>
                    <option value="delivery">Delivery</option>
                    <option value="pickup">Pickup</option>
                </select>
            </div>

            <div>
                <label for="payment_method">Payment Method:</label>
                <select name="payment_method" id="payment_method" required>
                    <option value="credit_card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="cash_on_delivery">Cash on Delivery</option>
                </select>
            </div>

            <button style="margin-top: 20px;" type="submit">Place Order</button>
        </form>
    </div>
@endsection
