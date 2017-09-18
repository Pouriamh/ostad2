@extends('layouts.master')

@section('title', 'Subpage')

@section('content')

  <div class="container pd-9">
<!-- Heading -->
    <div class="row">
      <div class="text-center col-12">
        <h1>{{ $course->description }}</h1>
      </div>
    </div>

  <div class="progress-header sp-3">
<!-- Progress Info -->
    <div class="row">
      <div class="col-12 col-lg-2">
        <h2 class="my-auto">Progress</h2>
      </div>
      <div class="col-12 col-lg-10 my-auto">
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="70" area-valuemin="0" aria-valuemax="100" style="width:70%">70%</div>
        </div>
      </div>
    </div>

<!-- Back / Upload -->
    <div class="row sp-2">
      <div class="col-12">
        <div class="d-flex justify-content-between">

          <div class="d-flex">
            <a href="/course"><i class="my-auto fa fa-arrow-circle-o-left fa-3x" aria-hidden="true"></i></a>
            <h3 class="my-auto pl-2 text-bold">Back to course list</h3>
          </div>

          <div class="d-flex">
            <button class="btn btn-danger d-flex my-auto text-uppercase" id="upload-button">
              <i class="fa fa-upload fa-2x" aria-hidden="true"></i><span class="align-self-center pl-3">Upload Video</span></button>
          </div>

        </div>
      </div>
    </div>
  </div>

<!-- Timeline -->
<h3 class="sp-6 text-center">(TIMELINE WILL GO HERE)</h3>
<!-- Video Section -->
  <section class="sp-6">
    <div class="row">
      <div class="text-center col-12">
        <h2 class="text-large">Video</h2>
      </div>
    </div>
  <!-- Videos -->
    <div class="row sp-3">

      <div class="col-12 col-md-6">
        <h2>The Art of Tanbour Part I</h3>
        <h3 class="sub-title text-mute p-0">Short description.</h3>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://player.vimeo.com/video/34375032" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <h2>The Art of Tanbour Part II</h3>
        <h3 class="sub-title text-mute p-0">Short description.</h3>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://player.vimeo.com/video/34297911" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </div>

    </div>
  </section>

</div>

@stop
