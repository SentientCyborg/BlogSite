<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;
use PhpParser\Node\Expr\FuncCall;

class RegisteredUserController extends Controller
{
    public function create() : View {
        return view('auth.register');
    } 

    public function store(): RedirectResponse {

        $attributes = request()->validate([
            'first_name' => ['required','string', 'max:254'],
            'last_name'=> ['required','string', 'max:254'],
            'email'=> ['required','email', 'max:254'],
            'password'=> ['required', Password::min(size: 12), 'max: 254', 'confirmed'],
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return Redirect::route('posts.index');
    }

}