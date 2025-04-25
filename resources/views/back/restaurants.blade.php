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
            <div class="mt-4">
                <div class="mb-3">
                    <form method="GET" id="restaurantFilterForm" class="d-flex flex-column flex-md-row col align-center gap-2">
                        <div class="w-100">
                            <label for="restaurantSearch">Search</label>
                            <input type="text" name="search" id="restaurantSearch" value="{{ request('search') }}"
                                placeholder="Search..." class="form-control" />
                        </div>

                        <div style="min-width: 200px;">
                            <label for="is_verified">Status</label>
                            <select name="is_verified" id="verifyFilter" class="form-select">
                                <option value="">All</option>
                                <option value="1" {{ request('is_verified') === '1' ? 'selected' : '' }}>Verified
                                </option>
                                <option value="0" {{ request('is_verified') === '0' ? 'selected' : '' }}>Not Verified
                                </option>
                            </select>
                        </div>
                    </form>
                </div>

                <div id="restaurantTableWrapper">
                    @include('back.body.restaurant-table')
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    $('#restaurantSearch').on('keypress', function(e) {
                        if (e.which === 13) {
                            e.preventDefault();
                            $('#restaurantFilterForm').submit();
                        }
                    });

                    $('#verifyFilter').on('change', function() {
                        $('#restaurantFilterForm').submit();
                    });
                });
            </script>
        </div>
    </div>
@endsection
