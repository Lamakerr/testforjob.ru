<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Middleware\LogMiddleware;
use Illuminate\Support\Facades\Auth;


Route::name('home')->get('/', function(){
    if(Auth::check()){
        return redirect()->route('user');
    }else{
        return view('home.index');
    }
});
Route::get('register',[RegisterController::class, 'index'])->name('register');
Route::post('register',[RegisterController::class, 'store'])->name('register.store');
Route::get('login',[LoginController::class, 'index'])->name('login');
Route::post('login',[LoginController::class, 'store'])->name('login.store');
Route::get('blog',[BlogController::class, 'index'])->name('blog');
Route::get('blog/{post}',[BlogController::class, 'show'])->name('blog.show');
Route::post('blog/{post/like}',[BlogController::class, 'like'])->name('blog.like');
Route::get('/test', TestController::class)->middleware(LogMiddleware::class);
