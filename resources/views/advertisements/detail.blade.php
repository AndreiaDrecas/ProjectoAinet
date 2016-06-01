@extends('layouts.backend')

@section('title', $advertisement->name)

@section('content')

<div class="container">
@if (count($advertisement))
    <h1> {{ $advertisement->name }} </h1>
    <article>
        {{ $advertisement->description }}
    </article>
    {{ $advertisement->created_at }}
    {{ $advertisement->owner_id }}
    
@else
    <h2>No advertisement found</h2>
@endif
</div>

@endsection
