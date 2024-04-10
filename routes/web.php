<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

/**
 * Front End Routes
 */
Route::get('/', [FrontController::class, 'profile'])->name('profile');
Route::get('/background', [FrontController::class, 'background'])->name('background');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
// Route::post('/contact', [FrontController::class, 'sendMessage'])->name('send-message');
Route::get('/blogs', [FrontController::class, 'listBlogs'])->name('blogs.list');
Route::get('/blog/{id}', [FrontController::class, 'readBlog'])->name('blog.view');
