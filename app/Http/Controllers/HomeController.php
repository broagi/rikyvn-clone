<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Log;

class HomeController extends Controller
{
    public function getindex() {
      $settings = Setting::all();

      $arr = [];
      foreach($settings as $setting) {
        $arr[$setting->key] = $setting->value;
      }

      return view('home', ["settings" => $arr]);
    }
}
