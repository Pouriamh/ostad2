@extends('layouts.master')

@section('title', 'Analysis')

@section('script')
<script src="js/search_script.js"></script>
@stop

@section('content')
<div class="container-fluid pd-9">

  <div class="row">
    <div class="text-center col-12">
      <h1>Analysis Module</h1>
    </div>
  </div>

<!-- Search -->

  <div class="container-fluid sp-3">
    <div class="row">
      <div class="col-4">

        <h3 class="text-bold">Search</h3>
        <form class="form-horizontal" style="display: block" method="POST">
          <div class="form-group">
            <div class="col-12 search-field">
              <input class="form-control" id="search" type="text">
            </div>
          </div>
        </form>

        <h3 class="text-bold">Song List</h3>
        <div class="col12">
          <div id="search-display">
          </div>
        </div>
      </div>
      <div class="col-5">
        <h3 class="text-bold">Drag Media to Timeline</h3>
      </div>
      <div class="col-3">
        <h3 class="text-bold">Info</h3>
      </div>
    </div>
  </div>

</div>
@stop
