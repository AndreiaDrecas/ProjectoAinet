<ul>
    @foreach($comments as $comment)

    <li>
        <span>{{$comment->user->name}}</span> {{$comment->comment}}
        @if(count($comment->replies))
            @include('advertisements.comments', ['comments' => $comment->replies])
        @endif
    </li>
    @endforeach

</ul>