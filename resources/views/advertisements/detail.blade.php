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

    @if ($advertisement->owner_id == Auth::user()->id)
	   <hr>
	    <div>
	    	<a class="btn btn-xs btn-primary" href="{{route('advertisements.edit', ['id' => $advertisement->id])}}">Edit</a>
	    </div>
    @endif

@else
    <h2>No advertisement found</h2>
@endif

{!! Form::open(['url' => 'comments']) !!}
{!! Form::hidden('advertisement_id',16) !!}
{!! Form::hidden('parent_id',1) !!}
   <div class="form-group">
        {!! Form::label('comment', 'Comment:') !!}
        {!! Form::text('comment', null,['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('adicionar',['class' => 'btn btn-primary form-control'] ) !!}
{!! Form::close() !!}

@if (count($comments))
 @foreach ($comments as $comment)
    @if ($comment->advertisement_id == $advertisement->id)
        {{ $comment->comment }}
    @endif
 @endforeach
@endif
</div>

@endsection
