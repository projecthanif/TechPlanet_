<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Models\Category;
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


// PRODUCT
Route::get('product/lists', [ProductController::class, 'index']);
Route::get('product/create', [ProductController::class, 'create']);
Route::post('product/create', [ProductController::class, 'store']);
Route::delete('product/delete/{id}', [ProductController::class, 'destroy']);


//Category
Route::get('/product/category', [CategoryController::class, 'index']);
Route::post('/product/category/create', [CategoryController::class, 'store']);
// Route::patch('/product/category/edit', [CategoryController::class, 'edit']);
// Route::delete('/product/category/edit', [CategoryController::class, 'destroy']);


//Order
Route::get('/order/lists', [OrderController::class, 'index']);
// Route::get('/order/list/{id}', [OrderController::class, 'show']);
