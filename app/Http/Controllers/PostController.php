<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Post;

class PostController extends Controller
{   

    public function showPosts(): View {
        return view('index', ['posts' => Post::all()]);
    }

    public function showOnePost($id): View {
        $post = Post::find($id);
        return view('post', ['post' => $post]);
    }
    
}
