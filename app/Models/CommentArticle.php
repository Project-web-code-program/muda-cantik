<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentArticle extends Model
{
    protected $fillable = [
        'body','article_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function article()
    {
        return $this->belongsTo('App\Models\Article');
    }
}