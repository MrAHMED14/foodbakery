@extends('front.buyer.master')

@section('title')
    My Booking
@endsection

@section('content')
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
                                            <h5>My Bookings</h5>
                                            <div class="right-filters row pull-right">
                                                <div class="col-lg-6 col-md-6 col-xs-6">
                                                    <form method="GET" action="{{ route('buyer.bookings') }}">
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
                                                        <div class="orders-title">Restaurant Name</div>
                                                        <div class="orders-date">Date</div>
                                                        <div class="orders-type">Status</div>
                                                        <div class="orders-price">Detail</div>
                                                    </li>

                                                    @foreach ($reservations as $reservation)
                                                        <li>
                                                            <div class="orders-title">
                                                                <h6 class="order-title">
                                                                    <span>
                                                                        (#{{ $reservation->id }})
                                                                    </span>

                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#booking-detail-{{ $reservation->id }}">{{ $reservation->restaurant->name }}</a>
                                                                </h6>
                                                            </div>
                                                            <div class="orders-date">
                                                                <span>{{ $reservation->reservation_date->format('M j, Y \a\t h:i A') }}</span>
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
                                                                            <h3>{{ $reservation->restaurant->name }}</h3>
                                                                            <ul class="order-detail-options">
                                                                                <li>
                                                                                    <strong>Booking ID :</strong>
                                                                                    <span>#{{ $reservation->id }}</span>
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
                                                                                <li>

                                                                                </li>
                                                                            </ul>
                                                                            <div class="booking-status-holder">
                                                                                <div
                                                                                    class="booking-status-process booking-status">
                                                                                    @if ($reservation->status == 'Processing')
                                                                                        <p style="background:#1e73be;">Your
                                                                                            booking is <span
                                                                                                style="text-transform: lowercase;">{{ $reservation->status }}</span>
                                                                                        </p>
                                                                                    @elseif($reservation->status == 'Cancelled')
                                                                                        <p style="background:#dd3333;">Your
                                                                                            booking is <span
                                                                                                style="text-transform: lowercase;">{{ $reservation->status }}</span>
                                                                                        </p>
                                                                                    @elseif($reservation->status == 'Completed')
                                                                                        <p style="background:#047a06;">Your
                                                                                            booking is <span
                                                                                                style="text-transform: lowercase;">{{ $reservation->status }}</span>
                                                                                        </p>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="booking-status-holder">
                                                                                @if ($reservation->status != 'Cancelled')
                                                                                    <form action="{{ route('buyer.bookings.cancel', $reservation->id) }}" method="POST">
                                                                                        @csrf
                                                                                        @method('PUT')
                                                                                        <button type="submit" class="btn btn-danger">Cancel Booking</button>
                                                                                    </form>
                                                                                @endif
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

                                {{-- Pagination --}}
                                @if ($reservations->hasPages())
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="page-nation">
                                                {{ $reservations->links('pagination::bootstrap-4') }}
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
@endsection
