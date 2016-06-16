@extends('pages.layouts.backend')

@section('content')


@if (count($user))
<<<<<<< HEAD


<td></td>
<td>{{ $user->email }}</td>



=======
    <td></td>
    <td>{{ $user->email }}</td>
             
>>>>>>> bbba9bd84dcfc288d61b15f2121cc4c5bbd4ccff
@if ($user->profile_photo != null)
<p>Profile Foto: {{ $user->profile_photo }}</p>
@endif
<p>Name: {{ $user->name }}</p>
<p>E-mail: {{ $user->email }}</p>
<p>Location: {{ $user->location }}</p>
@if ($user->profile_url != null)
<p>Profile URL: {{ $user->profile_url }}</p>
<p>Presentation: {{ $user->presentation }}</p>
@endif
<p>
    @if ($user->admin==1) Administrator:Yes @else No @endif
</p>
<p>{{ $user->created_at }}</p>   
@if($user->id == Auth::user()->id)
<a class="btn btn-xs btn-primary" href="{{route('users.edit', ['id' => $user->id])}}"><em class="fa fa-pencil"></em></a>
@endif         

<p>               
<<<<<<< HEAD
 
    @if (count($advertisements))<br>
    ADVERTISEMENTS:<br>
    @foreach ($advertisements as $advertisement)
    
    @if ($advertisement->owner_id == Auth::user()->id)
    <a class="btn btn-xs btn-primary" href="{{route('advertisements.show', ['id' => $advertisement->id])}}">show</a>{{ $advertisement->name }}<br>
    @endif
    
    @endforeach  
    @endif
</p>

=======
    @if (count($advertisements))<br>
    ADVERTISEMENTS:<br>
        @foreach ($advertisements as $advertisement)
            @if ($advertisement->owner_id == Auth::user()->id)
                <a class="btn btn-xs btn-primary" href="{{route('advertisements.show', ['id' => $advertisement->id])}}">show</a>{{ $advertisement->name }}<br>
            @endif
        @endforeach  
    @endif
</p>
>>>>>>> bbba9bd84dcfc288d61b15f2121cc4c5bbd4ccff
@else
<h2>No user found</h2>
@endif

@endsection
