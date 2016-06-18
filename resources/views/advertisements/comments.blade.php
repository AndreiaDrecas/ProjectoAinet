<ul>
    @foreach($comments as $comment)
    <li>
        <span>{{$comment->user->name}}</span> {{$comment->comment}}
         <span>
            <a class="" role="button" data-toggle="collapse" href="#replyCommentT{{$comment->id}}" aria-expanded="false" aria-controls="collapseExample">reply</a>
                </span>
              <div class="collapse" id="replyCommentT{{$comment->id}}">
                {!! Form::open(['url' => 'comments']) !!}
                {!! Form::hidden('advertisement_id',$advertisement->id) !!}
                {!! Form::hidden('parent_id',$comment->id) !!}
                  <div class="form-group">
                    <textarea name="comment" class="form-control" rows="1"></textarea>
                  </div>
                  <button type="submit" class="btn btn-default">Send</button>
                {!! Form::close() !!}
              </div>
        @if(count($comment->replies))
            @include('advertisements.comments', ['comments' => $comment->replies])
        @endif
    </li>
    @endforeach
</ul>