@extends('layouts.backend')

@section('title', 'List users')

@section('content')


@if (count($advertisement))
    <table class="table table-striped">
        <thead>
            <tr>
                <th>name</th>
                <th>description</th>   
                <th>created_at</th>         
                <th>Owner</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $advertisement->name }}</td>
                <td>{{ $advertisement->description }}</td>             
                <td>{{ $advertisement->created_at }}</td> 
                <td>{{ $advertisement->owner_id }} </td>           
                <td>
                    <a 
                    class="btn btn-xs btn-primary" href="{{route('advertisements.edit', ['id' => $advertisement->id])}}">Edit</a>
                    <form 
                    action="{{route('advertisements.delete', ['id' => $advertisement->id])}}" method="post" class="inline">
                        <div class="form-group">
                            <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                        </div>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@else
    <h2>No advertisement found</h2>
@endif
@endsection
