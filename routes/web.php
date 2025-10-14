<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Posts\PostController;
use App\Http\Controllers\Posts\CommentController;

Route::get('notifications', [NotificationController::class, 'notifications'])->name('notifications');

Route::resource('posts', PostController::class);
Route::post('comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
