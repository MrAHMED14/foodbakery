@php
    $user = Auth::user();
@endphp

@extends('front.buyer.master')

@section('title')
    Restaurant || Account Setting
@endsection

@section('content')
    <!-- Main Section Start -->
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
                                <div class="user-profile">
                                    <div class="element-title has-border">
                                        <h5>Account Settings</h5>
                                    </div>
                                    <div class="row">
                                        <form method="POST" action="{{ route('account-setting.update') }}"
                                            enctype="multipart/form-data" autocomplete="off">
                                            @csrf
                                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Full Name *</label>
                                                            <input type="text" placeholder="Enter your full name"
                                                                class="foodbakery-dev-req-field"
                                                                value="{{ $user->name ?? '' }}" name="name">

                                                            @error('name')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Email Address *</label>
                                                            <input disabled type="email" style="cursor: not-allowed;"
                                                                class="foodbakery-dev-req-field"
                                                                value="{{ $user->email }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <label>Phone Number *</label>
                                                            <input type="tel" class="foodbakery-dev-req-field"
                                                                value="{{ $user->phone ?? '' }}"
                                                                placeholder="Enter your phone number" name="phone">

                                                            @error('phone')
                                                                <div class="text-danger" style="font-size: 12px;">
                                                                    {{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                <div class="user-profile-images">
                                                    <div class="current-img">
                                                        <div class="row mt">
                                                            <div id="cropContainerModal"
                                                                data-def-img="{{ asset('front/extra-images/user-placeholder.png') }}"
                                                                data-img-type="default">
                                                                <figure>
                                                                    <a>
                                                                        <img id="preview-image"
                                                                            src="{{ $user->photo ? asset('storage/' . $user->photo) : asset('front/extra-images/user-placeholder.png') }}"
                                                                            alt="User Image">
                                                                    </a>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <span>Upload a profile picture</span>
                                                    </div>
                                                    <div class="upload-file">
                                                        <button type="button"
                                                            onclick="document.getElementById('file').click();">
                                                            <span>Upload Picture</span>
                                                        </button>

                                                        <button type="button" id="remove-photo-btn" onclick="resetImage()"
                                                            style="margin-top: 10px; display: none; text-align: center;">
                                                            <span><i class="icon-cross"></i></span>
                                                        </button>

                                                        <input id="file" type="file" name="profile_picture" class="hide"
                                                        accept="image/*">

                                                        @error('profile_picture')
                                                            <div class="text-danger" style="font-size: 12px;">
                                                                {{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="field-holder">
                                                    <button name="button" type="submit" class="btn-submit">Save</button>
                                                </div>
                                            </div>
                                        </form>

                                        <script>
                                            const defaultImage =
                                                "{{ $user->photo ? asset('storage/' . $user->photo) : asset('front/extra-images/user-placeholder.png') }}";

                                            document.getElementById('file').addEventListener('change', function(event) {
                                                const [file] = event.target.files;
                                                if (file) {
                                                    document.getElementById('preview-image').src = URL.createObjectURL(file);
                                                    document.getElementById('remove-photo-btn').style.display =
                                                        'inline-block'; // Show the remove button
                                                }
                                            });

                                            function resetImage() {
                                                document.getElementById('preview-image').src = defaultImage;
                                                document.getElementById('file').value = ""; // Clear the selected file
                                                document.getElementById('remove-photo-btn').style.display = 'none'; // Hide the remove button
                                            }
                                        </script>

                                        <form method="POST" action="{{ route('account-setting.changePassword') }}" id="publisher_profile" autocomplete="off">
                                            @csrf

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="element-title has-border">
                                                    <h5>Change Password</h5>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="field-holder">
                                                    <label> Current Password *</label>
                                                    <input autocomplete="off" type="password" name="current_password"
                                                        class="foodbakery-dev-req-field">

                                                    @error('current_password')
                                                        <div class="text-danger" style="font-size: 12px;">
                                                            {{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="field-holder">
                                                    <label> New Password *</label>
                                                    <input type="password" name="new_password"
                                                        class="foodbakery-dev-req-field">

                                                    @error('new_password')
                                                        <div class="text-danger" style="font-size: 12px;">
                                                            {{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="field-holder">
                                                    <label> Confirm New Password *</label>
                                                    <input type="password" name="new_password_confirmation"
                                                        class="foodbakery-dev-req-field">

                                                    @error('new_password_confirmation')
                                                        <div class="text-danger" style="font-size: 12px;">
                                                            {{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="field-holder">
                                                    <button type="submit" class="btn-submit">Change
                                                        Password</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Section End -->
@endsection
