@extends('layouts.master')

@section('title', 'Contact')

@section('content')
<div class="container pd-9">

  <div class="row">
    <div class="text-center col-12">
      <h1>Contact</h1>
    </div>
  </div>

  <form class="sp-5" id="contactForm" name="sentMessage" novalidate>
    <div class="row justify-content-center">

      <div class="col-10 col-md-5 form-group">
        <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
        <p class="help-block text-danger"></p>
      </div>

      <div class="col-10 col-md-5 form-group">
        <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
        <p class="help-block text-danger"></p>
      </div>

      <div class="col-10">
        <div class="form-group">
          <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
          <p class="help-block text-danger"></p>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="col-12 text-center">
        <div id="success"></div>
        <button class="btn btn-success submit-button btn-xl" type="submit">Send Message</button>
      </div>
    </div>
  </form>
</div>
@stop
