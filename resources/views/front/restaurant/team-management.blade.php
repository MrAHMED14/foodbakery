@extends('front.restaurant.master')

@section('title')
    Restaurant || Team Management
@endsection

@section('content')
<!-- Main Section Start -->
<div class="main-section">
    <div class="page-section restaurant-detail-image-section" style=" background: url({{asset('front/extra-images/cover-photo01.jpg')}}) no-repeat scroll 0 0 / cover;">
        <!-- Container Start -->
        <div class="container">
            <!-- Row Start -->
            <div class="row">
                <!-- Column Start -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="company-info-detail">
                        <div class="company-info">
                            <div class="img-holder">
                                <figure>
                                    <img src="{{asset('front/extra-images/listing-logo18.png')}}" alt="">
                                </figure>
                            </div>

                            <div class="text-holder">
                                <span class="restaurant-title">Restaurant Demo</span>
                                <div class="text">
                                    <i class="icon-local_pizza"></i>
                                    <p>Apple Juice</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <div class="page-section account-header buyer-logged-in">
        <div class="container">
            <div class="row">
                <!-- ========== menu Start ========== -->
                @include('front.restaurant.body.menu')
                <!-- menu End -->
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="user-dashboard loader-holder">
                        <div class="user-holder">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="user-profile">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="element-title">
                                                    <h5>Team Members</h5>
                                                    <ul class="dashboard-nav sub-nav">
                                                        <li><a href="#" class="send-invitation">Send Invitation</a></li>
                                                        <li><a href="#" class="add-more add_team_member">Add Members</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="invite-member invited_team_member">
                                                    <form>
                                                        <div class="element-title has-border">
                                                            <a href="#" class="close-btn cancel">×</a>
                                                            <h5>Send invitation</h5>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="field-holder">
                                                                    <label>Email Address</label>
                                                                    <input type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="field-holder">
                                                                    <label>User Type</label>
                                                                    <select class="chosen-select-no-single">
                                                                        <option value="team-member">Team Member</option>
                                                                        <option value="supper-admin">Supper Admin</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="invitation-permission invite_member_permission">
                                                                    <span class="most-used"> Roles &amp; Permission</span>
                                                                    <ul class="checkbox-list">
                                                                        <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                            <input type="checkbox" id="foodbakery_restaurants"><label for="foodbakery_restaurants">Restaurant</label>
                                                                        </li>
                                                                        <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                            <input type="checkbox" id="foodbakery_orders"><label for="foodbakery_orders">Orders</label>
                                                                        </li>
                                                                        <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                            <input type="checkbox" id="foodbakery_bookings"><label for="foodbakery_bookings">Bookings</label>
                                                                        </li>
                                                                        <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                            <input type="checkbox" id="foodbakery_reviews"><label for="foodbakery_reviews">Reviews</label>
                                                                        </li>
                                                                        <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                            <input type="checkbox" id="foodbakery_withdrawals"><label for="foodbakery_withdrawals">Withdrawals</label>
                                                                        </li>
                                                                        <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                            <input type="checkbox" id="foodbakery_earnings"><label for="foodbakery_earnings">Earnings</label>
                                                                        </li>
                                                                        <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                            <input type="checkbox" id="foodbakery_statements"><label for="foodbakery_statements">Statements</label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="field-holder">
                                                                    <a href="#" id="send_invitation" class="btn-send">Send</a>
                                                                    <a href="#" class="cancel">Cancel</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="invite-member add-member">
                                                    <form>
                                                        <div class="element-title has-border">
                                                            <a href="#" class="close-btn cancel">×</a>
                                                            <h5>Add Team Member</h5>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="field-holder">
                                                                    <label>Email Address</label>
                                                                    <input type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="field-holder">
                                                                    <label>User Type</label>
                                                                    <select class="chosen-select-no-single">
                                                                        <option value="team-member">Team Member</option>
                                                                        <option value="supper-admin">Supper Admin</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="invitation-permission add_member_permission">
                                                                    <span class="most-used"> Roles &amp; Permission</span>
                                                                    <ul class="checkbox-list">
                                                                        <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                            <input type="checkbox" id="foodbakery_restaurants47"><label for="foodbakery_restaurants47">Restaurant</label>
                                                                        </li>
                                                                        <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                            <input type="checkbox" id="foodbakery_orders78"><label for="foodbakery_orders78">Orders</label>
                                                                        </li>
                                                                        <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                            <input type="checkbox" id="foodbakery_bookings5"><label for="foodbakery_bookings5">Bookings</label>
                                                                        </li>
                                                                        <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                            <input type="checkbox" id="foodbakery_reviews3"><label for="foodbakery_reviews3">Reviews</label>
                                                                        </li>
                                                                        <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                            <input type="checkbox" id="foodbakery_withdrawals46"><label for="foodbakery_withdrawals46">Withdrawals</label>
                                                                        </li>
                                                                        <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                            <input type="checkbox" id="foodbakery_earnings83"><label for="foodbakery_earnings83">Earnings</label>
                                                                        </li>
                                                                        <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                            <input type="checkbox" id="foodbakery_statements46"><label for="foodbakery_statements46">Statements</label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="field-holder">
                                                                    <a href="#" id="add_member" class="btn-send">Send</a>
                                                                    <a href="#" class="cancel">Cancel</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="responsive-table">
                                                    <div class="team-list" id="team-list-table">
                                                        <ul class="panel-group table-generic">
                                                            <li>
                                                                <div>
                                                                    <span>Username</span>
                                                                    <span>Email Address</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div>
                                                                    <div class="panel panel-default">
                                                                        <a href="#" class="close-member" data-id="2566"><i class="icon-close2 remove_member"></i></a>
                                                                        <div class="panel-heading">
                                                                            <a href="#" class="restaurant-team-member-det" data-id="2566">
                                                                                <div class="img-holder">
                                                                                    <strong>restaurant-demo </strong>
                                                                                </div>
                                                                                <span class="email">restaurant-demo@chimpgroup.com </span>
                                                                                <span class="supper-admin">Supper Admin</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="invite-member team-member-det-box">
                                                                            <form>
                                                                                <div class="element-title has-border">
                                                                                    <a href="#" class="close-btn cancel">×</a>
                                                                                    <h5>Update Team Member</h5>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="field-holder">
                                                                                            <label>Email Address</label>
                                                                                            <input type="text" name="email" value="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="field-holder">
                                                                                            <label>User Type</label>
                                                                                            <select class="chosen-select-no-single">
                                                                                                <option value="team-member">Team Member</option>
                                                                                                <option selected="selected" value="supper-admin">Supper Admin</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display:none">
                                                                                        <div class="invitation-permission">
                                                                                            <span class="most-used">Roles &amp; Permission</span>
                                                                                            <ul class="checkbox-list">
                                                                                                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                                                    <input type="checkbox" id="foodbakery_restaurants3" checked="checked" value="on">
                                                                                                    <label for="foodbakery_restaurants3">Restaurant</label>
                                                                                                </li>
                                                                                                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                                                    <input type="checkbox" id="foodbakery_orders74" checked="checked" value="on">
                                                                                                    <label for="foodbakery_orders74">Orders</label>
                                                                                                </li>
                                                                                                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                                                    <input type="checkbox" id="foodbakery_bookings52" checked="checked" value="on">
                                                                                                    <label for="foodbakery_bookings52">Bookings</label>
                                                                                                </li>
                                                                                                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                                                    <input type="checkbox" id="foodbakery_reviews17" checked="checked" value="on">
                                                                                                    <label for="foodbakery_reviews17">Reviews</label>
                                                                                                </li>
                                                                                                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                                                    <input type="checkbox" id="foodbakery_withdrawals0" checked="checked" value="on">
                                                                                                    <label for="foodbakery_withdrawals0">Withdrawals</label>
                                                                                                </li>
                                                                                                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                                                    <input type="checkbox" id="foodbakery_earnings91" checked="checked" value="on">
                                                                                                    <label for="foodbakery_earnings91">Earnings</label>
                                                                                                </li>
                                                                                                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                                                    <input type="checkbox" id="foodbakery_statements92" checked="checked" value="on">
                                                                                                    <label for="foodbakery_statements92">Statements</label>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <button name="button" class="btn-submit team_update_form" type="button">Update</button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div>
                                                                    <div class="panel panel-default">
                                                                        <a href="#" class="close-member" data-id="2566"><i class="icon-close2 remove_member"></i></a>
                                                                        <div class="panel-heading">
                                                                            <a href="#" class="restaurant-team-member-det" data-id="2566">
                                                                                <div class="img-holder">
                                                                                    <strong>restaurant-demo </strong>
                                                                                </div>
                                                                                <span class="email">restaurant-demo@chimpgroup.com </span>
                                                                                <span class="supper-admin">Supper Admin</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="invite-member team-member-det-box">
                                                                            <form>
                                                                                <div class="element-title has-border">
                                                                                    <a href="#" class="close-btn cancel">×</a>
                                                                                    <h5>Update Team Member</h5>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="field-holder">
                                                                                            <label>Email Address</label>
                                                                                            <input type="text" id="foodbakery_email_address" name="email" value="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="field-holder">
                                                                                            <label>User Type</label>
                                                                                            <select class="chosen-select-no-single">
                                                                                                <option value="team-member">Team Member</option>
                                                                                                <option selected="selected" value="supper-admin">Supper Admin</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display:none">
                                                                                        <div class="invitation-permission">
                                                                                            <span class="most-used">Roles &amp; Permission</span>
                                                                                            <ul class="checkbox-list">
                                                                                                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                                                    <input type="checkbox" id="foodbakery_restaurants23" name="permissions[restaurants]" checked="checked" value="on">
                                                                                                    <label for="foodbakery_restaurants23">Restaurant</label>
                                                                                                </li>
                                                                                                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                                                    <input type="checkbox" id="foodbakery_orders36" name="permissions[orders]" checked="checked" value="on">
                                                                                                    <label for="foodbakery_orders36">Orders</label>
                                                                                                </li>
                                                                                                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                                                    <input type="checkbox" id="foodbakery_bookings49" name="permissions[bookings]" checked="checked" value="on">
                                                                                                    <label for="foodbakery_bookings49">Bookings</label>
                                                                                                </li>
                                                                                                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                                                    <input type="checkbox" id="foodbakery_reviews85" name="permissions[reviews]" checked="checked" value="on">
                                                                                                    <label for="foodbakery_reviews85">Reviews</label>
                                                                                                </li>
                                                                                                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                                                    <input type="checkbox" id="foodbakery_withdrawals40" name="permissions[withdrawals]" checked="checked" value="on">
                                                                                                    <label for="foodbakery_withdrawals40">Withdrawals</label>
                                                                                                </li>
                                                                                                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                                                    <input type="checkbox" id="foodbakery_earnings66" name="permissions[earnings]" checked="checked" value="on">
                                                                                                    <label for="foodbakery_earnings66">Earnings</label>
                                                                                                </li>
                                                                                                <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" draggable="true" style="display: inline-block;">
                                                                                                    <input type="checkbox" id="foodbakery_statements5" name="permissions[statements]" checked="checked" value="on">
                                                                                                    <label for="foodbakery_statements5">Statements</label>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <button name="button" class="btn-submit team_update_form" type="button">Update</button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
