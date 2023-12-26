<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function get_video(Request $request, $slug = null) {
      if (!$slug) {
        $related_videos = Video::orderBy("ordering")->get();
        return view('video.index')->with('related_videos', $related_videos);
      }

      $video = Video::where('primary', 1)->first();
      // if (!$video) {
      //   abort(404);
      // }

      // $related_videos = Video::where('id', '!=', $video->id)->orderBy("ordering")->get();
      $related_videos = Video::orderBy("ordering")->get();

      return view('video.index', ["video" => $video])->with('related_videos', $related_videos);
    }
}
