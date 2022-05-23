
<h1>{{ $article->title }}</h1>
<p>{{ $article->body}}</p>

@if ($article->comments)
@foreach($article->comments as $comment)
<div class="comment">
<h4> {{ $comment->author }} </h4>
<p> {{ $comment->body }} </p>
</div>
@endforeach

<p> Comment count: {{ $article->comments()->count() }}
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
    <div class="form-input">
        <input type="text" placeholder="Author name" name="author">
    </div>
    <div class="form-input">
        <textarea name="body" placeholder="Comment body"></textarea>
    </div>
    <input type="hidden" value={{ $article->id }} name="commentable_id">
    <input type="hidden" value={{ get_class($article) }} name="commentable_type">
    <input type="submit">
</form>

<a href="{{ route('articles.index') }}">
    Back
    </a>