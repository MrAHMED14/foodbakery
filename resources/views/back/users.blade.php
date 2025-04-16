@extends('back.master')

@section('title')
    FoodBakery | Users
@endsection

@section('content')
    <div class="container-fluid">
        {{-- Page title --}}
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Users Management</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Users</li>
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
                        <input id="userSearch" class="form-control" type="text" placeholder="Search for users..." value="{{ request('search') }}">
                    </div>
                </div>

                <div id="userTableWrapper">
                    @include('back.body.users-table')
                </div>
            </div>

            <script>
                $(document).ready(function () {
                    function fetchusers(page = 1) {
                        const search = $('#userSearch').val();

                        $.ajax({
                            url: `{{ route('admin.users') }}?page=${page}&search=${search}`,
                            type: 'GET',
                            success: function (data) {
                                $('#userTableWrapper').html(data);
                            }
                        });
                    }

                    $('#userSearch').on('input', function () {
                        fetchusers(1);
                    });

                    $(document).on('click', '.pagination a', function (e) {
                        e.preventDefault();
                        let page = $(this).attr('href').split('page=')[1];
                        fetchusers(page);
                    });
                });
            </script>
        </div>
    </div>

@endsection
