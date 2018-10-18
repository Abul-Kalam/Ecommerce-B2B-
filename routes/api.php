<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth.jwt')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('logout', 'AuthController@logout');


Route::get('isvalidtoken', 'AuthController@isValidToken');


Route::post('signup', 'AuthController@signup');
Route::post('login', 'AuthController@login');



Route::resource('products', 'ProductController');
Route::resource('shops', 'ShopController');
Route::resource('countries', 'CountryController');
Route::resource('divisions', 'DivisionController');
Route::resource('districts', 'DistrictController');
Route::resource('thanas', 'ThanaController');
Route::resource('brands', 'BrandController');
Route::resource('categories', 'CategoryController');

Route::resource('users', 'UserController');



Route::get('test', function () {
    return response()->json([
        'massage' =>'User Successfully Created '
    ], 200);
});
