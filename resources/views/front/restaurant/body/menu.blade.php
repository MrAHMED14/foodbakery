<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <div class="user-account-nav user-account-sidebar">
        <div class="user-nav-list">
            <ul>
                <li class="{{ request()->routeIs('restaurant.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('restaurant.dashboard') }}"><i class="icon-dashboard3"></i>Dashboard</a>
                </li>
                <li class="{{ request()->routeIs('restaurant.restaurant') ? 'active' : '' }}">
                    <a href="{{ route('restaurant.restaurant') }}"><i class="icon-building"></i>My Restaurant</a>
                </li>
                <li class="{{ request()->routeIs('restaurant.menu_builder') ? 'active' : '' }}">
                    <a href="{{ route('restaurant.menu_builder') }}"><i class="icon-menu5"></i>Menu Builder</a>
                </li>
                <li class="{{ request()->routeIs('restaurant.gallery') ? 'active' : '' }}">
                    <a href="{{ route('restaurant.gallery') }}"><i class="icon-image"></i>Photo Gallery</a>
                </li>
                <li class="{{ request()->routeIs('restaurant.orders') ? 'active' : '' }}">
                    <a href="{{ route('restaurant.orders') }}"><i class="icon-add_shopping_cart"></i>Orders</a>
                </li>
                <li class="{{ request()->routeIs('restaurant.bookings') ? 'active' : '' }}">
                    <a href="{{ route('restaurant.bookings') }}"><i class="icon-file-text2"></i>Bookings</a>
                </li>
                <li class="{{ request()->routeIs('restaurant.reviews') ? 'active' : '' }}">
                    <a href="{{ route('restaurant.reviews') }}"><i class="icon-comment2"></i>Reviews</a>
                </li>
                <li class="{{ request()->routeIs('restaurant.memberships') ? 'active' : '' }}">
                    <a href="{{ route('restaurant.memberships') }}"><i class="icon-card_membership"></i>Memberships</a>
                </li>
                {{-- <li class="{{ request()->routeIs('restaurant.withdrawals') ? 'active' : '' }}">
                    <a href="{{ route('restaurant.withdrawals') }}"><i class="icon-bill"></i>Withdrawals</a>
                </li> --}}
                {{-- <li class="{{ request()->routeIs('restaurant.earnings') ? 'active' : '' }}">
                    <a href="{{ route('restaurant.earnings') }}"><i class="icon-money"></i>Earnings</a>
                </li> --}}
                <li class="{{ request()->routeIs('restaurant.statement') ? 'active' : '' }}">
                    <a href="{{ route('restaurant.statement') }}"><i class="icon-file-text22"></i>Statement</a>
                </li>
                {{-- <li class="{{ request()->routeIs('restaurant.team_management') ? 'active' : '' }}">
                    <a href="{{ route('restaurant.team_management') }}"><i class="icon-flow-tree"></i>Team Management</a>
                </li> --}}
                <li class="{{ request()->routeIs('restaurant.change_password') ? 'active' : '' }}">
                    <a href="{{ route('restaurant.change_password') }}"><i class="icon-unlock-alt"></i>Change Password</a>
                </li>
                <li>
                    <a id="profile_delete" href="#"><i class="icon-delete"></i>Delete Profile</a>
                </li>
                {{-- <li>
                    <a class="logout-btn" href="{{ route('front.index') }}"><i class="icon-log-out"></i>Signout</a>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
