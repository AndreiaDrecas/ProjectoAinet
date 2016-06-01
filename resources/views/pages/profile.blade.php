@extends('layouts.backend')



@section('content')


@if (count($user))
    
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
             <th>
            @if ($user->admin==1) Yes @else No @endif

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
