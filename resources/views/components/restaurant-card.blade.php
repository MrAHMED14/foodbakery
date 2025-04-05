@props(['restaurant'])

<li>
    <div class="img-holder">
        <figure>
            <a href="#">
                <img src="{{ asset('front/extra-images/listing-logo12.png') }}" class="img-list wp-post-image"
                    alt="">
            </a>
        </figure>
        <span class="restaurant-status close"><em class="bookmarkRibbon"></em>Close</span>
    </div>
    <div class="text-holder">
        <div class="list-rating">
            <div class="rating-star">
                <span class="rating-box" style="width: 100%;"></span>
            </div>
            <span class="reviews">(1)</span>
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
