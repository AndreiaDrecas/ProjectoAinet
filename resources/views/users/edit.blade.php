@extends('pages.layouts.backend')
@section('title', 'Edit User')


@section('content')
<div class="container"> 
@if (count($errors) > 0)
    @include('partials.errors')
@endif
<h1>Edit: {!! $user->name !!}</h1>
</hr>
{!! Form::model($user,['method' => 'PATCH', 'action' => ['UserController@update', $user->id]],['class' => 'form-group']) !!}
    @include('users.form', ['submitButtonText' => 'Update User'])
{!! Form::close() !!}
</div>
@endsection

