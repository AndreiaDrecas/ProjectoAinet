<!DOCTYPE html>
<html>
<head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <title>@yield('title')</title>
          <!-- Website Font style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
        
</head>
<body>
     <!-- Nav Bar -->
      <nav class="navbar navbar-static-top navbar-dark bg-inverse">        
          <a class="navbar-brand" href="#">Urban Farmer</a>
          <ul class="nav navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </ul>

          @if (Auth::guest())
          <form class="form-inline pull-xs-right" role="form" method="POST" action="{{ url('/login') }}">
          {{ csrf_field() }}
            <div class="form-group">
              <label class="sr-only" for="exampleInputEmail2">Email address</label>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your E-mail">
              <label class="sr-only" for="exampleInputPassword2">Password</label>
             <input id="password" type="password" class="form-control" name="password" placeholder="Enter your Password">
            </div>
            <button type="submit" class="btn btn-success btn-xs">
                                    Login
                                </button>
          </form>
          @else
          <div class="form-group pull-xs-right">
          <span class="welcome">Welcome, {{ Auth::user()->name }}</span><br>
            @if (Auth::user()->admin == 1)
                <a href="{{ url('/painel') }}">Painel</a>
            @endif
            <a href="{{ url('/profile') }}">Profile</a>
            <a href="{{ url('/logout') }}">Logout</a>  
          
          
          </div>
        @endif
        
      </nav> <!-- /navbar -->
      <div class="container">


        <!-- Search bar -->
        <form class="navbar-form navbar-left" role="search">
        <div class="col-md-3">
        <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <div class="container">
          @yield('content')

        </div>

        </div> 

      </div>

    </div> <!-- /container -->

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>
</html>
