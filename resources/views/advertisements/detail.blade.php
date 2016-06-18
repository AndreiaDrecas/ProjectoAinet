@extends('pages.layouts.backend')

@section('title', $advertisement->name)

@section('content')

<div class="container">
  @if (count($advertisement))
    <h1> {{ $advertisement->name }} </h1>
    <br>
    @if($advertisement->description != null)
      <article>
        <p>Description: {{ $advertisement->description }}</p>
      </article>
    @endif

    {{-- $advertisement->created_at --}}
    <p>Price: {{ $advertisement->price_cents }}</p>

    <p>Product created at: {{ $advertisement->available_on }}</p>
    <hr>
    <p><h4>Details of the seller</h4></p>

    <p>Name: {{ $advertisement->user->name }}</p>
  
    @if ($advertisement->user->location != null)
      <p>Location: {{ $advertisement->user->location }}</p>
    @endif

    @if ($advertisement->owner_id == Auth::guest())
      <hr>
      <div>
        <a class="btn btn-xs btn-primary" href="{{route('advertisements.edit', ['id' => $advertisement->id])}}">Edit Advertisement</a>
      </div>   
    @else
      @if ($advertisement->owner_id == Auth::user()->id || Auth::user()->isAdmin())
      <a class="btn btn-xs btn-primary" href="{{route('bids.bidAdvertisement', ['advertisement_id' => $advertisement->id])}}">Bid</a>
        <hr>
        <div>
          <a class="btn btn-xs btn-primary" href="{{route('advertisements.edit', ['id' => $advertisement->id])}}">Edit Advertisement</a>
        </div> 

      @endif
      @if (Auth::user()->isAdmin())
        <hr>
        {{ Form::open(['route' => ['advertisements.block',  $advertisement->id], 'method' => 'post', 'class' => 'inline']) }}   
        @if ($advertisement->blocked == 0)
          <button class="btn btn-xs btn-danger" type="submit">Block Advertisement</button>
        @else
          <a class="btn btn-xs btn-success">Blocked Advertisement</a>

        @endif
        {{ Form::close()}}
      @endif
    @endif
  @else
    <h2>No advertisement found</h2>
  @endif
  {!! Form::open(['url' => 'comments']) !!}
  {!! Form::hidden('advertisement_id',$advertisement->id) !!}
  <br></br>
  <div class="form-group">
    <h3>Comments:</h3>
    {!! Form::textarea('comment', '', ['rows' => '1']) !!}
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
