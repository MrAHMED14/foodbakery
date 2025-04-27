@extends('front.buyer.master')

@section('title')
    My Reviews
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
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="element-title has-border reviews-header right-filters-row">
                                        <h5>
                                            <span>Reviews Given</span>
                                            <span class="element-slogan">(2)</span>
                                            (static)
                                        </h5>
                                        <div class="right-filters row pull-right">
                                            <div class="col-lg-6 col-md-6 col-xs-6">
                                                <div class="sort-by">
                                                    <ul class="reviews-sortby">
                                                        <li>
                                                            <small>Sort by:</small>
                                                            <span><strong class="active-sort">Newest Reviews </strong></span>
                                                            <div class="reviews-sort-dropdown">
                                                                <form>
                                                                    <div class="input-reviews">
                                                                        <div class="radio-field">
                                                                            <input name="review" id="check-1" type="radio" value="newest" checked="checked">
                                                                            <label for="check-1">Newest Reviews</label>
                                                                        </div>
                                                                        <div class="radio-field">
                                                                            <input name="review" id="check-2" type="radio" value="highest">
                                                                            <label for="check-2">Highest Rating</label>
                                                                        </div>
                                                                        <div class="radio-field">
                                                                            <input name="review" id="check-3" type="radio" value="lowest">
                                                                            <label for="check-3">Lowest Rating</label>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-xs-6 pull-right">
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
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="user-reviews-list">
                                        <div class="review-listing">
                                            <ul>
                                                <li class="alert ">
                                                    <div class="list-holder">
                                                        <div class="review-text">
                                                            <div class="review-title">
                                                                <h6><a href="#"> Restaurant Demo: Awesome and Lovely Experience </a></h6>
                                                                <div class="rating-holder">
                                                                    <div class="rating-star">
                                                                        <span class="rating-box" style="width: 100%;"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <em class="review-date">21 mins Ago </em>
                                                            <p class="more">It has all the bells and whistles I you are looking for in a Foodbakery directory theme. </p>
                                                        </div>
                                                        <a href="#" class="delete-this-user-review close"><i class="icon-close2"></i></a>
                                                    </div>
                                                </li>
                                                <li class="alert ">
                                                    <div class="list-holder">
                                                        <div class="review-text">
                                                            <div class="review-title">
                                                                <h6><a href="# "> Restaurant Demo: Delicious and Wealthy </a></h6>
                                                                <div class="rating-holder">
                                                                    <div class="rating-star">
                                                                        <span class="rating-box" style="width: 100%;"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <em class="review-date">21 mins Ago </em>
                                                            <p class="more">A+++ support from developers. Super system, all integrated very well documented and great support, this is great. </p>
                                                        </div>
                                                        <a href="#" class="delete-this-user-review close"><i class="icon-close2"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
    </div>
</div>
<!-- Main Section End -->
@endsection
