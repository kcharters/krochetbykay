<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShopController;
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


//Admin 
Route::post('/', [AdminController::class, 'create']);
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::put('/', [AdminController::class, 'edit']);
Route::delete('/', [AdminController::class, 'delete']);
