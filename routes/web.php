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
Route::post('loginToOrder','PageController@postLoginToOrder');
Route::get('signup','PageController@getSignUp');
Route::post('signup','PageController@postSignUp');
Route::get('register','PageController@getRegister');
Route::post('register','PageController@postRegister');
Route::get('logout','PageController@getLogout');

Route::post('location/{id}','PageController@postComment');
Route::get('profile/{id}/location-register','PageController@getLocationRegister')->middleware('pageLogin');
Route::post('profile/{id}/location-register','PageController@postLocationRegister')->middleware('pageLogin');
Route::get('header',function(){
	return view('layout.header');
});
Route::get('profile/{id}','PageController@getProfile')->middleware('pageLogin');
Route::post('profile/{id}','PageController@postProfile')->middleware('pageLogin');

Route::get('news/{TittleNoSign}/{id}','PageController@News');

Route::get('location/{id}','PageController@Location');
Route::get('reservation/{id}','PageController@Reservation');
Route::post('reserve/{id}','PageController@Reserve');

Route::get('cartbox','PageController@Cartbox')->middleware('pageLogin');

Route::get('order/{id}','PageController@Order')->middleware('pageLogin');

Route::get('deleteOrder/{id}','PageController@DeleteOrder')->middleware('pageLogin');

Route::get('checkout','PageController@Checkout')->middleware('pageLogin');

Route::get('checkout_inform','PageController@Checkout_inform')->middleware('pageLogin');

Route::post('placeOrder','PageController@PlaceOrder')->middleware('pageLogin');



Route::get('test','PageController@Test');


//Route cho trang admin
Route::group(['prefix'=>'admin','middleware'=>'pageLogin'],function(){
	Route::group(['prefix'=>'user'],function(){

		Route::get('list','UserController@getUser');

		Route::get('edit/{id}','UserController@Edit');
		Route::post('editPost/{id}','UserController@EditPost');

		Route::get('add','UserController@Add');
		Route::post('addPost','UserController@AddPost');

		Route::get('delete/{id}','UserController@Delete');
	
	}); //route for user

	Route::group(['prefix'=>'category'],function(){

		Route::get('list','CategoryController@getCategory');

		Route::get('edit/{id}','CategoryController@Edit');
		Route::post('editPost/{id}','CategoryController@EditPost');

		Route::get('add','CategoryController@Add');
		Route::post('addPost','CategoryController@AddPost');

		Route::get('delete/{id}','CategoryController@Delete');
	
	}); //route for category

	Route::group(['prefix'=>'location'],function(){

		Route::get('list','LocationController@getLocation');

		Route::get('edit/{id}','LocationController@Edit');
		Route::post('editPost/{id}','LocationController@EditPost');

		Route::get('add','LocationController@Add');
		Route::post('addPost','LocationController@AddPost');

		Route::get('delete/{id}','LocationController@Delete');
	
	}); //route for location

	Route::group(['prefix'=>'news'],function(){

		Route::get('list','NewsController@getNews');

		Route::get('edit/{id}','NewsController@Edit');
		Route::post('editPost/{id}','NewsController@EditPost');

		Route::get('add','NewsController@Add');
		Route::post('addPost','NewsController@AddPost');

		Route::get('delete/{id}','NewsController@Delete');
	
	}); //route for news

	Route::group(['prefix'=>'slide'],function(){

		Route::get('list','SlideController@getSlide');

		Route::get('edit/{id}','SlideController@Edit');
		Route::post('editPost/{id}','SlideController@EditPost');

		Route::get('add','SlideController@Add');
		Route::post('addPost','SlideController@AddPost');

		Route::get('delete/{id}','SlideController@Delete');
	
	}); //route for slide
});	
