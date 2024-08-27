<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//TODO: Create dedicated post routing instead of using the home route
Route::get('/', [PostController::class, 'showPosts']);
Route::get('/post/{id}', [PostController::class, 'showOnePost']);
Route::get('/create', PostController::class, 'createPost');


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});




