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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/public', 'AddressController@publicSection');
Route::get('/workshop', 'AddressController@privateSection');
Route::get('pagenotfound', ['as' => 'notfound', 'uses' => 'HomeController@pagenotfound']);

Route::resource('posts', 'PostController');