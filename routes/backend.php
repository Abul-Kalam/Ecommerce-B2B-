<?php


Route::middleware('auth')->group(function () {

    //Design test route ========================================================
    Route::get('dashboard', function () {
        return view('backend.pages.dashboard');
    })->name('dashboard');
    //==========================================================================

    Route::resource('users', 'UserController');
    Route::post('users/search', 'UserController@search')->name('users.search');
    
    Route::resource('tags', 'TagController');
    Route::post('tags/search', 'TagController@search')->name('tags.search');
    Route::resource('categories', 'CategoryController');
    Route::post('categories/search', 'CategoryController@search')->name('categories.search');
    Route::resource('invoices', 'InvoiceController');
    Route::resource('products', 'ProductController');
    Route::resource('media', 'MediaController');
    Route::resource('brands', 'BrandController');
    Route::resource('shops', 'ShopController');
    Route::post('shops/search', 'ShopController@search')->name('shops.search');
    Route::resource('comments', 'CommentController');
    Route::resource('orders', 'OrderController');
    Route::resource('ratings', 'RatingController');
    Route::resource('offers', 'OfferController');
    Route::resource('futureproducts', 'FutureProductController');

    Route::resource('permissions', 'PermissionController');
    Route::post('permissions/search', 'PermissionController@search')->name('permissions.search');


    Route::resource('roles', 'RoleController');
    Route::post('roles/search', 'RoleController@search')->name('roles.search');

});
