<?php

Route::resource('users', 'UserController');







//Auth::routes();

//Route::get('register', 'RegisterController@resgisterUser')->name('register');

Route::get('login', 'LoginController@create')->name('login');

Route::get('register', 'RegisterController@create')->name('register');
Route::post('register', 'RegisterController@userendstore')->name('register.userendstore');


Route::post('login', 'LoginController@login')->name('userend.login');

// Route::get('/register', function () {
//     return view('userend.pages.register');
//   });

Route::get('dashboard', function () {
    return view('userend.pages.dashboard');
})->name('dashboard');

 Route::get('profile', 'UserController@profile')->name('profile');
