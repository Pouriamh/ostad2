@extends('layouts.master')

@section('title', 'Progress')

@section('content')
<div class="container pd-9">
  <div class="row">
    <div class="text-center col-12">
      <h1>Course Progress</h1>
    </div>
  </div>
</div>


<table>
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
<table>
@stop
