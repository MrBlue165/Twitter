<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/user', [UserController::class, 'index']);
Route::post('/post', [PostController::class, 'store'])->name('post.store');
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
