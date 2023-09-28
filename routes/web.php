<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Stripe


//shop pages 
Route::get('/shop','App\Http\Controllers\ShopController@index')->name('shop.index');
Route::get('/shop/headwear','App\Http\Controllers\ShopController@headwear')->name('shop.headwear');
Route::get('/shop/sets','App\Http\Controllers\ShopController@sets')->name('shop.sets');
Route::get('/shop/scarfs','App\Http\Controllers\ShopController@scarfs')->name('shop.scarfs');
Route::get('/shop/bandc','App\Http\Controllers\ShopController@bandc')->name('shop.bandc');
Route::get('/shop/bags','App\Http\Controllers\ShopController@bags')->name('shop.bags');