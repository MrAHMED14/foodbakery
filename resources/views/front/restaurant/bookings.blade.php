@extends('front.restaurant.master')

@section('title')
    Restaurant || Account Setting
@endsection

@section('content')
<!-- Main Section Start -->
<div class="main-section">
    <div class="page-section restaurant-detail-image-section" style=" background: url({{asset('front/extra-images/cover-photo01.jpg')}}) no-repeat scroll 0 0 / cover;">
        <!-- Container Start -->
        <div class="container">
            <!-- Row Start -->
            <div class="row">
                <!-- Column Start -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="company-info-detail">
                        <div class="company-info">
                            <div class="img-holder">
                                <figure>
                                    <img src="{{asset('front/extra-images/listing-logo18.png')}}" alt="">
                                </figure>
                            </div>

                            <div class="text-holder">
                                <span class="restaurant-title">Restaurant Demo</span>
                                <div class="text">
                                    <i class="icon-local_pizza"></i>
                                    <p>Apple Juice</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <div class="page-section account-header buyer-logged-in">
        <div class="container">
            <div class="row">
                <!-- ========== menu Start ========== -->
                @include('front.restaurant.body.menu')
                <!-- menu End -->
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="user-dashboard loader-holder">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="element-title has-border right-filters-row">
                                    <h5>Recent Bookings</h5>
                                    <div class="right-filters row pull-right">
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <div class="input-field">
                                                <select class="chosen-select-no-single">
                                                    <option selected="selected" value="">Select Booking Status</option>
                                                    <option value="Processing">Processing</option>
                                                    <option value="Cancelled">Cancelled</option>
                                                    <option value="Completed">Completed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <div class="input-field">
                                                <i class="icon-angle-down"></i>
                                                <input type="text" data-id="daterange223" id="daterange" value="" placeholder="Select Date Range">
                                                <script>
                                                    $(function () {
                                                        $('input[data-id="daterange223"]').daterangepicker({
                                                            opens: 'left'
                                                        }, function (start, end, label) {
                                                            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
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
                                <div class="user-orders-list responsive-table">
                                    <ul class="table-generic" id="portfolio">
                                        <li>
                                            <div class="orders-title">Customer Name</div>
                                            <div class="orders-date">Date</div>
                                            <div class="orders-type">Status</div>
                                            <div class="orders-price">Detail</div>
                                        </li>
                                        <li>
                                            <div class="orders-title">
                                                <h6 class="order-title">
                                                    <a href="#" data-toggle="modal" data-target="#booking-detail-22603">Buyer Demo </a>
                                                    <span>( #22603 )</span>
                                                </h6>
                                            </div>
                                            <div class="orders-date">
                                                <span>Apr 9,2020</span>
                                            </div>
                                            <div class="orders-status">
                                                <span class="booking-status" style="background-color: #047a06;">Completed</span>
                                            </div>
                                            <div class="orders-price">
                                                <a href="#" data-toggle="modal" data-target="#booking-detail-22603"><i class="icon-plus2 text-color"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="orders-title">
                                                <h6 class="order-title">
                                                    <a href="#" data-toggle="modal" data-target="#booking-detail-22603">Buyer Demo </a>
                                                    <span>( #22600 )</span>
                                                </h6>
                                            </div>
                                            <div class="orders-date">
                                                <span>Apr 9,2020</span>
                                            </div>
                                            <div class="orders-status">
                                                <span class="booking-status" style="background-color: #1e73be;">Processing</span>
                                            </div>
                                            <div class="orders-price">
                                                <a href="#" data-toggle="modal" data-target="#booking-detail-22603"><i class="icon-plus2 text-color"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="orders-title">
                                                <h6 class="order-title">
                                                    <a href="#" data-toggle="modal" data-target="#booking-detail-22603">Buyer Demo </a>
                                                    <span>( #22445 )</span>
                                                </h6>
                                            </div>
                                            <div class="orders-date">
                                                <span>Mar 30,2020</span>
                                            </div>
                                            <div class="orders-status">
                                                <span class="booking-status" style="background-color: #047a06;">Completed</span>
                                            </div>
                                            <div class="orders-price">
                                                <a href="#" data-toggle="modal" data-target="#booking-detail-22603"><i class="icon-plus2 text-color"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="orders-title">
                                                <h6 class="order-title">
                                                    <a href="#" data-toggle="modal" data-target="#booking-detail-22603">Buyer Demo </a>
                                                    <span>( #22438 )</span>
                                                </h6>
                                            </div>
                                            <div class="orders-date">
                                                <span>Mar 30,2020</span>
                                            </div>
                                            <div class="orders-status">
                                                <span class="booking-status" style="background-color: #047a06;">Completed</span>
                                            </div>
                                            <div class="orders-price">
                                                <a href="#" data-toggle="modal" data-target="#booking-detail-22603"><i class="icon-plus2 text-color"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="orders-title">
                                                <h6 class="order-title">
                                                    <a href="#" data-toggle="modal" data-target="#booking-detail-22603">Buyer Demo </a>
                                                    <span>( #22149 )</span>
                                                </h6>
                                            </div>
                                            <div class="orders-date">
                                                <span>Mar 15,2020</span>
                                            </div>
                                            <div class="orders-status">
                                                <span class="booking-status" style="background-color: #047a06;">Completed</span>
                                            </div>
                                            <div class="orders-price">
                                                <a href="#" data-toggle="modal" data-target="#booking-detail-22603"><i class="icon-plus2 text-color"></i></a>
                                            </div>
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
<!-- Main Section End -->
@endsection
