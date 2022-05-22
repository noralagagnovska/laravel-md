show articles
<br>
{{ $article->id }}
<br>
{{ $article->title}}

<a href="{{ route('articles.index', ['article' => $article->id]) }}">
    Back
    </a>