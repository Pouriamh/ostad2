@extends('layouts.master')

@section('title', 'Course')

@section('script')

<script src="js/course.js" type="text/javascript"></script>
@stop

@section('content')
<div class="container pd-9">
<!-- Heading -->
  <div class="row">
    <div class="text-center col-12">
      <h1>Course Module</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <p class="sp-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et semper ante. Phasellus et lorem quis velit placerat luctus. Nullam fermentum orci eu arcu dapibus, quis tristique neque fringilla. Morbi ultrices quam ex. Suspendisse dui ante, faucibus in tortor eget, ultrices rutrum magna. Donec eu imperdiet ligula. Aenean consectetur pharetra nunc in volutpat. Ut velit erat, rutrum sed eros ut, mollis porttitor neque.</p>
    </div>
  </div>

<!-- Skill Selection -->
<div class="container">
  <div class="row skill-selection sp-3">
    <div id="intermediate" class="col-6 skill-selector text-center active2"><h2>Intermediate</h2></div>
    <div id="master" class="col-6 skill-selector text-center"><h2>Master</h2></div>
  </div>
</div>



<!-- Table Header -->
  <div class="container sp-1">
    <div class="row course-header">
        <div class="course-col">Course</div>
        <div class="description-col">Description</div>
        <div class="status-col">Status</div>
        <div class="icon-col">Progress</div>
    </div>
  </div>

<!-- Courses Table -->
  <div id="course-container">
    <table class="table course-table">
      <thead>
        <tr>
          <th class="course-col"></th>
          <th class="description-col"></th>
          <th class="status-col"></th>
          <th class="icon-col"></th>
        </tr>
      </thead>

<!-- Intermediate Courses -->
      <tbody id="intermediate-courses" style="display:visible">

        @foreach ($intermediateCourses as $course)
          <tr class="course-row">
            <td>{{ $course->title }}</td>
            <td>{{ $course->description }}</td>
            <td>
              <button class="course-button-{{ $course->status }} btn btn-sm">
                <a href="course-subpage/{{ $course->id }}" class="course-link course-status-{{ $course->status }}">
                </a>
              </button>
            </td>
            <td></td>
          </tr>

        @endforeach

      </tbody>
<!-- Master Courses -->
      <tbody id="master-courses" style="display:none">

        @foreach ($masterCourses as $course)
          <tr class="course-row">
            <td>{{ $course->title }}</td>
            <td>{{ $course->description }}</td>
            <td>
              <button class="course-button-{{ $course->status }} btn btn-sm">
                <a href="course-subpage/{{ $course->id }}" class="course-link course-status-{{ $course->status }}">
                </a>
              </button>
            </td>
            <td></td>
          </tr>
        @endforeach

      </tbody>
    </table>
  </div>
<!--
  <div class="col-12 text-center sp-3">
    <button id="course-submit" class="btn btn-success submit-button btn-xl" type="submit"><a>Continue</a></button>
  </div>
-->
</div>

@stop
