@extends('front.buyer.master')

@section('title')
    Restaurant || Buyer Order
@endsection

@section('content')
    <!-- Main Section Start -->
    <div class="main-section">
        @include('front.buyer.body.header')

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
                                            @if ($orders->isEmpty())
                                                <ul class="table-generic" id="portfolio">
                                                    <li style="width: 100%;">
                                                        <h3 style="text-align: center; padding: 20px; margin: 50px 0 50px;">
                                                            No orders have been made so far.
                                                        </h3>
                                                    </li>
                                                </ul>
                                            @else
                                                <div class="row">
                                                    @foreach ($orders as $order)
                                                        <x-app.user-order-card :order="$order" />
                                                    @endforeach
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
