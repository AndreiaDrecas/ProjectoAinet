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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" />


</head>
<body>

 <!-- Nav Bar -->
 @include('common.nav')

<div class="container">
  @if (Session::has('flash_message'))
  <div class="alert alert-success"> 
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{ Session::get('flash_message') }}</div>
    @endif

    @yield('content')

  </div>

</div> 

</div>

</div> <!-- /container -->
<!-- Footer -->
@include('common.footer')
<!-- jQuery first, then Bootstrap JS. -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
@yield('tag')
</body>
</html>
