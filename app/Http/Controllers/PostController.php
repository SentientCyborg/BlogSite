<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Post;

class PostController extends Controller
{   

    // public function showPosts(): View {
    //     return view('index', ['posts' => Post::all()]);
    // }

<<<<<<< HEAD
    // public function showOnePost($id): View {
    //     $post = Post::find($id);
    //     return view('post', ['post' => $post]);
    // }
    
=======
    }

    public function showPosts(): View {
        return view('posts.index', ['posts' => $this->posts['testPosts']]);
    }

    public function showOnePost($id): View {
        $post = Arr::first($this->posts['testPosts'], fn($post) => $post['id'] == $id);
        return view('posts.show', ['post' => $post]);
    }

    //TODO: Add create post function
>>>>>>> ddf235cba6a7dacad38ef3b238d7a19488222eeb
}
