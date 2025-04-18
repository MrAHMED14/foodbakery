@php
    $user = Auth::user();
@endphp

@extends('front.restaurant.master')

@section('title')
    Opening / closing status - FoodBakery
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
                                <style>
                                    input[type="time"]:disabled {
                                        background-color: #f0f0f0;
                                        cursor: not-allowed;
                                    }

                                    .error-row {
                                        background-color: #ffe6e6;
                                        /* light red */
                                    }
                                </style>

                                <form method="POST" action="{{ route('restaurant.update.opening_hours') }}">
                                    @csrf

                                    <ul class="restaurant-settings-nav progressbar-nav">
                                        <li class="cond-restaurant-settings active">
                                            <a href="{{ route('restaurant.restaurant') }}">Restaurant Settings</a>
                                        </li>
                                        <li class="cond-restaurant-settings active">
                                            <a href="{{ route('restaurant.location') }}">Location/Map</a>
                                        </li>
                                        <li class="cond-restaurant-settings active processing">
                                            <a href="{{ route('restaurant.open_close') }}">Restaurant Open/Close</a>
                                        </li>
                                    </ul>

                                    <div class="form-fields-set">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="element-title" style="margin: 0;">
                                                    <h4>Opening Hours</h4>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                @error('opening_times')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                @error('closing_times')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                @error('is_closed')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <table class="opening-hours-table">
                                            <thead>
                                                <tr>
                                                    <th>Day</th>
                                                    <th>Opening Time</th>
                                                    <th>Closing Time</th>
                                                    <th>Closed</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $daysOfWeek = [
                                                        'Monday',
                                                        'Tuesday',
                                                        'Wednesday',
                                                        'Thursday',
                                                        'Friday',
                                                        'Saturday',
                                                        'Sunday',
                                                    ];
                                                @endphp

                                                @foreach ($daysOfWeek as $day)
                                                    @php
                                                        $openingHour = $user->restaurant->openingHours->firstWhere(
                                                            'day',
                                                            $day,
                                                        );
                                                    @endphp
                                                    <tr id="row-{{ $day }}">
                                                        <td>{{ $day }}</td>

                                                        <td>
                                                            <input type="time" name="opening_times[{{ $day }}]"
                                                                value="{{ old('opening_times.' . $day, $openingHour->opening_time ?? '') }}">
                                                        </td>

                                                        <td>
                                                            <input type="time" name="closing_times[{{ $day }}]"
                                                                value="{{ old('closing_times.' . $day, $openingHour->closing_time ?? '') }}">
                                                        </td>

                                                        <td>
                                                            <input type="checkbox" class="closed-checkbox"
                                                                name="is_closed[{{ $day }}]" value="1"
                                                                {{ old('is_closed.' . $day, $openingHour->is_closed ?? false) ? 'checked' : '' }}>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        {{-- Submit Button --}}
                                        <div class="field-holder">
                                            <button type="submit" class="btn-submit">Save</button>
                                        </div>
                                    </div>
                                </form>

                                <script>
                                    $(document).ready(function() {
                                        $('.closed-checkbox').change(function() {
                                            let row = $(this).closest('tr');
                                            let isChecked = $(this).is(':checked');

                                            row.find('input[type="time"]').prop('disabled', isChecked);
                                        });

                                        $('.closed-checkbox').each(function() {
                                            let row = $(this).closest('tr');
                                            if ($(this).is(':checked')) {
                                                row.find('input[type="time"]').prop('disabled', true);
                                            }
                                        });
                                    });
                                </script>

                                <script>
                                    $(document).ready(function() {
                                        // This logic will check all rows at once
                                        function validateRows() {
                                            $('tr[id^="row-"]').each(function() {
                                                let row = $(this);
                                                let openingTime = row.find('input[name^="opening_times"]').val();
                                                let closingTime = row.find('input[name^="closing_times"]').val();
                                                let isClosed = row.find('input.closed-checkbox').is(':checked');

                                                // Remove previous error style
                                                row.removeClass('error-row');

                                                // Only validate if the day is NOT closed
                                                if (!isClosed) {
                                                    if (!openingTime || !closingTime || (openingTime >= closingTime)) {
                                                        row.addClass('error-row');
                                                    }
                                                }
                                            });
                                        }

                                        // Run validation on page load
                                        validateRows();

                                        // Revalidate whenever any time field or checkbox changes
                                        $('input[type="time"], .closed-checkbox').on('change', function() {
                                            validateRows();
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Section End -->
@endsection
