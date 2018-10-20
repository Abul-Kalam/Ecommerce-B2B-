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

// Route::get('media/list', function () {
//   return view('backend.pages.media-list');
// })->name('backend.media.list');

// Route::get('products/create', function () {
//   return view('backend.pages.product-create');
// })->name('backend.product.create');
 
