<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paginate;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Externalapi;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
// Route::get('/dashboard', [paginate::class, 'index'])->name('dashboard');
// Route::get('/balance', [paginate::class, 'getData'])->name('balance');
Route::get('/dashboard', [paginate::class, 'games'])->name('dashboard');




