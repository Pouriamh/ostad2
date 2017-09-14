@extends('layouts.master')

@section('title', 'Analysis')

@section('content')
<!-- Masthead -->
<div class="fluid-container masthead pd-14">
  <div class="container">
    <div class="row">
      <div class="site-title">
        <h1>Ostad Elahi<br/>
          <span>Music Analysis</span>
        </h1>
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
        <p class="sp-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et semper ante. Phasellus et lorem quis velit placerat luctus. Nullam fermentum orci eu arcu dapibus, quis tristique neque fringilla. Morbi ultrices quam ex. Suspendisse dui ante, faucibus in tortor eget, ultrices rutrum magna. Donec eu imperdiet ligula. Aenean consectetur pharetra nunc in volutpat. Ut velit erat, rutrum sed eros ut, mollis porttitor neque.</p>
        <p>Vestibulum fringilla sapien sit amet elit condimentum varius. Nulla enim urna, mattis tempor vehicula at, vestibulum vitae nulla. Ut suscipit finibus sapien, at posuere sapien tincidunt at. Nam consequat massa et scelerisque vestibulum. Suspendisse potenti. Sed viverra dignissim suscipit. Etiam in suscipit felis.</p>
        <p>Sed posuere lorem at tempor volutpat. Nullam molestie diam velit, ut lobortis diam euismod quis. Donec quis eleifend diam. Cras et ante facilisis, semper arcu et, porttitor est. Ut pellentesque eget turpis ut aliquet. Proin sit amet condimentum risus. Morbi at leo turpis. Morbi in pulvinar tellus, in iaculis nibh. In auctor eu diam a faucibus. Praesent hendrerit tincidunt nulla, quis pharetra nulla euismod nec. Quisque sed nulla venenatis, laoreet quam in, tincidunt est. Nam scelerisque quam eu odio placerat, eu ornare arcu aliquet. In hac habitasse platea dictumst. Duis id molestie massa.</p>
      </article>
    </div>
  </section>

<!-- Features Section -->
  <section class="sp-9">
<!-- Features Blocks -->
    <div class="row">
      <div class="col-lg-3 col-sm-6 col-12">
        <div>
          <img class="icon mx-auto" src="images/waveform_icon.png">
        </div>
        <h2 class="text-center sp-2">Analysis</h2>
        <p class="text-center sp-1 text-mute">Access our musical analysis module, an interactive music player designed to help you practice the music of Ostad Elahi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-lg-3 col-sm-6 col-12">
        <div>
          <img class="icon" src="images/tools_icon.png">
        </div>
        <h2 class="text-center sp-2">Tools</h2>
        <p class="text-center sp-1 text-mute">Explore tunings, terminology, and further helpful resources. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-lg-3 col-sm-6 col-12">
        <div>
          <img class="icon" src="images/course_icon.png">
        </div>
        <h2 class="text-center sp-2">Course</h2>
        <p class="text-center sp-1 text-mute">Enroll in courses designed to guide you through the repertroire and view our collection of videos featuring Dr. Shahrokh Elahi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
      <div class="col-lg-3 col-sm-6 col-12">
        <div>
          <img class="icon" src="images/ostad_portrait.jpg">
        </div>
        <h2 class="text-center sp-2">Philosophy</h2>
        <p class="text-center sp-1 text-mute">Explore Ostad Elahi's philosophy of music as a means for establishing spiritual connection. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      </div>
    </div>
  </section>
</div>
@stop
