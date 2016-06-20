@extends('pages.layouts.backend')

@section('title', 'Tags List')

@section('content')

<h2>Tags list</h2>
<br></br>
@if (count($tags))
<table>
                
        @foreach ($tags as $tag)
        <tr>
           <td> {{ $tag->name }} </td>
           <td>
           {{ Form::open(['route' => ['tags.block',  $tag->id], 'method' => 'post', 'class' => 'inline']) }}
                @if ($tag->blocked == 1)
                    <button type="submit" class="btn btn-xs btn-danger">Unblock</button>
                @else
                    <button type="submit" class="btn btn-xs btn-success">Block</button>
                @endif
            {{ Form::close() }}
            </td>
        </tr>
        @endforeach
   
</table>
@else
<h2>No tags found</h2>
@endif
<br></br>
@endsection

