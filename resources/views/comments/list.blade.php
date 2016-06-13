@extends('pages.layouts.backend')

@section('title', 'List users')

@section('content')
<div>
    <a class="btn btn-primary" href="{{ url('advertisements/create') }}">Create advertisement</a>
</div>

<br />
@if (count($advertisements))
<table class="table table-striped">
    <thead>
        <tr>
            <th>name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comments as $comment)
        <tr>
            <td><a href="{{ url('comments', $comment->id) }}">{{ $comment->comment }}</a></td>
            
           
        </tr>
        @endforeach
    </table>
    @else
    <h2>No advertisement found</h2>
    @endif
    @endsection
