<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReviewController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

//Front route
Route::group(['prefix' => '', 'as' => 'front.'], function () {
    Route::get('/', [FrontController::class, 'index'])->name('index');
    Route::get('/contact-us', [FrontController::class, 'contact'])->name('contact');
    Route::get('/faq', [FrontController::class, 'faq'])->name('faq');
    Route::get('/how', [FrontController::class, 'how'])->name('how');
    Route::get('/price', [FrontController::class, 'price'])->name('price');
    Route::get('/result', [FrontController::class, 'result'])->name('result');

    Route::get('/single', [FrontController::class, 'single'])->name('single');

    Route::get('/listing', [RestaurantController::class, 'index'])->name('listings');

    Route::middleware('guest')->group(function () {
        Route::get('/register-restaurant', [RestaurantController::class, 'registerRestaurant'])->name('register_restaurant');
        Route::post('/register-restaurant', [RestaurantController::class, 'store'])->name('restaurants.store');
    });

    Route::get('/listing-details/{restaurant}', [RestaurantController::class, 'show'])->name('listing_details');

    Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
    Route::get('/blog-detail', [FrontController::class, 'blogDetail'])->name('blog_detail');

    Route::get('/register-package', [RestaurantController::class, 'registerPackage'])->name('register_package');
    Route::get('/register-payment', [RestaurantController::class, 'registerPayment'])->name('register_payment');
    Route::get('/register-activation', [RestaurantController::class, 'registerActivation'])->name('register_activation');
});

Route::middleware(['auth', 'verified'])->group(function () {
    //Restaurant route
    Route::middleware(['role:' . User::ROLE_RESTAURANT])->group(function () {
        Route::post('/reviews/{review}/reply', [ReviewController::class, 'reply'])->name('reviews.reply');

        Route::group(['prefix' => 'restaurant', 'as' => 'restaurant.'], function () {
            Route::post('/menus/store', [RestaurantController::class, 'storeMenu'])->name('menus.store');
            Route::put('/menus/{menu}', [RestaurantController::class, 'updateMenu'])->name('menus.update');
            Route::delete('/menus/{menu}', [RestaurantController::class, 'destroyMenu'])->name('menus.destroy');

            Route::post('/dishes/store', [RestaurantController::class, 'storeDish'])->name('dishes.store');
            Route::put('/dishes/{dish}', [RestaurantController::class, 'updateDish'])->name('dishes.update');
            Route::delete('/dishes/{dish}', [RestaurantController::class, 'destroyDish'])->name('dishes.destroy');

            Route::post('/profile/update', [RestaurantController::class, 'update'])->name('update');
            Route::post('/profile/update-location', [RestaurantController::class, 'updateLocation'])->name('update.location');
            Route::post('/profile/update-opening-hours', [RestaurantController::class, 'updateOpeningHours'])->name('update.opening_hours');

            Route::get('/gallery', [RestaurantController::class, 'gallery'])->name('gallery');
            Route::post('/gallery/upload', [RestaurantController::class, 'uploadPhotos'])->name('gallery.upload');
            Route::delete('/gallery/{id}', [RestaurantController::class, 'destroyPhotos'])->name('gallery.delete');


            Route::get('/dashboard', [RestaurantController::class, 'restaurantDashboard'])->name('dashboard');
            Route::get('/profile', [RestaurantController::class, 'restaurant'])->name('restaurant');
            Route::get('/location', [RestaurantController::class, 'location'])->name('location');
            Route::get('/open-close', [RestaurantController::class, 'openClose'])->name('open_close');
            Route::get('/menu-builder', [RestaurantController::class, 'menuBuilder'])->name('menu_builder');
            Route::get('/orders', [OrderController::class, 'restaurantOrders'])->name('orders');
            Route::get('/bookings', [ReservationController::class, 'showRestaurantReservations'])->name('bookings');
            Route::get('/reviews', [RestaurantController::class, 'reviews'])->name('reviews');
            Route::get('/memberships', [RestaurantController::class, 'memberships'])->name('memberships');
            Route::get('/withdrawals', [RestaurantController::class, 'withdrawals'])->name('withdrawals');
            Route::get('/earnings', [RestaurantController::class, 'earnings'])->name('earnings');
            Route::get('/statement', [RestaurantController::class, 'statement'])->name('statement');
            Route::get('/team-management', [RestaurantController::class, 'teamManagement'])->name('team_management');
            Route::get('/change-password', [RestaurantController::class, 'changePassword'])->name('change_password');
        });
    });

    //Buyer route
    Route::middleware(['role:' . User::ROLE_USER])->group(function () {
        Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

        Route::post('/profile/update', [BuyerController::class, 'update'])->name('account-setting.update');
        Route::post('/profile/change-password', [BuyerController::class, 'changePassword'])->name('account-setting.changePassword');

        //* for testing
        Route::get('/reserve', [ReservationController::class, 'showForm'])->name('reservation.showForm');
        Route::post('/reserve', [ReservationController::class, 'store'])->name('reservation.reserve');

        Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
        Route::get('/cart', [CartController::class, 'view'])->name('cart.view');
        Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
        Route::post('/cart/remove', [CartController::class, 'removeDish'])->name('cart.removeDish');

        Route::get('/checkout', [OrderController::class, 'create'])->name('order.checkout');
        Route::post('/checkout', [OrderController::class, 'checkout'])->name('order.checkout.store');

        Route::group(['prefix' => 'buyer', 'as' => 'buyer.'], function () {
            Route::get('/dashboard', [BuyerController::class, 'buyerDashboard'])->name('dashboard');
            Route::get('/bookings', [ReservationController::class, 'showUserReservations'])->name('bookings');
            Route::get('/reviews', [BuyerController::class, 'reviews'])->name('reviews');
            Route::get('/orders', [OrderController::class, 'userOrders'])->name('orders');
            Route::get('/shortlists', [BuyerController::class, 'shortlists'])->name('shortlists');
            Route::get('/statement', [BuyerController::class, 'statement'])->name('statement');
            Route::get('/account-setting', [BuyerController::class, 'account_setting'])->name('account_setting');
        });
    });

    //Admin route
    Route::middleware(['role:' . User::ROLE_ADMIN])->group(function () {
        Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
            Route::get('/dashboard', [AdminController::class, 'index'])->name('index');
        });
    });
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
