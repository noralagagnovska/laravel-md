<table>
    <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Body</th>
        <th>Author name</th>
        <th>Actions</th>
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td>{{ $article->body }}</td>
            <td>{{ $article->author_name }}</td>
            <td>
                <a href="{{ route('articles.create') }}">
                Create
                </a>
                <a href="{{ route('articles.show', ['article' => $article->id]) }}">
                Show
                </a>
                <a href="{{ route('articles.edit', ['article' => $article->id]) }}">
                Edit
                </a>
                <a href="{{ route('articles.delete', ['article' => $article->id]) }}">
                Delete
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>