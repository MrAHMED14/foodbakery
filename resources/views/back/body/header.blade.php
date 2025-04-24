@php
    $user = Auth::user();
@endphp

<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box" style="padding: 0 1.1rem;">
                <a href="{{ route('admin.index') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('front/extra-images/sub-logo.png') }}" alt="" height="35">
                    </span>

                    <span class="logo-lg">
                        <img src="{{ asset('front/extra-images/foodbakery.svg') }}" alt="" height="20">
                    </span>
                </a>
                <a href="{{ route('admin.index') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('front/extra-images/sub-logo.png') }}" alt="" height="35">
                    </span>

                    <span class="logo-lg">
                        <img src="{{ asset('front/extra-images/foodbakery.svg') }}" alt="" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" style="background-color: #ffffff; width: 40px; height: 40px; padding: 2px;"
                        src="{{ $user->photo ? asset('storage/' . $user->photo) : asset('front/extra-images/user-placeholder.png') }}">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ $user->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('admin.profile') }}"><i
                            class="mdi mdi mdi-face-man font-size-16 align-middle me-1"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <form action="{{ route('logout') }}" class="dropdown-item w-100" method="POST">
                        @csrf
                        <button type="submit" class="w-100 bg-transparent border-0 p-0 m-0"
                            style="text-align: left; color: var(--bs-dropdown-link-color);"><i
                                class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
