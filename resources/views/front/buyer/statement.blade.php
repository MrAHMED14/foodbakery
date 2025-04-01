@extends('front.buyer.master')

@section('title')
    Restaurant || Statement
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
                                        <div>#11603355</div>
                                        <div><a href="buyer-orders.html" class="orders-tab-link">22594</a></div>
                                        <div>Apr 9,2020</div>
                                        <div>Order - Restaurant Demo</div>
                                        <div>£37.86</div>
                                    </li>
                                    <li class="order-heading-titles">
                                        <div>#20204183</div>
                                        <div><a href="buyer-orders.html" class="orders-tab-link">22589</a></div>
                                        <div>Apr 9,2020</div>
                                        <div>Order - Restaurant Demo</div>
                                        <div>£26.22</div>
                                    </li>
                                    <li class="order-heading-titles">
                                        <div>#21617248</div>
                                        <div><a href="buyer-orders.html" class="orders-tab-link">22469</a></div>
                                        <div>Mar 31,2020</div>
                                        <div>Order - Restaurant Demo</div>
                                        <div>£66.25</div>
                                    </li>
                                    <li class="order-heading-titles">
                                        <div>#56656270</div>
                                        <div><a href="buyer-orders.html" class="orders-tab-link">22413</a></div>
                                        <div>Mar 27,2020</div>
                                        <div>Order - Restaurant Demo</div>
                                        <div>£25.43</div>
                                    </li>
                                    <li class="order-heading-titles">
                                        <div>#40728501</div>
                                        <div><a href="buyer-orders.html" class="orders-tab-link">22360</a></div>
                                        <div>Mar 26,2020</div>
                                        <div>Order - Restaurant Demo</div>
                                        <div>£29.38</div>
                                    </li>
                                </ul>
                            </div>
                            <ul class="pagination">
                                <li class="active"><a>1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><span class="page-numbers dots">…</span></li>
                                <li><a href="#">15</a></li>
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
