@extends('pages.layouts.backend')

@section('title', "bids")

@section('content')

@if (count($array))   
    @foreach ($array as $a)
    <div class="col-sm-3">
        @if (Auth::user()->admin == 1)
            <p>User ID: {{$a->buyer_id}} </p>
            <p>Advertisement ID: {{ $a->advertisement_id }}</p>
        @endif
        <p>Price offer: {{ $a->price_cents }}</p>
        <p>Trade preference: {{ $a->trade_prefs }}</p>
        <p>Quantity: {{ $a->quantity }}</p>
        <p>Trade location: {{ $a->trade_location }}</p>
        <p>Comment from Buyer: {{ $a->comment }}</p>
        
        <a class="btn btn-success">Accept</a>
        {{ Form::open(['route' => ['bids.destroy',  $a->id], 'method' => 'delete', 'class' => 'inline']) }} 
            <button class="btn btn-danger" type="submit">refuse</button>
        {{ Form::close() }}
    </div>
    @endforeach  
@endif

@endsection
