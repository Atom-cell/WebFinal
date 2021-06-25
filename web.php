<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'App\Http\Controllers\maleController@admin');
Route::get('/home','App\Http\Controllers\maleController@home');

Route::get('/orders', 'App\Http\Controllers\maleController@orders');

Route::get('/addProduct', 'App\Http\Controllers\maleController@addPage');
Route::post('/add', 'App\Http\Controllers\maleController@addProduct');

// Route::get('/productPage', 'App\Http\Controllers\maleController@PPage');
Route::get('/productPage/{gender}', 'App\Http\Controllers\maleController@PPage');

Route::get('/main/{gender}/{category}','App\Http\Controllers\maleController@main');



// Route::get('/view','App\Http\Controllers\maleController@view');
Route::get('/view/{gender}/{category}','App\Http\Controllers\maleController@view');





Route::get('/edit/{id}/{size}', 'App\Http\Controllers\maleController@viewProduct');
Route::get('/delete/{id}/{size}', 'App\Http\Controllers\maleController@delete'); 


Route::post('/update/{id}', 'App\Http\Controllers\maleController@updateProduct');

Route::get('/description','App\Http\Controllers\maleController@descp');

Route::get('/cart', 'App\Http\Controllers\maleController@cart');
Route::get('/checkout', 'App\Http\Controllers\maleController@checkout');
Route::post('/checkout', 'App\Http\Controllers\maleController@checkout_store');
Route::get('/thankyou', 'App\Http\Controllers\maleController@thankyou');




Route::post('/addToCart/{id}', 'App\Http\Controllers\maleController@addToCart');
Route::get('deleteItem/{id}','App\Http\Controllers\maleController@deleteItem');



Route::get('/login', 'App\Http\Controllers\maleController@login');
Route::get('/logout', 'App\Http\Controllers\maleController@logout');


Route::post('/login', 'App\Http\Controllers\maleController@matchUser');

Route::get('/signup', 'App\Http\Controllers\maleController@signup');
Route::post('/signup', 'App\Http\Controllers\maleController@storeUser');

Route::get('/forgetPassword', 'App\Http\Controllers\maleController@forgetPassword');
Route::post('/resetPassword', 'App\Http\Controllers\maleController@resetPassword');

Route::get('/account', 'App\Http\Controllers\maleController@account');

Route::get('/editAccount', 'App\Http\Controllers\maleController@editAccount');
Route::post('/editUserAccount', 'App\Http\Controllers\maleController@saveEditAccount');











