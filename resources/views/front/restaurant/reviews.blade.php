@extends('front.restaurant.master')

@section('title')
    Reviews
@endsection

@section('content')
    <!-- Main Section Start -->
    <div class="main-section">
        @include('front.restaurant.body.header')

        <div class="page-section account-header buyer-logged-in">
            <div class="container">
                <div class="row">
                    <!-- ========== menu Start ========== -->
                    @include('front.restaurant.body.menu')
                    <!-- menu End -->
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="user-dashboard loader-holder">
                            <div class="user-holder">
                                <div class="dashbard-user-reviews-list">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="element-title has-border reviews-header right-filters-row">
                                                <h5>
                                                    <span>Reviews</span>
                                                    <span class="element-slogan">({{ $totalReviews }})</span>
                                                </h5>
                                                <div class="right-filters row pull-right">
                                                    <div class="col-lg-6 col-md-6 col-xs-6">
                                                        <form method="GET" action="{{ route('restaurant.reviews') }}">
                                                            <div class="input-field">
                                                                <select class="chosen-select-no-single" name="sort"
                                                                    onchange="this.form.submit()">
                                                                    <option value="">Sort by</option>
                                                                    <option value="high-rating"
                                                                        {{ request('sort') == 'high-rating' ? 'selected' : '' }}>
                                                                        High rating</option>
                                                                    <option value="lowest-rating"
                                                                        {{ request('sort') == 'lowest-rating' ? 'selected' : '' }}>
                                                                        Lowest rating</option>
                                                                    <option value="latest"
                                                                        {{ request('sort') == 'latest' ? 'selected' : '' }}>
                                                                        Latest</option>
                                                                    <option value="oldest"
                                                                        {{ request('sort') == 'oldest' ? 'selected' : '' }}>
                                                                        Oldest</option>
                                                                </select>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    @foreach ($reviews->sortByDesc('created_at') as $review)
                                                        <li class="review-item col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                            <div class="list-holder ">
                                                                <div class="review-text">
                                                                    <div class="review-title">
                                                                        <h6>{{ $review->user->name }}</h6>
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
                                                            <li
                                                                class="reply-item col-lg-12 col-md-12 col-sm-12 col-xs-12 review_reply">
                                                                <div class="list-holder ">
                                                                    <div class="review-text">
                                                                        <div class="review-title">
                                                                            <h6>Restaurant Owner</h6>
                                                                        </div>
                                                                        <span
                                                                            style="color: #7d808d">{{ $review->response->created_at->diffForHumans() }}</span>
                                                                        <p>
                                                                            {{ $review->response->reply }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @else
                                                            <li
                                                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 review_reply">
                                                                <div class="list-holder">
                                                                    <div class="review-title">
                                                                        <h6>Your Reply</h6>
                                                                    </div>
                                                                    <form
                                                                        action="{{ route('reviews.reply', $review->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <textarea style="border-radius: 3px; background-color: #fbfcfd; color: #9fa1a9;" name="reply" rows="2"
                                                                            placeholder="Write your reply here..." required></textarea>
                                                                        <button type="submit"
                                                                            class="btn-submit">Reply</button>
                                                                    </form>
                                                                </div>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
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
    </div>
    </div>
    <!-- Main Section End -->
@endsection
