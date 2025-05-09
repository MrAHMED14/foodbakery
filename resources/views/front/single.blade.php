@extends('front.master')

@section('title')
    Restaurant || Single
@endsection

@section('content')

<!-- Main Section Start -->
<div class="main-section">
    <!-- Home Pages Elements Strat -->
    <div class="page-section nopadding cs-nomargin" style="margin-top: 0px;padding-top: 250px;padding-bottom: 230px;margin-bottom: 0px;background: url({{asset('front/extra-images/single-foodbakery-demo.jpg')}}) no-repeat center / cover;">
        <!-- Container Start -->
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="column-content ">
                        <h1 style="text-align: center; display: block;color: #fff !important; line-height: 65px !important;">
                            WE ARE IN THE BUSINESS<br>OF FOOD WHAT OUR RESTAURANT DO </h1>
                        <br>
                        <h5 style="color: #fff !important; text-align: center;   margin-top: -22px !important;">
                            Welcome to our Creative Restaurant</h5>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:2px">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="contact-area">
                        <span class="time">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Opening Time : 10 : 00 AM"><i class="icon-clock-o"></i></a>
                        </span>
                        <span class="phone">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Contact Us : + 89080809809"><i class="icon-phone5"></i></a>
                        </span>
                        <span class="location">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="London, United Kingdom"><i class="icon-location-pin"></i></a>
                        </span>
                    </div>
                </div>
            </div><!-- end section row -->
        </div> <!-- End Container Start -->
    </div>
    <div class="page-section nopadding cs-nomargin" style="margin-top: -15px;padding-top: 30px;padding-bottom: 0px;margin-bottom: 0px;background: #b02121;">
        <!-- Container Start -->
        <div class="container ">
            <div class="row">
                <div class="section-fullwidth col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="cs-calltoaction simple">
                                <div class="cs-text"><strong style="color:#ffffff !important;">its new year
                                        Order Now get
                                        40% Off</strong> <span style="color:rgb(255,255,255);">Aliquam est eros,
                                        malesuada ut erat sit amet, consectetur sollicitudin sem. Vivam.</span>
                                </div>
                                <a href="#" class="csborder-color cs-color" style="background-color:#f7f7f7 !important; color:#b02121 !important;">Order
                                    Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- end section row -->
                </div>
            </div>
        </div>
        <!-- End Container Start -->
    </div>
    <div class="page-section" style="transform: none;margin-top: 0px;padding-top: 60px;padding-bottom: 30px;margin-bottom: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 sticky-sidebar">
                    <div class="filter-toggle">
                        <span class="filter-toggle-text">Categories By</span><i class="icon-chevron-down"></i>
                    </div>
                    <div class="filter-wrapper">
                        <div class="categories-menu">
                            <h6><i class="icon-restaurant_menu"></i>Categories</h6>
                            <ul class="menu-list">
                                <li class="active"><a href="#" class="menu-category-link"> Pizzas </a></li>
                                <li class=""><a href="#" class="menu-category-link"> Calzone </a></li>
                                <li class=""><a href="#" class="menu-category-link"> Garlic Bread </a></li>
                                <li class=""><a href="#" class="menu-category-link"> Kebabs </a></li>
                                <li class=""><a href="#" class="menu-category-link"> Burgers </a></li>
                                <li class=""><a href="#" class="menu-category-link"> Specials </a></li>
                                <li class=""><a href="#" class="menu-category-link"> Wraps </a></li>
                                <li class=""><a href="#" class="menu-category-link"> Chicken </a></li>
                                <li class=""><a href="#" class="menu-category-link"> Paninis </a></li>
                                <li class=""><a href="#" class="menu-category-link"> Jacket Potatoes </a></li>
                                <li class=""><a href="#" class="menu-category-link"> Starters </a></li>
                                <li class=""><a href="#" class="menu-category-link"> Traditional Curries </a></li>
                                <li class=""><a href="#" class="menu-category-link"> Biryani Dishes </a></li>
                                <li class=""><a href="#" class="menu-category-link"> Vegetarian Dishes </a></li>
                                <li class=""><a href="#" class="menu-category-link"> Rice </a></li>
                                <li class=""><a href="#" class="menu-category-link"> Bread </a></li>
                                <li class=""><a href="#" class="menu-category-link"> Sauces </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-9 col-xs-12">
                    <div class="tabs-holder horizontal">
                        <ul class="stickynav-tabs nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home"><i class="icon- icon-room_service"></i>Menu</a></li>
                            <li><a data-toggle="tab" href="#menu1"><i class="icon- icon-textsms"></i>Reviews (1)</a></li>
                            <li><a data-toggle="tab" href="#menu2"><i class="icon- icon-food"></i>Book a Table </a></li>
                            <li><a data-toggle="tab" href="#menu3"><i class="icon- icon-info3"></i>Restaurant Info</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <div class="menu-itam-holder">
                                    <div class="field-holder sticky-search">
                                        <input id="menu-srch-6272" data-id="6272" class="input-field dev-menu-search-field" type="text" placeholder="Search food item">
                                    </div>
                                    <div id="menu-item-list-6272" class="menu-itam-list">
                                        <div class="element-title" id="menu-category-0">
                                            <h5 class="text-color">Pizzas</h5>
                                            <span>Choose your cut: Triangular, square, fingers or Un cut on any
                                                size
                                                pizza.</span>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo24-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo24-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chicken Tandoori Special 12" Deep Pan</h6>
                                                    <span>Cheese, tomatoes and italian herbs.</span>
                                                    <ul class="nutri-icons">
                                                        <li><a data-toggle="tooltip" title="Contain Bnana"><img src="{{asset('front/extra-images/natural-item03.png')}}" alt=""></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£4.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-0"><i class="icon-plus4 text-color"></i>
                                                        <div class="foodbakery-button-loader" style="display: block;">
                                                            <div class="spinner">
                                                                <div class="double-bounce1"></div>
                                                                <div class="double-bounce2"></div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <span id="add-menu-loader-0"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo23-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo23-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chicken Tandoori Special 09" Deep Pan</h6>
                                                    <span>Cheese, tomatoes, tuna fish, sweetcorn and italian
                                                        herbs
                                                    </span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£6.50</span>
                                                    <a href="#" data-toggle="modal" data-target="#extras-0-1" class="dev-adding-menu-btn"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-1"></span>
                                                </div>
                                                <div class="modal fade menu-extras-modal" id="extras-0-2" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                <h2><a>Extras</a></h2>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="menu-selection-container">
                                                                    <div class="extras-detail-main">
                                                                        <h3>Drinks</h3>
                                                                        <div class="extras-detail-options">
                                                                            <div class="extras-detail-att">
                                                                                <label for="extra-1">
                                                                                    <input type="radio" id="extra-1" name="extra-0-1">
                                                                                    <span class="extra-title">Cold
                                                                                        Drink</span>
                                                                                    <span class="extra-price">£1.50</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="extras-detail-att">
                                                                                <label for="extra-2">
                                                                                    <input type="radio" id="extra-2" name="extra-0-1">
                                                                                    <span class="extra-title">Redbull</span>
                                                                                    <span class="extra-price">£2.50</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="extras-detail-att">
                                                                                <label for="extra-3">
                                                                                    <input type="radio" id="extra-3" name="extra-0-1">
                                                                                    <span class="extra-title">chillies</span>
                                                                                    <span class="extra-price">£3.50</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="extras-detail-selected"></div>
                                                                    </div>
                                                                    <div class="extras-btns-holder">
                                                                        <button style="display:none;" class="add-extra-menu-btn input-button-loader">Add
                                                                            to Menu</button>
                                                                        <a href="#" class="reset-menu-fields btn">Reset
                                                                            Fields</a>
                                                                        <span class="extra-loader"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo21-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo21-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Margherita 12" Deep Pan</h6>
                                                    <span>heese, tomatoes and italian herbs</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£5.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-2"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-2"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/blogs-food-bakery-05.jpg')}}"><img src="{{asset('front/extra-images/blogs-food-bakery-05-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6> Margherita 9" Deep Pan</h6>
                                                    <span>Cheese, tomatoes, shrimps, garlic, mussels, cockles,
                                                        olives and
                                                        italian herbs</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£4.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-3"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-3"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo19-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo19-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6> Margherita 9" Deep Pan</h6>
                                                    <span>Cheese, tomatoes and italian herbs</span>
                                                    <ul class="nutri-icons">
                                                        <li><a data-toggle="tooltip" title="Onion"><img src="{{asset('front/extra-images/natural-item02.png')}}" alt=""></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-4"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-4"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo18-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo18-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Vegetarian 12" Deep Pan</h6>
                                                    <span>Cheese, tomatoes, shrimps, garlic, mussels, cockles,
                                                        olives and
                                                        italian herbs</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-5"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-5"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo16-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo16-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Foodbakery Special 12" Deep Pan</h6>
                                                    <span>Cheese, tomatoes, mushrooms and italian herbs</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.90</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-6"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-6"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo15-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo15-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Foodbakery Special 9" Deep Pan</h6>
                                                    <span>Cheese, tomatoes, shrimps, garlic, mussels, cockles,
                                                        olives and
                                                        italian herbs</span>
                                                    <ul class="nutri-icons">
                                                        <li><a data-toggle="tooltip" title="Vegitable"><img src="{{asset('front/extra-images/natural-item04.png')}}" alt=""></a></li>
                                                        <li><a data-toggle="tooltip" title="Chille"><img src="{{asset('front/extra-images/natural-item05.png')}}" alt=""></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£4.80</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-7"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-7"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo14-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo14-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Foodbakery Special 9" Deep Pan</h6>
                                                    <span>Cheese, tomatoes, mushrooms and italian herbs</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£4.80</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-8"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-8"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="element-title" id="menu-category-1">
                                            <h5 class="text-color">Calzone</h5>
                                            <span>calzones are usually stuffed with cheeses such as ricotta,
                                                mozzarella
                                                or a different local cheese.</span>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo13-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo13-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Calzone (Folded Pizza)</h6>
                                                    <span>Cheese, tomatoes, ham, salami, mushrooms, garlic
                                                        sausage and
                                                        italian herbs</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.50</span>
                                                    <a href="#" data-toggle="modal" data-target="#extras-1-9" class="dev-adding-menu-btn"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-9"></span>
                                                </div>
                                                <div class="modal fade menu-extras-modal" id="extras-1-9" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                <h2><a>Extras</a></h2>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="menu-selection-container">
                                                                    <div class="extras-detail-main">
                                                                        <h3>Extras</h3>
                                                                        <div class="extras-detail-options">
                                                                            <div class="extras-detail-att">
                                                                                <label for="extra-0-0-9">
                                                                                    <input type="radio" id="extra-0-0-9" name="extra-0-9">
                                                                                    <span class="extra-title">Cold
                                                                                        Drink</span>
                                                                                    <span class="extra-price">£2.50</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="extras-detail-att">
                                                                                <label for="extra-1-0-9">
                                                                                    <input type="radio" id="extra-1-0-9" name="extra-0-9">
                                                                                    <span class="extra-title">Souce</span>
                                                                                    <span class="extra-price">£1.50</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="extras-detail-att">
                                                                                <label for="extra-2-0-9">
                                                                                    <input type="radio" id="extra-2-0-9" name="extra-0-9">
                                                                                    <span class="extra-title">Chees</span>
                                                                                    <span class="extra-price">£0.80</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="extras-detail-selected"></div>
                                                                    </div>
                                                                    <div class="extras-btns-holder">
                                                                        <button style="display:none;" class="add-extra-menu-btn input-button-loader">Add
                                                                            to Menu</button>
                                                                        <a href="#" class="reset-menu-fields btn">Reset
                                                                            Fields</a>
                                                                        <span class="extra-loader"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="element-title" id="menu-category-2">
                                            <h5 class="text-color">Garlic Bread</h5>
                                            <span>Garlic bread also garlic toast consists of bread usually a
                                                baguette or
                                                sour dough like a ciabatta</span>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo12-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo12-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Garlic Pizza Bread 9 " Thin</h6>
                                                    <span>Butter and crushed garlic, then spread a little over
                                                        the
                                                        pizza</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£2.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-10"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-10"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo10-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo10-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Garlic Bread 12" Deep</h6>
                                                    <span>Pizza bread made with extra virgin olive oil</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-11"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-11"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="element-title" id="menu-category-3">
                                            <h5 class="text-color">Kebabs</h5>
                                            <span>kebab is a common dish, consisting of a skewer with small
                                                pieces of
                                                meat or seafood, together with vegetables</span>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo09-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo09-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Garlic Pizza Bread 12" Thin</h6>
                                                    <span>Tomatoes, garlic, oregano, and extra virgin olive
                                                        oil</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£2.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-12"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-12"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/blogs-food-bakery-04.jpg')}}"><img src="{{asset('front/extra-images/blogs-food-bakery-04-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Regular Kebab</h6>
                                                    <span>Beef meat, split chickpealentils , ginger, garlic,
                                                        onions, salt
                                                        and mixed spices</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-13" data-id="13" data-cid="3"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-13"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/fb_masonary_3.jpg')}}"><img src="{{asset('front/extra-images/fb_masonary_3-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Kebabs With Naan</h6>
                                                    <span>Kebab is a dish of pieces of meat and fish</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£4.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-14" data-id="14" data-cid="3"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-14"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/blogs-food-bakery-03.jpg')}}"><img src="{{asset('front/extra-images/blogs-food-bakery-03-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chapal Kebab Regular</h6>
                                                    <span>Kababs made with minced mutton meat, is a famous
                                                        dish</span>
                                                    <ul class="nutri-icons">
                                                        <li><a data-toggle="tooltip" title="Vegitable"><img src="{{asset('front/extra-images/natural-item04.png')}}" alt=""></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-15"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-15"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/fb_masonary_9.jpg')}}"><img src="{{asset('front/extra-images/fb_masonary_9-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Kebabs With nan</h6>
                                                    <span>For the kebabs: Preheat a tandoor oven or a charcoal
                                                        grill to
                                                        medium heat</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£2.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-16"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-16"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/fb_masonary_7.jpg')}}"><img src="{{asset('front/extra-images/fb_masonary_7-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chicken Kebab Regular</h6>
                                                    <span>Kababs made with minced mutton meat, is a famous
                                                        dish</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£6.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-17"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-17"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/fb_masonary_1.jpg')}}"><img src="{{asset('front/extra-images/fb_masonary_1-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chicken Kebab With Nan</h6>
                                                    <span>Prepare a Tandoor or charcoal grill for moderate heat.
                                                        Thread
                                                        the marinated chicken onto a metal skewer</span>
                                                    <ul class="nutri-icons">
                                                        <li><a data-toggle="tooltip" title="Contain Egg"><img src="{{asset('front/extra-images/natural-item01.png')}}" alt=""></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-18"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-18"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/blogs-food-bakery-02.jpg')}}"><img src="{{asset('front/extra-images/blogs-food-bakery-02-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chicken Boti Kebab Regular</h6>
                                                    <span>For this extremely tasty recipe you just need chicken,
                                                        almond
                                                        and spices. </span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£8.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-19"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-19"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo09-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo09-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chicken Boti Kebab with nan</h6>
                                                    <span>For this extremely tasty recipe you just need naan,
                                                        chicken,
                                                        almond and spices. </span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£8.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-20"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-20"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="element-title" id="menu-category-4">
                                            <h5 class="text-color">Burgers</h5>
                                            <span>Hamburger is a kind of sandwich consisting of grilled cutlets,
                                                served
                                                inside that cut round loaf.</span>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/fb_masonary_9.jpg')}}"><img src="{{asset('front/extra-images/fb_masonary_9-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Cheeseburger</h6>
                                                    <span>Topped with pineapple and cheese</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£6.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-21"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-21"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/blogs-food-bakery-11.jpg')}}"><img src="{{asset('front/extra-images/blogs-food-bakery-11-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Half Pounder</h6>
                                                    <span>Topped with pineapple and cheese</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£2.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-22"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-22"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/blogs-food-bakery-13.jpg')}}"><img src="{{asset('front/extra-images/blogs-food-bakery-13-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Half Pounder Meal</h6>
                                                    <span>Topped with 1000 island dressing</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-23"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-23"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/fb_masonary_4-683x1024.jpg')}}"><img src="{{asset('front/extra-images/fb_masonary_4-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Quarter Pounder</h6>
                                                    <span>Topped&#8203; with mozzarella cheese, tomato relish,
                                                        cheddar
                                                        cheese and green peppers</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-24"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-24"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/blogs-food-bakery-12.jpg')}}"><img src="{{asset('front/extra-images/blogs-food-bakery-12-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Quarter Pounder Meal</h6>
                                                    <span>Topped with cheese</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£2.99</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-25"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-25"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/blogs-food-bakery-08.jpg')}}"><img src="{{asset('front/extra-images/blogs-food-bakery-08-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chilli Burger</h6>
                                                    <span>Topped with mozzarella cheese, tomato relish, cheddar
                                                        cheese
                                                        and green peppers</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£4.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-26"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-26"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/fb_masonary_6-683x1024.jpg')}}"><img src="{{asset('front/extra-images/fb_masonary_6-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chilli Burger Half Pounder</h6>
                                                    <span>Topped with coleslaw</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£2.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-27"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-27"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/fb_masonary_10.jpg')}}"><img src="{{asset('front/extra-images/fb_masonary_10-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chilli Burger Half Pounder Meal</h6>
                                                    <span>Topped with spicy chilli sauce</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-28"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-28"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="element-title" id="menu-category-5">
                                            <h5 class="text-color">Specials</h5>
                                            <span>specials on a separate menu, making them easy and economical
                                                to
                                                change.</span>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/fb_masonary_8.jpg')}}"><img src="{{asset('front/extra-images/fb_masonary_8-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Donner Meat</h6>
                                                    <span>Prepared with onions, capsicums, garlic, fresh
                                                        tomatoes and
                                                        chef`s own selected spices</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-29"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-29"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo13-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo13-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chicken Meat</h6>
                                                    <span>Prepared with onions, capsicums, garlic, fresh
                                                        tomatoes and
                                                        chef`s own selected spices</span>
                                                    <ul class="nutri-icons">
                                                        <li><a data-toggle="tooltip" title="Vegitable"><img src="{{asset('front/extra-images/natural-item04.png')}}" alt=""></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£4.90</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-30"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-30"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="element-title" id="menu-category-6">
                                            <h5 class="text-color">Wraps</h5>
                                            <span>Sandwich and Wrap Trays come with your choice of a
                                                fresh.</span>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo12-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo12-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chicken Wrap</h6>
                                                    <span>Sliced grilled chicken breast, nestled in a fresh mix
                                                        of Green
                                                        Leaf lettuce with shredded</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-31"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-31"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo10-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo10-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Donner Wrap</h6>
                                                    <span>Meat cooked on a vertical rotisserie</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£5.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-32"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-32"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo07-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo07-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chicken Tikka Wrap</h6>
                                                    <span>Mix together the yoghurt, tikka paste and lemon
                                                        juice</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£4.99</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-33"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-33"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="element-title" id="menu-category-7">
                                            <h5 class="text-color">Chicken</h5>
                                            <span>The chicken (Gallus gallus domesticus) is a type of
                                                domesticated
                                                fowl,</span>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo09-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo09-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chicken Piece on Its Own</h6>
                                                    <span>Fried chicken is a dish consisting of chicken pieces
                                                        usually
                                                        from broiler chickens</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£1.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-34"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-34"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo17-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo17-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>1 Piece of Chicken Meal</h6>
                                                    <span>Salad topped reviewer Kelly's expectations for a
                                                        chicken
                                                        salad</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£2.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-35"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-35"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo02-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo02-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>2 Pieces of Chicken Meal</h6>
                                                    <span>A delightful chicken dish with a little spicy
                                                        kick.</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-36"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-36"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo11-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo11-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Popcorn Chicken</h6>
                                                    <span>This is a wonderful Southern treat in which everyone
                                                        will
                                                        enjoy! </span>
                                                    <ul class="nutri-icons">
                                                        <li><a data-toggle="tooltip" title="Onion"><img src="{{asset('front/extra-images/natural-item02.png')}}" alt=""></a></li>
                                                        <li><a data-toggle="tooltip" title="Vegitable"><img src="{{asset('front/extra-images/natural-item04.png')}}" alt=""></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-37"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-37"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo10-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo10-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chicken Nuggets</h6>
                                                    <span>These are really easy and taste great! Kids love
                                                        them!</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.70</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-38"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-38"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="element-title" id="menu-category-8">
                                            <h5 class="text-color">Paninis</h5>
                                            <span>Sandwiches are pressed down and heated on the panini</span>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo08-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo08-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Tuna Panini</h6>
                                                    <span>These patties are great dipped in ketchup, mustard, or
                                                        hot
                                                        sauce.</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.49</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-39"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-39"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo05-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo05-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Vegetable Panini</h6>
                                                    <span>This is a delicious sandwich which can be served for
                                                        lunch or
                                                        dinner. Paired with a green salad</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£4.88</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-40"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-40"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="element-title" id="menu-category-9">
                                            <h5 class="text-color">Jacket Potatoes</h5>
                                            <span>Jacket potatoes have been a popular menu choice for
                                                Wetherspoon
                                                customers</span>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo19-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo19-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Jacket Potato with 2 Fillings</h6>
                                                    <span>Twice baked potatoes, every kids favorite dish</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£2.99</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-41"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-41"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo19-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo19-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Lamb Chops (4)</h6>
                                                    <span>Tasty lamb chops are cooked on the stovetop with a
                                                        tasty
                                                        balsamic sauce</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£4.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-42"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-42"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo24-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo24-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chicken Boti (8)</h6>
                                                    <span>Chicken cubes mildly flavored with cheddar
                                                        cheese,grilled to
                                                        perfection</span>
                                                    <ul class="nutri-icons">
                                                        <li><a data-toggle="tooltip" title="Onion"><img src="{{asset('front/extra-images/natural-item02.png')}}" alt=""></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£4.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-43"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-43"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo23-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo23-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Seekh Kebab</h6>
                                                    <span>Seekh kebab can also be served in a naan bread much
                                                        like döner
                                                        kebab</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£4.99</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-44"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-44"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="element-title" id="menu-category-10">
                                            <h5 class="text-color">Starters</h5>
                                            <span>STARTERS. Edamame; Edamame with Spicy Dipping Sauce;
                                                Vegetable</span>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo22-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo22-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chicken Pakora</h6>
                                                    <span>A deliciously crunchy and satisfying Indian
                                                        starter</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£2.40</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-45"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-45"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo21-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo21-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Crispy Samosa</h6>
                                                    <span>Samosa, a crispy and spicy deep fried snack that has
                                                        an crisp
                                                        and flaky outer layer</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£1.88</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-46"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-46"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo20-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo20-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Mushroom Bhaji</h6>
                                                    <span>Serve with rice for a vegetarian dinner or with Naan
                                                        bread for
                                                        a starter</span>
                                                    <ul class="nutri-icons">
                                                        <li><a data-toggle="tooltip" title="Contain Egg"><img src="{{asset('front/extra-images/natural-item01.png')}}" alt=""></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.67</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-47"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-47"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="element-title" id="menu-category-11">
                                            <h5 class="text-color">Traditional Curries</h5>
                                            <span> chicken tikka masala, bhuna, dhansak, vindaloo</span>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo18-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo18-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chicken Rogan Josh</h6>
                                                    <span>It consists of braised lamb chunks cooked with a gravy
                                                        based on
                                                        browned onions or shallots</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£5.99</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-48"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-48"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo19-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo19-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Keema Rogan Josh</h6>
                                                    <span>It consists of braised lamb chunks cooked with a gravy
                                                        based on
                                                        browned onions or shallots</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£7.99</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-49"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-49"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo17-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo17-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Prawn Cocktail</h6>
                                                    <span>A bed of crisp iceberg lettuce is topped with diced
                                                        tomato and
                                                        avocado</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.99</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-50"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-50"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo16-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo16-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>King Prawn &amp; Rice</h6>
                                                    <span>Pour the eggs into the empty side of the pan, then
                                                        scramble
                                                        them, stirring</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£6.99</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-51"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-51"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo15-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo15-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Fish Masala</h6>
                                                    <span>Heat oil in wok over moderate heat until hot but not
                                                        smoking.
                                                        Add mustard seeds and cook until they make popping
                                                        sounds</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£5.99</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-52"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-52"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="element-title" id="menu-category-12">
                                            <h5 class="text-color">Biryani Dishes</h5>
                                            <span>Seafood dishes are distinct food dishes which use seafood
                                            </span>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo14-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo14-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chicken</h6>
                                                    <span>Popular variations use chicken instead of goat</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£6.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-53"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-53"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo13-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo13-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Keema</h6>
                                                    <span>Made with mince meat and Basmati rice and some
                                                        spices</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£5.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-54"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-54"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo12-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo12-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Mixed</h6>
                                                    <span>Made mixed biryani with chicken, prawn and fish</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£6.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-55"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-55"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="element-title" id="menu-category-13">
                                            <h5 class="text-color">Vegetarian Dishes</h5>
                                            <span>Biryani is a beloved staple in food menus in the Pakistani
                                                cuisine and
                                                Sindhi cuisine</span>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo11-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo11-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Garlic Mushroom</h6>
                                                    <span>Add mushrooms and toss with garlic butter to
                                                        coat</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£5.50</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-56"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-56"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo09-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo09-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Bombay Potato</h6>
                                                    <span>Blend together the ginger, garlic and quartered tomato
                                                        until
                                                        smooth</span>
                                                    <ul class="nutri-icons">
                                                        <li><a data-toggle="tooltip" title="Chille"><img src="{{asset('front/extra-images/natural-item05.png')}}" alt=""></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£4.99</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-57"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-57"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="element-title" id="menu-category-14">
                                            <h5 class="text-color">Rice</h5>
                                            <span> vegetarian recipes including vegetarian breakfasts, lunches
                                                and
                                                dinners</span>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo08-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo08-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Mushroom Rice</h6>
                                                    <span>Melt butter in a saucepan over medium heat. Cook
                                                        mushrooms,
                                                        garlic and green onion until mushrooms</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£5.99</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-58"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-58"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo06-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo06-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Egg Fried Rice</h6>
                                                    <span>Fried rice is a Chinese dish of steamed rice that has
                                                        been
                                                        stir-fried in a wok and, usually, mixed.</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.89</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-59"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-59"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo05-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo05-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Boiled Rice</h6>
                                                    <span> Is rice that has been partially boiled in the
                                                        husk</span>
                                                    <ul class="nutri-icons">
                                                        <li><a data-toggle="tooltip" title="Contain Bnana"><img src="{{asset('front/extra-images/natural-item03.png')}}" alt=""></a></li>
                                                    </ul>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.99</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-60"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-60"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="element-title" id="menu-category-15">
                                            <h5 class="text-color">Bread</h5>
                                            <span> the starchy seeds of an annual southeast Asian cereal grass
                                                (Oryza
                                                sativa) that are cooked and used for food</span>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo04-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo04-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Chapatti</h6>
                                                    <span>The Indus valley is known to be one of the ancestral
                                                        lands of
                                                        cultivated wheat</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£3.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-61"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-61"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder"> <a href="{{asset('front/extra-images/cover-photo08-1024x187.jpg')}}"><img src="{{asset('front/extra-images/cover-photo08-150x150.jpg')}}" alt=""></a></div>
                                                <div class="text-holder">
                                                    <h6>Roti</h6>
                                                    <span>Roti is a flatbread originating from the South Asia,
                                                        made from
                                                        stoneground wholemeal flour.</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£1.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-62"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-62"></span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="element-title" id="menu-category-16">
                                            <h5 class="text-color">Sauces</h5>
                                            <span>Sauces in French cuisine date back to the Middle Ages.</span>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="image-holder">
                                                    <a href="{{asset('front/extra-images/cover-photo03-1024x187.jpg')}}">
                                                        <img src="{{asset('front/extra-images/cover-photo03-150x150.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="text-holder">
                                                    <h6>Mint Sauce</h6>
                                                    <span>Mint sauce is a sauce traditionally made from finely
                                                        chopped
                                                        peppermint (Mentha × piperita) leaves, soaked in
                                                        vinegar</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£1.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-63"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-63"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder">
                                                    <a href="{{asset('front/extra-images/cover-photo02-1024x187.jpg')}}">
                                                        <img src="{{asset('front/extra-images/cover-photo02-150x150.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="text-holder">
                                                    <h6>Chilli Sauce</h6>
                                                    <span>Chilli sauce is a type of hot sauce or chili sauce
                                                        made from a
                                                        paste of chili peppers, distilled vinegar, garlic,
                                                        sugar, and
                                                        salt</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£1.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-64"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-64"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="image-holder">
                                                    <a href="{{asset('front/extra-images/cover-photo01-1024x187.jpg')}}">
                                                        <img src="{{asset('front/extra-images/cover-photo01-150x150.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="text-holder">
                                                    <h6>BBQ Sauce</h6>
                                                    <span>BBQ Sauce is used as a flavoring sauce, a marinade,
                                                        basting or
                                                        topping for meat cooked in the barbecue cooking
                                                        style</span>
                                                </div>
                                                <div class="price-holder">
                                                    <span class="price">£1.00</span>
                                                    <a href="#" class="restaurant-add-menu-btn restaurant-add-menu-btn-65"><i class="icon-plus4 text-color"></i></a>
                                                    <span id="add-menu-loader-65"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="reviews-holder">
                                    <div class="add-new-review-holder" style="display: none;">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="elements-title">
                                                    <h3>Rate and Write a Review</h3>
                                                    <a href="#" class="close-post-new-reviews-btn">Close</a>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">Please login
                                                in order to post review.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviwes-restaurant-holder">
                                        <div class="over-all-rating-holder">
                                            <div class="overall-ratings-container">
                                                <div class="overall-rating">
                                                    <h6>Customer Reviews For Food Bakery</h6>
                                                    <ul class="reviews-box">
                                                        <li>
                                                            <em>5.0 </em>
                                                            <div class="rating-star">
                                                                <span class="rating-box" style="width: 100%;"></span>
                                                            </div>
                                                            <span class="reviews-count">(based on 1
                                                                reviews)</span>
                                                        </li>
                                                        <li>
                                                            <div class="icon-holder"><i class="icon-smile"></i>
                                                            </div>
                                                            <p><span>100%</span> of diners recommend this
                                                                restaurant
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ratings-summary-container">
                                                <div class="rating-summary">
                                                    <h5>Rating summary</h5>
                                                    <ul>
                                                        <li>
                                                            <span class="review-category">Service</span>
                                                            <div class="rating-star">
                                                                <span class="rating-box" style="width:100%"></span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span class="review-category">Quality</span>
                                                            <div class="rating-star">
                                                                <span class="rating-box" style="width:100%"></span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <span class="review-category">Value</span>
                                                            <div class="rating-star">
                                                                <span class="rating-box" style="width:100%"></span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-listing">
                                            <div class="elements-title">
                                                <h5>Customer Reviews For Restaurant Demo <span>1</span></h5>
                                                <div class="sort-by">
                                                    <span class="ajax-loader-sorty-by" style="display: none;">
                                                        <img src="{{asset('front/images/ajax-loader.gif')}}" alt=""></span>
                                                    <ul class="reviews-sortby">
                                                        <li>
                                                            <span class="active-sort">Newest Reviews</span>
                                                            <div class="reviews-sort-dropdown">
                                                                <form>
                                                                    <div class="input-reviews">
                                                                        <div class="radio-field">
                                                                            <input name="review" id="check-1" type="radio" value="newest" checked="checked">
                                                                            <label for="check-1">Newest
                                                                                Reviews</label>
                                                                        </div>
                                                                        <div class="radio-field">
                                                                            <input name="review" id="check-2" type="radio" value="highest">
                                                                            <label for="check-2">Highest
                                                                                Rating</label>
                                                                        </div>
                                                                        <div class="radio-field">
                                                                            <input name="review" id="check-3" type="radio" value="lowest">
                                                                            <label for="check-3">Lowest
                                                                                Rating</label>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="review-restaurant">
                                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                    <div class="list-holder ">
                                                        <div class="review-text">
                                                            <div class="review-title">
                                                                <h6>: Best Food </h6>
                                                                <div class="rating-holder">
                                                                    <div class="rating-star">
                                                                        <span style="width: 100%;" class="rating-box"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <em class="review-date">25 Apr 2018</em>
                                                            <p>A wonderfull experience. </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                                    <div class="list-holder ">
                                                        <div class="review-text">
                                                            <div class="review-title">
                                                                <h6>: Best food </h6>
                                                                <div class="rating-holder">
                                                                    <div class="rating-star">
                                                                        <span style="width: 100%;" class="rating-box"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <em class="review-date">25 Apr 2018</em>
                                                            <p>I had great food the other day </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <div class="booking-info-sec">
                                    <form name="booking-form" id="booking-form" class="booking-form" method="post">
                                        <div class="row">
                                            <div class="booking-info">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <h5>Book This Restaurant</h5>
                                                            <p class="booking-desc">All kinds of dining
                                                                experiences
                                                                are waiting to be discovered. Check out the best
                                                                restaurants and Book Using following Form.</p>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="field-holder has-icon"><i class="icon icon-user"></i><input type="text" placeholder="First Name" class="input-field" id="first-name" name="first-name"></div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="field-holder has-icon"><i class="icon icon-user"></i><input type="text" placeholder="Last Name" class="input-field" id="lastname-booking" name="lastname-booking">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="field-holder has-icon"><i class="icon icon-envelope2"></i><input type="text" placeholder="Email" class="input-field foodbakery-email-field" id="email-booking" name="email-booking">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="field-holder has-icon"><i class="icon icon-users3"></i>
                                                                <select class="chosen-select" style="display: none;">
                                                                    <option selected="selected" value="">Guests
                                                                    </option>
                                                                    <option value="">2 Guests</option>
                                                                    <option value="">4 Guests</option>
                                                                    <option value="">6 Guests</option>
                                                                    <option value="">8 Guests</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="field-holder has-icon">
                                                                <div class="date-sec"><i class="icon-event_available"> </i><input type="text" placeholder="Booking date" class="form-control booking-date" id="date-of-booking" name="date-of-booking">
                                                                    <script>
                                                                        jQuery(document).ready(function () {
                                                                            var disabledDays = [""];
                                                                            jQuery("#date-of-booking").datepicker({
                                                                                showOtherMonths: true,
                                                                                firstDay: 1,
                                                                                minDate: 0,
                                                                                dateFormat: "dd-mm-yy",
                                                                                prevText: "",
                                                                                nextText: "",
                                                                                monthNames: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep",
                                                                                    "Oct", "Nov", "Dec"
                                                                                ],
                                                                                beforeShow: function (textbox, instance) {
                                                                                    $(this).parent().append($('#ui-datepicker-div'));
                                                                                },
                                                                                beforeShowDay: function (date) {
                                                                                    var day = date.getDay();
                                                                                    var string = jQuery
                                                                                        .datepicker
                                                                                        .formatDate(
                                                                                            "dd-mm-yy",
                                                                                            date
                                                                                        );
                                                                                    var isDisabled = (jQuery
                                                                                        .inArray(
                                                                                            string,
                                                                                            disabledDays
                                                                                        ) !=
                                                                                        -1);
                                                                                    //day != 0 disables all Sundays
                                                                                    return [!
                                                                                        isDisabled
                                                                                    ];
                                                                                },
                                                                                onSelect: function (
                                                                                    date) {
                                                                                    jQuery(
                                                                                            "#date-of-booking"
                                                                                        )
                                                                                        .val(
                                                                                            date
                                                                                        );
                                                                                    load_available_time(date,
                                                                                        '6272'
                                                                                    );
                                                                                }
                                                                            });
                                                                        });
                                                                    </script>
                                                                    <ul class="calendar-options">
                                                                        <li class="avilable">Available</li>
                                                                        <li class="unavailable">Unavailable</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="field-holder has-icon">
                                                                <div class="booking_time_wrapper">
                                                                    <div id="time-div-time-date-of-booking"><i class="icon-clock-o"></i>
                                                                        <select class="chosen-select foodbakery-required-field" id="time-date-of-booking" style="display: none;">
                                                                            <option value="">12:00 AM</option>
                                                                            <option value="">12:15 AM</option>
                                                                            <option value="">12:30 AM</option>
                                                                            <option value="">12:45 AM</option>
                                                                            <option value="">01:00 AM</option>
                                                                            <option value="">01:15 AM</option>
                                                                            <option value="">01:30 AM</option>
                                                                            <option value="">01:45 AM</option>
                                                                            <option value="">02:00 AM</option>
                                                                            <option value="">02:15 AM</option>
                                                                            <option value="">02:30 AM</option>
                                                                            <option value="">02:45 AM</option>
                                                                            <option value="">03:00 AM</option>
                                                                            <option value="">03:15 AM</option>
                                                                            <option value="">03:30 AM</option>
                                                                            <option value="">03:45 AM</option>
                                                                            <option value="">04:00 AM</option>
                                                                            <option value="">04:15 AM</option>
                                                                            <option value="">04:30 AM</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="field-holder has-icon field-textarea"><i class="icon icon-mode_edit"></i>
                                                                <textarea placeholder="Your Instructions" id="contact-booking" name="contact-booking" class="input-field"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="field-holder">
                                                                <div class="submit-btn">
                                                                    <button type="button" class="field-btn bgcolor booking-submit-btn input-button-loader">Submit</button>
                                                                    <span class="booking-loader"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <div class="contact-info-detail">
                                    <h5>Overview Restaurant Demo</h5>
                                    <p class="restaurant-desc"></p>
                                    <p>Base prepared fresh daily. Extra toppings are available in choose
                                        extraChoose
                                        you sauce: Go for BBQ sauce or piri piri sauce on your pizza base for no
                                        extra cost.Choose your cut: Triangular, square, fingers or Un cut on any
                                        size pizza
                                    </p>
                                    <div class="map-sec-holder">
                                        <div class="cs-map-section">
                                            <div class="cs-map">
                                                <div class="cs-map-content">
                                                    <div class="mapouter">
                                                        <div class="gmap_canvas">
                                                            <img class="img-responsive" src="{{asset('front/extra-images/map-location.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="contact-info">
                                                <h5>Contact details</h5>
                                                <p>Totnes, United Kingdom</p>
                                                <ul>
                                                    <li class="cell"><i class="icon-phone"></i><a href="#">+44
                                                            (0) 20 3310 2000</a></li>
                                                    <li class="pizzaeast"><i class="icon-globe2"></i><a href="#">http://www.chimpgroup.com</a></li>
                                                    <li class="email"><i class="icon-mail5"></i><a class="text-color" href="#">Send Enquiry
                                                            By Email</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="widget widget-timing">
                                                <h5>Opening Hours</h5>
                                                <ul>
                                                    <li><span>Monday</span>11:00 am - 11:00 pm</li>
                                                    <li><span>Tuesday</span>11:00 am - 11:00 pm</li>
                                                    <li><span>Wednesday</span>11:00 am - 11:00 pm</li>
                                                    <li><span>Thursday</span>11:00 am - 11:00 pm</li>
                                                    <li><span>Friday</span>11:00 am - 11:00 pm</li>
                                                    <li><span>Saturday</span>11:00 am - 11:00 pm</li>
                                                    <li><span>Sunday</span>Off</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sticky-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="user-order-holder">
                        <div class="user-order">
                            <h6><i class="icon-shopping-basket"></i>Your Order</h6>
                            <span class="error-message pre-order-msg">This restaurant allows Pre orders.</span>
                            <span class="discount-info" style="display: block;">If you have a discount code,<br>
                                you will
                                be able to input it<br> at the payments stage.</span>
                            <div class="select-option dev-select-fee-option">
                                <ul>
                                    <li>
                                        <input id="order-pick-up-fee" type="radio" name="order_fee_type">
                                        <label for="order-pick-up-fee">Pick-Up</label>
                                        <span>£15.00</span>
                                    </li>
                                    <li>
                                        <input id="order-delivery-fee" checked="checked" type="radio" name="order_fee_type">
                                        <label for="order-delivery-fee">Delivery</label>
                                        <span>£10.00</span>
                                    </li>
                                </ul>
                            </div>
                            <div id="dev-menu-orders-list">
                                <ul class="categories-order">
                                    <li>
                                        <a href="#" class="btn-cross dev-remove-menu-item"><i class=" icon-cross3"></i></a>
                                        <a>Chicken Tandoori Special 12" Deep Pan</a>
                                        <span class="category-price">£4.50</span>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-cross dev-remove-menu-item"><i class=" icon-cross3"></i></a>
                                        <a>Chicken Tandoori Special 09" Deep Pan</a>
                                        <span class="category-price">£6.50</span>
                                        <ul>
                                            <li>Drinks - chillies : <span class="category-price">£3.50</span>
                                            </li>
                                        </ul>
                                        <a href="#" data-toggle="modal" data-target="#extras-0-1" class="update-menu dev-update-menu-btn">Edit</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn-cross dev-remove-menu-item"><i class=" icon-cross3"></i></a>
                                        <a>Margherita 12" Deep Pan</a>
                                        <span class="category-price">£5.50</span>
                                    </li>
                                </ul>
                                <div class="price-area dev-menu-price-con">
                                    <ul>
                                        <li>Subtotal <span class="price">£<em class="dev-menu-subtotal">20.00</em></span></li>
                                        <li class="restaurant-fee-con">
                                            <span class="fee-title">Pick-Up</span>
                                            <span class="price">£<em class="dev-menu-charges">15.00</em></span>
                                        </li>
                                        <li>VAT (13%) <span class="price">£<em class="dev-menu-vtax">4.55</em></span></li>
                                    </ul>
                                    <p class="total-price">Total <span class="price">£<em class="dev-menu-grtotal">39.55</em></span></p>
                                </div>
                            </div>
                            <div id="dev-no-menu-orders-list">
                                <span class="success-message">There are no items in your basket.</span>
                            </div>
                            <div class="pay-option dev-order-pay-options">
                                <ul>
                                    <li>
                                        <input id="order-cash-payment" type="radio" name="order_payment_method">
                                        <label for="order-cash-payment"><i class="icon-coins"></i>Cash</label>
                                    </li>
                                    <li>
                                        <input id="order-card-payment" type="radio" checked="checked" name="order_payment_method">
                                        <label for="order-card-payment"><i class="icon-credit-card4"></i>Card</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="input-group date">
                                            <input type="text" name="delivery_date" id="datetimepicker1" class="form-control" value="04-04-2020 10:07" placeholder="Select Date and Time">
                                            <span class="input-group-addon">
                                                <span class="icon-event_available"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="menu-order-confirm">Confirm Order</a>
                            <span class="menu-loader"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home Pages Elements End  -->
</div>
<!-- Main Section End -->
@endsection
