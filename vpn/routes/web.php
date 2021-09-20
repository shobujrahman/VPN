<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Category
Route::get('/category/index','CategoryControler@index');
Route::get('/category/create','CategoryControler@create');
Route::post('/category/submit', 'CategoryControler@store');
Route::get('/category/edit/{id}', 'CategoryControler@edit');
Route::post('/category/update/{id}', 'CategoryControler@update');
Route::get('/category/delete/{id}', 'CategoryControler@destroy');

//Status
Route::get('/status/index','Status\StatusController@index');
Route::get('/status/edit/{id}','Status\StatusController@edit');
Route::get('/status/delete/{id}','Status\StatusController@destroy');

//StatusQoute
Route::get('/quote/create','Status\QuoteController@create');
Route::post('/quote/submit','Status\QuoteController@store');
Route::post('/quote/update/{id}','Status\QuoteController@update');

//StatusImage
Route::get('/image/create','Status\ImageController@create');
Route::post('/image/submit','Status\ImageController@store');
Route::post('/image/update/{id}','Status\ImageController@update');

//StatusGif
Route::get('/gif/create','Status\GifController@create');
Route::post('/gif/submit','Status\GifController@store');
Route::post('/gif/update/{id}','Status\GifController@update');

//StatusVideo
Route::get('/video/create','Status\VideoController@create');
Route::post('/video/submit','Status\VideoController@store');
Route::post('/video/update/{id}','Status\VideoController@update');

//Slide
Route::get('/slide/index','SlideController@index');
Route::get('/slide/create','SlideController@create');
Route::post('/slide/submit','SlideController@store');
Route::get('/slide/edit/{id}', 'SlideController@edit');
Route::post('/slide/update/{id}', 'SlideController@update');
Route::get('/slide/delete/{id}', 'SlideController@destroy');

//Language
Route::get('/language/index','LanguageController@index');
Route::get('/language/create','LanguageController@create');
Route::post('/language/submit', 'LanguageController@store');
Route::get('/language/edit/{id}', 'LanguageController@edit');
Route::post('/language/update/{id}', 'LanguageController@update');
Route::get('/language/delete/{id}', 'LanguageController@destroy');

//Comments
Route::get('/comments/index','CommentsController@index');
//Report
Route::get('/report/index','ReportController@index');
//Support
Route::get('/support/index','SupportController@index');
Route::get('/support/delete/{id}', 'SupportController@destroy');
//Versions App
Route::get('/version/index','VersionController@index');
Route::get('/version/create','VersionController@create');
Route::post('/version/submit', 'VersionController@store');
Route::get('/version/edit/{id}', 'VersionController@edit');
Route::post('/version/update/{id}', 'VersionController@update');
Route::get('/version/delete/{id}', 'VersionController@destroy');

// customer
Route::get('/customer/index','CustomerController@index');
Route::get('/customer/create','CustomerController@create');
Route::post('/customer/submit', 'CustomerController@store');
Route::get('/customer/edit/{id}', 'CustomerController@edit');
Route::post('/customer/update/{id}', 'CustomerController@update');
Route::get('/customer/delete/{id}', 'CustomerController@destroy');

//withdraw
Route::get('/withdraw/index','WithdrawController@index');
Route::get('/withdraw/update-status/{id}', 'WithdrawController@updateStatus');
Route::get('/withdraw/delete/{id}', 'WithdrawController@destroy');

//password
Route::get('/change-password','Auth\ChangePasswordController@index');
Route::post('/password-update','Auth\ChangePasswordController@changePassword')->name('password.update');

// Settings Routes
Route::get('settings','SettingsController@index');
Route::post('settings/update','SettingsController@update');

