@extends('dashboard')

@section('content')

<div class="w-screen max-w-md">
    <div class="ml-20">
        <form action="/articles/edit/{{$article->id}}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
    
        Virsraksts: <input class="shadow appearance-none border rounded w-full py-3 px-3 mb-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="title" value="{{ $article->title }}"><br>
        Saturs: <input class="shadow appearance-none border rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="body" value="{{ $article->body }}"><br>
            <div class="flex items-center justify-between">
                <input class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 my-3 rounded focus:outline-none focus:shadow-outline" type="submit">
            <div>
        </form>
    </div>
</div>
@endsection