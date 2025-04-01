@extends('front.buyer.master')

@section('title')
    Restaurant || Buyer Booking
@endsection

@section('content')
<!-- Main Section Start -->
<div class="main-section">
    <div class="page-section restaurant-detail-image-section" style=" background: url({{asset('front/extra-images/banner-img-2.jpg')}}) no-repeat scroll 0 0 / cover;">
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
                                    <img src="{{asset('front/extra-images/team-medium-img1.jpg')}}" alt="">
                                </figure>
                            </div>
                            <div class="text-holder">
                                <span class="restaurant-title">Buyer Demo</span>
                                <ul class="user-info-contact">
                                    <li class="cell"><i class="icon-phone"></i><a href="tel:0123456789">012 3456 789</a></li>
                                    <li class="email"><i class="icon-mail5"></i><a href="mailto:dum4@chimpgroup.com">dum4@chimpgroup.com</a></li>
                                </ul>
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
                @include('front.buyer.body.menu')
                <!-- menu End -->
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="user-dashboard loader-holder">
                        <div class="user-holder">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="element-title has-border right-filters-row">
                                        <h5>My Bookings</h5>
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
                                                <div class="orders-title">Restaurant Name</div>
                                                <div class="orders-date">Date</div>
                                                <div class="orders-type">Status</div>
                                                <div class="orders-price">Detail</div>
                                            </li>
                                            <li>
                                                <div class="orders-title">
                                                    <h6 class="order-title">
                                                        <a href="#" data-toggle="modal" data-target="#booking-detail-22603">Restaurant Demo </a>
                                                        <span>( #22603 )</span>
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
                                                        <a href="#" data-toggle="modal" data-target="#booking-detail-22603">Restaurant Demo </a>
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
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#booking-detail-22603">Restaurant Demo </a>
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
                                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#booking-detail-22603"><i class="icon-plus2 text-color"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="orders-title">
                                                    <h6 class="order-title">
                                                        <a href="#" data-toggle="modal" data-target="#booking-detail-22603">Restaurant Demo </a>
                                                        <span>( #22438 )</span>
                                                    </h6>
                                                </div>
                                                <div class="orders-date">
                                                    <span>Mar 30,2020</span>
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
                                                        <a href="#" data-toggle="modal" data-target="#booking-detail-22603">Dragon Express </a>
                                                        <span>( #22405 )</span>
                                                    </h6>
                                                </div>
                                                <div class="orders-date">
                                                    <span>Mar 27,2020</span>
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
                                                        <a href="#" data-toggle="modal" data-target="#booking-detail-22603">Restaurant Demo </a>
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
                                            <script>
                                                (function ($) {
                                                    $(document).ready(function () {
                                                        $(".menu-order-info .modal-dialog .modal-content").mCustomScrollbar({
                                                            setHeight: 467,
                                                            theme: "minimal-dark",
                                                            mouseWheelPixels: 100
                                                        });
                                                    });
                                                })(jQuery);
                                            </script>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination">
                                <li class="active"><a>1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><span class="page-numbers dots">…</span></li>
                                <li><a href="#">24</a></li>
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
