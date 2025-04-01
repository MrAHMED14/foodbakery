@extends('front.buyer.master')

@section('title')
    Restaurant || Shortlists
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
                            <div class="user-shortlist-list listing simple">
                                <div class="element-title has-border">
                                    <h5>Shortlists</h5>
                                </div>
                                <ul class="shortlists-list">
                                    <li>
                                        <div class="suggest-list-holder">
                                            <div class="img-holder">
                                                <figure>
                                                    <a href="listings.html">
                                                        <img src="{{asset('front/extra-images/listing-logo18.png')}}" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <div class="post-title">
                                                    <h5><a href="listings.html">Restaurant Demo</a></h5>
                                                </div>
                                                <div class="delivery-potions">
                                                    <span>Totnes, United Kingdom</span>
                                                </div>
                                                <span>Apple Juice</span>
                                                <div class="list-option">
                                                    <a href="listings.html" class="viewmenu-btn">View Menu</a>
                                                    <a href="#" class="short-icon delete-shortlist"><i class="icon-close2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="suggest-list-holder">
                                            <div class="img-holder">
                                                <figure>
                                                    <a href="listings.html">
                                                        <img src="{{asset('front/extra-images/fb-restaurant-01.jpg')}}" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <div class="post-title">
                                                    <h5><a href="listings.html">Jet’s Kitchen</a></h5>
                                                </div>
                                                <div class="delivery-potions">
                                                    <span>12 Hume St, Montrose DD10 8JD, UK</span>
                                                </div>
                                                <span>Chines Soup</span> , <span>Egg Fry</span> , <span>Fish Fry</span>,
                                                <div class="list-option">
                                                    <a href="listings.html" class="viewmenu-btn">View Menu</a>
                                                    <a href="#" class="short-icon delete-shortlist"><i class="icon-close2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="suggest-list-holder">
                                            <div class="img-holder">
                                                <figure>
                                                    <a href="listings.html">
                                                        <img src="{{asset('front/extra-images/fb-restaurant-04.jpg')}}" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <div class="post-title">
                                                    <h5><a href="listings.html">Golden Chick Fries</a></h5>
                                                </div>
                                                <div class="delivery-potions">
                                                    <span>Restaurant Associates, Martin Lane, London, United Kingdom</span>
                                                </div>
                                                <span>Doughnut</span> , <span>Hot Dogs</span> , <span>Ice Cream</span> ,
                                                <div class="list-option">
                                                    <a href="listings.html" class="viewmenu-btn">View Menu</a>
                                                    <a href="#" class="short-icon delete-shortlist" data-id="1702"><i class="icon-close2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="suggest-list-holder">
                                            <div class="img-holder">
                                                <figure>
                                                    <a href="listings.html">
                                                        <img src="{{asset('front/extra-images/fb-restaurant-06.jpg')}}" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <div class="post-title">
                                                    <h5><a href="listings.html">Dragon Express</a></h5>
                                                </div>
                                                <div class="delivery-potions">
                                                    <span>10-11 Bethel Square, Brecon LD3 7JP, UK</span>
                                                </div>
                                                <span>Apple Juice</span> , <span>Carrot Juice</span> , <span>Ice Cream</span> ,
                                                <div class="list-option">
                                                    <a href="listings.html" class="viewmenu-btn">View Menu</a>
                                                    <a href="#" class="short-icon delete-shortlist" data-id="1703"><i class="icon-close2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="suggest-list-holder">
                                            <div class="img-holder">
                                                <figure>
                                                    <a href="listings.html">
                                                        <img src="{{asset('front/extra-images/xlisting-logo03.png.pagespeed.ic_.aT-o9LinEJ.png')}}" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <div class="post-title">
                                                    <h5><a href="listings.html">Nature Healthy Food</a></h5>
                                                </div>
                                                <div class="delivery-potions">
                                                    <span>Pizza Express Restaurants, Bristol, United Kingdom</span>
                                                </div>
                                                <span>Apple Juice</span> , <span>Chicken Roast</span> , <span>Chines Soup</span> , <span>Magi</span> ,
                                                <div class="list-option">
                                                    <a href="listings.html" class="viewmenu-btn">View Menu</a>
                                                    <a href="#" class="short-icon delete-shortlist"><i class="icon-close2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="suggest-list-holder">
                                            <div class="img-holder">
                                                <figure>
                                                    <a href="listings.html">
                                                        <img src="{{asset('front/extra-images/fb-restaurant-12.png')}}" alt="">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="text-holder">
                                                <div class="post-title">
                                                    <h5><a href="listings.html">Pizza Hut</a></h5>
                                                </div>
                                                <div class="delivery-potions">
                                                    <span>504 Stillwater Ave, Bangor, ME 04401, USA</span>
                                                </div>
                                                <span>Cold Coffee</span> , <span>Sham pane</span> , <span>Soda water</span> ,
                                                <div class="list-option">
                                                    <a href="listings.html" class="viewmenu-btn">View Menu</a>
                                                    <a href="#" class="short-icon delete-shortlist"><i class="icon-close2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
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
