@extends('layouts.master')

@section('title', 'Philosophy')

  @section('content')
<form id="contactForm" name="sentMessage" novalidate>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
        <p class="help-block text-danger"></p>
      </div>
      <div class="form-group">
        <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
        <p class="help-block text-danger"></p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
        <p class="help-block text-danger"></p>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-12 text-center">
      <div id="success"></div>
      <button class="btn btn-xl" type="submit">Send Message</button>
    </div>
  </div>
</form>
@endsection
