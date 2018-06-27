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
      <div class="comment">
        <h4>
          {{ $comment->user->name }}

          @if ($comment->parent_id)
            <small>In Reply To {{ $comment->parent->user->name }}</small>
          @endif
        </h4>

        <p>{{ $comment->body }}</p>

        @foreach ($comment->replies as $reply)
          <div class="comment">
            <h4>
              {{ $reply->user->name }}

              @if ($reply->parent_id)
                <small>In Reply To {{ $reply->parent->user->name }}</small>
              @endif
            </h4>

            <p>{{ $reply->body }}</p>

            @foreach ($reply->replies as $reply2)
              <div class="comment">
                <h4>
                  {{ $reply2->user->name }}

                  @if ($reply2->parent_id)
                    <small>In Reply To {{ $reply2->parent->user->name }}</small>
                  @endif
                </h4>

                <p>{{ $reply2->body }}</p>


              </div>
            @endforeach

          </div>
        @endforeach
      </div>
    @endforeach
  </body>
</html>
