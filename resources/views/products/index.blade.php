@extends('master')

@section('content')
<div>
    <h1 align="center" href="">{{$title}}</h1>
</div>

<form class="col-lg-4" role="search">
	<div class="input-group">
       <span class="input-group-btn">
        <button type="search" class="btn btn-default">Search</button>
    </span> 
    <input type="text" class="form-control" placeholder="Search Product">

</div>

</form>


{{-- @if (count($users)) { --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Offering Date</th>
                <th>Seller's name</th>
                <th>Seller's score</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
          {{--  @foreach($users as $user) --}}
                <tr>
                    <td>{{-- {{$user->email}} --}}</td>
                    <td>{{-- {{$user->name}} --}}</td>
                    <td>{{-- {{$user->created_at}} --}}</td>
                    <td>{{-- {{$user->typeToStr()}} --}}</td>
                    <td>
                       
                </tr>
          {{--   @endforeach --}}
        </tbody>
    </table>
{{-- 
@else

    <h2>No users found</h2>

@endif --}}

@endsection