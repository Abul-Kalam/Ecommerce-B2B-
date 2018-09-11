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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
  return view('frontend.layouts.default');
});

// Route::get('categories/create', function () {
//   return view('backend.pages.category-create');
// })->name('dashboard');

// Route::get('categories/edit', function () {
//   return view('backend.pages.category-edit');
// })->name('dashboard');

// Route::get('categories/list', function () {
//   return view('backend.pages.category-list');
// });

// Route::get('shops/create', function () {
//   return view('backend.pages.shop-create');
// });

// Route::get('shops/edit', function () {
//   return view('backend.pages.shop-edit');
// });

// Route::get('shops/list', function () {
//   return view('backend.pages.shop-list');
// });

// Route::get('media/create', function () {
//   return view('backend.pages.media-create');
// })->name('backend.media.create');


Route::get('media/list', function () {
  return view('backend.pages.media-list');
})->name('backend.media.list');

Route::get('products/create', function () {
  return view('backend.pages.product-create');
})->name('backend.product.create');
 
