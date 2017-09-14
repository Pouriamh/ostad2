@extends('layouts.master')

@section('title', 'Analysis')

@section('script')
<script src="js/search.js" type="text/javascript"></script>
@stop

@section('content')
<div class="container-fluid pd-9">

  <div class="row">
    <div class="text-center col-12">
      <h1>Analysis Module</h1>
    </div>
  </div>



<!-- Search / Result / Info Section -->
  <div class="container-fluid search-section sp-3">
    <div class="row">


<!-- Left Column -->
      <div class="col-4">

<!-- Search Box -->
        <div class="row">
          <div class="col-12">
            <h2 class="text-bold">Search</h2>
            <form class="form-horizontal" style="display: block" method="POST">
              <div class="form-group">
                <div class="col-12 search-field">
                  <input class="form-control" id="search" name="search" type="text">
                </div>
              </div>
            </form>
          </div>
        </div>

<!-- Song List Results -->
        <div class="row">
          <div class="col-12">
            <h2 class="text-bold">Song List</h2>
            <div id="search-results-box" class="results-box">
<!-- Song list goes here -->
              <ul id="search-results" class="results">
                @foreach ($songs as $song)
                <li class="search-result"><a>{{ $song->song }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>

<!-- Filter Checkboxes -->
        <div class="row sp-1">
          <div class="col-12">
            <h2 class="text-bold">Filter</h2>
            <div class="row">
              <div class="checkbox col-4">
                <label><input type="checkbox" value="">&nbsp;Rock</label>
              </div>
              <div class="checkbox col-4">
                <label><input type="checkbox" value="">&nbsp;Hip-Hop</label>
              </div>
              <div class="checkbox col-4">
                <label><input type="checkbox" value="">&nbsp;Country</label>
              </div>
              <div class="checkbox col-4">
                <label><input type="checkbox" value="">&nbsp;Jazz</label>
              </div>
              <div class="checkbox col-4">
                <label><input type="checkbox" value="">&nbsp;Plucking</label>
              </div>
              <div class="checkbox col-4">
                <label><input type="checkbox" value="">&nbsp;Etc.</label>
              </div>
            </div>
          </div>
        </div>

      </div>


<!-- Middle Column -->
      <div class="col-5">
        <div class="row">
          <div class="col-12">
            <h2 class="text-bold">Drag Media to Timeline</h2>
            <div id="drag-media-box" class="results-box">
<!-- Media files go here -->
              <ul id="media-results" class="results">
                <li>(None)</li>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
                <li class="selected">Hello</li>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
                <li>Hello</li>
              </ul>
            </div>
          </div>
        </div>
      </div>


<!-- Right Column -->
      <div class="col-3 right-column">
<!-- Info -->
        <div class="row">
          <div class="col-12">
            <h2 class="text-bold">Info</h2>
            <div class="row">
              <div class="col-12">
                <ul class="media-info">
                  <li>Album Title<br /><span>Presence</span></li>
                  <li>Track Number<br /><span>#3</span></li>
                  <li>Piece Name<br /><span>Farangi Suite</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
<!-- Album Cover -->
        <div class="row align-self-start">
          <div class="col-12 h-100">
            <img class="album-cover" src="images/presence.jpg">
          </div>
        </div>

<!-- End Right Column -->
      </div>

<!-- End Search / Result / Info Row-->
    </div>

<!-- End Search / Result / Info Container -->
    <button id="hide-button" class="btn btn-danger btn-sm">Hide</button>
  </div>

  <!-- Timeline -->
  <h3 class="sp-6 text-center">(TIMELINE WILL GO HERE)</h3>

<!-- End body container -->
</div>

@stop
