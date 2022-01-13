
<?php

use App\Http\Controllers\Guest\LoginController;
use App\Http\Controllers\Guest\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware("guest")->group(function() {
    Route::get('register',[RegisterController::class, 'index'])->name('register');
    Route::post('register',[RegisterController::class, 'store'])->name('register.store');
    Route::get('login',[LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('login',[LoginController::class, 'store'])->name('login.store')->middleware('guest');
});