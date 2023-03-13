<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;

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
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
    Route::get('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
    Route::put('/users/{id}', [UsersController::class, 'addwallet'])->name('users.addwallet');
    Route::get('/users/{id}/show', [UsersController::class, 'show'])->name('users.show');
    Route::get('/users/{id}/wallet', [UsersController::class, 'getwallet'])->name('users.wallet');
});
