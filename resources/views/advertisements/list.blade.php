@extends('pages.layouts.backend')

@section('title', 'List advertisements')

@section('content')

<div>
    <a class="btn btn-primary" href="{{ url('advertisements/create') }}">Create advertisement</a>
</div>

<br/>
@if (count($advertisements))
<<<<<<< HEAD
<table class="table table-striped">
    <thead>
        <tr>
            <th>name</th>
            <th>description</th>   
            <th>created_at</th>         
            <th>Owner</th>
            <th>Tags:</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($advertisements as $advertisement)
        <tr>
            <td><a href="{{ url('advertisements', $advertisement->id) }}">{{ $advertisement->name }}</a></td>
            <td>{{ $advertisement->description }}</td>             
            <td>{{ $advertisement->created_at }}</td> 
            <td>{{ $advertisement->owner_id }} </td>  
            <td> @foreach ($advertisement->tags as $tag)
                {{ $tag->name }}
            @endforeach      
            </td>          
            <td>
                <a class="btn btn-xs btn-primary" href="{{route('advertisements.edit', ['id' => $advertisement->id])}}">Edit</a>

                {{ Form::open(['route' => ['advertisements.destroy',  $advertisement->id], 'method' => 'delete', 'class' => 'inline']) }}        
=======
    <table class="table table-striped">
        <thead>
            <tr>
                <th>name</th>
                <th>description</th>   
                <th>created_at</th>         
                <th>Owner</th>
                <th>Tags:</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($advertisements as $advertisement)
                <tr>
                    <td><a href="{{ url('advertisements', $advertisement->id) }}">{{ $advertisement->name }}</a></td>
                    <td>{{ $advertisement->description }}</td>             
                    <td>{{ $advertisement->created_at }}</td> 
                    <td>{{ $advertisement->owner_id }} </td>  
                    <td>
                        @foreach ($advertisement->tags as $tag)
                            {{ $tag->name }}
                        @endforeach
                    </td>      
                              
                    <td>
                    <a class="btn btn-xs btn-primary" href="{{route('advertisements.edit', ['id' => $advertisement->id])}}">Edit</a>

                    {{ Form::open(['route' => ['advertisements.destroy',  $advertisement->id], 'method' => 'delete', 'class' => 'inline']) }}        
>>>>>>> 7ff541bbd1dca0a72024a69e50b964b5a4b74214
                
                    <div class="form-group">
                        <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                    </div>

                    {{ Form::close() }}
                    {{ Form::open(['route' => ['advertisements.block',  $advertisement->id], 'method' => 'post', 'class' => 'inline']) }}     

                    @if ($advertisement->blocked == 1)
                        <button type="submit" class="btn btn-xs btn-danger">Blocked</button>
                    @else
                        <button type="submit" class="btn btn-xs btn-success">Block</button>
                    @endif

                    {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
    </table>
@else
    <h2>No advertisement found</h2>
@endif
@endsection
