<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
		<meta name="description" content="Ostad Elahi Music Analysis">
		<meta name="author" content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Ostad - @yield('title')</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
		<link rel="stylesheet" href="css/style.css">

		<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:300,500,700,900" rel="stylesheet">

  </head>

<!-- Header -->
<header>
  <nav class="navbar navbar-toggleable-md fixed-top">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><img src="images/islamic_pattern.png" width="40px" height="40px" class="d-inline-block align-top" alt="">
    <span>Ostad Elahi Music Analysis</span></a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        @auth
        <li class="nav-item active">
          <a class="nav-link" href="analysis">Analysis<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="course">Course</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tools">Tools</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="philosophy">Philosophy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home">Home</a>
        </li>
        @endauth

        @guest
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Language
              </a>
              <div class="dropdown-menu" id="language-dropdown" aria-labelledby="languageDropdown">
                <a class="dropdown-item" href="">English</a>
                <a class="dropdown-item" href="">French</a>
                <a class="dropdown-item" href="">Persian</a>
              </div>
            </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="nameDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="nameDropdown">
            <a class="dropdown-item" id="logout-dropdown" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </nav>
</header>


  <!-- Content -->

    @yield('content')



  <!-- Footer -->
  <footer class="sp-230">
    <div class="container">
      <div class="row justify-content-center">
        <ul class="footer-list text-center text-muted">
          <li class="sp-10"><a>Contact</a></li>
          <li><a>Privacy Policy</a></li>
          <li><a>Copyright Website Name &copy; 2017</a></li>
        </ul>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!--<script src="{{ asset('js/app.js') }}"></script>-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/smooth-scroll.js"></script>
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/script.js"></script>

  </body>
</html>
