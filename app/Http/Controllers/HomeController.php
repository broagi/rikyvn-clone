<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Video;
use App\Models\Photo;
use Log;

class HomeController extends Controller
{
    public function getindex() {
      $settings = Setting::all();
      $videos = Video::orderBy("ordering")->limit(12)->get();
      $photos = Photo::orderBy("ordering")->get();

      $arr = [];
      foreach($settings as $setting) {
        $arr[$setting->key] = $setting->value;
      }

      return view('home', ["settings" => $arr])->with('videos', $videos)->with('photos', $photos);
    }
}
