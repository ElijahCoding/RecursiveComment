<div class="comment">
    <h4>
      {{ $comment->user->name }}

      @if ($comment->parent_id)
        <small>In Reply To {{ $comment->parent->user->name }}</small>
      @endif
    </h4>

    <p>{{ $comment->body }}</p>

    @foreach ($comment->replies as $reply)
      @include('comments.partials._comment', ['comment' => $reply])
    @endforeach
</div>
