<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

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
    // Mengecek Uang
    Route::get('/wallet', [AuthController::class, 'wallet']);

    // Newest Transaction (Limit 5)

    // Latest Transaction (Limit 5)

    // Cancel Transaction (Limit 5)

    //
});


