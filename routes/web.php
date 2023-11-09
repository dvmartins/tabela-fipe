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

Route::get('/cars', [\App\Http\Controllers\FipeController::class, 'index']);
Route::get('/api/modelos/{marca}', [\App\Http\Controllers\FipeController::class, 'getModelos']);
Route::get('/api/anos/{marca}/{modelo}', [\App\Http\Controllers\FipeController::class, 'getAnos']);
Route::get('/cars/details', [\App\Http\Controllers\FipeController::class, 'getCarDetails']);

