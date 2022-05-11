<form action="/posts/edit/{{$post->id}}" method="post">
    @csrf
    
        Title: <input type="text" name="title" value="{{ $post->title }}"><br>
        Body: <input type="text" name="body" value="{{ $post->body }}"><br>
        <input type="submit">
        </form>