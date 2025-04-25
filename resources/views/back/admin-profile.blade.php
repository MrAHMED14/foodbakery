@extends('back.master')

@section('title')
    Profile - FoodBakery
@endsection

@section('content')
    <div class="container-fluid">
        {{-- Page title --}}
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Profile Page</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Admin Profile</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        {{-- Page content --}}
        <div class="row">
            <div class="py-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5>Update Profile</h5>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3 text-center">
                                        <img id="profile-preview"
                                            src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : asset('front/extra-images/user-placeholder.png') }}"
                                            class="rounded-circle" width="100" height="100" style="object-fit: cover;">
                                        <input type="file" name="profile_picture" class="form-control mt-2"
                                            id="profile_picture">
                                        @error('profile_picture')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ old('name', Auth::user()->name) }}" required>
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ old('email', Auth::user()->email) }}" required>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn bg-success text-white">Update Info</button>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h5>Change Password</h5>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('admin.profile.password.update') }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3">
                                        <label for="current_password" class="form-label">Current Password</label>
                                        <input type="password" class="form-control" id="current_password"
                                            name="current_password" required>
                                        @error('current_password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="new_password" class="form-label">New Password</label>
                                        <input type="password" class="form-control" id="new_password" name="new_password"
                                            required>
                                        @error('new_password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="new_password_confirmation" class="form-label">Confirm New
                                            Password</label>
                                        <input type="password" class="form-control" id="new_password_confirmation"
                                            name="new_password_confirmation" required>
                                        @error('new_password_confirmation')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn bg-success text-white">Update Password</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <script>
                document.getElementById('profile_picture').addEventListener('change', function(event) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            document.getElementById('profile-preview').src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    }
                });
            </script>
        </div>
    </div>
@endsection
