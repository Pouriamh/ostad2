@extends('layouts.master')

@section('title', 'Profile')

@section('content')
  <div class="container pd-9">
    <div class="row">
      <div class="text-center col-12">
        <h1>{{ Auth::user()->name }}'s Profile</h1>
      </div>
    </div>

  </div>
@stop
