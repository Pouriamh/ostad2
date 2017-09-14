@extends('layouts.master')

@section('content')
<!-- Masthead -->
<div class="fluid-container masthead pd-14">
  <div class="container">
    <div class="row">
      <div class="site-title">
        <h1>Ostad Elahi<br/>
          <span>Music Analysis</span>
        </h1>
      </div>
    </div>
  </div>
  <div class="row justify-content-center" id="down-arrow-row">
    <div class="col-3 text-center" id="down-arrow-container">
      <h3 class="text-w">Register &amp; Login</h3>
      <a href="#login-form-group"><svg id="down-arrow" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 289 289">
        <title>forward_button</title>
        <circle cx="144.5" cy="144.5" r="138" fill="#222222" stroke="#fec503" stroke-miterlimit="10" stroke-width="13"/>
        <polyline points="212.9 118.6 144.7 186.8 76 118.2" fill="none" stroke="#fec503" stroke-miterlimit="10" stroke-width="13"/>
      </svg></a>
    </div>
  </div>
</div>
<!-- Login / Register Form Group -->
<div class="container pd-5">
  <div class="row justify-content-center pd-6" id="login-form-group">
    <div class="col-md-6 col-12">
      <div class="container">
        <div class="row text-center panel-selector">
          <div class="col-6 heading-selector">
            <a href="#" class="active form-link" id="login-form-link">Login</a>
          </div>
          <div class="col-6 heading-selector">
            <a href="#" class="form-link" id="register-form-link">Register</a>
          </div>
        </div>
      </div>
      <div class="panel-body sp-2">

<!-- Login Form -->
        <form class="form-horizontal" id="login-form" style="display: block" method="POST" action="{{ route('login') }}">{{ csrf_field() }}
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <!--<label for="email" class="col-md-4 control-label">E-Mail Address</label>-->
            <div class="col-12">
              <input id="email" placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
            </div>
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <!--<label for="password" class="col-md-4 control-label">Password</label>-->
            <div class="col-12">
              <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
            </div>
          </div>
          <div class="form-group">
            <div class="col-4 mx-auto">
              <div class="checkbox text-center">
                <label class="text-small">
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-6 mx-auto text-center">
              <button type="submit" class="btn btn-success text-uppercase login-button">Login</button>
              <a class="btn btn-link text-small" href="{{ route('password.request') }}">Forgot Your Password?</a>
            </div>
          </div>
        </form>

<!-- Register Form -->
        <form class="form-horizontal" id="register-form" style="display: none;" method="POST" action="{{ route('register') }}">{{ csrf_field() }}
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <!--<label for="name" class="col-md-4 control-label">Name</label>-->
            <div class="col-12">
              <input id="name" placeholder="Name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
            </div>
          </div>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <!--<label for="email" class="col-md-4 control-label">E-Mail Address</label>-->
            <div class="col-12">
              <input id="email" placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
            </div>
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <!--<label for="password" class="col-md-4 control-label">Password</label>-->
            <div class="col-12">
              <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
            </div>
          </div>
          <div class="form-group">
            <!--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>-->
            <div class="col-12">
              <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 mx-auto">
              <button type="submit" class="btn btn-success login-button sp-1 text-uppercase">Register</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Quote -->
<div class="container quote-container sp-5">
  <div class="row quote-row">
    <div class="col-lg-2">
      <img class="thumbnail" src="images/islamic_pattern.png">
    </div>
    <div class="col-lg-10 my-auto">
      <p class="quote inline"><i>"To access the Truth, we must devote ourselves to the pursuit of this knowledge and seek to understand it through practice."</i></p>
    </div>
  </div>
</div>

@stop
