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
      {{ $advertisement->user->name }}

    @if ($advertisement->user->location != null)
      <p>Location: {{ $advertisement->user->location }}</p>
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
        @if (Auth::user()->admin)
          <hr>
          {{ Form::open(['route' => ['advertisements.block',  $advertisement->id], 'method' => 'post', 'class' => 'inline']) }}   
          @if ($advertisement->blocked == 1)
            <a class="btn btn-xs btn-danger">Blocked Advertisement</a>
          @else
            <a class="btn btn-xs btn-danger" >Block Advertisement</a>
          @endif
        @endif
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
    @include('advertisements.comments', ['comments' => $comments])
  @endif
</div>

@endsection
