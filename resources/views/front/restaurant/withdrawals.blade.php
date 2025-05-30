@extends('front.restaurant.master')

@section('title')
    Restaurant || Withdrawals
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
                            <div class="publisher-withdrawal-form">
                                <div class="element-title has-border right-filters-row">
                                    <h5>Withdrawals</h5>
                                    <div class="right-filters row pull-right">
                                        <div class="col-lg-6 col-md-6 col-xs-6 text-right">
                                            <button id="dev-open-withdraw-req-box" class="btn-submit" type="button">Withdrawal Request</button>
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
                            <div class="responsive-table">
                                <ul class="table-generic">
                                    <li class="order-heading-titles">
                                        <div>Id</div>
                                        <div>Date</div>
                                        <div>Amount</div>
                                        <div>Status</div>
                                    </li>
                                    <li class="order-heading-titles">
                                        <div>withdrawal-22623</div>
                                        <div>Apr 9,2020</div>
                                        <div>£10.00</div>
                                        <div>Pending</div>
                                    </li>
                                    <li class="order-heading-titles">
                                        <div>withdrawal-22622</div>
                                        <div>Apr 9,2020</div>
                                        <div>£10.00</div>
                                        <div>Approved</div>
                                    </li>
                                    <li class="order-heading-titles">
                                        <div>withdrawal-22621</div>
                                        <div>Apr 9,2020</div>
                                        <div>£20.00</div>
                                        <div>Approved</div>
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
<!-- Main Section End -->
@endsection
