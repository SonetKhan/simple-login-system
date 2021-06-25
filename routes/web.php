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

Route::get('/','HomeController@homeIndex')->middleware('loginCheck');

Route::get('/login','loginController@loginIndex');



Route::post('/onLogin','LoginController@onLogin');

Route::get('/logout','LoginController@onLogout');
