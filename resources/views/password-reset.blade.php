@extends('layouts.master')

@section('title', 'Password Reset')

@section('content')


<h1 class="sp-6">hey</h1>

<form method="POST" action="{{ 'reset-password' }}">{{ csrf_field() }}
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
      <button type="submit" class="btn btn-success login-button sp-1 text-uppercase">Confirm</button>
    </div>
  </div>

</form>



@stop
