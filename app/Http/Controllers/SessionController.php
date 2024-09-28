<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create () : View {
        return view('auth.login');
    }

    public function store () : {
        // TODO: update logic
        dd(request()->all());
    }
}
