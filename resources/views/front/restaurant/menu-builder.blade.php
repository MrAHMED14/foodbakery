@extends('front.restaurant.master')

@section('title')
    Restaurant || Account Setting
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
                                <ul class="restaurant-menu-nav nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#menu-cats-items" aria-expanded="true">Menu
                                            Categories</a></li>
                                    <li><a data-toggle="tab" href="#menu-list-items" aria-expanded="false">Food Items</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    {{-- Menu's --}}
                                    <div id="menu-cats-items" class="tab-pane fade active in">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="element-title">
                                                    <h5>Menu Categories</h5>
                                                    <a href="#add-menu-cat-from" data-toggle="collapse"
                                                        class="add-menu-item collapsed">Add Menu Category</a>
                                                </div>
                                                <div class="form-elements">
                                                    <div id="add-menu-cat-from" class="collapse">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <a href="#add-menu-cat-from" data-toggle="collapse"
                                                                class="close-menu-item collapsed"><i
                                                                    class="icon-close2"></i></a>
                                                            <div class="row">
                                                                {{-- Add Menu --}}
                                                                <form action="{{ route('restaurant.menus.store') }}"
                                                                    method="POST">
                                                                    @csrf

                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="field-holder">
                                                                            <label>Menu Name *</label>
                                                                            <input name="menu_name" class="menu-item-title"
                                                                                id="menu_item_title_243314725"
                                                                                type="text"
                                                                                placeholder="Menu Category Title" required>
                                                                            @error('menu_name')
                                                                                <span
                                                                                    class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="field-holder">
                                                                            <label>Description</label>
                                                                            <textarea name="menu_description" class="menu-item-desc" id="menu_item_desc_243314725"
                                                                                placeholder="Category Description"></textarea>
                                                                            @error('menu_description')
                                                                                <span
                                                                                    class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="field-holder">
                                                                            <button type="submit" class="btn-submit">Add
                                                                                Category</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- Menu List --}}
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="field-holder">
                                                            <div class="service-list">
                                                                <div class="menu-items-list-holder">
                                                                    <ul class="restaurant-menu-cats-list ui-sortable"
                                                                        style="display:block;">
                                                                        @if ($menus->isEmpty())
                                                                            <li>
                                                                                <h5>No Menus</h5>
                                                                            </li>
                                                                        @endif

                                                                        @foreach ($menus as $menu)
                                                                            <li class="menu-item">
                                                                                <div class="drag-list">
                                                                                    <span
                                                                                        class="drag-option ui-sortable-handle"><i
                                                                                            class="icon-bars"></i></span>
                                                                                    <div class="list-title">
                                                                                        <h6>{{ $menu->name }}</h6>
                                                                                    </div>
                                                                                    <div class="list-option"
                                                                                        style="display: flex; gap:5px; align-items: center; justify-content: space-between;">
                                                                                        <a href="#add-menu-cat-from-edit-{{ $menu->id }}"
                                                                                            data-toggle="collapse"
                                                                                            class="edit-menu-item collapsed">
                                                                                            <i class="icon-mode_edit"></i>
                                                                                        </a>
                                                                                        <form
                                                                                            action="{{ route('restaurant.menus.destroy', $menu->id) }}"
                                                                                            method="POST"
                                                                                            onsubmit="return confirm('Are you sure you want to delete this menu?');">
                                                                                            @csrf
                                                                                            @method('DELETE')

                                                                                            <button type="submit"
                                                                                                style="border: none; padding: 0px 5px; border-radius: 5px; color:red; background: transparent;">
                                                                                                <i class="icon-close2"></i>
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>

                                                                                {{-- Edit Form --}}
                                                                                <div id="add-menu-cat-from-edit-{{ $menu->id }}"
                                                                                    class="collapse">
                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <a href="#add-menu-cat-from-edit-{{ $menu->id }}"
                                                                                            data-toggle="collapse"
                                                                                            class="close-menu-item collapsed"><i
                                                                                                class="icon-close2"></i></a>
                                                                                        <div class="row">
                                                                                            <form
                                                                                                action="{{ route('restaurant.menus.update', $menu->id) }}"
                                                                                                method="POST">
                                                                                                @csrf
                                                                                                @method('PUT')

                                                                                                <div
                                                                                                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div
                                                                                                        class="field-holder">
                                                                                                        <label>Menu Name
                                                                                                            *</label>
                                                                                                        <input
                                                                                                            class="menu-item-title"
                                                                                                            name="menu_name"
                                                                                                            value="{{ old('menu_name', $menu->name) }}"
                                                                                                            type="text"
                                                                                                            placeholder="Menu Category Title"
                                                                                                            required>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div
                                                                                                        class="field-holder">
                                                                                                        <label>Description</label>
                                                                                                        <textarea class="menu-item-desc" name="menu_description" placeholder="Category Description">{{ old('menu_description', $menu->description) }}</textarea>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <div
                                                                                                        class="field-holder">
                                                                                                        <button
                                                                                                            type="submit"
                                                                                                            class="btn-submit">Save</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    {{-- Food item's --}}
                                    <div id="menu-list-items" class="tab-pane fade">
                                        <div class="row">
                                            @if ($menus->isEmpty())
                                                <div
                                                    style="color: #856404; background-color: #fff3cd; padding: 10px; border: 1px solid #ffeeba; margin-top: 10px;">
                                                    <i class="fas fa-exclamation-triangle"></i> You must create a menu
                                                    before adding dishes.
                                                </div>
                                            @else
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="element-title">
                                                        <h5>Food Items</h5>
                                                        <div id="menu-item-loader-87340687" class="restaurant-loader">
                                                        </div>
                                                        <a href="#add_menu_item_cart_from" data-toggle="collapse"
                                                            class="add-menu-item collapsed">Add Menu Item</a>
                                                    </div>
                                                    <div id="add_menu_item_cart_from" class="collapse">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <a href="#add_menu_item_cart_from" data-toggle="collapse"
                                                                class="close-menu-item" aria-expanded="true"><i
                                                                    class="icon-close2"></i></a>

                                                            {{-- Save Dish --}}
                                                            <div class="row">
                                                                <form action="{{ route('restaurant.dishes.store') }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @csrf

                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="field-holder">
                                                                            <label>Restaurant Menu *</label>
                                                                            <div class="restaurants-menu">
                                                                                <select class="chosen-select"
                                                                                    name="menu_id">
                                                                                    <option value="">Select menu
                                                                                    </option>
                                                                                    @foreach ($menus as $menu)
                                                                                        <option
                                                                                            value="{{ $menu->id }}">
                                                                                            {{ $menu->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                                @error('menu_id')
                                                                                    <span
                                                                                        class="text-danger">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                        <div class="field-holder">
                                                                            <label>Title *</label>
                                                                            <input class="menu-item-title" type="text"
                                                                                name="dish_name"
                                                                                placeholder="Menu Item Title" required>
                                                                            @error('dish_name')
                                                                                <span
                                                                                    class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                        <div class="field-holder">
                                                                            <label>Price * (£)</label>
                                                                            <input class="menu-item-price" type="number"
                                                                                min="0" step="0.01"
                                                                                name="dish_price"
                                                                                placeholder="Menu Item Price">
                                                                            @error('dish_price')
                                                                                <span
                                                                                    class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="restaurant-info">
                                                                            <div class="img-holder">
                                                                                <ul class="foodbakery-gallery-holder">
                                                                                    <li class="gal-img">
                                                                                        <div class="drag-list">
                                                                                            <div class="item-thumb">
                                                                                                <img class="thumbnail"
                                                                                                    id="image"
                                                                                                    src="{{ asset('front/extra-images/cover-photo24-150x150.jpg') }}"
                                                                                                    alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div>
                                                                                <h3><strong>Food image</strong></h3>
                                                                                <div class="upload-file"
                                                                                    style="margin-top: 15px;">
                                                                                    <button type="button"
                                                                                        class="upload-btn foodbakery-dev-gallery-upload-btn"
                                                                                        onclick="document.getElementById('dish-image').click();">
                                                                                        <span>Upload Image</span>
                                                                                    </button>

                                                                                    <button type="button"
                                                                                        id="remove-dish-image"
                                                                                        onclick="resetImage()"
                                                                                        style="display: none; margin-top: 15px; text-align: center;">
                                                                                        <span><i
                                                                                                class="icon-cross"></i></span>
                                                                                    </button>

                                                                                    <input id="dish-image" type="file"
                                                                                        name="dish_image" class="hide"
                                                                                        accept="image/*">
                                                                                    @error('dish_image')
                                                                                        <span
                                                                                            class="text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                                <p>Max Upload Size: 2MB</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="field-holder">
                                                                            <label>Description</label>
                                                                            <textarea class="menu-item-desc foodbakery_editor" name="dish_description" placeholder="Menu Item Description test"></textarea>
                                                                            @error('dish_description')
                                                                                <span
                                                                                    class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="field-holder">
                                                                            <button type="submit" class="btn-submit">Add
                                                                                to
                                                                                Menu Item list</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <script>
                                                                    const defaultImage =
                                                                        "{{ asset('front/extra-images/cover-photo24-150x150.jpg') }}";

                                                                    document.getElementById('dish-image').addEventListener('change', function(event) {
                                                                        const [file] = event.target.files;
                                                                        if (file) {
                                                                            document.getElementById('image').src = URL.createObjectURL(file);
                                                                            document.getElementById('remove-dish-image').style.display =
                                                                                'inline-block'; // Show the remove button
                                                                        }
                                                                    });

                                                                    function resetImage() {
                                                                        document.getElementById('image').src = defaultImage;
                                                                        document.getElementById('dish-image').value = ""; // Clear the selected file
                                                                        document.getElementById('remove-dish-image').style.display = 'none'; // Hide the remove button
                                                                    }
                                                                </script>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="field-holder">
                                                        <div class="service-list">
                                                            <ul id="restaurant_menu_items-list-87340687"
                                                                class="restaurant_menu_items_cat_list panel-group ui-sortable">
                                                                @foreach ($menus as $menu)
                                                                    <li id="menu-pizzas" class="panel panel-default">
                                                                        <div class="element-title panel-heading">
                                                                            <span class="drag-option ui-sortable-handle"><i
                                                                                    class="icon-bars"></i></span>
                                                                            <a data-toggle="collapse"
                                                                                data-parent="#restaurant_menu_items-list-87340687"
                                                                                href="#collapse-{{ $menu->id }}"
                                                                                aria-expanded="false"
                                                                                class="collapsed">{{ $menu->name }}</a>
                                                                        </div>

                                                                        <div id="collapse-{{ $menu->id }}"
                                                                            class="panel-collapse collapse"
                                                                            aria-expanded="true" role="tabpanel">
                                                                            <ul class="menu-items-list ui-sortable">
                                                                                @if ($menu->dishes->isEmpty())
                                                                                    <li>No Food</li>
                                                                                @endif

                                                                                @foreach ($menu->dishes as $dish)
                                                                                    <li>
                                                                                        <div class="drag-list">
                                                                                            <span
                                                                                                class="drag-option ui-sortable-handle"><i
                                                                                                    class="icon-bars"></i></span>

                                                                                            <div class="icon-holder">
                                                                                                <img src="{{ $dish->dish_image ? asset('storage/' . $dish->dish_image) : asset('front/extra-images/cover-photo24-150x150.jpg') }}"
                                                                                                    alt="">
                                                                                            </div>

                                                                                            <div class="list-title">
                                                                                                <h6>{{ $dish->name }}
                                                                                                </h6>
                                                                                                <p>{{ $dish->description }}
                                                                                                </p>
                                                                                            </div>

                                                                                            <div class="list-price">
                                                                                                <span><b>£</b><b>{{ $dish->price }}</b></span>
                                                                                            </div>

                                                                                            <div class="list-option"
                                                                                                style="display: flex; gap:5px; align-items: center; justify-content: space-between;">
                                                                                                <a href="#restaurant_menu_items_list_{{ $dish->id }}"
                                                                                                    data-toggle="collapse"
                                                                                                    class="edit-menu-item collapsed">
                                                                                                    <i
                                                                                                        class="icon-mode_edit"></i>
                                                                                                </a>
                                                                                                <form
                                                                                                    action="{{ route('restaurant.dishes.destroy', $dish->id) }}"
                                                                                                    method="POST"
                                                                                                    onsubmit="return confirm('Are you sure you want to delete this dish?');">
                                                                                                    @csrf
                                                                                                    @method('DELETE')

                                                                                                    <button type="submit"
                                                                                                        style="border: none; padding: 0px 5px; border-radius: 5px; color:red; background: transparent;">
                                                                                                        <i
                                                                                                            class="icon-close2"></i>
                                                                                                    </button>
                                                                                                </form>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div id="restaurant_menu_items_list_{{ $dish->id }}"
                                                                                            class="collapse">
                                                                                            <div
                                                                                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                <a data-toggle="collapse"
                                                                                                    href="#restaurant_menu_items_list_{{ $dish->id }}"
                                                                                                    class="close-menu-item"><i
                                                                                                        class="icon-close2"></i></a>

                                                                                                {{-- Edit dish --}}
                                                                                                <div class="row">
                                                                                                    <form
                                                                                                        action="{{ route('restaurant.dishes.update', $dish->id) }}"
                                                                                                        method="POST"
                                                                                                        enctype="multipart/form-data">
                                                                                                        @csrf
                                                                                                        @method('PUT')

                                                                                                        <div
                                                                                                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div
                                                                                                                class="field-holder">
                                                                                                                <label>Restaurant
                                                                                                                    Menu
                                                                                                                    *</label>
                                                                                                                <div
                                                                                                                    class="restaurants-menu">
                                                                                                                    <select
                                                                                                                        class="chosen-select"
                                                                                                                        name="menu_id">
                                                                                                                        <option
                                                                                                                            value="">
                                                                                                                            Select
                                                                                                                            menu
                                                                                                                        </option>
                                                                                                                        @foreach ($menus as $menu)
                                                                                                                            <option
                                                                                                                                value="{{ $menu->id }}"
                                                                                                                                {{ old('menu_id', $dish->menu_id) == $menu->id ? 'selected' : '' }}>
                                                                                                                                {{ $menu->name }}
                                                                                                                            </option>
                                                                                                                        @endforeach
                                                                                                                    </select>
                                                                                                                    @error('menu_id')
                                                                                                                        <span
                                                                                                                            class="text-danger">{{ $message }}</span>
                                                                                                                    @enderror
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div
                                                                                                            class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                            <div
                                                                                                                class="field-holder">
                                                                                                                <label>Title
                                                                                                                    *</label>
                                                                                                                <input
                                                                                                                    class="menu-item-title"
                                                                                                                    type="text"
                                                                                                                    name="dish_name"
                                                                                                                    value="{{ old('dish_name', $dish->name) }}"
                                                                                                                    placeholder="Menu Item Title"
                                                                                                                    required>
                                                                                                                @error('dish_name')
                                                                                                                    <span
                                                                                                                        class="text-danger">{{ $message }}</span>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div
                                                                                                            class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                                                            <div
                                                                                                                class="field-holder">
                                                                                                                <label>Price
                                                                                                                    *
                                                                                                                    (£)
                                                                                                                </label>
                                                                                                                <input
                                                                                                                    class="menu-item-price"
                                                                                                                    type="number"
                                                                                                                    min="0"
                                                                                                                    step="0.01"
                                                                                                                    name="dish_price"
                                                                                                                    value="{{ old('dish_price', $dish->price) }}"
                                                                                                                    placeholder="Menu Item Price">
                                                                                                                @error('dish_price')
                                                                                                                    <span
                                                                                                                        class="text-danger">{{ $message }}</span>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div
                                                                                                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div
                                                                                                                class="restaurant-info">
                                                                                                                <div
                                                                                                                    class="img-holder">
                                                                                                                    <ul
                                                                                                                        class="foodbakery-gallery-holder">
                                                                                                                        <li
                                                                                                                            class="gal-img">
                                                                                                                            <div
                                                                                                                                class="drag-list">
                                                                                                                                <div
                                                                                                                                    class="item-thumb">
                                                                                                                                    <img class="thumbnail"
                                                                                                                                        id="edit-image-{{ $dish->id }}"
                                                                                                                                        src="{{ $dish->dish_image ? asset('storage/' . $dish->dish_image) : asset('front/extra-images/cover-photo24-150x150.jpg') }}"
                                                                                                                                        alt="">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <h3><strong>Food
                                                                                                                            image</strong>
                                                                                                                    </h3>
                                                                                                                    <div class="upload-file"
                                                                                                                        style="margin-top: 15px;">
                                                                                                                        <button
                                                                                                                            type="button"
                                                                                                                            class="upload-btn foodbakery-dev-gallery-upload-btn"
                                                                                                                            onclick="document.getElementById('edit-dish-image-{{ $dish->id }}').click();">
                                                                                                                            <span>Upload
                                                                                                                                Image</span>
                                                                                                                        </button>

                                                                                                                        <button
                                                                                                                            type="button"
                                                                                                                            id="edit-remove-dish-image-{{ $dish->id }}"
                                                                                                                            onclick="resetEditImage{{ $dish->id }}()"
                                                                                                                            style="display: none; margin-top: 15px; text-align: center;">
                                                                                                                            <span><i
                                                                                                                                    class="icon-cross"></i></span>
                                                                                                                        </button>

                                                                                                                        <input
                                                                                                                            id="edit-dish-image-{{ $dish->id }}"
                                                                                                                            type="file"
                                                                                                                            name="dish_image"
                                                                                                                            class="hide"
                                                                                                                            accept="image/*">
                                                                                                                        @error('dish_image')
                                                                                                                            <span
                                                                                                                                class="text-danger">{{ $message }}</span>
                                                                                                                        @enderror
                                                                                                                    </div>
                                                                                                                    <p>Max
                                                                                                                        Upload
                                                                                                                        Size:
                                                                                                                        2MB
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div
                                                                                                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div
                                                                                                                class="field-holder">
                                                                                                                <label>Description</label>
                                                                                                                <textarea class="menu-item-desc foodbakery_editor" name="dish_description" placeholder="Menu Item Description test">{{ old('dish_description', $dish->description) }}</textarea>
                                                                                                                @error('dish_description')
                                                                                                                    <span
                                                                                                                        class="text-danger">{{ $message }}</span>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div
                                                                                                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div
                                                                                                                class="field-holder">
                                                                                                                <button
                                                                                                                    type="submit"
                                                                                                                    class="btn-submit">Save</button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </form>

                                                                                                    <script>
                                                                                                        const defaultEditImage =
                                                                                                            "{{ $dish->dish_image ? asset('storage/' . $dish->dish_image) : asset('front/extra-images/cover-photo24-150x150.jpg') }}";

                                                                                                        document.getElementById('edit-dish-image-{{ $dish->id }}').addEventListener('change', function(event) {
                                                                                                            const [file] = event.target.files;
                                                                                                            if (file) {
                                                                                                                document.getElementById('edit-image-{{ $dish->id }}').src = URL.createObjectURL(file);
                                                                                                                document.getElementById('edit-remove-dish-image-{{ $dish->id }}').style.display =
                                                                                                                    'inline-block'; // Show the remove button
                                                                                                            }
                                                                                                        });

                                                                                                        function resetEditImage{{ $dish->id }}() {
                                                                                                            document.getElementById('edit-image-{{ $dish->id }}').src = defaultEditImage;
                                                                                                            document.getElementById('edit-dish-image-{{ $dish->id }}').value = ""; // Clear the selected file
                                                                                                            document.getElementById('edit-remove-dish-image-{{ $dish->id }}').style.display =
                                                                                                                'none'; // Hide the remove button
                                                                                                        }
                                                                                                    </script>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
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
