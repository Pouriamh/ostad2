<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class SearchController extends Controller
{
    public function index()
    {
      $songs=DB::table('songs')->get();
      return view('analysis', compact('songs'));
    }

    public function search(Request $request)
    {
      $output="";
      if ($request->ajax())
      {
        $output="";
        $songs=DB::table('songs')->where('song','LIKE','%'.$request->search.'%')->get();

        if ($songs)
        {
          foreach ($songs as $song) {
            $output.='<li class="search-result"><a>'.$song->song.'</a></li>';
          }
          return Response($output);
        }
      }
    }
  }




        /*
        $output="";
        $songs=DB::table('songs')->where('song','LIKE','%'.$request->search.'%')->get();
        if ($songs)
        {
          foreach ($songs as $song) {
            $output.='<li>'.$song->song.'</li>';
          }
          return Response($output);
        }*/
