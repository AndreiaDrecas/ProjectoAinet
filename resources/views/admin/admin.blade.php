@extends('master')

@section('content')

<div>
    <h1 align="center" href="">{{$title}}</h1>
</div>

  <table class="table table-striped">
        <thead>
            <tr>
                <th>Blocked Users</th>
                <th>Blocked advertisements</th>
                <th>Blocked tags</th>
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


@endsection