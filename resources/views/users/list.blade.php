@extends('pages.layouts.backend')

@section('title', 'List users')

@section('content')


@if (count($users))
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default panel-table">
        <div class="panel-heading">
            <div class="row">
                <div class="col col-xs-6">
                <h3 class="panel-title">Users</h3>
                </div>

            </div>
        </div>
    </div>
</div>
    
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
        <tr>
            <td><a href="users/{{ $user->id }}">{{ $user->name }} </a></td>
            <td>{{ $user->email }}</td>
            <th>
            @if ($user->admin==1) Yes @else No @endif
            </th>
            <td>{{ $user->created_at }}</td>            
            <td align="center">
                <a class="btn btn-xs btn-primary" href="{{route('users.edit', ['id' => $user->id])}}"><em class="fa fa-pencil"></em></a>

                {{ Form::open(['route' => ['users.destroy',  $user->id], 'method' => 'delete', 'class' => 'inline']) }}        

                <div class="form-inline">
                    <button type="submit" class="btn btn-xs btn-danger"><em class="fa fa-trash"></em></button>
                </div>
                {{ Form::close() }}

                {{ Form::open(['route' => ['users.block',  $user->id], 'method' => 'post', 'class' => 'inline']) }} 
                    @if ($user->admin == 0)
                    @if ($user->blocked == 1)
                        <button type="submit" class="btn btn-xs btn-danger">Blocked</button>
                    @else
                        <button type="submit" class="btn btn-xs btn-success">Block</button>
                    @endif
                    @endif
                {{ Form::close() }}
            </td>
        </tr>
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
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <div class="row">
                <div class="col col-xs-6">
                    <h3 class="panel-title">Blocked Users</h3>
                </div>
                </div>
            </div>
        </div>
    </div>

<div class="panel-body">
    <table class="table table-striped table-bordered table-list">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>   
                <th>Admin</th>         
                <th>Registered At</th>                    
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                @if ($user->blocked)
                    <td><a href="users/{{ $user->id }}">{{ $user->name }} </a></td>
                    <td>{{ $user->email }}</td>
                    <th>
                    @if ($user->admin==1) Yes @else No @endif
                    </th>
                    <td>{{ $user->created_at }}</td>            
                    @endif
            @endforeach
@endsection
