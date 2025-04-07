<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;

Route::get('/', function () {
    return view('dashbord/login');
});

// Route::get('/', function () {
//     return view('dashbord.register');
// });


Route::resource('register', registerController::class);
Route::resource('login', loginController::class);
