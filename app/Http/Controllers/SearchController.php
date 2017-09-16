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
        $songs=DB::table('songs')->where('song','LIKE','%'.$request->input.'%')->get();

        if ($songs)
        {
          foreach ($songs as $song) {
            $output.='<li data-song="'.$song->song.'" data-id="'.$song->id.'" data-album="'.$song->album.'" data-track="'.$song->track_number.'" data-image="'.$song->image.'" class="search-result">'.$song->song.'</li>';
          }
          return Response($output);
        }
      }
    }

    public function show(Request $request)
    {
      $output="";
      if ($request->ajax())
      {
        $output="";
        $audio_files=DB::table('audio_files')->where('song_id', '=', $request->song)->get();

        if($audio_files)
        {
          foreach ($audio_files as $audio_file) {
            $output.='<li class="audio-file" data-type="'.$audio_file->type.'" data-song-id="'.$audio_file->song_id.'">'.$audio_file->file.'</li>';
          }
          return Response($output);
        }
      }
    }



    public function reset(Request $request)
    {
      $output="";
      $audio_files=DB::table('audio_files')->get();

      foreach ($audio_files as $audio_file) {
        $output.='<li class="audio-file" data-type="'.$audio_file->type.'" data-song-id="'.$audio_file->song_id.'">'.$audio_file->file.'</li>';
      }
      return Response($output);
    }

    public function filter(Request $request)
    {
      $output="";
      if ($request->ajax())
      {
        $output="";
        $audio_files=DB::table('audio_files')->where('song_id', '=', $request->song)->where('type', '=', $request->type)->get();

        if($audio_files)
        {
          foreach ($audio_files as $audio_file) {
            $output.='<li class="audio-file" data-type="'.$audio_file->type.'" data-song-id="'.$audio_file->song_id.'">'.$audio_file->file.'</li>';
          }
          return Response($output);
        }
      }
    }

    // THIS ACTION (FILTER) IS WORKING PROPERLY
    // public function filter(Request $request)
    // {
    //   $output="";
    //   $audio_files=DB::table('audio_files')->where('type', '=', $request->type)->get();
    //
    //   if($audio_files)
    //   {
    //       foreach ($audio_files as $audio_file)
    //       {
    //         $output.='<li class="audio-file" data-type="'.$audio_file->type.'" data-song-id="'.$audio_file->song_id.'">'.$audio_file->file.'</li>';
    //       }
    //       return Response($output);
    //   }
    //
    // }

}
