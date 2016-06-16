@extends('layouts.backend')

@section('title', 'List users')

@section('content')
<div>
    <a class="btn btn-primary" href="{{route('users.create')}}">Add user</a>
</div>

@if (count($user))

<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<th>
    @if ($user->admin==1) Yes @else No @endif

</th>
<td>{{ $user->created_at }}</td>            
<td>
    <a class="btn btn-xs btn-primary" href="{{route('users.edit', ['id' => $user->id])}}">Edit</a>
    <form action="{{route('users.destroy', ['id' => $user->id])}}" method="post" class="inline">
        <div class="form-group">
            <button type="submit" class="btn btn-xs btn-danger">Delete</button>
        </div>
    </form>
</td>
</tr>
</table>
@else
<h2>No user found</h2>
@endif
@endsection
