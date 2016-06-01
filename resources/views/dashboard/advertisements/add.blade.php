@extends('layouts.backend')

@section('title', 'Create user')

@section('content')
@if (count($errors) > 0)
    @include('partials.errors')
@endif

<form action="{{url('advertisements/create')}}" method="post" class="form-group">
    {{ csrf_field() }}
    <input
        type="text" class="form-control"
        name="owner_id" id="inputOwner_id" value="15" />
    </div>
    <div class="form-group">
    <label for="inputFullname">Name</label>
    <input
        type="text" class="form-control"
        name="name" id="inputName"
        placeholder="Name" value="" />
    </div>

    <div class="form-group">
        <label for="inputDescription">Description</label>
        <input
        type="text" class="form-control"
        name="description" id="inputDescription"
        placeholder="Description" value="" />
    </div>

    <div class="form-group">
        <label for="inputPrice">Price</label>
        <input
        type="text" class="form-control"
        name="price" id="inputPrice"
        placeholder="Price" value="" />
    </div>

    <div class="form-group">
        <label for="inputTradePref">Trade Preference</label>
        <input
        type="text" class="form-control"
        name="tradepref" id="inputTradePref"
        placeholder="TradePref" value="" />
    </div>

    <div class="form-group">
        <label for="inputQuantity">Quantity</label>
        <input
        type="text" class="form-control"
        name="quantity" id="inputQuantity"
        placeholder="Quantity" value="" />
    </div>
    
    
    

    <div class="form-group">
        <button type="submit" class="btn btn-primary" name="ok">Add</button>
        <a class="btn btn-default" href="{{url('advertisements')}}">Cancel</a>
    </div>
</form>
@endsection
