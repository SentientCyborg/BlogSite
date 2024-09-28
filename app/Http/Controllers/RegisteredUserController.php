<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function create() : View {
        return view('auth.register');
    } 

    public function store(): never {
        // TODO: update logic
        dd(request()->all()); 
    }
}