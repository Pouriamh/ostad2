@extends('layouts.master')

@section('title', 'Profile')

@section('script')
<script src="js/bootstrap-formhelpers-countries.en_US.js" type="text/javascript"></script>
<script src="js/bootstrap-formhelpers-countries.js" type="text/javascript"></script>
@stop

@section('content')
<div class="container pd-9">
  <div class="row">
    <div class="text-center col-12">
      <h1>{{ Auth::user()->name }}'s Profile</h1>
    </div>
  </div>

  <div class="row justify-content-center sp-5">
    <div class="col-10">

      <div class="card">
        <div class="card-header">
          Info
        </div>
        <div class="card-block">
          <div class="container">

            <form method="POST" action="{{ action('UserController@update', Auth::user()->id) }}">{{ csrf_field() }}

              <div class="form-group row sp-2">
                <label class="col-3" for="name">Name</label>
                <input name="name" type="text" class="col-9 form-control" id="name"  value="{{ Auth::user()->name }}">
              </div>

              <div class="form-group row">
                <label class="col-3" for="email">Email Address</label>
                <input name="email" type="email" class="col-9 form-control" id="email"  value="{{ Auth::user()->email }}">
              </div>

              <div class="form-group row">
                <label class="col-3" for="language">Language</label>
                <select name="language" class="col-9 form-control" id="language">
                  <option>English</option>
                  <option>French</option>
                  <option>Persian</option>
                </select>
              </div>

              <div class="form-group row">
                <label class="col-3" for="location">Location</label>
                <select name="location" class="col-9 input-medium bfh-countries form-control" data-country="US" id="location">
                </select>
              </div>

              <a href="{{ 'reset-password' }}">Change Password</a>

              @if(isset($resetMessage))
                     <div class="alert alert-success">
                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                         {{ $resetMessage }}
                     </div>
              @endif

              <div class="form-group row sp-5">
                <div class="col-6">
                  <button type="submit" class="btn btn-success">Save Changes</button>
                </div>

                <div class="col-6 d-flex justify-content-end">
                  <button class="btn btn-danger">Reset Profile</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
