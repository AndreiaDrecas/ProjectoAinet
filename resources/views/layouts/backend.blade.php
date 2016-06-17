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
 @include('common.nav')

<h1 align="center">URBAN FARMERS' MARKET</h1>
 <!-- Search bar -->
<div class="container">
  <div class="row" >
    <div class="navbar-form center" role="search">
      {{ Form::open(['route' => ['advertisements.search'], 'method' => 'post', 'class' => 'inline']) }} 
      <div class="input">
        <input id="search" name="search" type="text" class="form-control" placeholder="Search">
        <button type="submit" class="btn btn-primary" for="search">Submit</button>
        {{Form::close()}}
      </div>
    </div>
  </div>
</div>

<div>
  <div>

    @if (Auth::user())
    <div class="container">
      <form class="form-inline">
        <a class="btn btn-primary" href="{{url ('advertisements/create')}}">Create Advertisement</a>
      </form>
    </div>
    @endif
    <div class="container">
      @if (Session::has('flash_message'))
        <div class="alert alert-success"> 
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</ button>{{ Session::get('flash_message') }}</div>
      @endif

      @yield('content')

        </div>
    </div> 
  </div>
</div>
<!-- Footer -->
@include('common.footer')
<!-- jQuery first, then Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>
</html>
