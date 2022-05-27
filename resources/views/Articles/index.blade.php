@extends('dashboard')

@section('content')
<div class="mx-12">
    <div class="create-button-container">
<a class="bg-green-500 text-white p-2 rounded-md" href="{{ route('articles.create') }}">
    Create
</a>
    </div>

<table class="mt-10">
    <thead class="bg-white">
        <th class="p-2">ID</th>
        <th class="p-2">Title</th>
        <th class="p-2">Body</th>
        <th class="p-2">Author name</th>
        <th class="p-2">Actions</th>
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr>
            <td class="border-2 bordr solid border-grey-400 p-1">
                <div class="pl-2">
                    {{ $article->id }}
                </div>
            </td>
            <td class="border-2 bordr solid border-grey-400 p-1">
                {{ $article->title }}
            </td>
            <td class="border-2 bordr solid border-grey-400 p-1">
                {{ $article->body }}
            </td>
            <td class="border-2 bordr solid border-grey-400 p-1">
                {{ $article->author_name }}
            </td>
            <td class="border-2 bordr solid border-grey-400 p-1">
                <div class="flex">
                    <a class="bg-blue-500 text-white p-2 m-1 rounded-md" href="{{ route('articles.show', ['article' => $article->id]) }}">
                    Show
                    </a>
                    <a class="bg-orange-500 text-white p-2 m-1 rounded-md" href="{{ route('articles.edit', ['article' => $article->id]) }}">
                    Edit
                    </a>
                    <a class="bg-red-500 text-white p-2 m-1 rounded-md" href="{{ route('articles.delete', ['article' => $article->id]) }}">
                    Delete
                    </a>
                </div>    
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
</div>