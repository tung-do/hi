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
	// Route::group(['namespace'=>'Auth'],function(){

	// 	Route::get('login','LoginController@getlogin');
	// 	Route::post('postlogin','LoginController@postlogin')->name('admin.login');
	// });
Route::group(['namespace'=>'Admin'],function(){
	Route::get('getproductstyle','getproController@hi');
	Route::get('getorder','GetOrderController@hi');
	Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function(){
		Route::get('/','LoginController@getlogin');
		Route::post('/','LoginController@postlogin')->name('admin.login');
	});

	Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'],function(){
		Route::get('/', 'IndexController@index');
		Route::get('out','IndexController@out');
		Route::resource('category','CategoryController');
		Route::resource('productstyle','ProductStyleController');
		Route::resource('product','ProductController');
		Route::post('updatePro/{id}','ProductController@update');
		Route::resource('order','OrderController');
		Route::get('order/danggiao/{id}','OrderController@danggiao');
		Route::get('order/huybo/{id}','OrderController@huybo');
		Route::get('order/hoanthanh/{id}','OrderController@hoanthanh');
	});
});
Route::group(['namespace'=>'Client'],function(){
	Route::get('/', 'HomeController@index')->name('index');
	Route::get('type/{id}', 'HomeController@type');
	Route::get('selling/{id}', 'HomeController@selling');
	Route::get('category/{id}', 'HomeController@category');
	Route::get('category/{id}', 'HomeController@category');
	Route::get('style/{id}', 'HomeController@style');
	Route::get('show/{id}', 'HomeController@show');
	Route::get('hoanthanh', 'HomeController@done');
	Route::get('search/', 'HomeController@search');

	Route::get('cart/add/{id}', 'CartController@add');
	Route::get('cart/addspeed/{id}', 'CartController@addspeed');
	Route::get('cart/showcart', 'CartController@showcart');
	Route::get('cart/delete/{id}', 'CartController@delete');
	Route::get('cart/updatecart', 'CartController@updatecart');
	Route::resource('cart','CartController');
});