<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});





Route::resource('backend/users', 'UserController');
Route::resource('backend/tags', 'TagController');
Route::resource('backend/categories', 'CategoryController');
Route::resource('backend/invoices', 'InvoiceController');
Route::resource('backend/products', 'ProductController');
Route::resource('backend/media', 'MediaController');
Route::resource('backend/brands', 'BrandController');
Route::resource('backend/shops', 'ShopController');
Route::resource('backend/comments', 'CommentController');
Route::resource('backend/orders', 'OrderController');
Route::resource('backend/ratings', 'RatingController');
Route::resource('backend/offers', 'OfferController');
Route::resource('backend/futureproducts', 'FutureProductController');
