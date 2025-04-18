@extends('front.restaurant.master')

@section('title')
    Booking - FoodBakery
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
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="element-title has-border right-filters-row">
                                        <h5>Recent Bookings</h5>
                                        <div class="right-filters row pull-right">
                                            <div class="col-lg-6 col-md-6 col-xs-6">
                                                <div class="input-field">
                                                    <select class="chosen-select-no-single">
                                                        <option selected="selected" value="">Select Booking Status
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
                                    <div class="user-orders-list responsive-table">
                                        <ul class="table-generic" id="portfolio">
                                            @if ($reservations->isEmpty())
                                                <li style="width: 100%;">
                                                    <h3 style="text-align: center; padding: 20px; margin: 50px 0 50px;">
                                                        No reservations have been made so far.
                                                    </h3>
                                                </li>
                                            @else
                                                <li>
                                                    <div class="orders-title">Customer Name</div>
                                                    <div class="orders-date">Date</div>
                                                    <div class="orders-type">Status</div>
                                                    <div class="orders-price">Detail</div>
                                                </li>

                                                @foreach ($reservations as $reservation)
                                                    <li>
                                                        <div class="orders-title">
                                                            <h6 class="order-title">
                                                                <span>
                                                                    (#{{ sprintf('%05d', $reservation->id) }})
                                                                </span>

                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#booking-detail-{{ $reservation->id }}">{{ $reservation->user->name }}</a>
                                                            </h6>
                                                        </div>
                                                        <div class="orders-date">
                                                            <span>{{ $reservation->reservation_date->format('M j, Y \a\t h:i A') }}</span>
                                                        </div>
                                                        <div class="orders-status">
                                                            <span class="booking-status"
                                                                style="background-color: #1e73be;">Processing</span>
                                                        </div>
                                                        <div class="orders-price">
                                                            <a href="#" data-toggle="modal"
                                                                data-target="#booking-detail-{{ $reservation->id }}"><i
                                                                    class="icon-plus2 text-color"></i></a>
                                                        </div>
                                                    </li>

                                                    {{-- Modal --}}
                                                    <div class="modal fade menu-order-detail menu-order-info"
                                                        id="booking-detail-{{ $reservation->id }}" tabindex="-1"
                                                        role="dialog">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content"
                                                                style="padding-bottom: 0; padding-top: 17px;">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close"><span
                                                                            aria-hidden="true">×</span></button>
                                                                    <h2><a>Booking Detail</a></h2>
                                                                </div>
                                                                <div class="modal-body booking-modal-body">
                                                                    <div class="order-detail-inner">
                                                                        <h3>{{ $reservation->user->name }}</h3>
                                                                        <ul class="order-detail-options">
                                                                            <li>
                                                                                <strong>Booking ID :</strong>
                                                                                <span>{{ sprintf('%05d', $reservation->id) }}</span>
                                                                            </li>
                                                                            <li>
                                                                                <strong>Booking Date :</strong>
                                                                                <span>{{ $reservation->reservation_date->format('M j, Y \a\t h:i A') }}</span>
                                                                            </li>
                                                                        </ul>
                                                                        <h3>Customer Deatil</h3>
                                                                        <ul class="order-detail-options">
                                                                            <li>
                                                                                <strong>First Name:</strong>
                                                                                <span>Mark</span>
                                                                            </li>
                                                                            <li>
                                                                                <strong>Last Name:</strong>
                                                                                <span>Jose</span>
                                                                            </li>
                                                                            <li>
                                                                                <strong>Email:</strong>
                                                                                <span>markjose@gmail.com</span>
                                                                            </li>
                                                                            <li>
                                                                                <strong>Number of Tables:</strong>
                                                                                <span>{{ $reservation->nbr_table }}
                                                                                    tables</span>
                                                                            </li>
                                                                            <li class="order-detail-message">
                                                                                <strong>Instructions:</strong>
                                                                                <span>I need to book a special table for
                                                                                    my friends. Make it some
                                                                                    special.!</span>
                                                                            </li>
                                                                        </ul>
                                                                        <h3>Booking Status </h3>
                                                                        <div class="booking-status-holder">
                                                                            <div class="input-field">
                                                                                <select class="chosen-select-no-single">
                                                                                    <option value="Processing">Processing</option>
                                                                                    <option value="Cancelled">Cancelled</option>
                                                                                    <option selected="selected" value="Completed">Completed</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <script>
                                (function($) {
                                    $(document).ready(function() {
                                        $(".menu-order-info .modal-dialog .modal-content").mCustomScrollbar({
                                            setHeight: 467,
                                            theme: "minimal-dark",
                                            mouseWheelPixels: 100
                                        });
                                    });
                                })(jQuery);
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Section End -->
@endsection
