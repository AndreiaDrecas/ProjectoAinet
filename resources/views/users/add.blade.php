@extends('pages.layouts.backend')

@section('title', 'Create User')

@section('content')
<div class="container">
    <div class="row main">
        <div class="panel-heading">       
            <div class="main-login main-center">
                <div class="panel-title text-center">
                    <h1 class="title">Create User</h1>
                </div>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">       
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" 
                                    aria-hidden="true"></i></span>
                                <input id="name" type="text" class="form-control" name="name" value="   {{ old('name') }}" placeholder="Enter your fullname">
                            </div>
                            @if ($errors->has('name'))
                                <p class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif                           
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="cols-md-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" 
                                    aria-hidden="true"></i></span>
                                <input id="email" type="email" class="form-control" name="email"    value="{{ old('email') }}" placeholder="Enter your email">
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
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" 
                                    aria-hidden="true"></i></span>
                                <input id="password" type="password" class="form-control" 
                                name="password" placeholder="Enter your password">
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
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Enter your password confirmation">
                            </div>
                            @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif  
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" 
                                    aria-hidden="true"></i></span>
                                <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}" placeholder="Enter your location">
                            </div>
                            @if ($errors->has('location'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('location') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div 
                    class="form-group{{ $errors->has('profile_photo') ? ' has-error' : '' }}">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input id="profile_photo" type="text" class="form-control" name="profile_photo" value="{{ old('profile_photo') }}" placeholder="Enter your profile photo">
                            </div>
                            @if ($errors->has('profile_photo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('profile_photo') }}</strong>
                                </span>
                            @endif    
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('profile_url') ? ' has-error' : '' }}">
                        <div class="col-md-15">                             
                            <div class="input-group">
                                <span 
                                class="input-group-addon" id="basic-addon3">Profile URL</span>
                                <input type="text" class="form-control" name="profile_url" id="basic-url" aria-describedby="basic-addon3" placeholder="myPersonalPage.com">
                            </div>
                            @if ($errors->has('profile_url'))
                                <!--<span class="help-block">-->
                                <strong>{{ $errors->first('profile_url') }}</strong>
                                <!--</span>-->
                            @endif
                        </div>
                    </div>
                    <div 
                    class="form-group{{ $errors->has('presentation') ? ' has-error' : '' }}">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" 
                                    aria-hidden="true"></i></span>
                                <input id="presentation" type="text" class="form-control" name="presentation"  placeholder="Enter your presentation">
                            </div>
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
