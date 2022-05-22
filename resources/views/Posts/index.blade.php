@extends('dashboard')

@section('content')
<div class="mx-12">
    <div class="create-button-container">
<a class="bg-green-500 text-white p-2 rounded-md" href="{{ route('posts.create') }}">
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
    @foreach($posts as $post)
        <tr class="border-2 border-solid border-grey-400">
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td>{{ $post->author_name }}</td>
            <td>
                <button class="bg-blue-500 p-2 m-1" href="{{ route('posts.show', ['post' => $post->id]) }}">
                Show
                </button>
                <button class="bg-orange-500 p-2 m-1" href="{{ route('posts.edit', ['post' => $post->id]) }}">
                Edit
                </button>
                <button class="bg-red-500 p-2 m-1" href="{{ route('posts.delete', ['post' => $post->id]) }}">
                Delete
                </button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
</div>