<h4>{{ $article->comments()->count() }} Comments</h4>

<ul>
    @foreach ($article->comments as $comment)
        <li>{{$comment->message}}</li>
    @endforeach
</ul>