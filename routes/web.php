<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::resource('posts', App\Http\Controllers\Posts\PostController::class);
Route::post('comments', [App\Http\Controllers\Posts\CommentController::class, 'store'])->name('comments.store');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
