<?php

use App\Http\Controllers\CheckController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth','admin')->group(function() {;
    Route::redirect('/','/admin/posts')->name('admin');
    Route::get('posts',[PostController::class, 'index'])->name('admin.posts');
    Route::get('posts/create',[PostController::class, 'create'])->name('admin.posts.create');
    Route::post('posts',[PostController::class, 'store'])->name('admin.posts.store');
    Route::get('posts/{post}',[PostController::class, 'show'])->name('admin.posts.show');
    Route::get('posts/{post}/edit',[PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('posts/{post}',[PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('posts/{post}',[PostController::class, 'delete'])->name('admin.posts.delete');
    Route::put('posts/{post}/like',[PostController::class, 'like'])->name('admin.posts.like');    
    Route::get('categories',[CategoryController::class, 'index'])->name('admin.categories');
    Route::get('categories/create',[CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('categories',[CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('categories/{category}',[CategoryController::class, 'show'])->name('admin.categories.show');
    Route::get('categories/{category}/edit',[CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('categories/{category}',[CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('categories/{category}',[CategoryController::class, 'delete'])->name('admin.categories.delete');
    Route::get('check',[CheckController::class, 'index'])->name('admin.index');

});