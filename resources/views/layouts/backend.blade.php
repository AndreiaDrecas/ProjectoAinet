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
<div class = "page-header">
     <!-- Nav Bar -->
      <nav class="navbar navbar-dark bg-inverse" > 
            <a class="navbar-brand" href="{{ url('/') }}">
               Urban Farmer
            </a>   

          <ul class="nav navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
              <ul class="nav navbar-nav pull-xs-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <form class="form-inline pull-xs-right">
                        <div class="form-group">
                          <label class="sr-only" for="exampleInputEmail2">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                          <label class="sr-only" for="exampleInputPassword2">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                        </div>
                        <a class="btn btn-success btn-xs" href=""><i class="glyphicon glyphicon-envelope"></i> Sign Up</a>
                      </form>
                    @else
                      Welcome, {{ Auth::user()->name }} 
                      <li><a href="{{ url('/profile') }}">profile</a><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li><span class="caret"></span>
  

                        
                    @endif
                </ul>
    
      </nav> <!-- /navbar -->
      </div>
 </div>
    

    <!-- Search bar -->
   @yield('content')

     
      
    

    </div> <!-- /container -->

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>
</html>
