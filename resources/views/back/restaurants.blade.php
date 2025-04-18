@extends('back.master')

@section('title')
    Restaurants - FoodBakery
@endsection

@section('content')
    <div class="container-fluid">
        {{-- Page title --}}
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Restaurant Management</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Restaurants</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        {{-- Page content --}}
        <div class="row">
            <div class="container mt-4">
                <div class="row mb-3 gap-2">
                    <div class="col-md-6">
                        <input id="restaurantSearch" class="form-control" type="text" placeholder="Search for restaurants..." value="{{ request('search') }}">
                    </div>
                    <div class="col-md-3">
                        <select id="verifyFilter" class="form-select">
                            <option value="">All</option>
                            <option value="1" {{ request('is_verified') == '1' ? 'selected' : '' }}>Verified</option>
                            <option value="0" {{ request('is_verified') == '0' ? 'selected' : '' }}>Not Verified</option>
                        </select>
                    </div>
                </div>

                <div id="restaurantTableWrapper">
                    @include('back.body.restaurant-table')
                </div>
            </div>

            <script>
                $(document).ready(function () {
                    function fetchRestaurants(page = 1) {
                        const search = $('#restaurantSearch').val();
                        const isVerified = $('#verifyFilter').val();

                        $.ajax({
                            url: `{{ route('admin.restaurants') }}?page=${page}&search=${search}&is_verified=${isVerified}`,
                            type: 'GET',
                            success: function (data) {
                                $('#restaurantTableWrapper').html(data);
                            }
                        });
                    }

                    $('#restaurantSearch').on('input', function () {
                        fetchRestaurants(1);
                    });

                    $('#verifyFilter').on('change', function () {
                        fetchRestaurants(1);
                    });

                    $(document).on('click', '.pagination a', function (e) {
                        e.preventDefault();
                        let page = $(this).attr('href').split('page=')[1];
                        fetchRestaurants(page);
                    });
                });
            </script>
        </div>
    </div>

@endsection
