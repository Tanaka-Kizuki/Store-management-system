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

Route::get('/home', 'UserController@index');

Route::get('/','UserController@getAuth');
Route::post('/','UserController@postAuth');
Route::get('/logout','UserController@logout');

Route::get('/communication','CommunicationController@index');
Route::post('/communication','CommunicationController@create');

Route::get('/communication/edit','CommunicationController@edit');
Route::post('/communication/edit','CommunicationController@update');

Route::get('/communication/del','CommunicationController@delete');
Route::post('/communication/del','CommunicationController@remove');