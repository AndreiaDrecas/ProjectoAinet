@extends('dashboard.layouts.backend')

@section('title', 'List users')

@section('content')
<div>
    <a class="btn btn-primary" href="{{route('users.create')}}">Add user</a>
</div>

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
                                <td><a href="users/show/{{ $user->id }}">{{ $user->name }} </a></td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->admin }}</td>  
                                <td>{{ $user->created_at }}</td>            
                                <td align="center">
                                    <a class="btn btn-xs btn-primary" href="{{route('users.edit', ['id' => $user->id])}}"><em class="fa fa-pencil"></em></a>
                                    <form action="{{route('users.delete', ['id' => $user->id])}}" method="post" class="inline">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-xs btn-danger"><em class="fa fa-trash"></em></button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
@else
    <h2>No users found</h2>
@endif
                    </tbody>
                </table>


ADVERTISEMENT
<table class="table table-striped table-bordered table-list">
    <thead>
        <tr>
            <th>name</th>
            <th>description</th>   
            <th>Created at</th>         
            <th text-align=center><em class="fa fa-cog"></em></th>

            
        </tr>
    </thead>
    <tbody>
@if (count($advertisements))
    @foreach ($advertisements as $advertisement)
        <tr>
            <td><a href="users/show/{{ $user->id }}">{{ $advertisement->name }} </a></td>
            <td>{{ $advertisement->description }}</td>
            <td>{{ $advertisement->created_at }}</td>            
            <td align="center">
                <a class="btn btn-xs btn-primary" href="{{route('advertisements.edit', ['id' => $advertisement->id])}}"><em class="fa fa-pencil"></em></a>
                <form action="{{route('advertisements.delete', ['id' => $advertisement->id])}}" method="post" class="inline">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <button type="submit" class="btn btn-xs btn-danger"><em class="fa fa-trash"></em></button>
                    </div>

                </form>
            </td>
        </tr>
    @endforeach
@else
    <h2>No users found</h2>
@endif
    </tbody>
    </table>

    </div>
    

@endsection
