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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home','PageController@Home');
Route::get('login','PageController@getLogin');
Route::post('login','PageController@postLogin');
Route::get('signup','PageController@getSignUp');
Route::post('signup','PageController@postSignUp');
Route::get('register','PageController@getRegister');
Route::post('register','PageController@postRegister');
Route::get('logout','PageController@getLogout');
Route::get('profile/{id}','ProfileController@getProfile');
Route::post('profile/{id}','ProfileController@postProfile');

Route::get('header',function(){
	return view('layout.header');
});

Route::get('news/{TittleNoSign}/{id}','PageController@News');

Route::get('location/{id}','PageController@Location');