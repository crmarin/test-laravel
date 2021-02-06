<html lang="en">

<head>
  <title>MyApp - @yield('title')</title>
  <meta charset="UTF-8">

  <!-- CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
  <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  <!-- Favicon and touch icons -->
  <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">

</head>

<!-- Top menu -->
{{-- <nav class="navbar navbar-inverse" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">Bootstrap Navbar Menu Template</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="top-navbar-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li>
        <li><a href="#">Features</a></li>
        <li><a href="#">Video</a></li>
        <li><a href="#">Clients</a></li>
        <li><a href="#">Plans</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Faq</a></li>
      </ul>
    </div>
  </div>
</nav> --}}

<body>
  @yield('content')
</body>

<!-- Footer -->
{{-- <footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 footer-copyright">
        &copy; Bootstrap Navbar Template by <a href="http://azmind.com">AZMIND</a>
      </div>
    </div>
  </div>
</footer> --}}


<!-- Javascript -->
<script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.backstretch.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/retina-1.1.0.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>

</html>