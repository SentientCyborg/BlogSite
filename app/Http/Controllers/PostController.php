<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;


class PostController extends Controller
{   

    public function showPosts(): View {
        return view('posts.index', ['posts' => Post::all()]);
    }

    public function showOnePost($id): View {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

    public function newPost(): View {
        return View('posts.create');
    }

    // public function store() : RedirectResponse {
    //     ~ Code goes here. ~
    //     return redirect('/posts');
    // }
    
    //Test function
    public function store() {
        // dd('Spam and Eggs');
        dd(request()->all()); //TODO: This is not working. The request is only getting the CSRF token.
    }
}
