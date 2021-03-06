@extends('dashboard.layouts.backend')

@section('title', 'List users')

@section('content')
<div>
    <a class="btn btn-primary" href="{{route('advertisements.create')}}">Add advertisement</a>
</div>

@if (count($advertisements))
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
            @foreach ($advertisements as $advertisement)
                <tr>
                    <td>{{ $advertisement->name }}</td>
                    <td>{{ $advertisement->description }}</td>             
                    <td>{{ $advertisement->created_at }}</td> 
                    <td>{{ $advertisement->owner_id }} </td>           
                    <td>
                        <a class="btn btn-xs btn-primary" 
                        href="{{route('advertisements.edit', ['id' => $advertisement->id])}}">Edit</a>
                        <form 
                        action="{{route('advertisements.delete', ['id' => $advertisement->id])}}" method="post" class="inline">
                            <div class="form-group">
                                <button 
                                type="submit" class="btn btn-xs btn-danger">Delete</button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <h2>No advertisement found</h2>
@endif
@endsection
