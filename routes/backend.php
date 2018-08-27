<?php

Route::resource('users', 'UserController');
Route::resource('tags', 'TagController');
Route::resource('categories', 'CategoryController');
Route::resource('invoices', 'InvoiceController');
Route::resource('products', 'ProductController');
Route::resource('media', 'MediaController');
Route::resource('brands', 'BrandController');
Route::resource('shops', 'ShopController');
Route::resource('comments', 'CommentController');
Route::resource('orders', 'OrderController');
Route::resource('ratings', 'RatingController');
Route::resource('offers', 'OfferController');
Route::resource('futureproducts', 'FutureProductController');
