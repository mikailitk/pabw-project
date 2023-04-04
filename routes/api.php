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

    /**
     * Authentication API
     */

    Route::get('/check', function (Request $request) {
        return response()->json([
            'message' => "success",
        ]);
    });
    
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:api');

    /**
     * 
     */
});

Route::get('/user', function (Request $request) {
    $data = DB::table('user')->get();

    return response()->json([
        'data' => $data,
    ]);
});



