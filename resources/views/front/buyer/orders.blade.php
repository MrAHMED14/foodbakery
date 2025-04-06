@extends('front.buyer.master')

@section('title')
    Restaurant || Buyer Order
@endsection

@section('content')
    <!-- Main Section Start -->
    <div class="main-section">
        <div class="page-section restaurant-detail-image-section"
            style=" background: url({{ asset('front/extra-images/banner-img-2.jpg') }}) no-repeat scroll 0 0 / cover;">
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
                                        <img src="{{ asset('front/extra-images/team-medium-img1.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="text-holder">
                                    <span class="restaurant-title">Buyer Demo</span>
                                    <ul class="user-info-contact">
                                        <li class="cell"><i class="icon-phone"></i><a href="tel:0123456789">012 3456
                                                789</a></li>
                                        <li class="email"><i class="icon-mail5"></i><a
                                                href="mailto:dum4@chimpgroup.com">dum4@chimpgroup.com</a></li>
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
                                            <h5>My Orders</h5>
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
                                            <div class="row">
                                                @foreach ($orders as $order)
                                                    <x-app.user-order-card :order="$order" />
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Pagination --}}
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="page-nation">
                                            {{ $orders->links('pagination::bootstrap-4') }}
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
    <!-- Main Section End -->
@endsection
