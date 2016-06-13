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


    @if ($advertisement->owner_id == Auth::user()->id)
	   <hr>
	    <div>
	    	<a class="btn btn-xs btn-primary" href="{{route('advertisements.edit', ['id' => $advertisement->id])}}">Edit</a>
	    </div>
    @endif

@else
    <h2>No advertisement found</h2>
@endif
</div>

@endsection
