<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
      body {
        font-family: 'Avenir'
      }

      .comment:not(:first-child) {
        margin: 20px 0 40px 60px;
        border-left: 1px solid #ccc;
        padding-left: 20px;
      }
    </style>
  </head>
  <body>
    <h1>{{ $article->title }}</h1>

    @foreach ($comments as $comment)
      @include('comments.partials._comment')
    @endforeach
  </body>
</html>
