<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
  public function getindex(Request $request) {
    $videos = Video::all();
    return view('backend.videos', ["videos" => $videos]);
  }

  public function get_update(Request $request, $id) {
    $video = Video::where('id', $id)->first();
    if (!$video) {
      abort(404);
    }
    return view('backend.video_edit', ["video" => $video]);
  }

  public function upload(Request $request) {
    $validator = Validator::make($request->all(), [
      'attachment' => 'file',
      'title' => ['required']
    ]);

    if($validator->fails()) {
      return redirect('/dashboard/video-upload')
                        ->withErrors($validator)
                        ->withInput();
    }
    $path = $request->file('attachment')->store('public/attachment');
    Video::create([
      "title" => $request->get('title'),
      "path" => Storage::url($path)
    ]);
    return redirect()->route('videos')->with('status', 'Video uploaded!');
  }

  public function update(Request $request, $id) {
    $video = Video::where('id', $id)->first();
    if (!$video) {
      abort(404);
    }

    if ($request->hasFile('attachment')) {
      $path = $request->file('attachment')->store('public/attachment');
      $video->path = Storage::url($path);
    }

    $video->fill($request->all());

    $video->save();
    return redirect()->route('videos')->with('status', 'Video updated!');
  }

  public function delete(Request $request, $id) {
    $video = Video::where('id', $id)->first();
    if (!$video) {
      abort(404);
    }

    if ($video->delete()) {
      return redirect()->route('videos')->with('status', 'Delete Successfully');
    }

    return redirect()->route('videos')->with('status', 'Delete Fail');
  }
}
