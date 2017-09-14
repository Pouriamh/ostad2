<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

use DB;

class CourseController extends Controller
{

    public function index() {

      $intermediateCourses = DB::table('courses')->where('level', '=', 1)->get();

      $masterCourses = DB::table('courses')->where('level', '=', 2)->get();

      return view('/course', compact('intermediateCourses', 'masterCourses'));
    }

    public function show($id) {
      $course = Course::find($id);
      if ($course->status == 0) {
        return redirect()->action('CourseController@index');
      } else {
      return view('course-subpage', compact('course'));
    }
  }

}
