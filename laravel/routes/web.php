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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/data_binance', 'HomeController@data_binance');
Route::get('/data_cobinhood', 'HomeController@data_cobinhood');

Route::get('/market', 'MarketController@index')->name('market');
Route::get('/data_market', 'MarketController@data_market');

Route::get('/coin', 'CoinController@index')->name('coin');

Route::get('/signal', 'SignalController@index')->name('signal');

Route::get('/alarm', 'AlarmController@index')->name('alarm');
