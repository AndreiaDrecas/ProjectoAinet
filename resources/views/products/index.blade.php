@extends('master')

@section('content')
<div>
    <a class="btn btn-primary" href="">Add user</a>
</div>

<form class="search" role="search">
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Search Product">
	</div>
	<button type="search" class="btn btn-default">Search</button>
</form>


<!-- @if (count($users)) { -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Offering Date</th>
                <th>Seller's name</th>
                <th>Seller's score</th>
            </tr>
        </thead>
        <tbody>
          <!--  @foreach($users as $user) -->    
                <tr>
                    <td><!-- {{$user->email}} --></td>
                    <td><!-- {{$user->name}} --></td>
                    <td><!-- {{$user->created_at}} --></td>
                    <td><!-- {{$user->typeToStr()}} --></td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="" role="button">Edit</a>
                    </td>
                </tr>
          <!--   @endforeach -->
        </tbody>
    </table>
<!-- 
@else

    <h2>No users found</h2>

@endif -->

@endsection