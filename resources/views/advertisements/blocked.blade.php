@extends('pages.layouts.backend')

@section('title', 'Blocked advertisements')

@section('content')

<h2>Blocked Advertisements</h2>
<br></br>
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

        @foreach ($advertisements as $advertisement)
            @if (Auth::user()->admin == 1)
                @if ($advertisement->blocked == 1)
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
                            {{ Form::open(['route' => ['advertisements.block',  $advertisement->id], 'method' => 'post', 'class' => 'inline']) }}     

                            @if ($advertisement->blocked == 1)
                            <div class="form-inline">
                                <button type="submit" class="btn btn-xs btn-danger">Blocked</button>
                            </div>
                        </td>
                            @endif
         
                        {{ Form::close() }}
                    </tr>
                @endif
            @endif
        @endforeach
    </table>
@else
    <p>No Advertisement</p>
@endif
    <a class="btn btn-primary"  href="{{ url('advertisements') }}">Show all advertisements</a>
@endsection
