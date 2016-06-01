
@extends('layouts.backend')

@section('content')
@if (count($advertisements))
@foreach ($advertisements as $advertisement)
<div class="container">
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>{{ $advertisement->name }}</h3>
        <p>{{ $advertisement->description }}</p>
        <p><a href="#" class="btn btn-primary" role="button">More Details</a></p>
      </div>
    </div>
  </div>
</div>
</div>
@endforeach
@endif
@endsection