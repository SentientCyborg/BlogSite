<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Post;

class PostController extends Controller
{   

    public function showPosts(): View {
        return view('posts.index', ['posts' => Post::all()]);
    }

    public function showOnePost($id): View {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

    public function createPost(): View {
        return View('posts.create');
    }
    
}
