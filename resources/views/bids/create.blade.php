@extends('pages.layouts.backend')

@section('title', "teste")

@section('content')

<div class="container">



  {!! Form::open(['url' => 'bids']) !!}
  {!! Form::hidden('advertisement_id',$advertisement->id) !!}
  {!! Form::hidden('buyer_id',Auth::user()->id) !!}
  <div class="form-group">
        {!! Form::label('price', 'Price:') !!}
        {!! Form::text('price_cents', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('trade_prefs', 'Trade Preference:') !!}
        {!! Form::text('trade_prefs', null,['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('quantity', 'Quantity:') !!}
        {!! Form::text('quantity', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('trade_location', 'Trade location:') !!}
        {!! Form::text('trade_location', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('comment', 'Comment:') !!}
        {!! Form::text('comment', null,['class' => 'form-control']) !!}
    </div>
    
     <div class="form-inline">
    {!! Form::submit("Add Bid",['class' => 'btn btn-primary form-control'] ) !!}
        <a class="btn btn-danger" href="{{url('/')}}">Cancel</a>
    </div>
    {!! Form::close() !!}

 </div>

@endsection
