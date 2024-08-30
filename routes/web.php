<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/post', [PostController::class, 'showPosts']);
Route::get('/post/{id}', [PostController::class, 'showOnePost']);
Route::get('/post/create', [PostController::class, 'createPost']);


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});




