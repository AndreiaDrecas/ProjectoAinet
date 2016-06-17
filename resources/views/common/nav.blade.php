<nav class="navbar navbar-static-top navbar-dark bg-primary">      
  <!--<a class="navbar-brand" href="/">Urban Farmer</a>-->
  <ul class="nav navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
    </li>
    @if (Auth::guest()) 
      <form class="form-inline pull-xs-right" role="form" method="POST" 
      action="{{ url('/login') }}">
        {{ csrf_field() }}
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Email address</label>
          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your e-mail">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input id="password" type="password" class="form-control" name="password" placeholder="Enter your password">
        </div>
        <button type="submit" class="btn btn-success btn-xs">Login</button>
        <a  class="btn btn-success btn-xs" href="{{url('/register')}}">Register</a>
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
          <li><a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></li>
        </ul>
      </div>         
    @endif
  </ul>
</nav>