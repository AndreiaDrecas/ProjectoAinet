@extends('layouts.backend')

@section('content')


@if (count($user))
    
            <td></td>
            <td>{{ $user->email }}</td>
             <th>
                @if ($user->admin==1) Yes @else No @endif
               
                @if (count($advertisements))<br>
                ADVERTISEMENTS:<br>
                @foreach ($advertisements as $advertisement)
                    
                    @if ($advertisement->owner_id == Auth::user()->id)
                        {{ $advertisement->name }}<br>
                    @endif
                
                @endforeach  
                @endif

            </th>
            <td>{{ $user->created_at }}</td>            
            <td>
                
            </td>
        </tr>
    </table>
@else
    <h2>No user found</h2>
@endif
@endsection
