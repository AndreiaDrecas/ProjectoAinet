@extends('pages.layouts.backend')

@section('title', 'Blocked users')

@section('content')

<h2>Blocked Users</h2>
<br></br>
@if (count($users))
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>   
                <th>Admin</th>         
                <th>Registered At</th>
            </tr>
        </thead>

        @foreach ($users as $user)
            @if (Auth::user()->admin == 1)
                @if ($user->blocked == 1)
                    <tr>
                        <td><a href="profile/{{ $user->id }}">{{ $user->name }} </a></td>
                        <td>{{ $user->email }}</td>             
                        <td>
                            @if ($user->admin==1) 
                                Yes 
                            @else 
                                No 
                            @endif
                        </td> 
                        <td>{{ $user->created_at }}</td>      
                        <td align="center">
                        {{ Form::open(['route' => ['users.block',  $user->id], 'method' => 'post', 'class' => 'inline']) }}          
                            <div class="form-inline">
                                <button type="submit" class="btn btn-xs btn-danger">Unblock User</button>
                            </div>
                            {{ Form::close() }}  
                        </td>
                    </tr>
                @endif
            @endif
        @endforeach
    </table>
@endif

@endsection
