<?php

namespace App\Http\Controllers;

use App\Models\Article;
use GuzzleHttp\Psr7\Response;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(): View
    {
        return view('articles.index', [
            'articles' => Article::get(),
        ]);
    }

    public function create(): View
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        $article = new Article([
            'title' => $requestData['title'],
            'body' => $requestData['body'],
        ]);

        $article->save();

        return redirect()->route('articles.show', ['article' => $article]);
    }

    public function show(Article $article): View
    {
        return view('articles.show', [
            'article' => $article,
        ]);
    }

    public function edit($article)
    {
        $article = Article::findOrFail($article);

        return view('articles.edit', [
            'article' => $article,
        ]);
    }

    public function update(Request $request, Article $article)
    {
        $requestData = $request->all();

        $article->title = $requestData['title'];
        $article->body = $requestData['body'];
        $article->save();

        return redirect()->route('articles.show', ['article' => $article]);
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }
}

