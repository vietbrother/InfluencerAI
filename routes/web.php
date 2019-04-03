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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');

#module user
Route::get('/profile', 'User\ProfileController@index')->name('profile');
Route::get('/profile/edit', 'User\ProfileController@edit')->name('profile/edit');
Route::get('/profile/register', 'User\ProfileController@updateMainInfo')->name('profile/register');
Route::post('/profile/create', 'User\ProfileController@create');
//Route::resource('profile', 'User\ProfileController');

#FAQ
Route::get('/faq', 'Config\FAQController@index')->name('faq');
