<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/photos', [PhotoController::class, 'index'])->name('photo.index')->middleware('auth');
Route::post('/photos', [PhotoController::class, 'store'])->name('photo.store')->middleware('auth');

Route::get('/register', [AuthController::class, 'view'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'store'])->name('register.store')->middleware('guest');

Route::get('/login', [AuthController::class, 'loginView'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'loginStore'])->name('login.store')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');