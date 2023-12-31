<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index')-> with ('posts', $posts);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post;

        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->save();

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->save();

        return redirect()->route('posts.show', ['post' => $post]);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
