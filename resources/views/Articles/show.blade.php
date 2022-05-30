@extends('dashboard')

@section('content')

<div class="text-center text-2xl mb-5">
    <h1>{{ $article->title }}</h1>
</div>
    <div class="mx-20 text-justify mb-10">
        <p>{{ $article->body}}</p>
    </div>

    @if ($article->comments)
    @foreach($article->comments as $comment)
        <div class="comment mx-20">
            <h4 class="font-semibold mb-1"> {{ $comment->author }} </h4>
                <p class="italic mb-2"> {{ $comment->body }} </p>
        </div>
    @endforeach

<p class="mx-20 my-3"> Komentāri: {{ $article->comments()->count() }}
    @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
        @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
        @endforeach
                </ul>
            </div>
    @endif

<form action="/comments/store" method="POST">
    @csrf
        <div class="form-input w-screen max-w-md">
            <input class="mx-20 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Author name" name="author">
                <div class="form-input">
                    <textarea class="mx-20 shadow appearance-none border rounded w-full py-2 px-3 mt-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="body" placeholder="Comment body"></textarea>
                </div>
        </div>
                <input type="hidden" value={{ $article->id }} name="commentable_id">
                <input type="hidden" value={{ get_class($article) }} name="commentable_type">
                    <div class="flex items-center justify-between">
                        <input class="bg-green-500 hover:bg-green-700 text-white font-bold mx-20 py-2 px-2 rounded focus:outline-none focus:shadow-outline" type="submit">
                    <div>
</form>

<a class="mx-20 bg-gray-500 hover:bg-gray-700 text-white font-bold mx-20 py-2 px-2 rounded focus:outline-none focus:shadow-outline" href="{{ route('articles.index') }}">
    Atpakaļ
    </a>
@endsection