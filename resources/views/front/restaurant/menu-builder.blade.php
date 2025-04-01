@extends('front.restaurant.master')

@section('title')
    Restaurant || Account Setting
@endsection

@section('content')
<!-- Main Section Start -->
<div class="main-section">
    <div class="page-section restaurant-detail-image-section" style=" background: url({{asset('front/extra-images/cover-photo01.jpg')}}) no-repeat scroll 0 0 / cover;">
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
                                    <img src="{{asset('front/extra-images/listing-logo18.png')}}" alt="">
                                </figure>
                            </div>

                            <div class="text-holder">
                                <span class="restaurant-title">Restaurant Demo</span>
                                <div class="text">
                                    <i class="icon-local_pizza"></i>
                                    <p>Apple Juice</p>
                                </div>
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
                @include('front.restaurant.body.menu')
                <!-- menu End -->
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="user-dashboard loader-holder">
                        <div class="user-holder">
                            <form action="#">
                                <ul class="restaurant-menu-nav nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#menu-cats-items" aria-expanded="true">Menu Categories</a></li>
                                    <li><a data-toggle="tab" href="#menu-list-items" aria-expanded="false">Food Items</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="menu-cats-items" class="tab-pane fade active in">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="element-title">
                                                    <h5>Menu Categories</h5>
                                                    <a href="#add-menu-cat-from" data-toggle="collapse" class="add-menu-item collapsed">Add Menu Category</a>
                                                </div>
                                                <div class="form-elements">
                                                    <div id="add-menu-cat-from" class="collapse">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <a href="#add-menu-cat-from" data-toggle="collapse" class="close-menu-item collapsed"><i class="icon-close2"></i></a>
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="field-holder">
                                                                        <label>Menu Name *</label>
                                                                        <input class="menu-item-title" id="menu_item_title_243314725" type="text" placeholder="Menu Category Title">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="field-holder">
                                                                        <label>Description</label>
                                                                        <textarea class="menu-item-desc" id="menu_item_desc_243314725" placeholder="Category Description"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="field-holder">
                                                                        <a class="add-menu-item add-menu-item-list" href="#">Add Category</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <div class="service-list">
                                                                <div class="menu-items-list-holder">
                                                                    <ul class="restaurant-menu-cats-list ui-sortable" style="display:block;">
                                                                        <li class="menu-item">
                                                                            <div class="drag-list">
                                                                                <span class="drag-option ui-sortable-handle"><i class="icon-bars"></i></span>
                                                                                <div class="list-title">
                                                                                    <h6>Pizzas</h6>
                                                                                </div>
                                                                                <div class="list-option">
                                                                                    <a href="#add-menu-cat-from-edit" data-toggle="collapse" class="edit-menu-item collapsed"><i class="icon-mode_edit"></i></a>
                                                                                    <a href="#" class="remove-menu-item"><i class="icon-close2"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div id="add-menu-cat-from-edit" class="collapse in">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <a href="#add-menu-cat-from-edit" data-toggle="collapse" class="close-menu-item collapsed"><i class="icon-close2"></i></a>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Menu Name *</label>
                                                                                                <input class="menu-item-title" name="menu_cat_title[]" value="Pizzas" type="text" placeholder="Menu Category Title">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Description</label>
                                                                                                <textarea class="menu-item-desc" placeholder="Category Description">Choose your cut: Triangular, square, fingers or Un cut on any size pizza.</textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <a class="add-menu-item add-menu-item-list" href="#">Save</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <div class="drag-list">
                                                                                <span class="drag-option ui-sortable-handle"><i class="icon-bars"></i></span>
                                                                                <div class="list-title">
                                                                                    <h6>Calzone</h6>
                                                                                </div>
                                                                                <div class="list-option">
                                                                                    <a href="#add-menu-cat-from-edit2" data-toggle="collapse" class="edit-menu-item collapsed"><i class="icon-mode_edit"></i></a>
                                                                                    <a href="#" class="remove-menu-item"><i class="icon-close2"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div id="add-menu-cat-from-edit2" class="collapse">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <a href="#add-menu-cat-from-edit2" data-toggle="collapse" class="close-menu-item collapsed"><i class="icon-close2"></i></a>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Menu Name *</label>
                                                                                                <input class="menu-item-title" name="menu_cat_title[]" value="Pizzas" type="text" placeholder="Menu Category Title">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Description</label>
                                                                                                <textarea class="menu-item-desc" placeholder="Category Description">Choose your cut: Triangular, square, fingers or Un cut on any size pizza.</textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <a class="add-menu-item add-menu-item-list" href="#">Save</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <div class="drag-list">
                                                                                <span class="drag-option ui-sortable-handle"><i class="icon-bars"></i></span>
                                                                                <div class="list-title">
                                                                                    <h6>Garlic Bread</h6>
                                                                                </div>
                                                                                <div class="list-option">
                                                                                    <a href="#add-menu-cat-from-edit3" data-toggle="collapse" class="edit-menu-item collapsed"><i class="icon-mode_edit"></i></a>
                                                                                    <a href="#" class="remove-menu-item"><i class="icon-close2"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div id="add-menu-cat-from-edit3" class="collapse">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <a href="#add-menu-cat-from-edit3" data-toggle="collapse" class="close-menu-item collapsed"><i class="icon-close2"></i></a>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Menu Name *</label>
                                                                                                <input class="menu-item-title" name="menu_cat_title[]" value="Pizzas" type="text" placeholder="Menu Category Title">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Description</label>
                                                                                                <textarea class="menu-item-desc" placeholder="Category Description">Choose your cut: Triangular, square, fingers or Un cut on any size pizza.</textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <a class="add-menu-item add-menu-item-list" href="#">Save</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <div class="drag-list">
                                                                                <span class="drag-option ui-sortable-handle"><i class="icon-bars"></i></span>
                                                                                <div class="list-title">
                                                                                    <h6>Kebabs</h6>
                                                                                </div>
                                                                                <div class="list-option">
                                                                                    <a href="#add-menu-cat-from-edit4" data-toggle="collapse" class="edit-menu-item collapsed"><i class="icon-mode_edit"></i></a>
                                                                                    <a href="#" class="remove-menu-item"><i class="icon-close2"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div id="add-menu-cat-from-edit4" class="collapse">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <a href="#add-menu-cat-from-edit4" data-toggle="collapse" class="close-menu-item collapsed"><i class="icon-close2"></i></a>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Menu Name *</label>
                                                                                                <input class="menu-item-title" name="menu_cat_title[]" value="Pizzas" type="text" placeholder="Menu Category Title">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Description</label>
                                                                                                <textarea class="menu-item-desc" placeholder="Category Description">Choose your cut: Triangular, square, fingers or Un cut on any size pizza.</textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <a class="add-menu-item add-menu-item-list" href="#">Save</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <div class="drag-list">
                                                                                <span class="drag-option ui-sortable-handle"><i class="icon-bars"></i></span>
                                                                                <div class="list-title">
                                                                                    <h6>Jacket Potatoes</h6>
                                                                                </div>
                                                                                <div class="list-option">
                                                                                    <a href="#add-menu-cat-from-edit5" data-toggle="collapse" class="edit-menu-item collapsed"><i class="icon-mode_edit"></i></a>
                                                                                    <a href="#" class="remove-menu-item"><i class="icon-close2"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div id="add-menu-cat-from-edit5" class="collapse">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <a href="#add-menu-cat-from-edit5" data-toggle="collapse" class="close-menu-item collapsed"><i class="icon-close2"></i></a>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Menu Name *</label>
                                                                                                <input class="menu-item-title" name="menu_cat_title[]" value="Pizzas" type="text" placeholder="Menu Category Title">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Description</label>
                                                                                                <textarea class="menu-item-desc" placeholder="Category Description">Choose your cut: Triangular, square, fingers or Un cut on any size pizza.</textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <a class="add-menu-item add-menu-item-list" href="#">Save</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu-list-items" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="element-title">
                                                    <h5>Food Items</h5>
                                                    <div id="menu-item-loader-87340687" class="restaurant-loader"></div>
                                                    <a href="#add_menu_item_cart_from" data-toggle="collapse" class="add-menu-item collapsed">Add Menu Item</a>
                                                </div>
                                                <div id="add_menu_item_cart_from" class="collapse">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <a href="#add_menu_item_cart_from" data-toggle="collapse" class="close-menu-item" aria-expanded="true"><i class="icon-close2"></i></a>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="field-holder">
                                                                    <label>Restaurant Menu *</label>
                                                                    <div class="restaurants-menu">
                                                                        <select class="chosen-select" id="restaurant_menu_295979393">
                                                                            <option value="Pizzas">Pizzas</option>
                                                                            <option value="Calzone">Calzone</option>
                                                                            <option value="Garlic Bread">Garlic Bread</option>
                                                                            <option value="Kebabs">Kebabs</option>
                                                                            <option value="Burgers">Burgers</option>
                                                                            <option value="Specials">Specials</option>
                                                                            <option value="Wraps">Wraps</option>
                                                                            <option value="Chicken">Chicken</option>
                                                                            <option value="Paninis">Paninis</option>
                                                                            <option value="Jacket Potatoes">Jacket Potatoes</option>
                                                                            <option value="Starters">Starters</option>
                                                                            <option value="Traditional Curries">Traditional Curries</option>
                                                                            <option value="Seafood Dishes">Seafood Dishes</option>
                                                                            <option value="Biryani Dishes">Biryani Dishes</option>
                                                                            <option value="Vegetarian Dishes">Vegetarian Dishes</option>
                                                                            <option value="Rice">Rice</option>
                                                                            <option value="Sauces">Sauces</option>
                                                                            <option value="Bread">Bread</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                <div class="field-holder">
                                                                    <label>Title *</label>
                                                                    <input class="menu-item-title" id="menu_item_title_295979393" type="text" placeholder="Menu Item Title">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                <div class="field-holder">
                                                                    <label>Price * (£)</label>
                                                                    <input class="menu-item-price" id="menu_item_price_295979393" type="text" placeholder="Menu Item Price">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                <div class="field-holder">
                                                                    <label>Food Image</label>
                                                                    <div id="browse-btn-sec-295979393" class="browse-btn-sec" style="display: block !important;">
                                                                        <input type="file" id="image-icon-295979393" data-id="295979393" name="image_icon_295979393" class="browse-menu-icon-file" style="display: none;">
                                                                        <a id="browse-menu-icon-img-295979393" href="#" class="browse-menu-icon-img btn bgcolor" data-id="295979393">Browse</a>
                                                                    </div>
                                                                    <div id="browse-img-sec-295979393" class="browse-image-sec" style="display: none !important;">
                                                                        <div class="icon-img-holder">
                                                                            <a href="#" data-id="295979393" class="remove-icon"><i class="icon-close2"></i></a>
                                                                            <img id="img-val-base-295979393" src="#" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="field-holder">
                                                                    <label>Nutritional Information icons</label>
                                                                    <div class="nutri-info-icons">
                                                                        <ul>
                                                                            <li><input id="nutri-icon-3462998" type="checkbox" name="menu_item_nutri_info[]" value="3665"><label for="nutri-icon-3462998"><a data-toggle="tooltip" title="" data-original-title="Contain Bnana"><img src="{{asset('front/extra-images/natural-item03.png')}}" alt=""></a></label></li>
                                                                            <li><input id="nutri-icon-2362526" type="checkbox" name="menu_item_nutri_info[]" value="3663"><label for="nutri-icon-2362526"><a data-toggle="tooltip" title="" data-original-title="Contain Egg"><img src="{{asset('front/extra-images/natural-item01.png')}}" alt=""></a></label></li>
                                                                            <li><input id="nutri-icon-7381447" type="checkbox" name="menu_item_nutri_info[]" value="3664"><label for="nutri-icon-7381447"><a data-toggle="tooltip" title="" data-original-title="Onion"><img src="{{asset('front/extra-images/natural-item02.png')}}" alt=""></a></label></li>
                                                                            <li><input id="nutri-icon-6243024" type="checkbox" name="menu_item_nutri_info[]" value="3666"><label for="nutri-icon-6243024"><a data-toggle="tooltip" title="" data-original-title="Vegitable"><img src="{{asset('front/extra-images/natural-item04.png')}}" alt=""></a></label></li>
                                                                            <li><input id="nutri-icon-800282" type="checkbox" name="menu_item_nutri_info[]" value="3667"><label for="nutri-icon-800282"><a data-toggle="tooltip" title="" data-original-title="Chille"><img src="{{asset('front/extra-images/natural-item05.png')}}" alt=""></a></label></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="field-holder">
                                                                    <label>Description</label>
                                                                    <textarea class="menu-item-desc foodbakery_editor" id="menu_item_desc_295979393" placeholder="Menu Item Description test"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="field-holder">
                                                                    <a class="add-menu-item-extra add-menu-item-extra-295979393" href="#">Add Menu Item Extra</a>
                                                                    <a class="add-menu-item add-menu-item-list add-menu-item-list-295979393" href="#">Add to Menu Item list</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="field-holder">
                                                    <div class="service-list">
                                                        <ul id="restaurant_menu_items-list-87340687" class="restaurant_menu_items_cat_list panel-group ui-sortable">
                                                            <li id="menu-pizzas2" class="panel panel-default">
                                                                <div class="element-title panel-heading">
                                                                    <span class="drag-option ui-sortable-handle"><i class="icon-bars"></i></span>
                                                                    <a data-toggle="collapse" data-parent="#restaurant_menu_items-list-87340687" href="#collapse-0" aria-expanded="false" class="collapsed">Pizzas</a>
                                                                </div>
                                                                <div id="collapse-0" class="panel-collapse collapse in" aria-expanded="true" role="tabpanel">
                                                                    <ul class="menu-items-list ui-sortable">
                                                                        <li>
                                                                            <div class="drag-list">
                                                                                <span class="drag-option ui-sortable-handle"><i class="icon-bars"></i></span>
                                                                                <div class="icon-holder"><img src="{{asset('front/extra-images/cover-photo24-150x150.jpg')}}" alt=""></div>
                                                                                <div class="list-title">
                                                                                    <h6>Chicken Tandoori Special 12" Deep Pan</h6>
                                                                                    <p>Cheese, tomatoes and italian herbs.</p>
                                                                                </div>
                                                                                <div class="list-price">
                                                                                    <span><b>£</b><b>4.5</b></span>
                                                                                </div>
                                                                                <div class="list-option">
                                                                                    <a data-toggle="collapse" href="#restaurant_menu_items_list" class="edit-menu-item"><i class="icon-mode_edit"></i></a>
                                                                                    <a href="#" class="remove-menu-item"><i class="icon-close2"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div id="restaurant_menu_items_list" class="collapse in">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <a data-toggle="collapse" href="#restaurant_menu_items_list" class="close-menu-item"><i class="icon-close2"></i></a>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Restaurant Menu *</label>
                                                                                                <div class="restaurants-menu">
                                                                                                    <select class="chosen-select">
                                                                                                        <option selected="selected" value="Pizzas">Pizzas</option>
                                                                                                        <option value="Calzone">Calzone</option>
                                                                                                        <option value="Garlic Bread">Garlic Bread</option>
                                                                                                        <option value="Kebabs">Kebabs</option>
                                                                                                        <option value="Burgers">Burgers</option>
                                                                                                        <option value="Specials">Specials</option>
                                                                                                        <option value="Wraps">Wraps</option>
                                                                                                        <option value="Chicken">Chicken</option>
                                                                                                        <option value="Paninis">Paninis</option>
                                                                                                        <option value="Jacket Potatoes">Jacket Potatoes</option>
                                                                                                        <option value="Starters">Starters</option>
                                                                                                        <option value="Traditional Curries">Traditional Curries</option>
                                                                                                        <option value="Seafood Dishes">Seafood Dishes</option>
                                                                                                        <option value="Biryani Dishes">Biryani Dishes</option>
                                                                                                        <option value="Vegetarian Dishes">Vegetarian Dishes</option>
                                                                                                        <option value="Rice">Rice</option>
                                                                                                        <option value="Sauces">Sauces</option>
                                                                                                        <option value="Bread">Bread</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Title *</label>
                                                                                                <input class="menu-item-title" value="Chicken Tandoori Special 12&quot; Deep Pan" type="text" placeholder="Menu Item Title">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Price * (£)</label><input class="menu-item-price" type="text" value="4.5" placeholder="Menu Item Price">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Food Image</label>
                                                                                                <div id="browse-btn-sec-681849489" class="browse-btn-sec" style="display: none !important;">
                                                                                                    <input type="file" id="image-icon-681849489" data-id="681849489" name="image_icon_681849489" class="browse-menu-icon-file" style="display: none;">
                                                                                                    <a id="browse-menu-icon-img-681849489" href="#" class="browse-menu-icon-img btn bgcolor" data-id="681849489">Browse</a>
                                                                                                </div>
                                                                                                <div id="browse-img-sec-681849489" class="browse-image-sec" style="display: block !important;">
                                                                                                    <div class="icon-img-holder">
                                                                                                        <a href="#" data-id="681849489" class="remove-icon"><i class="icon-close2"></i></a>
                                                                                                        <img id="img-val-base-681849489" src="{{asset('front/extra-images/cover-photo24-150x150.jpg')}}" alt="">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Nutritional Information icons</label>
                                                                                                <div class="nutri-info-icons">
                                                                                                    <ul>
                                                                                                        <li class="active">
                                                                                                            <input id="nutri-icon-2623378" checked="checked" type="checkbox" name="menu_item_nutri[681849489][]" value="3665">
                                                                                                            <label for="nutri-icon-2623378">
                                                                                                            <a data-toggle="tooltip" title="" data-original-title="Contain Bnana">
                                                                                                                <img src="{{asset('front/extra-images/natural-item03.png')}}" alt="">
                                                                                                            </a>
                                                                                                            </label>
                                                                                                        </li>
                                                                                                        <li><input id="nutri-icon-6797545" type="checkbox" name="menu_item_nutri[681849489][]" value="3663"><label for="nutri-icon-6797545"><a data-toggle="tooltip" title="" data-original-title="Contain Egg"><img src="{{asset('front/extra-images/natural-item01.png')}}" alt=""></a></label></li>
                                                                                                        <li><input id="nutri-icon-8999413" type="checkbox" name="menu_item_nutri[681849489][]" value="3664"><label for="nutri-icon-8999413"><a data-toggle="tooltip" title="" data-original-title="Onion"><img src="{{asset('front/extra-images/natural-item02.png')}}" alt=""></a></label></li>
                                                                                                        <li><input id="nutri-icon-8085819" type="checkbox" name="menu_item_nutri[681849489][]" value="3666"><label for="nutri-icon-8085819"><a data-toggle="tooltip" title="" data-original-title="Vegitable"><img src="{{asset('front/extra-images/natural-item04.png')}}" alt=""></a></label></li>
                                                                                                        <li><input id="nutri-icon-8295619" type="checkbox" name="menu_item_nutri[681849489][]" value="3667"><label for="nutri-icon-8295619"><a data-toggle="tooltip" title="" data-original-title="Chille"><img src="{{asset('front/extra-images/natural-item05.png')}}" alt=""></a></label></li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Description</label>
                                                                                                <textarea class="menu-item-desc foodbakery_editor" placeholder="Menu Item Description test"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                        <ul id="menu-item-extra-list-681849489" class="menu-item-extra-list">
                                                                                            <li class="menu-item-extra-681849489">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="row">
                                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="field-holder">
                                                                                                                <label>Heading</label>
                                                                                                                <input class="menu-item-extra-heading" value="" type="text" placeholder="Heading">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <a class="add-menu-item-extra add-menu-item-extra-681849489" href="#">Add Menu Item Extra</a>
                                                                                                <a class="add-menu-item add-menu-item-list add-menu-item-list-681849489" href="#">Save</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="drag-list">
                                                                                <span class="drag-option ui-sortable-handle"><i class="icon-bars"></i></span>
                                                                                <div class="icon-holder"><img src="{{asset('front/extra-images/cover-photo23-150x150.jpg')}}" alt=""></div>
                                                                                <div class="list-title">
                                                                                    <h6>Chicken Tandoori Special 09" Deep Pan</h6>
                                                                                    <p>Cheese, tomatoes, tuna fish, sweetcorn and italian herbs
                                                                                    </p>
                                                                                </div>
                                                                                <div class="list-price">
                                                                                    <span><b>£</b><b>6.50</b></span>
                                                                                </div>
                                                                                <div class="list-option">
                                                                                    <a data-toggle="collapse" href="#restaurant_menu_items_list_2" class="edit-menu-item"><i class="icon-mode_edit"></i></a>
                                                                                    <a href="#" class="remove-menu-item"><i class="icon-close2"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div id="restaurant_menu_items_list_2" class="collapse">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <a data-toggle="collapse" href="#restaurant_menu_items_list_2" class="close-menu-item"><i class="icon-close2"></i></a>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Restaurant Menu *</label>
                                                                                                <div class="restaurants-menu">
                                                                                                    <select class="chosen-select">
                                                                                                        <option selected="selected" value="Pizzas">Pizzas</option>
                                                                                                        <option value="Calzone">Calzone</option>
                                                                                                        <option value="Garlic Bread">Garlic Bread</option>
                                                                                                        <option value="Kebabs">Kebabs</option>
                                                                                                        <option value="Burgers">Burgers</option>
                                                                                                        <option value="Specials">Specials</option>
                                                                                                        <option value="Wraps">Wraps</option>
                                                                                                        <option value="Chicken">Chicken</option>
                                                                                                        <option value="Paninis">Paninis</option>
                                                                                                        <option value="Jacket Potatoes">Jacket Potatoes</option>
                                                                                                        <option value="Starters">Starters</option>
                                                                                                        <option value="Traditional Curries">Traditional Curries</option>
                                                                                                        <option value="Seafood Dishes">Seafood Dishes</option>
                                                                                                        <option value="Biryani Dishes">Biryani Dishes</option>
                                                                                                        <option value="Vegetarian Dishes">Vegetarian Dishes</option>
                                                                                                        <option value="Rice">Rice</option>
                                                                                                        <option value="Sauces">Sauces</option>
                                                                                                        <option value="Bread">Bread</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Title *</label>
                                                                                                <input class="menu-item-title" value="Chicken Tandoori Special  09&quot; Deep Pan" type="text" placeholder="Menu Item Title">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Price * (£)</label>
                                                                                                <input class="menu-item-price" type="text" value="6.50" placeholder="Menu Item Price">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Food Image</label>
                                                                                                <div id="browse-btn-sec-124273424" class="browse-btn-sec" style="display: none !important;">
                                                                                                    <input type="file" name="image_icon_124273424" class="browse-menu-icon-file" style="display: none;">
                                                                                                    <a href="#" class="browse-menu-icon-img btn bgcolor">Browse</a>
                                                                                                </div>
                                                                                                <div id="browse-img-sec-124273424" class="browse-image-sec" style="display: block !important;">
                                                                                                    <div class="icon-img-holder">
                                                                                                        <a href="#" class="remove-icon"><i class="icon-close2"></i></a>
                                                                                                        <img id="img-val-base-124273424" src="{{asset('front/extra-images/cover-photo23-150x150.jpg')}}" alt="">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Nutritional Information icons</label>
                                                                                                <div class="nutri-info-icons">
                                                                                                    <ul>
                                                                                                        <li><input id="nutri-icon-2078799" type="checkbox" name="menu_item_nutri[124273424][]" value="3665"><label for="nutri-icon-2078799"><a data-toggle="tooltip" title="" data-original-title="Contain Bnana"><img src="{{asset('front/extra-images/natural-item03.png')}}" alt=""></a></label></li>
                                                                                                        <li><input id="nutri-icon-4824209" type="checkbox" name="menu_item_nutri[124273424][]" value="3663"><label for="nutri-icon-4824209"><a data-toggle="tooltip" title="" data-original-title="Contain Egg"><img src="{{asset('front/extra-images/natural-item01.png')}}" alt=""></a></label></li>
                                                                                                        <li><input id="nutri-icon-4851312" type="checkbox" name="menu_item_nutri[124273424][]" value="3664"><label for="nutri-icon-4851312"><a data-toggle="tooltip" title="" data-original-title="Onion"><img src="{{asset('front/extra-images/natural-item02.png')}}" alt=""></a></label></li>
                                                                                                        <li><input id="nutri-icon-540749" type="checkbox" name="menu_item_nutri[124273424][]" value="3666"><label for="nutri-icon-540749"><a data-toggle="tooltip" title="" data-original-title="Vegitable"><img src="{{asset('front/extra-images/natural-item04.png')}}" alt=""></a></label></li>
                                                                                                        <li><input id="nutri-icon-8328389" type="checkbox" name="menu_item_nutri[124273424][]" value="3667"><label for="nutri-icon-8328389"><a data-toggle="tooltip" title="" data-original-title="Chille"><img src="{{asset('front/extra-images/natural-item05.png')}}" alt=""></a></label></li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Description</label>
                                                                                                <textarea class="menu-item-desc foodbakery_editor" placeholder="Menu Item Description test">Cheese, tomatoes, tuna fish, sweetcorn and italian herbs</textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                        <ul id="menu-item-extra-list-124273424" class="menu-item-extra-list">
                                                                                            <li class="menu-item-extra-124273424">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="row">
                                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="field-holder">
                                                                                                                <label>Heading</label>
                                                                                                                <input class="menu-item-extra-heading" value="Drinks" type="text" placeholder="Heading">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <ul id="menu-item-extra-fields-1242734241" class="menu-item-extra-fields">
                                                                                                            <li id="menu-item-extra-field-1242734241" class="menu-item-extra-field">
                                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                                            <div class="field-holder">
                                                                                                                                <label>Title</label>
                                                                                                                                <input class="menu-item-extra-title" type="text" value="Cold Drink" placeholder="Title">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                                            <div class="field-holder">
                                                                                                                                <label>Price (£)</label>
                                                                                                                                <input class="menu-item-extra-price" type="text" value="1.5" placeholder="Price">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                                            <div class="menu-item-extra-options">
                                                                                                                                <label>&nbsp;</label>
                                                                                                                                <a href="#">+</a>
                                                                                                                                <a href="#">-</a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                        <ul id="menu-item-extra-fields-1242734242" class="menu-item-extra-fields">
                                                                                                            <li id="menu-item-extra-field-1242734242" class="menu-item-extra-field">
                                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                                            <div class="field-holder">
                                                                                                                                <label>Title</label>
                                                                                                                                <input class="menu-item-extra-title" type="text" value="Redbull" placeholder="Title">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                                            <div class="field-holder">
                                                                                                                                <label>Price (£)</label>
                                                                                                                                <input class="menu-item-extra-price" type="text" value="2.5" placeholder="Price">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                                            <div class="menu-item-extra-options">
                                                                                                                                <label>&nbsp;</label>
                                                                                                                                <a href="#">+</a>
                                                                                                                                <a href="#">-</a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                        <ul id="menu-item-extra-fields-1242734243" class="menu-item-extra-fields">
                                                                                                            <li id="menu-item-extra-field-1242734243" class="menu-item-extra-field">
                                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                                            <div class="field-holder">
                                                                                                                                <label>Title</label>
                                                                                                                                <input class="menu-item-extra-title" type="text" value="chillies" placeholder="Title">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                                            <div class="field-holder">
                                                                                                                                <label>Price (£)</label>
                                                                                                                                <input class="menu-item-extra-price" type="text" value="3.5" placeholder="Price">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                                            <div class="menu-item-extra-options">
                                                                                                                                <label>&nbsp;</label>
                                                                                                                                <a href="#">+</a>
                                                                                                                                <a href="#">-</a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="menu-item-extra-124273424">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="row">
                                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="field-holder">
                                                                                                                <label>Heading</label>
                                                                                                                <input class="menu-item-extra-heading" value="" type="text" placeholder="Heading">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <a class="add-menu-item-extra add-menu-item-extra-124273424" href="#">Add Menu Item Extra</a>
                                                                                                <a class="add-menu-item add-menu-item-list add-menu-item-list-124273424" href="#">Save</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li id="menu-pizzas" class="panel panel-default">
                                                                <div class="element-title panel-heading">
                                                                    <span class="drag-option ui-sortable-handle"><i class="icon-bars"></i></span>
                                                                    <a data-toggle="collapse" data-parent="#restaurant_menu_items-list-87340687" href="#collapse-1" aria-expanded="false" class="collapsed">Calzone</a>
                                                                </div>
                                                                <div id="collapse-1" class="panel-collapse collapse" aria-expanded="true" role="tabpanel">
                                                                    <ul class="menu-items-list ui-sortable">
                                                                        <li>
                                                                            <div class="drag-list">
                                                                                <span class="drag-option ui-sortable-handle"><i class="icon-bars"></i></span>
                                                                                <div class="icon-holder"><img src="{{asset('front/extra-images/cover-photo24-150x150.jpg')}}" alt=""></div>
                                                                                <div class="list-title">
                                                                                    <h6>Chicken Tandoori Special 12" Deep Pan</h6>
                                                                                    <p>Cheese, tomatoes and italian herbs.</p>
                                                                                </div>
                                                                                <div class="list-price">
                                                                                    <span><b>£</b><b>4.5</b></span>
                                                                                </div>
                                                                                <div class="list-option">
                                                                                    <a data-toggle="collapse" href="#restaurant_menu_items_list_3" class="edit-menu-item"><i class="icon-mode_edit"></i></a>
                                                                                    <a href="#" class="remove-menu-item"><i class="icon-close2"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div id="restaurant_menu_items_list_3" class="collapse">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <a data-toggle="collapse" href="#restaurant_menu_items_list_3" class="close-menu-item"><i class="icon-close2"></i></a>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Restaurant Menu *</label>
                                                                                                <div class="restaurants-menu">
                                                                                                    <select class="chosen-select">
                                                                                                        <option selected="selected" value="Pizzas">Pizzas</option>
                                                                                                        <option value="Calzone">Calzone</option>
                                                                                                        <option value="Garlic Bread">Garlic Bread</option>
                                                                                                        <option value="Kebabs">Kebabs</option>
                                                                                                        <option value="Burgers">Burgers</option>
                                                                                                        <option value="Specials">Specials</option>
                                                                                                        <option value="Wraps">Wraps</option>
                                                                                                        <option value="Chicken">Chicken</option>
                                                                                                        <option value="Paninis">Paninis</option>
                                                                                                        <option value="Jacket Potatoes">Jacket Potatoes</option>
                                                                                                        <option value="Starters">Starters</option>
                                                                                                        <option value="Traditional Curries">Traditional Curries</option>
                                                                                                        <option value="Seafood Dishes">Seafood Dishes</option>
                                                                                                        <option value="Biryani Dishes">Biryani Dishes</option>
                                                                                                        <option value="Vegetarian Dishes">Vegetarian Dishes</option>
                                                                                                        <option value="Rice">Rice</option>
                                                                                                        <option value="Sauces">Sauces</option>
                                                                                                        <option value="Bread">Bread</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Title *</label>
                                                                                                <input class="menu-item-title" value="Chicken Tandoori Special 12&quot; Deep Pan" type="text" placeholder="Menu Item Title">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Price * (£)</label><input class="menu-item-price" type="text" value="4.5" placeholder="Menu Item Price">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Food Image</label>
                                                                                                <div id="browse-btn-sec-681849490" class="browse-btn-sec" style="display: none !important;">
                                                                                                    <input type="file" id="image-icon-681849490" data-id="681849489" name="image_icon_681849489" class="browse-menu-icon-file" style="display: none;">
                                                                                                    <a id="browse-menu-icon-img-681849490" href="#" class="browse-menu-icon-img btn bgcolor" data-id="681849489">Browse</a>
                                                                                                </div>
                                                                                                <div id="browse-img-sec-681849490" class="browse-image-sec" style="display: block !important;">
                                                                                                    <div class="icon-img-holder">
                                                                                                        <a href="#" data-id="681849489" class="remove-icon"><i class="icon-close2"></i></a>
                                                                                                        <img id="img-val-base-681849490" src="{{asset('front/extra-images/cover-photo24-150x150.jpg')}}" alt="">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Nutritional Information icons</label>
                                                                                                <div class="nutri-info-icons">
                                                                                                    <ul>
                                                                                                        <li class="active"><input id="nutri-icon-2623379" checked="checked" type="checkbox" name="menu_item_nutri[681849489][]" value="3665"><label for="nutri-icon-2623379"><a data-toggle="tooltip" title="" data-original-title="Contain Bnana"><img src="{{asset('front/extra-images/natural-item03.png')}}" alt=""></a></label></li>
                                                                                                        <li><input id="nutri-icon-6797546" type="checkbox" name="menu_item_nutri[681849489][]" value="3663"><label for="nutri-icon-6797546"><a data-toggle="tooltip" title="" data-original-title="Contain Egg"><img src="{{asset('front/extra-images/natural-item01.png')}}" alt=""></a></label></li>
                                                                                                        <li><input id="nutri-icon-8999412" type="checkbox" name="menu_item_nutri[681849489][]" value="3664"><label for="nutri-icon-8999412"><a data-toggle="tooltip" title="" data-original-title="Onion"><img src="{{asset('front/extra-images/natural-item02.png')}}" alt=""></a></label></li>
                                                                                                        <li><input id="nutri-icon-80858199" type="checkbox" name="menu_item_nutri[681849489][]" value="3666"><label for="nutri-icon-80858199"><a data-toggle="tooltip" title="" data-original-title="Vegitable"><img src="{{asset('front/extra-images/natural-item04.png')}}" alt=""></a></label></li>
                                                                                                        <li><input id="nutri-icon-82956199" type="checkbox" name="menu_item_nutri[681849489][]" value="3667"><label for="nutri-icon-82956199"><a data-toggle="tooltip" title="" data-original-title="Chille"><img src="{{asset('front/extra-images/natural-item05.png')}}" alt=""></a></label></li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Description</label>
                                                                                                <textarea class="menu-item-desc foodbakery_editor" placeholder="Menu Item Description test"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                        <ul id="menu-item-extra-list-6818494899" class="menu-item-extra-list">
                                                                                            <li class="menu-item-extra-681849489">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="row">
                                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="field-holder">
                                                                                                                <label>Heading</label>
                                                                                                                <input class="menu-item-extra-heading" value="" type="text" placeholder="Heading">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <a class="add-menu-item-extra add-menu-item-extra-681849489" href="#">Add Menu Item Extra</a>
                                                                                                <a class="add-menu-item add-menu-item-list add-menu-item-list-681849489" href="#">Save</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="drag-list">
                                                                                <span class="drag-option ui-sortable-handle"><i class="icon-bars"></i></span>
                                                                                <div class="icon-holder"><img src="{{asset('front/extra-images/cover-photo23-150x150.jpg')}}" alt=""></div>
                                                                                <div class="list-title">
                                                                                    <h6>Chicken Tandoori Special 09" Deep Pan</h6>
                                                                                    <p>Cheese, tomatoes, tuna fish, sweetcorn and italian herbs
                                                                                    </p>
                                                                                </div>
                                                                                <div class="list-price">
                                                                                    <span><b>£</b><b>6.50</b></span>
                                                                                </div>
                                                                                <div class="list-option">
                                                                                    <a data-toggle="collapse" href="#restaurant_menu_items_list_5" class="edit-menu-item"><i class="icon-mode_edit"></i></a>
                                                                                    <a href="#" class="remove-menu-item"><i class="icon-close2"></i></a>
                                                                                </div>
                                                                            </div>
                                                                            <div id="restaurant_menu_items_list_5" class="collapse">
                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <a data-toggle="collapse" href="#restaurant_menu_items_list_5" class="close-menu-item"><i class="icon-close2"></i></a>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Restaurant Menu *</label>
                                                                                                <div class="restaurants-menu">
                                                                                                    <select class="chosen-select">
                                                                                                        <option selected="selected" value="Pizzas">Pizzas</option>
                                                                                                        <option value="Calzone">Calzone</option>
                                                                                                        <option value="Garlic Bread">Garlic Bread</option>
                                                                                                        <option value="Kebabs">Kebabs</option>
                                                                                                        <option value="Burgers">Burgers</option>
                                                                                                        <option value="Specials">Specials</option>
                                                                                                        <option value="Wraps">Wraps</option>
                                                                                                        <option value="Chicken">Chicken</option>
                                                                                                        <option value="Paninis">Paninis</option>
                                                                                                        <option value="Jacket Potatoes">Jacket Potatoes</option>
                                                                                                        <option value="Starters">Starters</option>
                                                                                                        <option value="Traditional Curries">Traditional Curries</option>
                                                                                                        <option value="Seafood Dishes">Seafood Dishes</option>
                                                                                                        <option value="Biryani Dishes">Biryani Dishes</option>
                                                                                                        <option value="Vegetarian Dishes">Vegetarian Dishes</option>
                                                                                                        <option value="Rice">Rice</option>
                                                                                                        <option value="Sauces">Sauces</option>
                                                                                                        <option value="Bread">Bread</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Title *</label>
                                                                                                <input class="menu-item-title" value="Chicken Tandoori Special  09&quot; Deep Pan" type="text" placeholder="Menu Item Title">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Price * (£)</label>
                                                                                                <input class="menu-item-price" type="text" value="6.50" placeholder="Menu Item Price">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Food Image</label>
                                                                                                <div class="browse-btn-sec" style="display: none !important;">
                                                                                                    <input type="file" name="image_icon_124273424" class="browse-menu-icon-file" style="display: none;">
                                                                                                    <a href="#" class="browse-menu-icon-img btn bgcolor">Browse</a>
                                                                                                </div>
                                                                                                <div class="browse-image-sec" style="display: block !important;">
                                                                                                    <div class="icon-img-holder">
                                                                                                        <a href="#" class="remove-icon"><i class="icon-close2"></i></a>
                                                                                                        <img src="{{asset('front/extra-images/cover-photo23-150x150.jpg')}}" alt="">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Nutritional Information icons</label>
                                                                                                <div class="nutri-info-icons">
                                                                                                    <ul>
                                                                                                        <li><input id="nutri-icon-20787999" type="checkbox" name="menu_item_nutri[124273424][]" value="3665"><label for="nutri-icon-20787999"><a data-toggle="tooltip" title="" data-original-title="Contain Bnana"><img src="{{asset('front/extra-images/natural-item03.png')}}" alt=""></a></label></li>
                                                                                                        <li><input id="nutri-icon-48242099" type="checkbox" name="menu_item_nutri[124273424][]" value="3663"><label for="nutri-icon-48242099"><a data-toggle="tooltip" title="" data-original-title="Contain Egg"><img src="{{asset('front/extra-images/natural-item01.png')}}" alt=""></a></label></li>
                                                                                                        <li><input id="nutri-icon-48513122" type="checkbox" name="menu_item_nutri[124273424][]" value="3664"><label for="nutri-icon-48513122"><a data-toggle="tooltip" title="" data-original-title="Onion"><img src="{{asset('front/extra-images/natural-item02.png')}}" alt=""></a></label></li>
                                                                                                        <li><input id="nutri-icon-5407499" type="checkbox" name="menu_item_nutri[124273424][]" value="3666"><label for="nutri-icon-5407499"><a data-toggle="tooltip" title="" data-original-title="Vegitable"><img src="{{asset('front/extra-images/natural-item04.png')}}" alt=""></a></label></li>
                                                                                                        <li><input id="nutri-icon-83283899" type="checkbox" name="menu_item_nutri[124273424][]" value="3667"><label for="nutri-icon-83283899"><a data-toggle="tooltip" title="" data-original-title="Chille"><img src="{{asset('front/extra-images/natural-item05.png')}}" alt=""></a></label></li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <label>Description</label>
                                                                                                <textarea class="menu-item-desc foodbakery_editor" placeholder="Menu Item Description test">Cheese, tomatoes, tuna fish, sweetcorn and italian herbs</textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                        <ul id="menu-item-extra-list-1242734244" class="menu-item-extra-list">
                                                                                            <li class="menu-item-extra-124273424">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="row">
                                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="field-holder">
                                                                                                                <label>Heading</label>
                                                                                                                <input class="menu-item-extra-heading" value="Drinks" type="text" placeholder="Heading">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <ul id="menu-item-extra-fields-1242734244" class="menu-item-extra-fields">
                                                                                                            <li id="menu-item-extra-field-1242734244" class="menu-item-extra-field">
                                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                                            <div class="field-holder">
                                                                                                                                <label>Title</label>
                                                                                                                                <input class="menu-item-extra-title" type="text" value="Cold Drink" placeholder="Title">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                                            <div class="field-holder">
                                                                                                                                <label>Price (£)</label>
                                                                                                                                <input class="menu-item-extra-price" type="text" value="1.5" placeholder="Price">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                                            <div class="menu-item-extra-options">
                                                                                                                                <label>&nbsp;</label>
                                                                                                                                <a href="#">+</a>
                                                                                                                                <a href="#">-</a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                        <ul id="menu-item-extra-fields-1242734245" class="menu-item-extra-fields">
                                                                                                            <li id="menu-item-extra-field-1242734245" class="menu-item-extra-field">
                                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                                            <div class="field-holder">
                                                                                                                                <label>Title</label>
                                                                                                                                <input class="menu-item-extra-title" type="text" value="Redbull" placeholder="Title">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                                            <div class="field-holder">
                                                                                                                                <label>Price (£)</label>
                                                                                                                                <input class="menu-item-extra-price" type="text" value="2.5" placeholder="Price">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                                            <div class="menu-item-extra-options">
                                                                                                                                <label>&nbsp;</label>
                                                                                                                                <a href="#">+</a>
                                                                                                                                <a href="#">-</a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                        <ul id="menu-item-extra-fields-1242734246" class="menu-item-extra-fields">
                                                                                                            <li id="menu-item-extra-field-1242734246" class="menu-item-extra-field">
                                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                                            <div class="field-holder">
                                                                                                                                <label>Title</label>
                                                                                                                                <input class="menu-item-extra-title" type="text" value="chillies" placeholder="Title">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                                            <div class="field-holder">
                                                                                                                                <label>Price (£)</label>
                                                                                                                                <input class="menu-item-extra-price" type="text" value="3.5" placeholder="Price">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                                            <div class="menu-item-extra-options">
                                                                                                                                <label>&nbsp;</label>
                                                                                                                                <a href="#">+</a>
                                                                                                                                <a href="#">-</a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li class="menu-item-extra-124273424">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div class="row">
                                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="field-holder">
                                                                                                                <label>Heading</label>
                                                                                                                <input class="menu-item-extra-heading" value="" type="text" placeholder="Heading">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="field-holder">
                                                                                                <a class="add-menu-item-extra add-menu-item-extra-124273424" href="#">Add Menu Item Extra</a>
                                                                                                <a class="add-menu-item add-menu-item-list add-menu-item-list-124273424" href="#">Save</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-holder">
                                            <div id="update-menu-items-holder" class="payment-holder input-button-loader">
                                                <input class="redirect-button-click update-menu-items" value="Update Menu" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Section End -->
@endsection
