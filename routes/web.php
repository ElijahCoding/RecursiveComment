<?php

use App\Article;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    $article = Article::find(1);

    $comments = $article->comments()->with([
      'user',
      'replies.user',
      'replies.parent.user',
      'replies.replies.user',
      'replies.replies.parent.user',
      'replies.replies.replies.user',
      'replies.replies.replies.parent.user',
      'replies.replies.replies.replies.user',
      'replies.replies.replies.replies.parent.user'
    ])->paginate(20);

    return view('comments.index', compact('article', 'comments'));
});
