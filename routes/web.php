<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\AdminControlController;
use App\Http\Controllers\KursiController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PemesananController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'user-access:0'])->group(function(){
    Route::get('/user', [HomeController::class, 'userIndex'])->name('home.user');
});

Route::middleware(['auth', 'user-access:1'])->group(function(){
    Route::get('/mitra', [HomeController::class, 'mitraIndex'])->name('home.mitra');
});

Route::middleware(['auth', 'user-access:2'])->group(function(){
    Route::get('/admin', [HomeController::class, 'adminIndex'])->name('home.admin');

    // admin control
    Route::get('/admin-control', [AdminControlController::class, 'user_mitra'])->name('adminc.um');
    Route::get('/product-control', [AdminControlController::class, 'hotel_pesawat'])->name('adminc.hp');

    // wallet control
    Route::get('/users/{id}/wallet', [UsersController::class, 'getwallet'])->name('users.wallet');
    Route::put('/users/{id}/', [UsersController::class, 'addwallet'])->name('users.addwallet');

    // users contrl
    Route::resource('users' , UsersController::class);
    
    // mitra control
    Route::resource('mitras' , MitraController::class);

    // kursi control
    Route::resource('kursis' , KursiController::class);

    // kamar control
    Route::resource('kamars' , KamarController::class);

    // pemesanan control
    Route::resource('pemesanans' , PemesananController::class);


});
