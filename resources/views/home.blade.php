@extends('layouts.master')

@section('title', 'Home')

@section('content')
<!-- Masthead -->
<div class="fluid-container masthead pd-14">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="site-title">
          <h1>Ostad Elahi<br/>
            <span>Music Analysis</span>
          </h1>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center" id="down-arrow-row">
    <div class="col-3 text-center" id="down-arrow-container">
      <h3 class="text-w">Welcome</h3>
      <a href="#home-container"><svg id="down-arrow" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 289 289">
        <title>forward_button</title>
        <circle cx="144.5" cy="144.5" r="138" fill="#222222" stroke="#fec503" stroke-miterlimit="10" stroke-width="13"/>
        <polyline points="212.9 118.6 144.7 186.8 76 118.2" fill="none" stroke="#fec503" stroke-miterlimit="10" stroke-width="13"/>
      </svg></a>
    </div>
  </div>
</div>

<!-- Content Container -->
<div class="container pd-9" id="home-container">
<!-- Overview Section -->
  <section>
<!-- Header Text -->
    <div class="row">
      <div class="text-center col-12">
        <h2 class="page-title">Overview</h2>
        <h3 class="sub-title text-mute">What we wish to share with you.</h3>
      </div>
    </div>

<!-- Section Content -->
    <div class="row">
      <article class="col-12">
        <p class="sp-5">The music of Ostad Elahi is rooted in a tradition that has remained hidden over the centuries. Until relatively recently, this music was played only in small gatherings convened for prayer and contemplation. Ostad Elahi himself never performed in public, and always played for the sake of contemplation, whether alone or in a small circle of family and friends. The pieces that have remained are mostly from the latter part of his life and were recorded with nonprofessional equipment by his family. These recordings comprise some 40 hours on tape, a portion of which has thus far been digitized and published. His music has had a profound impact on all those who have heard it, including many renowned musicians and musicologists.</p>
      </article>
    </div>
  </section>

<!-- Features Section -->
  <section class="sp-9">
<!-- Features Blocks -->
    <div class="row">
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="text-center">
          <img class="icon col-6 col-sm-8 col-lg-12" src="images/waveform_icon.png">
        </div>
        <h2 class="text-center sp-2">Analysis</h2>
        <p class="text-center sp-1 text-mute">Access our musical analysis module, an interactive music player designed to help you practice the music of Ostad Elahi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="text-center">
          <img class="icon col-6 col-sm-8 col-lg-12" src="images/tools_icon.png">
        </div>
        <h2 class="text-center sp-2">Tools</h2>
        <p class="text-center sp-1 text-mute">Explore tunings, terminology, and further helpful resources. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="text-center">
          <img class="icon col-6 col-sm-8 col-lg-12" src="images/course_icon.png">
        </div>
        <h2 class="text-center sp-2">Course</h2>
        <p class="text-center sp-1 text-mute">Enroll in courses designed to guide you through the repertroire and view our collection of videos featuring Dr. Shahrokh Elahi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="text-center">
          <img class="icon col-6 col-sm-8 col-lg-12" src="images/ostad_portrait.jpg">
        </div>
        <h2 class="text-center sp-2">Philosophy</h2>
        <p class="text-center sp-1 text-mute">Explore Ostad Elahi's philosophy of music as a means for establishing spiritual connection. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
    </div>
  </section>
</div>
@stop
