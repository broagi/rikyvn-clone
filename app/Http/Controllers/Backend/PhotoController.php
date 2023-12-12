<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;
use Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
  public function getindex(Request $request) {
    $photos = Photo::orderBy("ordering")->get();
    return view('backend.photos', ["photos" => $photos]);
  }

  public function get_update(Request $request, $id) {
    $photo = Photo::where('id', $id)->first();
    if (!$photo) {
      abort(404);
    }
    return view('backend.photo_edit', ["photo" => $photo]);
  }

  public function upload(Request $request) {
    $validator = Validator::make($request->all(), [
      'attachment' => 'file',
      'title' => ['required'],
      'ordering' => 'nullable|numeric|min:1'
    ]);

    if($validator->fails()) {
      return redirect('/dashboard/photo/upload')
                        ->withErrors($validator)
                        ->withInput();
    }
    $path = $request->file('attachment')->store('public/attachment');
    Photo::create([
      "title" => $request->get('title'),
      "path" => Storage::url($path),
      "ordering" => $request->get('ordering')
    ]);
    return redirect()->route('photos')->with('status', 'Photo uploaded!');
  }

  public function update(Request $request, $id) {
    $validator = Validator::make($request->all(), [
      'title' => 'nullable|string',
      'ordering' => 'nullable|numeric|min:1'
    ]);

    if($validator->fails()) {
      return redirect('/dashboard/photo/upload')
                        ->withErrors($validator)
                        ->withInput();
    }
    $photo = Photo::where('id', $id)->first();
    if (!$photo) {
      abort(404);
    }

    if ($request->hasFile('attachment')) {
      $path = $request->file('attachment')->store('public/attachment');
      $photo->path = Storage::url($path);
    }

    $photo->fill($request->all());

    $photo->save();
    return redirect()->route('photos')->with('status', 'Photo updated!');
  }

  public function delete(Request $request, $id) {
    $photo = Photo::where('id', $id)->first();
    if (!$photo) {
      abort(404);
    }

    if ($photo->delete()) {
      return redirect()->route('photos')->with('status', 'Delete Successfully');
    }

    return redirect()->route('photos')->with('status', 'Delete Fail');
  }
}
