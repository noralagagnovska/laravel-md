@extends('dashboard')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-screen max-w-md">
    <div class="ml-20">
        <form action="/articles/create" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

            <div class="mb-4">
                {{ __('atributes.title')}}: <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="title"><br>
            </div>
            <div class="mb-4">
                {{ __('atributes.body')}}: <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="body"><br>
            </div>
            <div class="flex items-center justify-between">
                <input class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded focus:outline-none focus:shadow-outline" type="submit">
            <div>
        </form>
    </div>
</div>
@endsection