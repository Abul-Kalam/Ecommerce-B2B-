<?php


Route::middleware('auth')->group(function () {

    //Design test route ========================================================
    Route::get('dashboard', function () {
        return view('backend.pages.dashboard');
    })->name('dashboard');
    Route::get('media', function () {
        return view('backend.pages.media');
    })->name('media');
    //==========================================================================

    Route::resource('users', 'UserController');
    Route::resource('tags', 'TagController');
    Route::resource('categories', 'CategoryController');
    Route::post('backend/categories/search', 'CategoryController@search')->name('categories.search');
    Route::resource('invoices', 'InvoiceController');
    Route::resource('products', 'ProductController');
    // Route::resource('media', 'MediaController');
    Route::resource('brands', 'BrandController');
    Route::resource('shops', 'ShopController');
    Route::resource('comments', 'CommentController');
    Route::resource('orders', 'OrderController');
    Route::resource('ratings', 'RatingController');
    Route::resource('offers', 'OfferController');
    Route::resource('futureproducts', 'FutureProductController');

    Route::resource('permissions', 'PermissionController');
    Route::post('backend/permissions/search', 'PermissionController@search')->name('permissions.search');


    Route::resource('roles', 'RoleController');
    Route::post('backend/roles/search', 'RoleController@search')->name('roles.search');

    });
