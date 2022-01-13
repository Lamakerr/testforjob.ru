<?php
// Маршруты пользователя

use App\Http\Controllers\User\AuthorController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\User\CategoryController;
use App\Http\Controllers\User\PostController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserAvatarController;
use Illuminate\Support\Facades\Route;


Route::prefix('user')->middleware('auth','active')->group(function()  {
    Route::get('',[UserController::class, 'index'])->name('user');
    Route::get('logout',[LogOutController::class, 'logout'])->name('user.logout');
    Route::get('posts',[PostController::class, 'index'])->name('user.posts');
    Route::get('posts/create',[PostController::class, 'create'])->name('user.posts.create');
    Route::post('posts',[PostController::class, 'store'])->name('user.posts.store');
    Route::get('posts/{post}',[PostController::class, 'show'])->name('user.posts.show');
    Route::get('posts/{post}/edit',[PostController::class, 'edit'])->name('user.posts.edit');
    Route::put('posts/{post}',[PostController::class, 'update'])->name('user.posts.update');
    Route::get('posts/{post}/delete',[PostController::class, 'delete'])->name('user.posts.delete');
    Route::put('posts/{post}/like',[PostController::class, 'like'])->name('user.posts.like'); 
    Route::get('categories',[CategoryController::class, 'index'])->name('user.categories');
    Route::get('categories/create',[CategoryController::class, 'create'])->name('user.categories.create');
    Route::post('categories',[CategoryController::class, 'store'])->name('user.categories.store');
    Route::get('categories/{category}',[CategoryController::class, 'show'])->name('user.categories.show');
    Route::get('categories/{category}/edit',[CategoryController::class, 'edit'])->name('user.categories.edit');
    Route::put('categories/{category}',[CategoryController::class, 'update'])->name('user.categories.update');
    Route::delete('categories/{category}',[CategoryController::class, 'delete'])->name('user.categories.delete');
    Route::get('avatars/index', [UserAvatarController::class, 'index'])->name('user.avatars.index'); 
    Route::post('avatars/store', [UserAvatarController::class, 'store'])->name('user.avatars.store');
    Route::get('authors',[AuthorController::class, 'index'])->name('user.authors');
    Route::get('authors/{author}',[AuthorController::class, 'show'])->name('user.authors.show'); 

});