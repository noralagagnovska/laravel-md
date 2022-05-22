@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/articles/create" method="post">
    @csrf

        {{ __('atributes.title')}}: <input type="text" name="title"><br>
        {{ __('atributes.body')}}: <input type="text" name="body"><br>
        <input type="submit">
        </form>