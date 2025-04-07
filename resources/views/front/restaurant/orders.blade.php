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
                                                                data-target={{ "#order_detail_". $order->id }}>FB{{ sprintf('%05d', $order->id) }}</a></div>
                                                            <div>{{ $order->user->name }}</div>
                                                            <div>{{ \Carbon\Carbon::parse($order->order_date)->format('M j, Y h:i A') }}</div>
                                                            <div>£ {{ $order->total }}</div>
                                                            <div><span class="order-status" style="background-color: #1e73be;">Processing</span>
                                                            </div>
                                                            <div><a href="#" data-toggle="modal"
                                                                    data-target="#order-det-22606"><i
                                                                        class="icon-plus2 text-color"></i></a></div>
                                                        </li>
                                                        <div class="modal fade menu-order-detail order-detail" id={{ "order_detail_". $order->id }}
                                                            tabindex="-1" role="dialog" style="display: none;">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal"
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
                                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                        <div class="list-detail-options has-checkbox">
                                                                                            <h3>
                                                                                                Restaurant Demo </h3>
                                                                                            <ul class="order-detail-options">
                                                                                                <li class="order-number">
                                                                                                    <strong>Order ID:</strong>
                                                                                                    <span>22606</span>
                                                                                                </li>
                                                                                                <li class="req-delivery">
                                                                                                    <strong>Delivery Time:</strong>
                                                                                                    <span>10 Minutes </span>
                                                                                                </li>
                                                                                                <li class="created-date">
                                                                                                    <strong>Delivery Date:</strong>
                                                                                                    <span>
                                                                                                        Apr 9, 2020 06:38 AM </span>
                                                                                                </li>
                                                                                                <li class="order-type">
                                                                                                    <strong>Type:</strong>
                                                                                                    <span>order</span>
                                                                                                </li>
                                                                                                <li class="order-type">
                                                                                                    <strong>Payment Status:</strong>
                                                                                                    <span>Approved</span>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                        <div class="customer-detail-holder">
                                                                                            <h3>Customer Detail</h3>
                                                                                            <ul class="customer-detail">
                                                                                                <li>
                                                                                                    <strong>Name :</strong>
                                                                                                    <span>Buyer Demo</span>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <strong>Phone Number :</strong>
                                                                                                    <span>0123456789</span>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <strong>Email :</strong>
                                                                                                    <span>dum4@chimpgroup.com</span>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <strong>Address :</strong>
                                                                                                    <span>London</span>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="order-status-holder">
                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                                                                                    <h3>Order Status </h3>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                                                                                                    <div class="input-field">
                                                                                                        <select
                                                                                                            class="chosen-select-no-single">
                                                                                                            <option value="Processing">
                                                                                                                Processing</option>
                                                                                                            <option value="Cancelled">
                                                                                                                Cancelled</option>
                                                                                                            <option selected="selected"
                                                                                                                value="Completed">
                                                                                                                Completed</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <h2 class="heading">Food Menu</h2>
                                                                                        <div class="responsive-table">
                                                                                            <ul class="categories-order table-generic">
                                                                                                <li class="order-heading-titles">
                                                                                                    <div>Products</div>
                                                                                                    <div>Price per</div>
                                                                                                </li>
                                                                                                <li class="order-heading-titles">
                                                                                                    <div>
                                                                                                        <h4>Pizzas</h4>
                                                                                                        <h5>Foodbakery Special 9" Deep
                                                                                                            Pan</h5>
                                                                                                    </div>
                                                                                                    <div><span
                                                                                                            class="category-price">£4.80</span>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="order-heading-titles">
                                                                                                    <div>
                                                                                                        <h4>Pizzas</h4>
                                                                                                        <h5>Foodbakery Special 9" Deep
                                                                                                            Pan</h5>
                                                                                                    </div>
                                                                                                    <div><span
                                                                                                            class="category-price">£4.80</span>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="order-heading-titles">
                                                                                                    <div>
                                                                                                        <h4>Pizzas</h4>
                                                                                                        <h5>Foodbakery Special 12" Deep
                                                                                                            Pan</h5>
                                                                                                    </div>
                                                                                                    <div><span
                                                                                                            class="category-price">£3.90</span>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="order-heading-titles">
                                                                                                    <div>
                                                                                                        <h4>Garlic Bread</h4>
                                                                                                        <h5>Garlic Bread 12" Deep</h5>
                                                                                                    </div>
                                                                                                    <div><span
                                                                                                            class="category-price">£3.50</span>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="order-heading-titles">
                                                                                                    <div>
                                                                                                        <h4>Kebabs</h4>
                                                                                                        <h5>Kebabs With Naan</h5>
                                                                                                    </div>
                                                                                                    <div><span
                                                                                                            class="category-price">£4.50</span>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="order-heading-titles">
                                                                                                    <div>
                                                                                                        <h4>Burgers</h4>
                                                                                                        <h5>Quarter Pounder</h5>
                                                                                                    </div>
                                                                                                    <div><span
                                                                                                            class="category-price">£3.00</span>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="row">
                                                                                            <div
                                                                                                class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                                <h3>Order Total</h3>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                                <ul
                                                                                                    class="order-detail-options order-total">
                                                                                                    <li class="created-date">
                                                                                                        <strong>Subtotal:</strong>
                                                                                                        <span>£24.50</span>
                                                                                                    </li>
                                                                                                    <li class="order-type">
                                                                                                        <strong>
                                                                                                            Pick Up Fee: </strong>
                                                                                                        <span>£10.00</span>
                                                                                                    </li>
                                                                                                    <li class="order-type">
                                                                                                        <strong>VAT (13%)</strong>
                                                                                                        <span>£4.48</span>
                                                                                                    </li>
                                                                                                    <li class="order-type total-price">
                                                                                                        <strong>Total:</strong>
                                                                                                        <span>£38.99</span>
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
                                                            })(jQuery);
                                                        </script>
                                                    @endforeach
                                                </ul>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <ul class="pagination">
                                    <li class="active"><a>1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><span class="page-numbers dots">…</span></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">Next </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Section End -->
@endsection
