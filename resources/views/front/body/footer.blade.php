@php
    $cuisineTypes = \App\Models\CuisineType::where('is_popular', 1)->take(6)->get();
@endphp

<footer id="footer" class="footer-style-1">
    <div class="footer-widget" style="background-color: #121418 !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="widget widget-top-cities">
                                <div class="widget-title">
                                    <h5 style="color: #ffffff !important;">Popular Cities</h5>
                                </div>
                                <ul>
                                    <li><a href="#">Tiaret</a></li>
                                    <li><a href="#">Sougueur</a></li>
                                    <li><a href="#">Mahdia</a></li>
                                    <li><a href="#">Chalala</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="widget widget-top-cities">
                                <div class="widget-title">
                                    <h5 style="color: #ffffff !important;">Popular Cuisnies</h5>
                                </div>
                                <ul>
                                    @foreach ($cuisineTypes as $cuisineType)
                                        <li>
                                            <a href="{{ route('front.listings', ['cuisine_types' => [$cuisineType->id]]) }}">
                                                {{ $cuisineType->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="widget widget-categories">
                                <div class="widget-title">
                                    <h5 style="color: #ffffff !important;">Menu</h5>
                                </div>
                                <ul>
                                    <li><a href="#"> Home</a></li>
                                    <li><a href="#"> Blog Large</a></li>
                                    <li><a href="#"> Contact</a></li>
                                    <li><a href="#"> FAQ’s</a></li>
                                    <li><a href="#"> How it works</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="widget widget-connect">
                                <div class="widget-title">
                                    <h5 style="color: #ffffff !important;"> Connect</h5>
                                </div>
                                <ul class="social-media">
                                    <li><a href="#" data-original-title="twitter" style="background-color: #ffffff; color: #121418;"><i class=" icon-twitter"></i></a>
                                    </li>
                                    <li><a href="#" data-original-title="linkedin" style="background-color: #ffffff; color: #121418;"><i class="icon-linkedin"></i></a>
                                    </li>
                                    <li><a href="#" data-original-title="pinterest" style="background-color: #ffffff; color: #121418;"><i class="icon-pinterest"></i></a>
                                    </li>
                                    <li><a href="#" data-original-title="google" style="background-color: #ffffff; color: #121418;"><i class="icon-google"></i></a>
                                    </li>
                                    <li><a href="#" data-original-title="instagram" style="background-color: #ffffff; color: #121418;"><i class="icon-instagram"></i></a>
                                    </li>
                                    <li><a href="#" data-original-title="youtube" style="background-color: #ffffff; color: #121418;"><i class="icon-youtube"></i></a>
                                    </li>
                                </ul>

                                <ul>
                                    <li><span class="bgcolor" style="color: #ffffff !important; height: 36px;"><i class="icon-ring_volume" style="color: #ffffff !important;"></i></span>
                                        <p>{{ $siteConfig->site_phone }}</p>
                                    </li>
                                    <li><span class="bgcolor" style="color: #ffffff !important; height: 36px;"><i class="icon-envelope-o" style="color: #ffffff !important;"></i></span>
                                        <p><a href="#">{{ $siteConfig->site_email }}</a></p>
                                    </li>
                                    <li><span class="bgcolor" style="color: #ffffff !important; height: 36px;"><i class="icon-location-pin2" style="color: #ffffff !important;"></i></span>
                                        <p><a href="#">{{ $siteConfig->site_address }}</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-sec" style="background-color: #121418 !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="copyright-inner">
                        <div class="copy-right" style="background-color: #121418 !important;">
                            <p>
                                © <script>document.write(new Date().getFullYear())</script> {{ $siteConfig->site_name }}. All Rights Reserved.
                            </p>
                        </div>
                        <div class="right-logos">
                            <p>
                                <img src="{{ asset('front/extra-images/footer-logo1.png') }}" alt="">
                                <img src="{{ asset('front/extra-images/footer-logo2.png') }}" alt="">
                                <img src="{{ asset('front/extra-images/footer-logo3.png') }}" alt="">
                                <img src="{{ asset('front/extra-images/footer-logo4.png') }}" alt="">
                                <img src="{{ asset('front/extra-images/footer-logo5.png') }}" alt="">
                                <img src="{{ asset('front/extra-images/footer-logo6.png') }}" alt="">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
