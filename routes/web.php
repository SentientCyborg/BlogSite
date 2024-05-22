<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'showPosts']);
Route::get('/post/{id}', [PostController::class, 'showOnePost']);


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});



