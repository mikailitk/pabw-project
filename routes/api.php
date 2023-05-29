<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\TransactionController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function() {

    Route::post('/logout', [AuthController::class, 'logout']);

    // Mengecek Uang
    Route::get('/wallet', [AuthController::class, 'wallet']);

    // Transaction (Limit 5)
    Route::get('/pesanan', [TransactionController::class, 'getPesanan']);

    //
});

Route::get('/kursi', [ProductController::class, 'getKursi']);
Route::get('/kamar', [ProductController::class, 'getKamar']);

