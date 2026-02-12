<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/auth/register', [\App\Http\Controllers\AuthController::class, 'view'])->name('register');
Route::post('/auth/register', [\App\Http\Controllers\AuthController::class, 'store'])->name('register.store');
Route::get('/auth/login', [\App\Http\Controllers\AuthController::class, 'loginView'])->name('login');
Route::post('/auth/login', [\App\Http\Controllers\AuthController::class, 'loginStore'])->name('login.store');