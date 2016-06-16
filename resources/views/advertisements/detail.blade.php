    @extends('pages.layouts.backend')

@section('title', $advertisement->name)

@section('content')

<div class="container">
    @if (count($advertisement))
    <h1> {{ $advertisement->name }} </h1>
    @if($advertisement->description != null)
    <article>
      <p>Description:
         {{ $advertisement->description }}</p>
     </article>
     @endif

     {{-- $advertisement->created_at --}}
     <p>Price: {{ $advertisement->price_cents }}</p>

     {{ $advertisement->available_on }}

     <p><h4>Details of the seller</h4></p>
     {{ $advertisement->owner_id }}


     {{ $user->name }}



     @if ($user->location != null)
     <p>Location: {{ $user->location }}</p>
     @endif


     @if ($advertisement->owner_id == Auth::guest())
     <hr>
     <div>
      <a class="btn btn-xs btn-primary" href="{{route('advertisements.edit', ['id' => $advertisement->id])}}">Edit Advertisement</a>
  </div>   
  @else
  @if ($advertisement->owner_id == Auth::user()->id)
  <hr>
  <div>
    <a class="btn btn-xs btn-primary" href="{{route('advertisements.edit', ['id' => $advertisement->id])}}">Edit Advertisement</a>
</div> 
@endif
@endif


@else
<h2>No advertisement found</h2>

@endif

{!! Form::open(['url' => 'comments']) !!}
{!! Form::hidden('advertisement_id',$advertisement->id) !!}
{!! Form::hidden('parent_id',1) !!}
<br></br>
<div class="form-group">
    <h3>Comments:</h3>
    {!! Form::textarea('comment', '') !!}
</div>

<div class="btn btn-xs ">
    {!! Form::submit('Add Comment',['class' => 'btn  btn-primary form-control'] ) !!}
</div>

{!! Form::close() !!}

@if (count($comments))
   
  @foreach ($comments as $comment)
  <div class="row">
  <div class="col-sm-1">
    <div class="thumbnail">
      <img class="img-responsive user-photo" width="100%" height="auto%" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
    </div><!-- /thumbnail -->
  </div><!-- /col-sm-1 -->
  <div class="col-sm-5">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong> {{ $comment->name }}</strong> <span class="text-muted"> {{ $comment->created_at }}</span>
      </div>
      <div class="panel-body">
        {{ $comment->comment }}
      </div><!-- /panel-body -->
    </div><!-- /panel panel-default -->
  </div><!-- /col-sm-5 -->
  </div>
    
  @endforeach
@endif
</div>




@endsection
