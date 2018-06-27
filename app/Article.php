<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title'];

    public function comments()
    {
      return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }
}
