<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group([
    'prefix' => 'v2', 
    'namespace' => 'Api'
], function(){

    //withdraw
    Route::get('withdraw','WithdrawController@index');
    Route::post('withdraw/submit', 'WithdrawController@store');

    //withdraw
    Route::get('support','SupportController@index');
    Route::post('support/submit', 'SupportController@store');


    Route::post('/login', 'CustomerController@login');
    
});