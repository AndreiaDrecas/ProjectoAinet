@extends('pages.layouts.backend')

@section('title', 'List advertisements')

@section('content')

<div>
    <a class="btn btn-primary" href="{{ url('advertisements/create') }}">Create advertisement</a>
</div>

<br><br/>
@if (count($advertisements))

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
            @if($advertisement->blocked == 0)
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
                    <div class="form-inline">
                        <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                    </div>
                     {{ Form::close() }}
                    </td>
                </tr>
                @endif
            @endforeach
    </table>
@else
    <h2>No advertisement found</h2>
@endif

@endsection
