@extends('pages.layouts.backend')

@section('title', 'Blocked users')

@section('content')

@if (count($users))
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
                <th text-align=center><em class="fa fa-cog"></em></th>
            </tr>
        </thead>
        <tbody>
</div>
          
            @foreach ($users as $user)
            @if ($user->admin == 1)
            @if ($user->blocked == 1)
            <tr>
                <td><a href="profile/{{ $user->id }}">{{ $user->name }} </a></td>
                <td>{{ $user->email }}</td>
                <th>
                    @if ($user->admin==1) Yes @else No @endif
                </th>
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
@endif

