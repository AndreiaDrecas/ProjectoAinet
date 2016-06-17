@extends('pages.layouts.backend')

@section('title', 'List users')

@section('content')

<h2>Users list</h2>
<br></br>
@if (count($users))
    <div class="panel-body">
        <table class="table table-striped table-bordered table-list">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>   
                    <th>Admin</th>         
                    <th>Registered At</th>
                    <th text-align=center><em class="fa fa-cog"></em></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    @if ($user->blocked == 0)
                        <tr>
                            <td><a href="profile/{{$user->id}}">{{ $user->name }} </a></td>
                            <td>{{ $user->email }}</td>
                            <th>
                                @if ($user->admin==1) 
                                    Yes 
                                @else 
                                    No 
                                @endif
                            </th>
                            <td>{{ $user->created_at }}</td>            
                            <td align="center">
                                <a class="btn btn-xs btn-primary" href="{{route('users.edit', ['id' => $user->id])}}"><em class="fa fa-pencil"></em></a>
    
                                {{ Form::open(['route' => ['users.destroy',  $user->id], 'method' => 'delete', 'class' => 'inline']) }}        

                                <div class="form-inline">
                                    <button type="submit" class="btn btn-xs btn-danger"><em class="fa fa-trash"></em></button>
                                </div>
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
   

<div class="form-inline">
    <a class="btn btn-primary" href="{{route('users.create')}}">Create user</a>
</div>

@else
    <h2>No users found</h2>
@endif
<br></br>
@endsection

