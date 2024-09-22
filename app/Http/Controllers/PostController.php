<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;


class PostController extends Controller
{   

    // Show all posts
    public function index(): View {
        $posts = Post::with('user')->latest()->get();
        return view('posts.index', ['posts' => $posts]);
    }

    // Create a new post
    public function create(): View {
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

    // Show a single post
    public function show($id): View {
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

    // Edit a post
    public function edit($id) : View {
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }

    //Update a post
    public function update($id) : RedirectResponse {
        // TODO: Authorize user
        request()->validate([
            'title' => ['required'],
            'subtitle' => ['required'],
            'text' => ['required']
        ]);

        $post = Post::findOrFail($id);
        $post->update([
            'title' => request('title'),
            'subtitle' => request('subtitle'),
            'text' => request('text'),
        ]);

        return redirect('/posts/' . $post->id);
    }

    // Delete a post
    public function destroy($id) : RedirectResponse {
        // TODO: Add authentication
        Post::findOrFail($id)->delete();
        return redirect('/posts');
    }
}
