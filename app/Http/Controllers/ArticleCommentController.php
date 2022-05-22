<?php

namespace App\Http\Controllers;

use App\Models\ArticleComment;
use Illuminate\Http\Request;

class ArticleCommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'author' => 'string|requred',
            'body' => 'required|max:255',
            'commentable_id' => 'required',
            'commentable_type' => 'required',

        ]);

        $comment = new ArticleComment([
            'author' => $validatedData['author'],
            'body' => $validatedData['body'],
            'commentable_id' => $validatedData['commentable_id'],
            'commentable_type' => $validatedData['commentable_type'],
        ]);
        $comment->save();

        return redirect()->back();
    }
}
