@extends('back.master')

@section('title')
    Users - FoodBakery
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
            <div class="mt-4">
                <div class="mb-3">
                    <form method="GET" id="userFilterForm" class="d-flex flex-column flex-md-row col align-center gap-2">
                        <div class="w-100">
                            <label for="searchFilter">Search</label>
                            <input type="text" id="searchFilter" name="search" value="{{ request('search') }}"
                                placeholder="Search..." class="form-control" />
                        </div>

                        <div style="min-width: 200px;">
                            <label for="roleFilter">Role</label>
                            <select class="form-select" data-trigger name="role"
                                id="roleFilter">
                                <option value="">All</option>
                                <option value="admin" {{ request('role') === 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="restaurateur" {{ request('role') === 'restaurateur' ? 'selected' : '' }}>Restaurateur</option>
                                <option value="client" {{ request('role') === 'client' ? 'selected' : '' }}>Client</option>
                            </select>
                        </div>
                    </form>
                </div>

                <div id="userTableWrapper">
                    @include('back.body.users-table')
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    $('#searchFilter').on('keypress', function(e) {
                        if (e.which === 13) {
                            e.preventDefault();
                            $('#userFilterForm').submit();
                        }
                    });

                    $('#roleFilter').on('change', function() {
                        $('#userFilterForm').submit();
                    });
                });
            </script>
        </div>
    </div>

@endsection
