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
// Route::view('SellerShow::Sellerlogin');
Route::prefix('sellershow')->group(function() {
    Route::get('/', 'SellerShowController@index');
});
Route::get('/','SellerController@test');
Route::get('/seller_header','SellerController@seller_header');
Route::post('/Sellerlogin','SellerController@Sellerlogin');
Route::post('/product_upload','SellerController@product_upload');
Route::get('/Product_show','SellerController@Product_show');
Route::get('/seller_register', function () {
    return view('sellershow::seller_register');
});

Route::post('/sellerregister','SellerController@sellerregister');
Route::get('/getProduct','SellerController@getProduct');
Route::get('/seller_logout', function () {
    Session::forget('seller');
    return view('sellershow::Sellerlogin');
});
Route::get('/dashboard','SellerController@dashboard');
Route::get('/Selleredit/{id}','SellerController@Selleredit');
Route::get('/Sellerdelete/{id}','SellerController@Sellerdelete');
Route::post('/SellerUpdate','SellerController@SellerUpdate');