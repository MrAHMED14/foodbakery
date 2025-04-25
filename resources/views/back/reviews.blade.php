@extends('back.master')

@section('title')
    Reviews - FoodBakery
@endsection

@section('content')
    <div class="container-fluid">
        {{-- Page title --}}
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Reviews Management</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Reviews</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        {{-- Page content --}}
        <div class="row">
            <div class="mt-4">
                <div class="mb-3">
                    <form method="GET" id="reviewFilterForm" class="d-flex flex-column flex-md-row col align-center gap-2">
                        <div class="w-100">
                            <label for="restaurant" class="form-label">Search by Restaurant</label>
                            <input type="text" name="restaurant" id="restaurant" class="form-control"
                                value="{{ request('restaurant') }}" placeholder="Restaurant name">
                        </div>
                        <div class="w-100">
                            <label for="user" class="form-label">Search by User</label>
                            <input type="text" name="user" id="user" class="form-control"
                                value="{{ request('user') }}" placeholder="Name or email">
                        </div>

                        <div style="min-width: 200px;">
                            <label for="roleFilter">Rating</label>
                            <select name="rating" id="rating" class="form-select">
                                <option value="">All</option>
                                @for($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}" @if(request('rating') == $i) selected @endif>{{ $i }} stars</option>
                                @endfor
                            </select>
                        </div>
                    </form>
                </div>

                <div>
                    @include('back.body.reviews-table')
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    $('#restaurant').on('keypress', function(e) {
                        if (e.which === 13) {
                            e.preventDefault();
                            $('#reviewFilterForm').submit();
                        }
                    });

                    $('#user').on('keypress', function(e) {
                        if (e.which === 13) {
                            e.preventDefault();
                            $('#reviewFilterForm').submit();
                        }
                    });

                    $('#rating').on('change', function() {
                        $('#reviewFilterForm').submit();
                    });
                });
            </script>
        </div>
    </div>
@endsection
