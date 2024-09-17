<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function() {
    return view('home');
});

Route::get('/posts', [PostController::class, 'showPosts']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/post/create', [PostController::class, 'newPost']);
Route::patch('/job/{id}', [PostController::class, 'updatePost']);
Route::delete('job/{id}', [PostController::class, 'deletePost']);
Route::get('/post/{id}', [PostController::class, 'showOnePost']);
Route::get('/post/{id}/edit', [PostController::class, 'editPost']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});




