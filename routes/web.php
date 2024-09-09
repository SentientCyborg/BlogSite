<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function() {
    return view('home');
});

Route::get('/posts', [PostController::class, 'showPosts']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/post/create', [PostController::class, 'newPost']);
Route::get('/post/{id}', [PostController::class, 'showOnePost']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});




