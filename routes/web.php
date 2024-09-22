<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::resource('posts', PostController::class);

// Route::get('/posts', [PostController::class, 'showPosts']);
// Route::post('/posts', [PostController::class, 'store']);
// Route::get('/post/create', [PostController::class, 'newPost']);
// Route::get('/post/{id}', [PostController::class, 'showOnePost']);
// Route::patch('/post/{id}', [PostController::class, 'updatePost']);
// Route::delete('/post/{id}', [PostController::class, 'deletePost']);
// Route::get('/post/{id}/edit', [PostController::class, 'editPost']);

Route::view('/about', 'about');
Route::view('/contact', 'contact');





