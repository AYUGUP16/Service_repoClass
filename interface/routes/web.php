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
// Route::get('orders', [OrderController::class, 'index']);
// Route::get('orders/{id}', [OrderController::class, 'show']);
// Route::post('orders', [OrderController::class, 'store']);
// Route::put('orders/{id}', [OrderController::class, 'update']);
// Route::delete('orders/{id}', [OrderController::class, 'delete']);

