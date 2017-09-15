@extends('layouts.master')

@section('title', 'Change Password')

@section('content')


<div class="container pd-9">

  <div class="row">
    <div class="text-center col-12">
      <h1>Change Password</h1>
    </div>
  </div>

<div class="row justify-content-center">
<form class="sp-5 col-6" method="POST" action="{{ 'reset-password' }}">{{ csrf_field() }}
  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <!--<label for="password" class="col-md-4 control-label">Password</label>-->
    <div class="col-12">
      <input id="password" placeholder="New Password" type="password" class="form-control" name="password" required>
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
</div>
</div>


@stop
