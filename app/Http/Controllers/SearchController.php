<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
use App\AudioFile;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class SearchController extends Controller
{
    public function index()
    {
      $songs=DB::table('songs')->get();
      $audio_files=DB::table('audio_files')->get();
      return view('analysis', compact('songs', 'audio_files'));
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
            $output.='<li data-song="'.$song->song.'" data-id="'.$song->id.'" data-album="'.$song->album.'" data-track="'.$song->track_number.'" data-image="'.$song->image.'" class="search-result">'.$song->song.'</li>';
          }
          return Response($output);
        }
      }
    }

    public function show($id)
    {
      $song = Song::find($id);

      if ($course->status == 0) {
        return redirect()->action('CourseController@index');
      } else {
      return view('course-subpage', compact('course'));
      }
    }


}
