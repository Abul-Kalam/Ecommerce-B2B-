<?php

Route::resource('users', 'UserController');







//Auth::routes();

//Route::get('register', 'RegisterController@resgisterUser')->name('register');
Route::get('register', 'RegisterController@create')->name('register');
Route::post('register', 'RegisterController@userendstore')->name('register.userendstore');


Route::post('login', 'LoginController@login');

// Route::get('/register', function () {
//     return view('userend.pages.register');
//   });

Route::get('dashboard', function () {
    return view('userend.pages.dashboard');
})->name('dashboard');
