@extends('front.restaurant.master')

@section('title')
    Booking
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
                                                <form method="GET" action="{{ route('restaurant.bookings') }}">
                                                    <div class="input-field">
                                                        <select class="chosen-select-no-single" name="status"
                                                            onchange="this.form.submit()">
                                                            <option value="">All Statuses</option>
                                                            <option value="Processing"
                                                                {{ request('status') == 'Processing' ? 'selected' : '' }}>
                                                                Processing</option>
                                                            <option value="Completed"
                                                                {{ request('status') == 'Completed' ? 'selected' : '' }}>
                                                                Completed</option>
                                                            <option value="Cancelled"
                                                                {{ request('status') == 'Cancelled' ? 'selected' : '' }}>
                                                                Cancelled</option>
                                                        </select>
                                                    </div>
                                                </form>
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
                                                            <h6 class="reservation-title">
                                                                <span>
                                                                    (#{{ $reservation->id }})
                                                                </span>

                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#booking-detail-{{ $reservation->id }}">{{ $reservation->user->name }}</a>
                                                            </h6>
                                                        </div>
                                                        <div class="orders-date">
                                                            <span>{{ $reservation->reservation_date->format('M j, Y \a\t h:i A') }} to {{ $reservation->end_time->format('h:i A') }}</span>
                                                        </div>
                                                        <div class="orders-status">
                                                            @if ($reservation->status == 'Processing')
                                                                <span class="order-status"
                                                                    style="background-color: #1e73be;">{{ $reservation->status }}</span>
                                                            @elseif ($reservation->status == 'Cancelled')
                                                                <span class="order-status"
                                                                    style="background-color: #dd3333;">{{ $reservation->status }}</span>
                                                            @elseif ($reservation->status == 'Completed')
                                                                <span class="order-status"
                                                                    style="background-color: #047a06;">{{ $reservation->status }}</span>
                                                            @endif
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
                                                                                <span>#{{ $reservation->id }}</span>
                                                                            </li>
                                                                            <li>
                                                                                <strong>Booking Date :</strong>
                                                                                <span>{{ $reservation->reservation_date->format('M j, Y \a\t h:i A') }} to {{ $reservation->end_time->format('h:i A') }}</span>
                                                                            </li>
                                                                        </ul>
                                                                        <h3>Customer Deatil</h3>
                                                                        <ul class="order-detail-options">
                                                                            <li>
                                                                                <strong>First Name:</strong>
                                                                                <span>{{ $reservation->first_name }}</span>
                                                                            </li>
                                                                            <li>
                                                                                <strong>Last Name:</strong>
                                                                                <span>{{ $reservation->last_name }}</span>
                                                                            </li>
                                                                            <li>
                                                                                <strong>Email:</strong>
                                                                                <span>{{ $reservation->user->email }}</span>
                                                                            </li>
                                                                            <li>
                                                                                <strong>Number of Tables:</strong>
                                                                                <span>{{ $reservation->nbr_table }}
                                                                                    table{{ $reservation->nbr_table > 1 ? 's' : '' }}</span>
                                                                            </li>
                                                                            <li>
                                                                                <strong>Description:</strong>
                                                                                <span>{{ $reservation->description ?? 'NULL' }}</span>
                                                                            </li>
                                                                        </ul>
                                                                        <h3>Booking Status </h3>
                                                                        <div class="booking-status-holder">
                                                                            <form
                                                                                action="{{ route('restaurant.bookings.updateStatus', $reservation->id) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('PUT')

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                                                                                        <div class="input-field">
                                                                                            <select name="status"
                                                                                                class="chosen-select-no-single"
                                                                                                onchange="this.form.submit()">
                                                                                                <option value="Processing"
                                                                                                    {{ $reservation->status == 'Processing' ? 'selected' : '' }}>
                                                                                                    Processing
                                                                                                </option>
                                                                                                <option value="Cancelled"
                                                                                                    {{ $reservation->status == 'Cancelled' ? 'selected' : '' }}>
                                                                                                    Cancelled
                                                                                                </option>
                                                                                                <option value="Completed"
                                                                                                    {{ $reservation->status == 'Completed' ? 'selected' : '' }}>
                                                                                                    Completed
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>

                                                                        <h3>Payement Status</h3>
                                                                        <div class="booking-status-holder">
                                                                            <form
                                                                                action="{{ route('restaurant.bookings.update.payment', $reservation->id) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('PUT')

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                                                                                        <div
                                                                                            class="input-field">
                                                                                            <select
                                                                                                name="payment_status"
                                                                                                class="chosen-select-no-single"
                                                                                                onchange="this.form.submit()">

                                                                                                <option
                                                                                                    value="Pending"
                                                                                                    {{ $reservation->payment_status == 'Pending' ? 'selected' : '' }}>
                                                                                                    Pending
                                                                                                </option>
                                                                                                <option
                                                                                                    value="Completed"
                                                                                                    {{ $reservation->payment_status == 'Completed' ? 'selected' : '' }}>
                                                                                                    Completed
                                                                                                </option>
                                                                                                <option
                                                                                                    value="Failed"
                                                                                                    {{ $reservation->payment_status == 'Failed' ? 'selected' : '' }}>
                                                                                                    Failed
                                                                                                </option>
                                                                                                <option
                                                                                                    value="Refunded"
                                                                                                    {{ $reservation->payment_status == 'Refunded' ? 'selected' : '' }}>
                                                                                                    Refunded
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
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
                                        $(".menu-reservation-info .modal-dialog .modal-content").mCustomScrollbar({
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
