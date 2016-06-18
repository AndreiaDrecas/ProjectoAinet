@extends('pages.layouts.backend')

@section('content')

<div class="container"> 
	@if (count($errors) > 0)
    	@include('partials.errors')
	@endif

    <h1>New Advertisement</h1>
	</hr>

	{!! Form::open(['url' => 'advertisements', 'files' => 'true']) !!}
	   @include('advertisements.form', ['submitButtonText' => 'Create Advertisement'])
	{!! Form::close() !!}
</div>
@endsection
