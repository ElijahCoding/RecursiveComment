<?php

use App\Article;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
  return response(1);
});
