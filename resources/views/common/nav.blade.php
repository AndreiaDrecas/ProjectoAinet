
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <!-- Collapsed Hamburger -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- Branding Image -->
      <a class="navbar-brand" href="{{ url('/') }}">Home</a>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
          <li><a href="{{ url('/user') }}">User</a></li>
          <li><a href="{{ url('/product') }}">Product</a></li>
          <li><a href="{{ url('/products') }}">Products List</a></li>
          <li><a href="{{ url('/login') }}">Login</a></li>
          <li><a href="{{ url('/register') }}">Register</a></li>
        @else
          <li><a href="{{ url('/profile') }}">Profile</a></li>
          <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>   
          <span class="welcome"></span>
          Welcome, {{ Auth::user()->name }}
        @endif
      </ul>   
    </div>
  </div>
</nav>



          <!-- <div>
          <ul class="nav navbar-nav navbar-right"> -->
               <!--  <li class="nav-item active"><a href="{{ url('/user') }}">User</a></li>
                <li class="nav-item active"><a href="{{ url('/product') }}">Product</a></li>
                <li class="nav-item active"><a href="{{ url('/products') }}">Products List</a></li>
                <li class="nav-item active"><a href="{{ url('/login') }}">Login</a></li>
                <li class="nav-item active"><a href="{{ url('/register') }}">Register</a></li> -->
         <!--  </ul>
       </div> -->
       <!-- <ul class="nav navbar-nav pull-xs-right"> -->
       <!-- Authentication Links -->
                    <!-- @if (Auth::guest())
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
                  </ul> -->
<!-- /navbar -->