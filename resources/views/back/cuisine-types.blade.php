@extends('back.master')

@section('title')
    Cuisines Types
@endsection

@section('content')
    <div class="container-fluid">
        {{-- Page title --}}
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Cuisines Management</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Cuisines Types</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        {{-- Page content --}}
        <div class="row">
            <div class="mt-4">
                <div class="mb-3">
                    <div class="w-100">
                        <label for="search">Search</label>
                        <div class="d-flex flex-column flex-md-row col align-center gap-2">
                            <form method="GET" id="filterForm" class="w-100">
                                <input type="text" name="search" id="search" value="{{ request('search') }}"
                                    placeholder="Search..." class="form-control w-100" />
                            </form>

                            <button type="button" data-bs-toggle="modal" data-bs-target="#addCuisineModal"
                                class="btn bg-info text-white"
                                style="min-width: fit-content; text-transform: uppercase;">Add Cuisine Type</button>

                            <div class="modal fade" id="addCuisineModal" tabindex="-1" aria-labelledby="viewModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewModalLabel">
                                                Add Cuisine Type
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <form action="{{ route('admin.cuisines.create') }}" method="POST">
                                                @csrf

                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" name="name" id="name" class="form-control"
                                                        placeholder="Enter cuisine type name" value="{{ old('name') }}"
                                                        required>

                                                    @error('name')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="description" class="form-label">Description</label>
                                                    <textarea name="description" id="description" rows="3" class="form-control"
                                                        placeholder="Enter cuisine type description">{{ old('description') }}</textarea>

                                                    @error('description')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="is_popular" class="form-label">Popularity
                                                        Status</label>
                                                    <select name="is_popular" id="is_popular" class="form-select">
                                                        <option value="0" selected>
                                                            Normal</option>
                                                        <option value="1">
                                                            Popular</option>
                                                    </select>
                                                    @error('is_popular')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <button type="submit" class="btn bg-info text-white">
                                                    Submit
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tableWrapper">
                    @include('back.body.cuisines-table')
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    $('#search').on('keypress', function(e) {
                        if (e.which === 13) {
                            e.preventDefault();
                            $('#filterForm').submit();
                        }
                    });
                });
            </script>
        </div>
    </div>
@endsection
