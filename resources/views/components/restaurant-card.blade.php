@props(['restaurant'])

<li>
    <div class="img-holder">
        <figure>
            <a href="#">
                <img src="{{ $restaurant->restaurant_logo ? asset('storage/' . $restaurant->restaurant_logo) : asset('front/extra-images/restaurant-placeholder.png') }}"
                    class="img-list wp-post-image" style="border-radius: 5px;" alt="logo">
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
            @if ($restaurant->accepts_orders)
                <div class="post-time">
                    <i class="icon-motorcycle"></i>
                    <div class="time-tooltip">
                        <div class="time-tooltip-holder">
                            <b class="tooltip-label">Pre orders</b>
                            <b class="tooltip-info">This restaurant allows Pre orders.</b>
                        </div>
                    </div>
                </div>
            @endif

            @if ($restaurant->accepts_reservations)
                <div class="post-time">
                    <i class="icon-table"></i>
                    <div class="time-tooltip">
                        <div class="time-tooltip-holder">
                            <b class="tooltip-label">Reservation</b>
                            <b class="tooltip-info">This restaurant allows Reservation.</b>
                        </div>
                    </div>
                </div>
            @endif

            <span>{{ $restaurant->city }}</span>
        </div>
    </div>
    <div class="list-option">
        <a href="{{ route('front.listing_details', $restaurant->id) }}" class="viewmenu-btn text-color">
            View Menu
        </a>
    </div>
</li>
