@php
    $user = Auth::user();
@endphp

<div class="page-section restaurant-detail-image-section"
    style=" background: url({{ asset('front/extra-images/banner-img-2.jpg') }}) no-repeat scroll 0 0 / cover;">
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
                                <img src="{{ $user->photo ? asset('storage/' . $user->photo) : asset('front/extra-images/user-placeholder.png') }}" alt="{{ $user->name }}">
                            </figure>
                        </div>
                        <div class="text-holder">
                            <span class="restaurant-title">{{ $user->name }}</span>
                            <ul class="user-info-contact">
                                <li class="cell">
                                    <i class="icon-phone"></i>
                                    <span style="color: white;">
                                        @if ($user->phone)
                                            {{ $user->phone }}
                                        @else
                                            <a href="{{ route('buyer.account_setting') }}"
                                                class="link-underline-opacity-100-hover" style="color: orange;">Add
                                                a phone number</a>
                                        @endif
                                    </span>
                                </li>
                                <li class="email"><i class="icon-mail5"></i><span
                                        style="color: white;">{{ $user->email }}</span></li>
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
