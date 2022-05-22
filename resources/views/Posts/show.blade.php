@extends('dashboard')

@section('content')


<h1>{{ $post->title }}</h1>
<br>{{ $post->body}}</p>

@foreach($post->comments as $comment)
    <div class="comment">
        <h4> {{$comment->author }} </h4>
        <p> {{$comment->body }} </p>
    </div>

@endforeach 

<form action="/comment/store" method="POST">
    <div class="form-input">
        <input type='text' placeholder="Author name" name='author'>
    </div>
    <div class="form-input">
        <textarea name="body" placeholder="Comment body"></textarea>
    </div>
        <input type="hidden" value={{ $post->id}} name="commentable_id">
        <input type="hidden" value={{ get_class($post) }} name="commentable_type">
    <input type="submit">

</form>

<a href="{{ route('posts.index') }}">
    Back
    </a>

@endsection