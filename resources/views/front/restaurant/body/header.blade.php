@php
    $user = Auth::user();
@endphp

<div class="page-section restaurant-detail-image-section"
style="background: url('{{ $user->restaurant->cover_photo ? asset('storage/' . $user->restaurant->cover_photo) : asset('front/extra-images/cover-placeholder.png') }}') center center / cover no-repeat;">
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
                                <img src="{{ $user->restaurant->restaurant_logo ? asset('storage/' . $user->restaurant->restaurant_logo) : asset('front/extra-images/user-placeholder.png') }}" alt="{{$user->restaurant->name }}">
                            </figure>
                        </div>

                        <div class="text-holder">
                            <span class="restaurant-title">{{ $user->restaurant->name }}</span>

                            <ul class="user-info-contact">
                                <li class="cell">
                                    <i class="icon-phone"></i>
                                    <span style="color: white;">
                                        {{ $user->restaurant->phone }}
                                    </span>
                                </li>
                                <li class="cell">
                                    <i class="icon-map-marker2"></i>
                                    <span style="color: white;">
                                        {{ $user->restaurant->address }}
                                    </span>
                                </li>
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
