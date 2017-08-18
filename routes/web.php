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

Route::get('home', 'HomeController@index');

Route::get('/', function () {
    return view('splash');
});

Route::get('view_story', function () {
    return view('view_story');
});

Route::get('profile', function () {
    return view('profile');
});

/***********************************Account Creation*******************************************/
Route::get('create_account', 'Auth\RegisterController@showRegistrationForm')->name('create.account');

Route::post('create_account', 'Auth\RegisterController@register')->name('create.account');

/*****************************************Login***********************************************/
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login')->name('login');

/*****************************************Reset Password****************************************************/
/*****Not Fully Functional: Sends Emails, does not redirect back to website from a users email account*******/
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@reset')->name('password.reset');



