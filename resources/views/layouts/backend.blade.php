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
      <nav class="navbar navbar-static-top navbar-dark bg-primary">      
          <a class="navbar-brand" href="/">Urban Farmer</a>
          <ul class="nav navbar-nav">
            <li class="nav-item active">

              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
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
          <div class="dropdown pull-xs-right">
            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              {{ Auth::user()->name }}
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
              @if (Auth::user()->admin == 1)
              <li><a class="dropdown-item" href="{{ url('/painel') }}">Painel</a></li>
              @endif
              <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
              <div class="dropdown-divider"></div>
              <li><a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></li>
            </ul>
          </div>         
        @endif
        </ul>
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
    <!-- Footer -->
<footer class="footer">
    <div class="container wrap">
        <p class="copyright text-muted small">Copyright &copy; Urban Farmers' Market 2016. All Rights Reserved</p>
    </div>
</footer>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>
</html>
