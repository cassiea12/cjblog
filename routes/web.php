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

Route::get('home', function () {
    return view('home');
});




Route::get('create_account', function () {
    return view('create_account');
})->name('create.account');

// Routes pertaining to Login Page
Route::get('login', function () {
    return view('login');
})->name('login');

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::get('profile', function () {
    return view('profile');
});




/*Route::get('reset_password', function () {
    return view('reset_password');
})->name('password.reset');*/

Route::get('reset_password', 'ResetPasswordController@index')->name('password.reset');


Route::get('view_story', function () {
    return view('view_story');
});

Route::get('/', function () {
    return view('splash');
});


