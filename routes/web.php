<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/hello-world', [PageController::class, 'index']);


Route::group(['middleware' => ['isAdmin']], function () {
    Route::controller(PostController::class)->group(function () {
        Route::prefix('posts')->group(function () {
        Route::get('/', 'index')->name('posts.index');
        Route::get('/create', 'create')->name('posts.create');
        Route::post('/create', 'store');
        Route::get('/show/{post}', 'show')->name('posts.show');
        Route::get('/edit/{post}', 'edit')->name('posts.edit');
        Route::post('/edit/{post}', 'update');
        Route::get('/delete/{post}', 'destroy')->name('posts.delete');
        });
    });
});

Route::controller(ArticleController::class)->group(function () {
    Route::prefix('articles')->group(function () {
    Route::get('/', 'index')->name('articles.index');
    Route::get('/create', 'create')->name('articles.create');
    Route::post('/create', 'store');
    Route::get('/show/{article}', 'show')->name('articles.show');
    Route::get('/edit/{article}', 'edit')->name('articles.edit');
    Route::post('/edit/{article}', 'update');
    Route::get('/delete/{article}', 'destroy')->name('articles.delete');
    });
});

Route::get('/dashboard', [PostController:: class, 'index'])
->middleware(['auth'])
->name('dashboard');

Route::controller(CommentController::class)->group(function () {
    Route::prefix('comments')->group(function () {
        Route::get('/', 'index');
        Route::post('/store', 'store')->name('comments.store');
    });
});

require __DIR__.'/auth.php';
