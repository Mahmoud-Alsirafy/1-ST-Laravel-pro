<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\productController;

Route::resource('admin', adminController::class);
Route::resource('product', productController::class);
