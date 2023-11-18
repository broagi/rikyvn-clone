<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
  public function index(Request $request) {
    $settings = Setting::all();
    return view('backend.settings', ["settings" => $settings]);
  }

  public function get_update(Request $request, $id) {
    $setting = Setting::where('id', $id)->first();
    if (!$setting) {
      abort(404);
    }

    return view('backend.setting_edit', ["setting" => $setting]);
  }

  public function update(Request $request, $id) {
    $setting = Setting::where('id', $id)->first();
    if (!$setting) {
      abort(404);
    }

    $validator = Validator::make($request->all(), [
      'value' => ['required']
    ]);

    if($validator->fails()) {
      return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
    }

    if ($request->hasFile('value')) {
      $path = $request->file('value')->store('public/attachment');
      $setting->value = Storage::url($path);
    } else {
      $setting->value = $request->get('value');
    }

    $setting->save();
    return redirect()->route('settings')->with('status', 'Setting updated!');
  }


}
