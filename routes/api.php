<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('app-login','ApiController@AppLogin');
Route::post('add-customer','ApiController@addCustomer');
Route::get('get-customer-list','ApiController@CustomerList');
Route::post('get-customer','ApiController@GetCustomerInfo');
Route::post('edit-customer','ApiController@EditCustomer');
Route::post('destroy-customer','ApiController@DestroyCustomer');

/// Deposit ///
Route::post('add-deposit','ApiController@addDeposit');
Route::get('get-deposit-list','ApiController@DepositList');
Route::post('get-deposit','ApiController@GetDeposit');
Route::post('edit-deposit','ApiController@EditDeposit');
Route::post('destroy-deposit','ApiController@DestroyDeposit');

/// Payment ///
Route::post('add-payment','ApiController@addPayment');
Route::get('get-payment-list','ApiController@PaymentList');
Route::post('get-payment','ApiController@GetPayment');
Route::post('edit-payment','ApiController@EditPayment');
Route::post('destroy-payment','ApiController@DestroyPayment');

// report ///
Route::post('report/customer-statement','ApiController@GetCustomerStatement');
Route::post('report/get-daily-collection','ApiController@GetDailyCollection');
Route::post('report/get-market-wise-report','ApiController@getMarketWiseReportResult');
Route::post('report/get-deposit-transection-report','ApiController@getDepositTransection');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
