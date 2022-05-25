<form action="/articles/edit/{{$article->id}}" method="post">
    @csrf
    
        Title: <input type="text" name="title" value="{{ $article->title }}"><br>
        Body: <input type="text" name="body" value="{{ $article->body }}"><br>
        <input type="submit">
        </form>