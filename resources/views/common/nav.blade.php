
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
          @if (Auth::user()->admin == 1)
            <li><a href="{{ url('/painel') }}">Painel</a></li>
          @endif
          <li><a href="{{ url('/profile') }}">Profile</a></li>
          <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>   
          <span class="welcome"></span>
          Welcome, {{ Auth::user()->name }}
        @endif
      </ul>   
    </div>
  </div>
</nav>    