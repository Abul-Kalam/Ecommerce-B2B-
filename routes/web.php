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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('categories/create', function () {
  return view('backend.pages.category-create');
})->name('dashboard');

Route::get('categories/edit', function () {
  return view('backend.pages.category-edit');
})->name('dashboard');

Route::get('categories/list', function () {
  return view('backend.pages.category-list');
})->name('dashboard');