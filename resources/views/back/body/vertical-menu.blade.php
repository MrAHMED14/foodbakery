<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('admin.index') }}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.restaurants') }}">
                        <i data-feather="archive"></i>
                        <span data-key="t-restaurants">Restaurants</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.users') }}">
                        <i data-feather="users"></i>
                        <span data-key="t-users">Users</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.reviews') }}">
                        <i data-feather="message-square"></i>
                        <span data-key="t-reviews">Reviews</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="settings"></i>
                        <span data-key="t-settings">Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.profile') }}">
                                <span data-key="t-admin-profile">Admin Profile</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.cuisines') }}">
                                <span data-key="t-cuisine-types">Cuisine Types</span>
                            </a>
                        </li>

                        <li>
                            <a href="#stats">
                                <span data-key="t-stats">States</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <span data-key="t-contacts">Contacts</span>
                            </a>
                        </li>

                        <li>
                            <a href="#site-configuration">
                                <span data-key="t-site-configuration">Site Configuration</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
