<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [CategoryController::class, 'index'])->name('all_categories');
Route::get('/products', [ProductController::class, 'index'])->name('all_products');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('show_one_product');
Route::get('/category/{categoryId}/products', [ProductController::class, 'getProductsByCategory'])->name('products_by_category');
