<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <div class="user-account-nav user-account-sidebar">
        <div class="user-nav-list">
            <ul>
                <li class="{{ request()->routeIs('buyer.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('buyer.dashboard') }}"><i class="icon-dashboard3"></i>Dashboard</a>
                </li>
                <li class="{{ request()->routeIs('buyer.bookings') ? 'active' : '' }}">
                    <a href="{{ route('buyer.bookings') }}" class="btn-edit-profile"><i class="icon-file-text2"></i>My
                        Bookings</a>
                </li>
                <li class="{{ request()->routeIs('buyer.reviews') ? 'active' : '' }}">
                    <a href="{{ route('buyer.reviews') }}" class="btn-edit-profile"><i class="icon-comment2"></i>My
                        Reviews</a>
                </li>
                <li class="{{ request()->routeIs('buyer.orders') ? 'active' : '' }}">
                    <a href="{{ route('buyer.orders') }}" class="btn-edit-profile"><i
                            class="icon-add_shopping_cart"></i>My Orders</a>
                </li>
                {{-- <li class="{{ request()->routeIs('buyer.shortlists') ? 'active' : '' }}">
                    <a href="{{ route('buyer.shortlists') }}"><i class="icon-heart"></i>Shortlists</a>
                </li> --}}
                <li class="{{ request()->routeIs('buyer.statement') ? 'active' : '' }}">
                    <a href="{{ route('buyer.statement') }}"><i class="icon-file-text22"></i>Statement</a>
                </li>
                <li class="{{ request()->routeIs('buyer.account_setting') ? 'active' : '' }}">
                    <a href="{{ route('buyer.account_setting') }}"><i class="icon-build"></i>Account Settings</a>
                </li>
                <li>
                    <a id="profile_delete" href="#"><i class="icon-delete"></i>Delete Profile</a>
                </li>
            </ul>
        </div>
    </div>
</div>
