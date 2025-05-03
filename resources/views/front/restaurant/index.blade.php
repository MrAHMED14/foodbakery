@php
    $restaurant = Auth::user()->restaurant;
@endphp

@extends('front.restaurant.master')

@section('title')
    My Restaurant
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
                                @if ($restaurant->is_verified)
                                    <div class="user-message" style="background-color:#1e73be;">
                                        <h2 style="text-align: center;">Welcome to your Restaurant.</h2>
                                    </div>
                                @else
                                    <div class="user-message" style="background-color: #FF9B17;">
                                        <h2 style="color: #131010 !important;">
                                            <i class="icon-warning"></i>
                                            Your restaurant is not verified yet.
                                        </h2>
                                    </div>
                                @endif
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="element-title has-border right-filters-row">
                                            <h5>Recent Orders</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="user-orders-list">
                                            <div class="responsive-table">
                                                <ul class="table-generic">
                                                    <li class="order-heading-titles">
                                                        <div>Order id</div>
                                                        <div>Customer</div>
                                                        <div>Date</div>
                                                        <div>Total Price</div>
                                                        <div>Status</div>
                                                        <div>Detail</div>
                                                    </li>

                                                    @foreach ($orders as $order)
                                                        <li class="order-heading-titles">
                                                            <div><a href="#" data-toggle="modal"
                                                                    data-target={{ '#order_detail_' . $order->id }}>
                                                                    #{{ $order->id }}</a>
                                                            </div>
                                                            <div>{{ $order->user->name }}</div>
                                                            <div>
                                                                {{ \Carbon\Carbon::parse($order->order_date)->format('M j, Y h:i A') }}
                                                            </div>
                                                            <div>@currency($order->total)</div>
                                                            <div>
                                                                @if ($order->status == 'Processing')
                                                                    <span class="order-status"
                                                                        style="background-color: #1e73be;">{{ $order->status }}</span>
                                                                @elseif ($order->status == 'Cancelled')
                                                                    <span class="order-status"
                                                                        style="background-color: #dd3333;">{{ $order->status }}</span>
                                                                @elseif ($order->status == 'Completed')
                                                                    <span class="order-status"
                                                                        style="background-color: #047a06;">{{ $order->status }}</span>
                                                                @endif
                                                            </div>
                                                            <div><a href="#" data-toggle="modal"
                                                                    data-target={{ '#order_detail_' . $order->id }}><i
                                                                        class="icon-plus2 text-color"></i></a>
                                                            </div>
                                                        </li>

                                                        <div class="modal fade menu-order-detail order-detail"
                                                            id={{ 'order_detail_' . $order->id }} tabindex="-1"
                                                            role="dialog" style="display: none; overflow: auto; -ms-overflow-style: none; scrollbar-width: none;" onwheel="this.style.scrollbarWidth='none'" onscroll="this.style.scrollbarWidth='none'">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">×</span></button>
                                                                        <h2>Order Detail</h2>
                                                                        <a href="{{ route('orders.receipt', $order->id) }}"
                                                                            target="_blank" class="btn-print">
                                                                            <i class="icon-printer"></i>
                                                                            <span>Receipt</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="order-detail-inner">
                                                                            <div class="description-holder">
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                        <div
                                                                                            class="customer-detail-holder">
                                                                                            <h3>Customer Detail
                                                                                            </h3>
                                                                                            <ul class="customer-detail">
                                                                                                <li
                                                                                                    class="order-number">
                                                                                                    <strong>Order
                                                                                                        ID:</strong>
                                                                                                    <span>#{{ $order->id }}</span>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <strong>Name
                                                                                                        :</strong>
                                                                                                    <span>{{ $order->user->name }}</span>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <strong>Phone
                                                                                                        :</strong>
                                                                                                    <span>{{ $order->user->phone ?? 'NULL' }}</span>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <strong>Email
                                                                                                        :</strong>
                                                                                                    <span>{{ $order->user->email }}</span>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <strong>Wilaya
                                                                                                        :</strong>
                                                                                                    <span>{{ $order->wilaya }}</span>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <strong>Commune
                                                                                                        :</strong>
                                                                                                    <span>{{ $order->commune }}</span>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <strong>Address
                                                                                                        :</strong>
                                                                                                    <span>{{ $order->address }}</span>
                                                                                                </li>
                                                                                                <li
                                                                                                    class="created-date">
                                                                                                    <strong>Order
                                                                                                        Date:</strong>
                                                                                                    <span>
                                                                                                        {{ \Carbon\Carbon::parse($order->order_date)->format('M j, Y h:i A') }}
                                                                                                    </span>
                                                                                                </li>
                                                                                                <li class="order-type">
                                                                                                    <strong>Type:</strong>
                                                                                                    <span>{{ $order->order_type }}</span>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div
                                                                                            class="order-status-holder">
                                                                                            <form
                                                                                                action="{{ route('restaurant.orders.updateStatus', $order->id) }}"
                                                                                                method="POST">
                                                                                                @csrf
                                                                                                @method('PUT')

                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                                                                                        <h3>Order Status
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                                                                                                        <div
                                                                                                            class="input-field">
                                                                                                            <select
                                                                                                                name="status"
                                                                                                                class="chosen-select-no-single"
                                                                                                                onchange="this.form.submit()">
                                                                                                                <option
                                                                                                                    value="Processing"
                                                                                                                    {{ $order->status == 'Processing' ? 'selected' : '' }}>
                                                                                                                    Processing
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="Cancelled"
                                                                                                                    {{ $order->status == 'Cancelled' ? 'selected' : '' }}>
                                                                                                                    Cancelled
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="Completed"
                                                                                                                    {{ $order->status == 'Completed' ? 'selected' : '' }}>
                                                                                                                    Completed
                                                                                                                </option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>

                                                                                        </div>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <h2 class="heading">Food
                                                                                            Menu</h2>
                                                                                        <div class="responsive-table">
                                                                                            <ul
                                                                                                class="categories-order table-generic">
                                                                                                <li
                                                                                                    class="order-heading-titles">
                                                                                                    <div>
                                                                                                        Products
                                                                                                    </div>
                                                                                                    <div>Price
                                                                                                    </div>
                                                                                                </li>

                                                                                                @foreach ($order->orderLines as $orderLine)
                                                                                                    <li
                                                                                                        class="order-heading-titles">
                                                                                                        <div>
                                                                                                            <h4>{{ $orderLine->dish->name }}
                                                                                                            </h4>
                                                                                                            <h5>{{ $orderLine->dish->description }}
                                                                                                            </h5>
                                                                                                        </div>
                                                                                                        <div>
                                                                                                            <span
                                                                                                                class="category-price"
                                                                                                                style="display: inline-block;">@currency($orderLine->dish->price)
                                                                                                                x{{ $orderLine->quantity }}</span>
                                                                                                        </div>
                                                                                                    </li>
                                                                                                @endforeach
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="row">
                                                                                            <div
                                                                                                class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                                <ul
                                                                                                    class="order-detail-options order-total">
                                                                                                    <li
                                                                                                        class="order-type total-price">
                                                                                                        <strong>Total:</strong>
                                                                                                        <span>@currency($order->total)</span>
                                                                                                    </li>
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
                                                    @endforeach
                                                </ul>

                                                @if ($orders->isEmpty())
                                                    <div style="width: 100%; text-align: center; margin-bottom: 20px;">Nothing to show</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Pagination --}}
                                @if ($orders->hasPages())
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="page-nation">
                                                {{ $orders->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Section End -->
@endsection
