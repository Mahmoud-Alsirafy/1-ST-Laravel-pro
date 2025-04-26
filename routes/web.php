<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;

Route::get('/', function () {
    return view('dashbord.login');
})->name('login.index');

// POST login request
Route::post('/login', [loginController::class, 'store'])->name('login.store');

// Logout request
Route::get('/logout', [loginController::class, 'logout'])->name('logout');

// Protected routes (بعد تسجيل الدخول)
Route::middleware(['checklogin'])->group(function () {
    Route::get('/dash', function () {
        return view('dashbord.product.add');
    })->name('dash');
});