<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProgressController extends Controller
{
  public function index() {

    $intermediateCourses = DB::table('courses')->where('level', '=', 1)->get();

    $masterCourses = DB::table('courses')->where('level', '=', 2)->get();

    return view('/progress', compact('intermediateCourses', 'masterCourses'));
  }
}
