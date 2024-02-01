<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Shopcontroller;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Checkout\AddressController;
use App\Http\Controllers\Checkout\PaymentController;
use App\Http\Controllers\Checkout\ShippingController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/** Customer's Page  */

Route::get('/', [HomeController::class, 'index']);

//SHOP
Route::get('/shop', [Shopcontroller::class, 'index']);
Route::get('/shop/{product_id}', [Shopcontroller::class, 'show']);
Route::get('/shopBy/{category}', [Shopcontroller::class, 'showByCategory']);
Route::post('/shop/{product_id}', [Shopcontroller::class, 'store']);

Route::view('/about', 'frontend/about', ['nav' => 'about']);
Route::view('/blog', 'frontend/blog', ['nav' => 'blog']);
Route::view('/contact', 'frontend/contact', ['nav' => 'contact']);

//CART
Route::get('/cart', [CartController::class, 'index']);

//CHECKOUT
Route::get('/checkout/address', [AddressController::class, 'index']);
// Route::post('/checkout/address', [CheckoutController::class, 'index']);
Route::get('/checkout/shipment', [ShippingController::class, 'index']);

Route::get('/checkout/payment', [PaymentController::class, 'index']);

// Route::get();


/** Users Authentication */

Route::get('/login', [AuthController::class, 'index'])->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'create'])->middleware('guest');
Route::post('/register', [AuthController::class, 'store']);

/**  Dashboard */

//DASHBOARD INDEX PAGE
Route::get('/dashboard', [IndexController::class, 'index']);

// PRODUCT
Route::get('product/lists', [ProductController::class, 'index']);
Route::get('product/create', [ProductController::class, 'create']);
Route::post('product/create', [ProductController::class, 'store']);
Route::delete('product/delete/{product_id}', [ProductController::class, 'destroy']);
Route::patch('product/edit/{product_id}', [ProductController::class, 'edit']);

//Category
Route::get('/product/category', [CategoryController::class, 'index'])->name('xyz');
Route::post('/product/category/create', [CategoryController::class, 'store']);
Route::patch('/product/category/edit', [CategoryController::class, 'edit']);
Route::delete('/category/delete/{category_id}', [CategoryController::class, 'destroy']);

//Order
Route::get('/order/lists', [OrderController::class, 'index']);
// Route::get('/order/list/{order_id}', [OrderController::class, 'show']);

//Customer
Route::get('/customer/lists', [CustomerController::class, 'index']);
//User Profile
Route::get('/customer/profile/{user_id}', [ProfileController::class, 'show']);

//BLOG
Route::get('/blog/list', [BlogController::class, 'index']);
Route::get('/blog/create', [BlogController::class, 'create']);
Route::post('/blog/create', [BlogController::class, 'store']);
Route::patch('/blog/edit/{id}', [BlogController::class, 'edit']);
Route::delete('/blog/delete/{id}', [BlogController::class, 'destroy']);
