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
                                            <span class="element-slogan">({{ $reviewsCount }})</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="user-reviews-list">
                                        <div class="review-listing">

                                            {{-- Reviews --}}
                                            <ul class="review-restaurant" id="review-list">
                                                @if ($reviews->isEmpty())
                                                    <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="reviews-alert">
                                                            <div class="media-holder">
                                                                <img src="https://foodbakery.chimpgroup.com/wp-content/plugins/wp-foodbakery/assets/frontend/images/icon-review.png"
                                                                    alt="review not found">
                                                            </div>
                                                            <div class="text-holder">
                                                                <strong><span
                                                                        style="color: black; font-size: 15px; display: inline; text-align: left;">No
                                                                        reviews yet.</span></strong>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endif

                                                @foreach ($reviews as $review)
                                                    <li class="review-item col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                        <div class="list-holder ">
                                                            <div class="review-text">
                                                                <div class="review-title">
                                                                    <h6><a href="{{ route('front.listing_details', $review->restaurant->id) }}">{{$review->restaurant->name}}</a></h6>
                                                                    <div class="rating-holder">
                                                                        <div style="font-size: 15px; color: #ddd;">
                                                                            @for ($i = 1; $i <= 5; $i++)
                                                                                @if ($i <= $review->rating)
                                                                                    <i class="fa fa-star"
                                                                                        data-value="{{ $i }}"
                                                                                        style="color:#ffc107;"></i>
                                                                                @else
                                                                                    <i class="fa fa-star"
                                                                                        data-value="{{ $i }}"></i>
                                                                                @endif
                                                                            @endfor
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <span
                                                                    style="color: #7d808d">{{ $review->created_at->diffForHumans() }}</span>
                                                                <p>{{ $review->comment }}</p>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    @if ($review->response)
                                                        <li class="reply-item col-lg-12 col-md-12 col-sm-12 col-xs-12 review_reply">
                                                            <div class="list-holder ">
                                                                <div class="review-text">
                                                                    <div class="review-title">
                                                                        <h6>Restaurant Owner</h6>
                                                                    </div>
                                                                    <span style="color: #7d808d">{{ $review->response->created_at->diffForHumans() }}</span>
                                                                    <p>
                                                                        {{ $review->response->reply }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                {{-- Pagination --}}
                                @if ($reviews->hasPages())
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="page-nation">
                                                {{ $reviews->links('pagination::bootstrap-4') }}
                                            </div>
                                        </div>
                                    </div>
                                @endif
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
