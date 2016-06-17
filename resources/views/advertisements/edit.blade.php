@extends('pages.layouts.backend')

@section('content')

<div class="container"> 
	@if (count($errors) > 0)
    	@include('partials.errors')
	@endif
    <h1>Edit: {!! $advertisement->name !!}</h1>
	</hr>
	{!! Form::model($advertisement,['method' => 'PATCH', 'action' => ['AdvertisementController@update', $advertisement->id]],['class' => 'form-group']) !!}
    
    @include('advertisements.form', ['submitButtonText' => 'Update Advertisements']);
	
	{!! Form::close() !!}
</div>
@endsection
