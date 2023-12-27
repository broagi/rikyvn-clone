<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class VideoController extends Controller
{
  public function getindex(Request $request) {
    $videos = Video::orderBy("ordering")->get();
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
      // 'attachment' => 'file',
      'title' => ['required'],
      'ordering' => 'nullable|numeric|min:1',
      'embed_frame' => 'required|string',
      'description' => 'nullable|string',
      'cover' => 'nullable|file|max:500'
    ]);

    if($validator->fails()) {
      return redirect('/dashboard/video/upload')
                        ->withErrors($validator)
                        ->withInput();
    }
    // $path = $request->file('attachment')->store('public/attachment');

    $cover = '';
    if ($request->hasFile('cover')) {
      $cover = $request->file('cover')->store('public/attachment');
    }

    Video::create([
      "title" => $request->get('title'),
      // "path" => Storage::url($path),
      "path" => '',
      "cover" => Storage::url($cover),
      "ordering" => $request->get('ordering'),
      "embed_frame"  => $request->get('embed_frame'),
      "description" => $request->get('description'),
      "slug" => Str::slug($request->get('title')),
      "primary" => $request->get('primary') == 'on' ? 1 : 0
    ]);
    return redirect()->route('videos')->with('status', 'Video uploaded!');
  }

  public function update(Request $request, $id) {
    $validator = Validator::make($request->all(), [
      'title' => 'nullable|string',
      'ordering' => 'nullable|numeric|min:1',
      'embed_frame' => 'nullable|string',
      'description' => 'nullable|string',
      'cover' => 'nullable|file|max:500'
    ]);

    if($validator->fails()) {
      return redirect('/dashboard/videos/'.$id.'/edit')
                        ->withErrors($validator)
                        ->withInput();
    }

    $video = Video::where('id', $id)->first();
    if (!$video) {
      abort(404);
    }

    // if ($request->hasFile('attachment')) {
    //   $path = $request->file('attachment')->store('public/attachment');
    //   $video->path = Storage::url($path);
    // }

    if ($request->hasFile('cover')) {
      $cover = $request->file('cover')->store('public/attachment');
      $video->cover = Storage::url($cover);
    }

    // $video->title = $request->get('title');
    // $video->fill($request->all());
    $video->fill($request->except(['primary', 'cover']));

    if ($request->has('title')) {
      $video->slug = Str::slug($request->get('title'));
    }

    if ($request->has('primary')) {
      Log::info($request->get('primary'));
      $video->primary = $request->get('primary') == 'on' ? 1 : 0;
    }

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
