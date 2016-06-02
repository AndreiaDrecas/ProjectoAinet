@extends('layouts.backend')

@section('title', 'Register User')

@section('content')
<div class="container">
    <div class="row main">
        <div class="panel-heading">       
            <div class="main-login main-center">
                <div class="panel-title text-center">
                    <h1 class="title">Register</h1>
                </div>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                   {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">            
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter Your Fullname">
                        </div>
                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="cols-md-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email">

                        </div>
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                    <div class="cols-md-10">
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

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="cols-md-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Enter your password Confirmation">

                            @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}" placeholder="Enter Your Location">

                            @if ($errors->has('location'))
                            <span class="help-block">
                                <strong>{{ $errors->first('location') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('profile_url') ? ' has-error' : '' }}">
                    <div class="col-md-15">                             
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon3">Profile URL</span>
                          <input type="text" class="form-control" name="profile_url" id="basic-url" aria-describedby="basic-addon3" placeholder="myPersonalPage.com">
                          @if ($errors->has('profile_url'))
                          <span class="help-block">
                            <strong>{{ $errors->first('profile_url') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group{{ $errors->has('presentation') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">Presentation</label>
                
                <div class="col-md-6">
                    <textarea class="form-control" style="min-width: 100%"></textarea>
                    @if ($errors->has('presentation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('presentation') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="cols-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-user"></i> Register
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>

@endsection
