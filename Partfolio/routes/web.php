<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// routes/web.php
Route::get('/', [PageController::class, 'main']);

// routes/web.php
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

