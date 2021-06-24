<?php
use  Modules\UserShow\Http\Controllers\RazorypayController;
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

Route::prefix('usershow')->group(function() {
    Route::get('/', 'UserShowController@index');
});
Route::view('Userloginshow','usershow::User_login');
Route::view('Useregister','usershow::Useregister');
Route::post('UserRegister','UserController@UserRegister');
Route::get('/','UserController@Dashborad');
Route::post('Userlogin','UserController@Userlogin');
Route::get('FetchAllProduct','UserController@FetchAllProduct');
Route::get('/user_logout', function () {
    Session::forget('user');
    return view('usershow::User_login');
});


Route::get('/initiate','Paytemcontroller@initiate')->name('initiate.payment');
Route::post('/payment','Paytemcontroller@pay')->name('make.payment');
Route::post('/payment/status', 'Paytemcontroller@paymentCallback')->name('status');
Route::get('/FetchmMbileData','UserController@FetchmMbileData');
Route::Post('/search','UserController@search');
Route::Post('/addToCart','UserController@addToCart');
Route::get('/CartList','UserController@CartList');
Route::get('/RemoveCart/{id}','UserController@RemoveCart');
Route::get('/displayCart','UserController@displayCart');
Route::get('/FetchElectronicsData','UserController@FetchElectronicsData');
Route::get('/FetchElectricityData','UserController@FetchElectricityData');
Route::get('/ProductDetail/{id}','UserController@ProductDetail');
Route::Post('/Cartupdate','UserController@Cartupdate');
Route::Post('/addlocalstroage','UserController@addlocalstroage');
Route::Post('getCardItem', 'UserController@getCardItem');
//razorypay

  
Route::get('razorpay-payment', [RazorypayController::class, 'index']);
Route::post('razorpay-payment', [RazorypayController::class, 'store'])->name('razorpay.payment.store');
// Route::view('razorypayreceipt','usershow::razorypayreceipt');
Route::get('SendMail', [RazorypayController::class, 'SendMail']);
Route::get('SaveRazorydata', [RazorypayController::class, 'SaveRazorydata']);