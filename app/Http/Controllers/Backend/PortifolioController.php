<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portifolio;
use Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PortifolioController extends Controller
{
  public function getindex(Request $request) {
    $portifolios = Portifolio::orderBy("ordering")->get();
    return view('backend.portifolio.index', ["portifolios" => $portifolios]);
  }

  public function get_update(Request $request, $id) {
    $portifolio = Portifolio::where('id', $id)->first();
    if (!$portifolio) {
      abort(404);
    }

    return view('backend.portifolio.edit', ["portifolio" => $portifolio]);
  }

  public function upload(Request $request) {
    $validator = Validator::make($request->all(), [
      'title' => ['required'],
      'ordering' => 'nullable|numeric|min:1',
      'link' => 'nullable|string',
      'thumbnail' => 'nullable|file|max:5000',
      'image1' => 'nullable|file|max:5000',
      'image2' => 'nullable|file|max:5000',
      'image3' => 'nullable|file|max:5000',
      'color1' => 'nullable|string',
      'color2' => 'nullable|string',
    ]);

    if($validator->fails()) {
      return redirect('/dashboard/portifolios/upload')
                        ->withErrors($validator)
                        ->withInput();
    }

    $portifolio = new Portifolio();
    $portifolio->title = $request->get('title');
    $portifolio->ordering = $request->get('ordering');
    $portifolio->link = $request->get('link');
    $portifolio->color1 = $request->get('color1');
    $portifolio->color2 = $request->get('color2');

    if ($request->hasFile('image1')) {
      $portifolio->image1 = $request->file('image1')->store('public/portifolios');
    }
    if ($request->hasFile('image2')) {
      $portifolio->image2 = $request->file('image2')->store('public/portifolios');
    }
    if ($request->hasFile('image3')) {
      $portifolio->image3 = $request->file('image3')->store('public/portifolios');
    }
    if ($request->hasFile('thumbnail')) {
      $portifolio->thumbnail = $request->file('thumbnail')->store('public/portifolios');
    }

    if ($portifolio->save()) {
      return redirect()->route('portifolios')->with('status', 'Uploaded success!');
    }
    
    return redirect('/dashboard/portifolios/upload')
                        ->withErrors(['msg' => 'Uploaded fail'])
                        ->withInput();
  }

  public function update(Request $request, $id) {
    $validator = Validator::make($request->all(), [
      'title' => 'nullable|string',
      'ordering' => 'nullable|numeric|min:1',
      'link' => 'nullable|string',
      'thumbnail' => 'nullable|file|max:5000',
      'image1' => 'nullable|file|max:5000',
      'image2' => 'nullable|file|max:5000',
      'image3' => 'nullable|file|max:5000',
      'color1' => 'nullable|string',
      'color2' => 'nullable|string',
    ]);

    if($validator->fails()) {
      return redirect('/dashboard/portifolios/'.$id.'/edit')
                        ->withErrors($validator)
                        ->withInput();
    }

    $portifolio = Portifolio::where('id', $id)->first();
    if (!$portifolio) {
      abort(404);
    }

    if ($request->hasFile('image1')) {
      $portifolio->image1 = $request->file('image1')->store('public/portifolios');
    }
    if ($request->hasFile('image2')) {
      $portifolio->image2 = $request->file('image2')->store('public/portifolios');
    }
    if ($request->hasFile('image3')) {
      $portifolio->image3 = $request->file('image3')->store('public/portifolios');
    }
    if ($request->hasFile('thumbnail')) {
      $portifolio->thumbnail = $request->file('thumbnail')->store('public/portifolios');
    }

    $portifolio->fill($request->except(['image1', 'image2'], 'image3', 'thumbnail'));

    if ($portifolio->save()) {
      return redirect()->route('portifolios')->with('status', 'Updated success!');
    }
    
    return redirect('/dashboard/portifolios/upload')
                        ->withErrors(['msg' => 'Uploaded fail'])
                        ->withInput();
  }

  public function delete(Request $request, $id) {
    $portifolio = Portifolio::where('id', $id)->first();
    if (!$portifolio) {
      abort(404);
    }

    if ($portifolio->delete()) {
      return redirect()->route('portifolios')->with('status', 'Delete Successfully');
    }

    return redirect()->route('portifolios')->with('status', 'Delete Fail');
  }
}
