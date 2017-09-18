@extends('layouts.master')

@section('content')
<div class="container pd-9">

  <div class="row">
    <div class="text-center col-12">
      <h1>Forgot Password?</h1>
    </div>
  </div>

  @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif

          <div class="row justify-content-center">
            <form class="sp-5 col-6" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <!-- <label for="email" class="col-12 control-label">E-Mail Address</label> -->

                    <div class="col-12">
                        <input id="email" type="email" class="form-control" placeholder="Email Address *" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-success">
                            Send Password Reset Link
                        </button>
                    </div>
                </div>
            </form>
            <div class="col-12 sp-3">
              <div class="d-flex justify-content-center">
                <a href="/login"><i class="my-auto fa fa-arrow-circle-o-left fa-3x" aria-hidden="true"></i></a>
                <h3 class="my-auto pl-2 text-bold">Back to login page</h3>
              </div>
            </div>
          </div>

</div>


@endsection
