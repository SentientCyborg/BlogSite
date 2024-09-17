<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;


class PostController extends Controller
{   

    // Show all posts
    public function showPosts(): View {
        $posts = Post::with('user')->latest()->get();
        return view('posts.index', ['posts' => $posts]);
    }

    // Show a single post
    public function showOnePost($id): View {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

    // Create a new post
    public function newPost(): View {
        return View('posts.create');
    }

    // Save a new post to the database
    public function store() : RedirectResponse {
        request()->validate([
            'title' => ['required'],
            'subtitle' => ['required'],
            'text' => ['required']
        ]);

        Post::create([
            'title' => request('title'),
            'subtitle' => request('subtitle'),
            'text' => request('text'),
            'user_id' => 1 //TODO: Update logic to use actual user id
        ]);

        return redirect('/posts');
    }

    // Edit a post
    public function editPost($id) : View {
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }

    // Delete a post
    public function deletePost($id) : RedirectResponse {
        // TODO: Add authentication
        Post::findOrFail($id)->delete();
        return redirect('/posts');
    }
}
