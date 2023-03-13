<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MitraController;

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

    // users control
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UsersController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}/update', [UsersController::class, 'update'])->name('users.update');
    Route::get('/users/{id}/show', [UsersController::class, 'show'])->name('users.show');
    Route::delete('/users/{id}/destroy', [UsersController::class, 'destroy'])->name('users.destroy');

    Route::get('/users/{id}/wallet', [UsersController::class, 'getwallet'])->name('users.wallet');
    Route::put('/users/{id}', [UsersController::class, 'addwallet'])->name('users.addwallet');
    

    // mitra control
    Route::resource('mitras' , MitraController::class);
});
