<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use GuzzleHttp\Psr7\Response;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): View
    {
        return view('posts.index', [
            'posts' => Post::get(),
        ]);
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(StorePostRequest $storePostRequest)
    {

        $validatedData = $storePostRequest->validated();
        dd($validatedData);

        $post = new Post([
            'title' => $validatedData['title'],
            'body' => $validatedData['body'],
        ]);

        $post->save();

        return redirect()->route('posts.show', ['post' => $post]);
    }

    public function show(Post $post): View
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function edit($post)
    {
        $post = Post::findOrFail($post);

        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $requestData = $request->all();

        $post->title = $requestData['title'];
        $post->body = $requestData['body'];
        $post->save();

        return redirect()->route('posts.show', ['post' => $post]);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}

