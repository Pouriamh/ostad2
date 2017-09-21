@extends('layouts.master')

@section('title', 'Projects')

@section('content')
<div class="container page-container pd-9">
  <div class="row">
    <div class="text-center col-12">
      <h1>Projects</h1>
    </div>
  </div>

<!-- Saved Projects Table -->
<!-- Back end will need table/controller for managing user's saved info and
to populate the table dynamically with info simlar to structure of "course" page -->
  <table class="table projects-table sp-5">
    <thead>
      <tr>
        <th>Project Name</th>
        <th>Date Saved</th>
        <th>Load Project</th>
      </tr>
    </thead>
    <tbody>
      @for ($i = 0; $i < 10; $i++)
      <tr>
        <td>Project Name</td>
        <td>...</td>
        <td><button class="btn btn-success btn-sm"><a href="/analysis" class="course-link">Load</a></button></td>
      </tr>
      @endfor
    </tbody>
  </table>

</div>
@stop
