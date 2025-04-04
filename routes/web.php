<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
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

    Route::get('/listing', [FrontController::class, 'listing'])->name('listings');
    Route::get('/listing-details', [FrontController::class, 'listingDetails'])->name('listing_details');
    Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
    Route::get('/blog-detail', [FrontController::class, 'blogDetail'])->name('blog_detail');

    Route::get('/register-restaurant', [RestaurantController::class, 'registerRestaurant'])->name('register_restaurant');
    Route::get('/register-package', [RestaurantController::class, 'registerPackage'])->name('register_package');
    Route::get('/register-payment', [RestaurantController::class, 'registerPayment'])->name('register_payment');
    Route::get('/register-activation', [RestaurantController::class, 'registerActivation'])->name('register_activation');
});

Route::middleware(['auth', 'verified'])->group(function () {
    //Restaurant route
    Route::middleware(['role:' . User::ROLE_RESTAURANT])->group(function () {
        Route::group(['prefix' => 'restaurant', 'as' => 'restaurant.'], function () {
            Route::get('/dashboard', [RestaurantController::class, 'restaurantDashboard'])->name('dashboard');
            Route::get('/restaurant', [RestaurantController::class, 'restaurant'])->name('restaurant');
            Route::get('/location', [RestaurantController::class, 'location'])->name('location');
            Route::get('/open-close', [RestaurantController::class, 'openClose'])->name('open_close');
            Route::get('/menu-builder', [RestaurantController::class, 'menuBuilder'])->name('menu_builder');
            Route::get('/orders', [RestaurantController::class, 'orders'])->name('orders');
            Route::get('/bookings', [RestaurantController::class, 'bookings'])->name('bookings');
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
        Route::group(['prefix' => 'buyer', 'as' => 'buyer.'], function () {
            Route::get('/dashboard', [BuyerController::class, 'buyerDashboard'])->name('dashboard');
            Route::get('/bookings', [BuyerController::class, 'bookings'])->name('bookings');
            Route::get('/reviews', [BuyerController::class, 'reviews'])->name('reviews');
            Route::get('/orders', [BuyerController::class, 'orders'])->name('orders');
            Route::get('/shortlists', [BuyerController::class, 'shortlists'])->name('shortlists');
            Route::get('/statement', [BuyerController::class, 'statement'])->name('statement');
            Route::get('/account-setting', [BuyerController::class, 'account_setting'])->name('account_setting');
        });
    });

    //Admin route
    Route::middleware(['role:' . User::ROLE_ADMIN])->group(function () {
        Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
            Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
        });
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
