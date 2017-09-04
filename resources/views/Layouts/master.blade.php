<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
		<meta name="description" content="Ostad Elahi Music Analysis">
		<meta name="author" content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Ostad - @yield('title')</title>

		<link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">

		<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:300,500,700,900" rel="stylesheet">

  </head>

  <!-- Header -->
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
              <a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name', 'Laravel') }}
              </a>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <!-- Left Side Of Navbar -->
              <ul class="nav navbar-nav">
                  &nbsp;
              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="analysis">Analysis<a>
                </li>
                <li>
                  <a href="course">Course<a>
                </li>
                <li>
                  <a href="tools">Tools<a>
                </li>
                <li>
                  <a href="philosophy">Philosophy<a>
                </li>
                <li>
                  <a href="home">Home<a>
                </li>
                  <!-- Authentication Links -->
                  @guest
                      <li><a href="{{ route('login') }}">Login</a></li>
                      <li><a href="{{ route('register') }}">Register</a></li>
                  @else
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li>
                                  <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
                  @endguest

              </ul>
          </div>
      </div>
  </nav>

  <!-- Content -->
  @yield('content')

  <!-- Footer -->
  <footer>

    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <ul>
            <li>
              <a>Contact</a>
            </li>
            <li>
              <a>Privacy Policy</a>
            </li>
            <li>
              <a>Copyright &copy; Website 2017</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </footer>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>

  </body>
</html>
