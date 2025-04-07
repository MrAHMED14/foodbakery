@extends('front.restaurant.master')

@section('title')
    Restaurant || Earnings
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
                    <div class="user-dashboard">
                        <div class="user-holder">
                            <ul class="earning-calculation">
                                <li>Earnings of this month is: <strong> £400.06</strong></li>
                                <li>Your balance: <strong> £370.06</strong></li>
                                <li>Total value of your sales : <strong> £444.49</strong></li>
                                <li>Your Total Withdrawals:<a href="#"><span>(View withdrawal history)</span></a><strong> £30</strong></li>
                            </ul>
                            <div class="element-title right-filters-row">
                                <h5>Earnings</h5>
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
                            <div class="earnings-container-inner">
                                <div class="tab-content">
                                    <div id="menu2" class="responsive-table tab-pane fade in active">
                                        <ul class="table-generic">
                                            <li class="order-heading-titles">
                                                <div>Date</div>
                                                <div>Total Sales</div>
                                                <div>Total Earnings</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 10,2020</div>
                                                <div>£50.85</div>
                                                <div>£45.77</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 11,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 12,2020</div>
                                                <div>£31.64</div>
                                                <div>£28.48</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 13,2020</div>
                                                <div>£29.95</div>
                                                <div>£26.96</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 14,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 15,2020</div>
                                                <div>£36.73</div>
                                                <div>£33.06</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 16,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 17,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 18,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 19,2020</div>
                                                <div>£33.90</div>
                                                <div>£30.51</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 20,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 21,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 22,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 23,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 24,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 25,2020</div>
                                                <div>£37.29</div>
                                                <div>£33.56</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 26,2020</div>
                                                <div>£29.38</div>
                                                <div>£26.44</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 27,2020</div>
                                                <div>£25.43</div>
                                                <div>£22.89</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 28,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 29,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 30,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Mar 31,2020</div>
                                                <div>£66.25</div>
                                                <div>£59.63</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Apr 1,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Apr 2,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Apr 3,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Apr 4,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Apr 5,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Apr 6,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Apr 7,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Apr 8,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Apr 9,2020</div>
                                                <div>£103.07</div>
                                                <div>£92.76</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>Apr 10,2020</div>
                                                <div>£0.00</div>
                                                <div>£0.00</div>
                                            </li>
                                            <li class="order-heading-titles">
                                                <div>&nbsp;</div>
                                                <div><b>Total Earnings:</b></div>
                                                <div><b>£400.06</b></div>
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
<!-- Main Section End -->
@endsection
