<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//TODO: Create dedicated post routing instead of using the home route
Route::get('/', [PostController::class, 'showPosts']);
Route::get('/post/{id}', [PostController::class, 'showOnePost']);
//TODO: Add route to create post

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});



