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

Route::get('/', function () {
  return view('frontend.pages.home');
});





// Route::get('auth/provider', 'Auth\AuthController@redirectToProvider');
// Route::get('auth/provider/callback', 'Auth\AuthController@handleProviderCallback');


Route::get('login/{social}', 'Auth\LoginController@redirectToProvider')->name('provider');
Route::get('login/{social}/callback', 'Auth\LoginController@handleProviderCallback');
