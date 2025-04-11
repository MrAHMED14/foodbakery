@props(['restaurant'])

<li>
    <div class="img-holder">
        <figure>
            <a href="#">
                <img src="{{ $restaurant->restaurant_logo ? asset('storage/' . $restaurant->restaurant_logo) : asset('front/extra-images/listing-logo12.png') }}" class="img-list wp-post-image" alt="">
            </a>
        </figure>
        @if ($restaurant->isOpenNow())
            <span class="restaurant-status open"><em class="bookmarkRibbon"></em>Open</span>
        @else
            <span class="restaurant-status close"><em class="bookmarkRibbon"></em>Close</span>
        @endif
    </div>
    <div class="text-holder">
        <div class="list-rating">
            <div style="display: flex; align-items: center; width: 100%; gap: 5px;">
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= floor($restaurant->averageRating()))
                        <span class="icon-star-full" style="color: #ff981a;"></span>
                    @elseif ($i - $restaurant->averageRating() <= 0.5)
                        <span class="icon-star-half-empty" style="color: #ff981a;"></span>
                    @else
                        <span class="icon-star-outlined" style="color: #ff981a;"></span>
                    @endif
                @endfor
                <span class="reviews">( {{ $restaurant->reviewsCount() }} )</span>
            </div>
        </div>
        <div class="post-title">
            <h5>
                <a href="{{ route('front.listing_details', $restaurant->id) }}" wire:navigate>
                    {{ $restaurant->name }}
                </a>
                <span class="sponsored text-color">Sponsored</span>
            </h5>
        </div>
        <span class="post-categories">
            <span>Cuisines: </span>
            @foreach ($restaurant->cuisines as $cuisine)
                {{ $cuisine->name }}
                @if (!$loop->last)
                    ,
                @endif
            @endforeach
        </span>
        <div class="delivery-potions">
            <div class="post-time">
                <i class="icon-motorcycle"></i>
                <div class="time-tooltip">
                    <div class="time-tooltip-holder">
                        <b class="tooltip-label">Delivery time</b>
                        <b class="tooltip-info">Your order will be delivered in 10 minutes.</b>
                    </div>
                </div>
            </div>
            <div class="post-time">
                <i class="icon-clock4"></i>
                <div class="time-tooltip">
                    <div class="time-tooltip-holder">
                        <b class="tooltip-label">Pickup time</b>
                        <b class="tooltip-info">You can pickup order in 15 minutes.</b>
                    </div>
                </div>
            </div>
            <span>{{ $restaurant->city }}</span>
        </div>
    </div>
    <div class="list-option">
        <a href="#" class="shortlist-btn" data-toggle="modal" data-target="#sign-in">
            <i class="icon-heart4"></i>
        </a>
        <a href="{{ route('front.listing_details', $restaurant->id) }}" class="viewmenu-btn text-color" wire:navigate>
            View Menu
        </a>
    </div>
</li>
