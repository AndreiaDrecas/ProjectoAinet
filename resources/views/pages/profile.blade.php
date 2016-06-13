@extends('pages.layouts.backend')

@section('content')


@if (count($user))

@if ($user->profile_photo != null)
<p>Profile Foto: {{ $user->profile_photo }}</p>
@endif
<p>Name: {{ $user->name }}</p>
<p>E-mail: {{ $user->email }}</p>
<p>Location: {{ $user->location }}</p>
@if ($user->profile_url != null)
<p>Profile URL: {{ $user->profile_url }}</p>
@endif
@if ($user->presentation != null)
<p>Presentation: {{ $user->presentation }}</p>
@endif
<p>
    @if ($user->admin==1) Administrator:Yes @else No @endif
</p>
<p>{{ $user->created_at }}</p>   
@if($user->id == Auth::user()->id)
<a class="btn btn-xs btn-primary" href="{{route('users.edit', ['id' => $user->id])}}"><em class="fa fa-pencil"></em></a>
            @endif         
</table>

@else
<h2>No user found</h2>
@endif
@endsection
