<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('/dashboard/index');
});

Route::view('/customer/lists', '/dashboard/customer-list');
Route::view('/order/lists', '/dashboard/order-lists');
Route::view('/product/category', '/dashboard/product-category');
Route::view('/product/lists', '/dashboard/product-lists');
Route::view('/product/create', '/dashboard/product-create');
