show posts
<br>
{{ $post->id }}
<br>
{{ $post->title}}

<a href="{{ route('posts.index', ['post' => $post->id]) }}">
    Back
    </a>