@extends('pages.layouts.backend')

@section('title', $user->name)

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
		<p>Presentation: {{ $user->presentation }}</p>
	@endif
	<p>Administrator:
		@if ($user->admin==1) 
			Administrator:Yes 
		@else 
			No 
		@endif</p>
	<p>User created at: {{ $user->created_at }}</p>   
	@if (Auth::user()->id == $user->id)
		<a class="btn btn-xs btn-primary" href="{{route('users.edit', ['id' => $user->id])}}"><em class="fa fa-pencil"></em></a>
	@endif         

	@if (Auth::user()->admin)
		@if ($user->admin == 0)
			<a class="btn btn-xs btn-danger">Block User</a>
		@endif	
	@endif

	<p>               
    	@if (count($advertisements))
    		<hr>
    		<p><h5>User advertisements:</h5></p>
    
    		@foreach ($advertisements as $advertisement)
    			@if ($advertisement->owner_id == Auth::user()->id)
    				<p>{{ $advertisement->name }}
    				<a 
    				class="btn btn-xs btn-primary" href="{{route('advertisements.show', ['id' => $advertisement->id])}}">show</a>
    				</p>
    			@endif
    		@endforeach  
    	@endif
	</p>

@else
	<h2>No user found</h2>
@endif

@endsection
