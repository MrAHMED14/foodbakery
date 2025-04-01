@extends('front.restaurant.master')

@section('title')
    Restaurant || Restaurant Statements
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
                        <div class="user-holder">
                            <div class="element-title has-border right-filters-row">
                                <h5>Statements</h5>
                                <div class="right-filters row">
                                    <div class="col-lg-6 col-md-6 col-xs-6 pull-right">
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
                            <div class="responsive-table">
                                <ul class="table-generic">
                                    <li class="order-heading-titles">
                                        <div>Transaction ID</div>
                                        <div>Order ID</div>
                                        <div>Date</div>
                                        <div>Detail</div>
                                        <div>Amount</div>
                                    </li>
                                    <li class="order-heading-titles">
                                        <div>#65905526</div>
                                        <div><a href="restaurant-orders.html" class="orders-tab-link">22618</a></div>
                                        <div>Apr 9,2020</div>
                                        <div>Package - Premium</div>
                                        <div>£101.70</div>
                                    </li>
                                    <li class="order-heading-titles">
                                        <div>#97756121</div>
                                        <div><a href="restaurant-orders.html" class="orders-tab-link">22606</a></div>
                                        <div>Apr 9,2020</div>
                                        <div>Commission - for sale</div>
                                        <div>£3.90</div>
                                    </li>
                                    <li class="order-heading-titles">
                                        <div>#97756121</div>
                                        <div><a href="restaurant-orders.html" class="orders-tab-link">22606</a></div>
                                        <div>Apr 9,2020</div>
                                        <div>Sale - Restaurant Demo</div>
                                        <div>£35.09</div>
                                    </li>
                                    <li class="order-heading-titles">
                                        <div>#11603355</div>
                                        <div><a href="restaurant-orders.html" class="orders-tab-link">22594</a></div>
                                        <div>Apr 9,2020</div>
                                        <div>Sale - Restaurant Demo</div>
                                        <div>£34.07</div>
                                    </li>
                                    <li class="order-heading-titles">
                                        <div>#11603355</div>
                                        <div><a href="restaurant-orders.html" class="orders-tab-link">22594</a></div>
                                        <div>Apr 9,2020</div>
                                        <div>Commission - for sale</div>
                                        <div>£3.79</div>
                                    </li>
                                    <li class="order-heading-titles">
                                        <div>#20204183</div>
                                        <div><a href="restaurant-orders.html" class="orders-tab-link">22589</a></div>
                                        <div>Apr 9,2020</div>
                                        <div>Sale - Restaurant Demo</div>
                                        <div>£23.60</div>
                                    </li>
                                </ul>
                            </div>
                            <ul class="pagination">
                                <li class="active"><a>1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><span class="page-numbers dots">…</span></li>
                                <li><a href="#">25</a></li>
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
