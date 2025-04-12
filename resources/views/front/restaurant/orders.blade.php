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
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="element-title has-border right-filters-row">
                                            <h5>ORDERS</h5>
                                            <div class="right-filters row pull-right">
                                                <div class="col-lg-6 col-md-6 col-xs-6">
                                                    <div class="input-field">
                                                        <select class="chosen-select-no-single">
                                                            <option selected="selected" value="">Select Orders Status
                                                            </option>
                                                            <option value="Processing">Processing</option>
                                                            <option value="Cancelled">Cancelled</option>
                                                            <option value="Completed">Completed</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-xs-6">
                                                    <div class="input-field">
                                                        <i class="icon-angle-down"></i>
                                                        <input type="text" data-id="daterange223" id="daterange"
                                                            value="" placeholder="Select Date Range">
                                                        <script>
                                                            $(function() {
                                                                $('input[data-id="daterange223"]').daterangepicker({
                                                                    opens: 'left'
                                                                }, function(start, end, label) {
                                                                    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                                                                        .format('YYYY-MM-DD'));
                                                                });
                                                            });
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="user-orders-list">
                                            @if ($orders->isEmpty())
                                                <ul class="table-generic" id="portfolio">
                                                    <li style="width: 100%;">
                                                        <h3 style="text-align: center; padding: 20px; margin: 50px 0 50px;">
                                                            No orders have been made so far.
                                                        </h3>
                                                    </li>
                                                </ul>
                                            @else
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
                                                                        data-target={{ '#order_detail_' . $order->id }}>FB{{ sprintf('%05d', $order->id) }}</a>
                                                                </div>
                                                                <div>{{ $order->user->name }}</div>
                                                                <div>
                                                                    {{ \Carbon\Carbon::parse($order->order_date)->format('M j, Y h:i A') }}
                                                                </div>
                                                                <div>£ {{ $order->total }}</div>
                                                                <div><span class="order-status"
                                                                        style="background-color: #1e73be;">Processing</span>
                                                                </div>
                                                                <div><a href="#" data-toggle="modal"
                                                                        data-target={{ '#order_detail_' . $order->id }}><i
                                                                            class="icon-plus2 text-color"></i></a>
                                                                </div>
                                                            </li>

                                                            <div class="modal fade menu-order-detail order-detail"
                                                                id={{ 'order_detail_' . $order->id }} tabindex="-1"
                                                                role="dialog" style="display: none;">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal"
                                                                                aria-label="Close"><span
                                                                                    aria-hidden="true">×</span></button>
                                                                            <h2>Order Detail</h2>
                                                                            <button class="btn-print"><i
                                                                                    class="icon-printer"></i><span>Receipt</span></button>
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
                                                                                                        <span>{{ sprintf('%05d', $order->id) }}</span>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <strong>Name
                                                                                                            :</strong>
                                                                                                        <span>{{ $order->user->name }}</span>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <strong>Phone Number
                                                                                                            :</strong>
                                                                                                        <span>{{ $order->user->phone }}</span>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <strong>Email
                                                                                                            :</strong>
                                                                                                        <span>{{ $order->user->email }}</span>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <strong>State
                                                                                                            :</strong>
                                                                                                        <span>{{ $order->state }}</span>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <strong>city
                                                                                                            :</strong>
                                                                                                        <span>{{ $order->city }}</span>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <strong>Address
                                                                                                            :</strong>
                                                                                                        <span>{{ $order->address }}</span>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="created-date">
                                                                                                        <strong>Delivery
                                                                                                            Date:</strong>
                                                                                                        <span>
                                                                                                            {{ \Carbon\Carbon::parse($order->order_date)->format('M j, Y h:i A') }}
                                                                                                        </span>
                                                                                                    </li>
                                                                                                    <li class="order-type">
                                                                                                        <strong>Type:</strong>
                                                                                                        <span>{{ $order->order_type }}</span>
                                                                                                    </li>
                                                                                                    <li class="order-type">
                                                                                                        <strong>Payment
                                                                                                            Status:</strong>
                                                                                                        <span>{{ $order->payment_status }}</span>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div
                                                                                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div
                                                                                                class="order-status-holder">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                                                                                        <h3>Order
                                                                                                            Status
                                                                                                        </h3>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                                                                                                        <div
                                                                                                            class="input-field">
                                                                                                            <select
                                                                                                                class="chosen-select-no-single">
                                                                                                                <option
                                                                                                                    value="Processing">
                                                                                                                    Processing
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="Cancelled">
                                                                                                                    Cancelled
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    selected="selected"
                                                                                                                    value="Completed">
                                                                                                                    Completed
                                                                                                                </option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
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
                                                                                                            per
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
                                                                                                            <div><span
                                                                                                                    class="category-price">£{{ $orderLine->dish->price }}</span>
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
                                                                                                            <span>£{{ $order->total }}</span>
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
                                                            <script>
                                                                (function($) {
                                                                    $(document).ready(function() {
                                                                        $(".order-detail .modal-dialog .modal-content").mCustomScrollbar({
                                                                            setHeight: 724,
                                                                            theme: "minimal-dark",
                                                                            mouseWheelPixels: 100
                                                                        });
                                                                    });
                                                                })
                                                                (jQuery);
                                                            </script>
                                                        @endforeach
                                                    </ul>

                                                </div>
                                            @endif
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
