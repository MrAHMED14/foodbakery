@extends('front.buyer.master')

@section('title')
    Restaurant || Buyer Order
@endsection

@section('content')
<!-- Main Section Start -->
<div class="main-section">
    <div class="page-section restaurant-detail-image-section" style=" background: url({{asset('front/extra-images/banner-img-2.jpg')}}) no-repeat scroll 0 0 / cover;">
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
                                    <img src="{{asset('front/extra-images/team-medium-img1.jpg')}}" alt="">
                                </figure>
                            </div>
                            <div class="text-holder">
                                <span class="restaurant-title">Buyer Demo</span>
                                <ul class="user-info-contact">
                                    <li class="cell"><i class="icon-phone"></i><a href="tel:0123456789">012 3456 789</a></li>
                                    <li class="email"><i class="icon-mail5"></i><a href="mailto:dum4@chimpgroup.com">dum4@chimpgroup.com</a></li>
                                </ul>
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
                @include('front.buyer.body.menu')
                <!-- menu End -->
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="user-dashboard loader-holder">
                        <div class="user-holder">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="element-title has-border right-filters-row">
                                        <h5>My Orders</h5>
                                        <div class="right-filters row pull-right">
                                            <div class="col-lg-6 col-md-6 col-xs-6">
                                                <div class="input-field">
                                                    <select class="chosen-select-no-single">
                                                        <option selected="selected" value="">Select Orders Status</option>
                                                        <option value="Processing">Processing</option>
                                                        <option value="Cancelled">Cancelled</option>
                                                        <option value="Completed">Completed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-xs-6">
                                                <div class="input-field">
                                                    <i class="icon-angle-down"></i>
                                                    <input type="text" data-id="daterange223" id="daterange" value="" placeholder="Select Date Range">
                                                    <script>
                                                        $(function () {
                                                            $('input[data-id="daterange223"]').daterangepicker({
                                                                opens: 'left'
                                                            }, function (start, end, label) {
                                                                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="user-orders-list">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="order-list">
                                                    <div class="author-info">
                                                        <div class="img-holder">
                                                            <figure>
                                                                <a href="#"><img src="{{asset('front/extra-images/listing-logo18.png')}}" alt=""> </a>
                                                            </figure>
                                                        </div>
                                                        <div class="text-holder">
                                                            <h6><a href="#">Restaurant Demo</a></h6>
                                                            <address>Apple Juice</address>
                                                            <span class="price">£ 38.99</span>
                                                        </div>
                                                    </div>
                                                    <div class="post-time">
                                                        <span>Totnes, Devon, England</span>
                                                        <span>Deliver in 10 Minutes </span>
                                                    </div>
                                                    <div class="rating-holder">
                                                        <div class="rating">
                                                            <div class="rating-box" style="width:100%;"></div>
                                                        </div>
                                                        <span>(Out standing)</span>
                                                    </div>
                                                    <span class="date-time">Apr 9, 2020 06:38 AM </span>
                                                    <div class="order-btn">
                                                        <a href="#" data-toggle="modal" data-target="#order_detail">Order Detail</a>
                                                        <span class="order-status" style="background-color: #047a06;">Completed</span>
                                                    </div>
                                                    <div class="modal fade menu-order-detail order-detail" id="order_detail" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                    <h2>Order Detail</h2>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="order-detail-inner">
                                                                        <div class="description-holder">
                                                                            <div class="row">
                                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="list-detail-options has-checkbox">
                                                                                        <h3>Restaurant Demo </h3>
                                                                                        <ul class="order-detail-options">
                                                                                            <li class="order-number">
                                                                                                <strong>Order ID:</strong>
                                                                                                <span>22606</span>
                                                                                            </li>
                                                                                            <li class="req-delivery">
                                                                                                <strong>Delivery Time:</strong>
                                                                                                <span>10 Minutes </span>
                                                                                            </li>
                                                                                            <li class="created-date">
                                                                                                <strong>Delivery Date:</strong>
                                                                                                <span>Apr 9, 2020 06:38 AM </span>
                                                                                            </li>
                                                                                            <li class="order-type">
                                                                                                <strong>Type:</strong>
                                                                                                <span>order</span>
                                                                                            </li>
                                                                                            <li class="order-type">
                                                                                                <strong>Payment Status:</strong>
                                                                                                <span>Approved</span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="customer-detail-holder">
                                                                                        <h3>Customer Detail</h3>
                                                                                        <ul class="customer-detail">
                                                                                            <li>
                                                                                                <strong>Name :</strong>
                                                                                                <span>Buyer Demo</span>
                                                                                            </li>
                                                                                            <li>
                                                                                                <strong>Phone Number :</strong>
                                                                                                <span>0123456789</span>
                                                                                            </li>
                                                                                            <li>
                                                                                                <strong>Email :</strong>
                                                                                                <span>dum4@chimpgroup.com</span>
                                                                                            </li>
                                                                                            <li>
                                                                                                <strong>Address :</strong>
                                                                                                <span>London</span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="order-status-holder">
                                                                                        <div class="order-status-process order-status">
                                                                                            <p style="background:#047a06;">Your order is completed </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <h2 class="heading">Food Menu</h2>
                                                                                    <div class="responsive-table">
                                                                                        <ul class="categories-order table-generic">
                                                                                            <li class="order-heading-titles">
                                                                                                <div>Products</div>
                                                                                                <div>Price per</div>
                                                                                            </li>
                                                                                            <li class="order-heading-titles">
                                                                                                <div>
                                                                                                    <h4>Pizzas</h4>
                                                                                                    <h5>Foodbakery Special 9" Deep Pan</h5>
                                                                                                </div>
                                                                                                <div><span class="category-price">£4.80</span></div>
                                                                                            </li>
                                                                                            <li class="order-heading-titles">
                                                                                                <div>
                                                                                                    <h4>Pizzas</h4>
                                                                                                    <h5>Foodbakery Special 9" Deep Pan</h5>
                                                                                                </div>
                                                                                                <div><span class="category-price">£4.80</span></div>
                                                                                            </li>
                                                                                            <li class="order-heading-titles">
                                                                                                <div>
                                                                                                    <h4>Pizzas</h4>
                                                                                                    <h5>Foodbakery Special 12" Deep Pan</h5>
                                                                                                </div>
                                                                                                <div><span class="category-price">£3.90</span></div>
                                                                                            </li>
                                                                                            <li class="order-heading-titles">
                                                                                                <div>
                                                                                                    <h4>Garlic Bread</h4>
                                                                                                    <h5>Garlic Bread 12" Deep</h5>
                                                                                                </div>
                                                                                                <div><span class="category-price">£3.50</span></div>
                                                                                            </li>
                                                                                            <li class="order-heading-titles">
                                                                                                <div>
                                                                                                    <h4>Kebabs</h4>
                                                                                                    <h5>Kebabs With Naan</h5>
                                                                                                </div>
                                                                                                <div><span class="category-price">£4.50</span></div>
                                                                                            </li>
                                                                                            <li class="order-heading-titles">
                                                                                                <div>
                                                                                                    <h4>Burgers</h4>
                                                                                                    <h5>Quarter Pounder</h5>
                                                                                                </div>
                                                                                                <div><span class="category-price">£3.00</span></div>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                            <h3>Order Total</h3>
                                                                                        </div>
                                                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                            <ul class="order-detail-options order-total">
                                                                                                <li class="created-date">
                                                                                                    <strong>Subtotal:</strong>
                                                                                                    <span>£24.50</span>
                                                                                                </li>
                                                                                                <li class="order-type">
                                                                                                    <strong>
                                                                                                        Pick Up Fee: </strong>
                                                                                                    <span>£10.00</span>
                                                                                                </li>
                                                                                                <li class="order-type">
                                                                                                    <strong>VAT (13%)</strong>
                                                                                                    <span>£4.48</span>
                                                                                                </li>
                                                                                                <li class="order-type total-price">
                                                                                                    <strong>Total:</strong>
                                                                                                    <span>£38.99</span>
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
                                                    <script>
                                                        (function ($) {
                                                            $(document).ready(function () {
                                                                $(".order-detail .modal-dialog .modal-content").mCustomScrollbar({
                                                                    setHeight: 724,
                                                                    theme: "minimal-dark",
                                                                    mouseWheelPixels: 100
                                                                });
                                                            });
                                                        })(jQuery);
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="order-list" style="height: 272px;">
                                                    <div class="author-info">
                                                        <div class="img-holder">
                                                            <figure>
                                                                <a href="#"><img src="{{asset('front/extra-images/listing-logo18.png')}}" alt=""> </a>
                                                            </figure>
                                                        </div>
                                                        <div class="text-holder">
                                                            <h6><a href="#">Restaurant Demo</a></h6>
                                                            <address>Apple Juice</address>
                                                            <span class="price">£ 37.86</span>
                                                        </div>
                                                    </div>
                                                    <div class="post-time">
                                                        <span>Totnes, Devon, England</span>
                                                        <span>Deliver in 10 Minutes </span>
                                                    </div>
                                                    <span class="date-time">
                                                        Apr 9, 2020 06:36 AM </span>
                                                    <div class="order-btn">
                                                        <a href="#" data-toggle="modal" data-target="#order_detail">Order Detail</a>
                                                        <span class="order-status" style="background-color: #1e73be;">Processing</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="order-list" style="height: 272px;">
                                                    <div class="author-info">
                                                        <div class="img-holder">
                                                            <figure>
                                                                <a href="#"><img src="{{asset('front/extra-images/listing-logo18.png')}}" alt=""> </a>
                                                            </figure>
                                                        </div>
                                                        <div class="text-holder">
                                                            <h6><a href="#">Restaurant Demo</a></h6>
                                                            <address>Apple Juice</address>
                                                            <span class="price">£ 26.22</span>
                                                        </div>
                                                    </div>
                                                    <div class="post-time">
                                                        <span>Totnes, Devon, England</span>
                                                        <span>
                                                            Deliver in 10 Minutes </span>
                                                        <a href="#" data-toggle="modal" data-target="#order-review-22589">give review</a>
                                                        <div class="modal fade menu-order-detail order-review" id="order-review-22589" tabindex="-1" role="dialog" style="display: none;">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                        <h2><a>Order Review</a></h2>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="order-detail-inner">
                                                                            <div class="reviews-holder">
                                                                                <div class="add-new-review-holder add-new-review-2067">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <h3>Rate and Write a Review</h3>
                                                                                        </div>
                                                                                        <div class="foodbakery-add-review-data">
                                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                                <div class="rating-restaurant">
                                                                                                    <ul class="star-rating-list">
                                                                                                        <li>
                                                                                                            <span>Service</span>
                                                                                                            <div class="stars">
                                                                                                                <input id="star-1" type="radio" name="star0" class="star-1" checked="checked">
                                                                                                                <label class="star-1" for="star-1">1</label>
                                                                                                                <input id="star-2" type="radio" name="star0" class="star-2">
                                                                                                                <label class="star-2" for="star-2">2</label>
                                                                                                                <input id="star-3" type="radio" name="star0" class="star-3">
                                                                                                                <label class="star-3" for="star-3">3</label>
                                                                                                                <input id="star-4" type="radio" name="star0" class="star-4">
                                                                                                                <label class="star-4" for="star-4">4</label>
                                                                                                                <input id="star-5" type="radio" name="star0" class="star-5">
                                                                                                                <label class="star-5" for="star-5">5</label>
                                                                                                                <span style="width: 20%;"></span>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <span>Quality</span>
                                                                                                            <div class="stars">
                                                                                                                <input id="star-11" type="radio" name="star1" class="star-1" checked="checked">
                                                                                                                <label class="star-11" for="star-11">1</label>
                                                                                                                <input id="star-21" type="radio" name="star11" class="star-2">
                                                                                                                <label class="star-21" for="star-21">2</label>
                                                                                                                <input id="star-31" type="radio" name="star11" class="star-3">
                                                                                                                <label class="star-31" for="star-31">3</label>
                                                                                                                <input id="star-41" type="radio" name="star11" class="star-4">
                                                                                                                <label class="star-41" for="star-41">4</label>
                                                                                                                <input id="star-51" type="radio" name="star11" class="star-5">
                                                                                                                <label class="star-51" for="star-51">5</label>
                                                                                                                <span style="width: 20%;"></span>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <span>Value</span>
                                                                                                            <div class="stars">
                                                                                                                <input id="star-12" type="radio" name="star2" class="star-1" checked="checked">
                                                                                                                <label class="star-12" for="star-12">1</label>
                                                                                                                <input id="star-22" type="radio" name="star2" class="star-2">
                                                                                                                <label class="star-22" for="star-22">2</label>
                                                                                                                <input id="star-32" type="radio" name="star22" class="star-3">
                                                                                                                <label class="star-32" for="star-32">3</label>
                                                                                                                <input id="star-42" type="radio" name="star22" class="star-4">
                                                                                                                <label class="star-42" for="star-42">4</label>
                                                                                                                <input id="star-52" type="radio" name="star22" class="star-5">
                                                                                                                <label class="star-52" for="star-52">5</label>
                                                                                                                <span style="width: 20%;"></span>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                                <div class="total-rating user-rating-container overall-rating" data-overall-rating="1">
                                                                                                    <h6>Overall rating</h6>
                                                                                                    <div class="rating-star">
                                                                                                        <input id="star-13" type="radio" name="star" class="star-1" checked="checked">
                                                                                                        <label class="star-13" for="star-13">1</label>
                                                                                                        <input id="star-23" type="radio" name="star" class="star-2">
                                                                                                        <label class="star-2" for="star-23">2</label>
                                                                                                        <input id="star-33" type="radio" name="star" class="star-3">
                                                                                                        <label class="star-3" for="star-33">3</label>
                                                                                                        <input id="star-43" type="radio" name="star" class="star-4">
                                                                                                        <label class="star-4" for="star-43">4</label>
                                                                                                        <input id="star-53" type="radio" name="star" class="star-5">
                                                                                                        <label class="star-5" for="star-53">5</label>
                                                                                                        <span style="width: 20%;"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="form-element">
                                                                                                    <i class="icon-edit2"></i>
                                                                                                    <input type="text" placeholder="Title of your review *" value="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="form-element">
                                                                                                    <i class="icon-user4"></i>
                                                                                                    <input type="text" placeholder="Name *" value="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="form-element">
                                                                                                    <i class="icon-envelope3"></i>
                                                                                                    <input type="text" placeholder="Email *" value="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="form-element">
                                                                                                    <i class="icon-message"></i>
                                                                                                    <textarea placeholder="Tell about your experience or leave a tip for others" cols="30" rows="10" maxlength="500"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="form-element message-length">
                                                                                                    <span>Min characters: 10</span>
                                                                                                    <span>Max characters: 500</span>
                                                                                                    <div>500 characters remaining</div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="form-element">
                                                                                                    <input type="button" value="Submit your Review">
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
                                                        <script>
                                                            (function ($) {
                                                                $(document).ready(function () {
                                                                    $(".order-review .modal-content").mCustomScrollbar({
                                                                        setHeight: 724,
                                                                        theme: "minimal-dark",
                                                                        mouseWheelPixels: 100
                                                                    });
                                                                });
                                                            })(jQuery);
                                                        </script>
                                                    </div>
                                                    <span class="date-time">Apr 9, 2020 12:00 AM </span>
                                                    <div class="order-btn">
                                                        <a href="#" data-toggle="modal" data-target="#order_detail">Order Detail</a>
                                                        <span class="order-status" style="background-color: #047a06;">Completed</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="order-list" style="height: 272px;">
                                                    <div class="author-info">
                                                        <div class="img-holder">
                                                            <figure>
                                                                <a href="#"><img src="{{asset('front/extra-images/listing-logo18.png')}}" alt=""> </a>
                                                            </figure>
                                                        </div>
                                                        <div class="text-holder">
                                                            <h6><a href="#">Restaurant Demo</a></h6>
                                                            <address>Apple Juice</address>
                                                            <span class="price">£ 26.22</span>
                                                        </div>
                                                    </div>
                                                    <div class="post-time">
                                                        <span>Totnes, Devon, England</span>
                                                        <span>Deliver in 10 Minutes </span>
                                                    </div>
                                                    <div class="rating-holder">
                                                        <div class="rating">
                                                            <div class="rating-box" style="width:100%;">
                                                            </div>
                                                        </div>
                                                        <span>(Out standing)</span>
                                                    </div>
                                                    <span class="date-time">
                                                        Apr 9, 2020 12:00 AM </span>
                                                    <div class="order-btn">
                                                        <a href="#" data-toggle="modal" data-target="#order_detail">Order Detail</a>
                                                        <span class="order-status" style="background-color: #047a06;">Completed</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="order-list" style="height: 250px;">
                                                    <div class="author-info">
                                                        <div class="img-holder">
                                                            <figure>
                                                                <a href="#"><img src="{{asset('front/extra-images/listing-logo18.png')}}" alt=""> </a>
                                                            </figure>
                                                        </div>
                                                        <div class="text-holder">
                                                            <h6><a href="#">Restaurant Demo</a></h6>
                                                            <address>Apple Juice</address>
                                                            <span class="price">£ 26.22</span>
                                                        </div>
                                                    </div>
                                                    <div class="post-time">
                                                        <span>Totnes, Devon, England</span>
                                                        <span>Deliver in 10 Minutes </span>
                                                    </div>
                                                    <span class="date-time">
                                                        Apr 9, 2020 12:00 AM </span>
                                                    <div class="order-btn">
                                                        <a href="#" data-toggle="modal" data-target="#order_detail">Order Detail</a>
                                                        <span class="order-status" style="background-color: #1e73be;">Processing</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="order-list" style="height: 250px;">
                                                    <div class="author-info">
                                                        <div class="img-holder">
                                                            <figure>
                                                                <a href="#"><img src="{{asset('front/extra-images/xlisting-logo03.png.pagespeed.ic_.aT-o9LinEJ.png')}}" alt="Restaurant Logo"> </a>
                                                            </figure>
                                                        </div>
                                                        <div class="text-holder">
                                                            <h6><a href="#">Nature Healthy Food</a></h6>
                                                            <address>Apple Juice, Chicken Roast, Chines Soup, Magi</address>
                                                            <span class="price">£ 36.16</span>
                                                        </div>
                                                    </div>
                                                    <div class="post-time">
                                                        <span>Bristol, Bristol, England</span>
                                                        <span>Deliver in 10 Minutes </span>
                                                    </div>
                                                    <span class="date-time">
                                                        Apr 5, 2020 11:17 PM </span>
                                                    <div class="order-btn">
                                                        <a href="#booking-detail-22405" data-toggle="modal" data-target="#order_detail">Order Detail</a>
                                                        <span class="order-status" style="background-color: #1e73be;">Processing</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination">
                                <li class="active"><a>1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><span class="page-numbers dots">…</span></li>
                                <li><a href="#">24</a></li>
                                <li><a href="#">Next </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Section End -->
@endsection
