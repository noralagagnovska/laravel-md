<?php

namespace App\Models;

use Database\Factories\ArticleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'author_name',
    ];

    protected static function newFactory(): ArticleFactory
{
    return new ArticleFactory();
}

    public function comments(): MorphMany
        {
            return $this->morphMany(Comment::class, 'commentable');
        }
    };