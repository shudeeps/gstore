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
    return view('body.dashboard');
});


Route::get('dashboard', function () {
    return view('body.dashboard');
});

Route::get('adduser', function () {
    return view('body.adduser');
});




Route::get('/destination', function () {
    return view('body.destination');
});

Route::get('/destination/{action}',
['as'=>'destination',
  'uses'=>'destinationController@index'
]
	);



Route::resource('customer','customerController');
Route::resource('product','productController');
Route::resource('category','categoryController');


Route::get('/cart/index',['as'=>'cart.index','uses'=>'cartController@index']);
Route::get('cart/addToCart',['as'=>'cart.addToCart','uses'=>'cartController@addToCart']);
Route::get('cart/viewCart',['as'=>'cart.viewCart','uses'=>'cartController@getCart']);
Route::get('cart/update/{id}',['as'=>'cart.update','uses'=>'cartController@update']);
Route::get('cart/delete/{id}',['as'=>'cart.delete','uses'=>'cartController@delete']);
Route::get('cart/select_customer',['as'=>'cart.select_customer','uses'=>'cartController@select_customer']);
Route::get('cart/checkout/{id}',['as'=>'cart.checkout_view','uses'=>'cartController@checkout_view']);
Route::post('cart/save',['as'=>'cart.save','uses'=>'cartController@save_order']);




Route::get('image-upload-with-validation',['as'=>'getimage','uses'=>'ImageController@getImage']);
Route::post('image-upload-with-validation',['as'=>'postimage','uses'=>'ImageController@postImage']);


