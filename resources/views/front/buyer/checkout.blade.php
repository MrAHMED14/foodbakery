@extends('front.master')

@section('title')
    Restaurant || Checkout
@endsection

@section('content')
    <div class="main-section">
        <div class="page-section nopadding cs-nomargin"
            style="margin-top: 0px;padding-top: 60px;padding-bottom: 60px;margin-bottom: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="user-dashboard loader-holder">
                            <div class="user-holder">
                                <div id="restaurant-sets-holder">
                                    <form class="form-fields-set foodbakery-dev-restaurant-form" method="post">
                                        <ul class="register-add-restaurant-tab-container activation-tab-container"
                                            style="display: block;">
                                            <li>
                                                <h2 style="margin-bottom: 40px;">Checkout</h2>
                                                @if (empty($cart))
                                                    <h4 style="margin-bottom: 20px; padding: 4px;">Your cart is empty.</h4>
                                                @endif
                                                @foreach ($cart as $restaurantId => $dishes)
                                                    <div style="margin-bottom: 30px;">
                                                        <h5 style="margin-bottom: 5px; color: #333;">
                                                            Restaurant:{{ \App\Models\Restaurant::find($restaurantId)->name }}
                                                        </h5>
                                                        <ul style="list-style: none; padding: 0;">
                                                            @foreach ($dishes as $dish)
                                                                <li
                                                                    style="display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px solid #eee;">
                                                                    <div style="color: #555;">
                                                                        {{ $dish['name'] }}
                                                                        <small style="color: #999;">x
                                                                            {{ $dish['quantity'] }}</small>
                                                                    </div>
                                                                    <div style="color: #000; font-weight: bold;">
                                                                        ${{ number_format($dish['price'] * $dish['quantity'], 2) }}
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endforeach
                                                <h5
                                                    style="margin-bottom: 40px; padding: 4px; background-color: rgba(255, 238, 0, 0.384);">
                                                    Total: ${{ $totalPrice }}
                                                </h5>

                                                <form action="{{ route('order.checkout.store') }}" method="POST"
                                                    style="margin-top: 20px;">
                                                    @csrf
                                                    <h4>Order Details</h4>
                                                    <div class="field-holder">
                                                        <label for="address">Address:</label>
                                                        <input type="text" name="address" id="address"
                                                            placeholder="Enter your address" required>

                                                            @error('address')
                                                            <div class="text-danger" style="font-size: 12px;">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="field-holder">
                                                        <label for="city">City:</label>
                                                        <input type="text" name="city" id="city"
                                                            placeholder="Enter your city" required>

                                                        @error('city')
                                                            <div class="text-danger" style="font-size: 12px;">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="field-holder">
                                                        <label for="state">State:</label>
                                                        <input type="text" name="state" id="state"
                                                            placeholder="Enter your state" required>

                                                        @error('state')
                                                            <div class="text-danger" style="font-size: 12px;">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror

                                                    </div>

                                                    <div class="field-holder">
                                                        <label for="order_type">Order Type:</label>
                                                        <select name="order_type" id="order_type" required>
                                                            <option value="delivery">Delivery</option>
                                                            <option value="pickup">Pickup</option>
                                                        </select>

                                                        @error('order_type')
                                                            <div class="text-danger" style="font-size: 12px;">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="field-holder">
                                                        <label for="payment_method">Payment Method:</label>
                                                        <select name="payment_method" id="payment_method" required>
                                                            <option value="credit_card">Credit Card</option>
                                                            <option value="paypal">PayPal</option>
                                                            <option value="cash_on_delivery">Cash on Delivery</option>
                                                        </select>

                                                        @error('payment_method')
                                                            <div class="text-danger" style="font-size: 12px;">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <button type="submit" class="btn-submit"
                                                        style="margin-bottom: 30px">Place Order</button>
                                                </form>
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
@endsection
