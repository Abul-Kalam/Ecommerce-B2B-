<?php

Route::resource('users', 'UserController');







//Auth::routes();

//Route::get('register', 'RegisterController@resgisterUser')->name('register');
Route::get('register', 'RegisterController@create')->name('register');


Route::post('login', 'LoginController@login');

Route::get('/register', function () {
    return view('userend.pages.register');
  });


