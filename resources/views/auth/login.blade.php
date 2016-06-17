@extends('pages.layouts.backend')

@section('content')
<div class="container">
    <div class="row main">
        <div class="panel-heading">
            <div class="main-login main-center">
                <div class="panel-title text-center title">
                    <h1 class="title">Login</h1>
                </div>

                <form class="form-horizontal" role="form" method="POST" 
                action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="cols-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your E-mail">
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="cols-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Enter your Password">
                            </div>
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="cols-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="cols-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-sign-in"></i> Login
                            </button>
                            <a class="btn btn-link inl" 
                            href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
