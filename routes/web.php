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

/***********************************Account Creation*******************************************/
Route::get('create_account', 'Auth\RegisterController@showRegistrationForm')->name('create.account');

Route::post('create_account', 'Auth\RegisterController@register')->name('create.account');


/*****************************************Login***********************************************/
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login')->name('login');

/********************************************************************************************/

Route::get('profile', function () {
    return view('profile');
});


/*Route::get('reset_password', function () {
    return view('reset_password');
})->name('password.reset');*/

Route::get('reset/send_email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('reset.send.email');

/*Route::get('showResetPage' , function(){
    return view('auth.passwords.reset');
});*/


Route::get('view_story', function () {
    return view('view_story');
});

Route::get('/', function () {
    return view('splash');
});


