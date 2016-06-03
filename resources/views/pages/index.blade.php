
@extends('layouts.backend')

@section('title', "Urban Farmers' Market")

@section('content')

@if (count($advertisements))
<div class="row">
@foreach ($advertisements as $advertisement)
  <div class="col-sm-3">
    <div class="card">
      <img class="card-img-top" src="http://www.wikihow.com/images/a/a6/Draw-a-Farmer-Step-4-Version-2.jpg" alt="{{ $advertisement->name }}" width="100%" height="auto">
        <div class="card-block">
        <h4 class="card-title">{{ $advertisement->name }}</h4>
         <p class="card-text">{{ $advertisement->description }}</p>
        <p><a href="{{url('advertisements/'.$advertisement->id)}}" class="btn btn-primary" role="button">More Details</a></p>
      </div>
    </div>
  </div>
@endforeach
</div>
@else
  No user
@endif

@endsection