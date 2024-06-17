<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('submit', [AuthController::class, 'submit'])->name('submit');
Route::post('check', [AuthController::class, 'check'])->name('check');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('dashboard');

// Route::get('callback', function() {
//     return view('auth/callback');
// })->name('callback');

Route::middleware('auth')->group(function() {
    Route::get('create', [HomeController::class, 'create'])->name('create');
    Route::get('detail/{id}', [HomeController::class, 'detail'])->name('detail');
    Route::post('insert', [HomeController::class, 'insert'])->name('insert');
    Route::post('kasihModal', [HomeController::class, 'kasihModal'])->name('kasihModal');
});