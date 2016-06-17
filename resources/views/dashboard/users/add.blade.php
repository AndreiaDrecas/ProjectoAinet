@extends('dashboard.layouts.backend')

@section('title', 'Create user')

@section('content')

@if (count($errors) > 0)
    @include('partials.errors')
@endif

<div class="row main">
    <div class="panel-heading">
        <div class="panel-title text-center">
            <h1 class="title">Register</h1>
        </div>
    </div> 
    <div class="main-login main-center">
        <form action="{{url('users/create')}}" method="post" class="form-horizontal">
            {{ csrf_field() }}

            @include('dashboard.users.partials.add-edit')

            <div class="form-group">
                <label for="password" class="cols-sm-2 control-label">Password</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" 
                        aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="password" id="inputPassword"  placeholder="Enter your Password"/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" 
                        aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="passwordConfirmation" 
                    id="inputPasswordConfirmation"  placeholder="Confirm your Password"/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" 
            class="btn btn-primary btn-lg btn-block login-button">Register</button>
            </div>
            <div class="login-register">
                <a href="register.php">Login</a>
            </div>
        </form>
    </div>
</div>

@endsection

