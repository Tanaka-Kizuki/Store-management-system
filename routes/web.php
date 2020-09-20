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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/','UserController@getAuth');
Route::post('/','UserController@postAuth');

Route::get('/home', 'UserController@index');
Route::get('/logout','UserController@logout');

Route::get('/communication','CommunicationController@index');
Route::post('/communication','CommunicationController@create');

Route::get('/communication/edit','CommunicationController@edit');
Route::post('/communication/edit','CommunicationController@update');

Route::get('/communication/del','CommunicationController@delete');
Route::post('/communication/del','CommunicationController@remove');

//++Attendance++//
Route::get('/time','TimeController@index');
//出退勤打刻
Route::post('/time/timein','TimeController@timein');
Route::post('/time/timeout','TimeController@timeout');
//休憩打刻
Route::post('/time/breakin','TimeController@breakin');
Route::post('/time/breakout','TimeController@breakout');
//勤怠実績
Route::get('/time/performance','TimeController@performance');
Route::post('/time/performance','TimeController@result');
