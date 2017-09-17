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
  <div id="search-section" class="container-fluid search-section sp-3">
    <div id="append-columns" class="row">

<!-- Left Column -->
      <div id="search-left-column" class="col-4">

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
                <li data-song="{{ $song->song }}" data-id="{{ $song->id }}" data-album="{{ $song->album }}" data-track="{{ $song->track_number }}" data-image="{{ $song->image }}" class="search-result">{{ $song->song }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>

<!-- Filter Checkboxes -->
        <div class="row sp-1">
          <div class="col-12">
            <h2 class="text-bold">Filter</h2>
            <div id="checkbox-row" class="row">
              <div class="checkbox col-4">
                <label><input id="paragraph-box" class="filter-checkbox" data-type="paragraph" type="checkbox" value="paragraph">Paragraph</label>
              </div>
              <div class="checkbox col-4">
                <label><input id="sentence-box" class="filter-checkbox" data-type="sentence" type="checkbox" value="sentence">Sentence</label>
              </div>
              <div class="checkbox col-4">
                <label><input id="phrase-box" class="filter-checkbox" data-type="phrase" type="checkbox" value="phrase">Phrase</label>
              </div>
              <div class="checkbox col-4">
                <label><input id="motif-box" class="filter-checkbox" data-type="motif" type="checkbox" value="motif">Motif</label>
              </div>
              <div class="checkbox col-4">
                <label><input id="plucking-box" class="filter-checkbox" data-type="plucking" type="checkbox" value="plucking">Plucking</label>
              </div>
              <div class="checkbox col-4">
                <label><input id="etc-box" class="filter-checkbox" data-type="" type="checkbox" value="">Etc.</label>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Middle Column -->
      <div id="search-middle-column" class="col-5">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-12 d-flex justify-content-between">
                <h2 class="text-bold">Drag Media to Timeline</h2>
                <button id="show-all" class="btn btn-danger btn-sm mb-2">Show All Audio</button>
              </div>
            </div>
            <div id="drag-media-box" class="results-box">

<!-- Audio files populate here -->
              <ul id="media-results" class="results">
              @foreach ($audio_files as $audio_file)
                <li class="audio-file" data-type="{{ $audio_file->type }}" data-song-id="{{ $audio_file->song_id }}">{{ $audio_file->file }}</li>
              @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>

<!-- Right Column -->
      <div id="search-right-column" class="col-3 right-column">
<!-- Info -->
        <div class="row">
          <div class="col-12">
            <h2 class="text-bold">Info</h2>
            <div class="row">
              <div class="col-12">
                <ul class="media-info">
                  <li>Album Title<br /><span id="info-album">Presence</span></li>
                  <li>Track Number<br /><span id="info-track">#3</span></li>
                  <li>Piece Name<br /><span id="info-song">Farangi Suite</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
<!-- Album Cover -->
        <div class="row align-self-start">
          <div class="col-12 h-100">
            <img id="info-image" class="album-cover" src="images/presence.jpg">
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
