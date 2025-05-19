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
                <li class="{{ request()->routeIs('restaurant.change_password') ? 'active' : '' }}">
                    <a href="{{ route('restaurant.change_password') }}"><i class="icon-unlock-alt"></i>Change Password</a>
                </li>
            </ul>
        </div>
    </div>
</div>
