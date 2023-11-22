<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
      'key',
      'value',
      'name',
  ];

  static function getSiteSettings() {
    $settings = Setting::all();
    $arr = [];
    foreach($settings as $setting) {
      $arr[$setting->key] = $setting->value;
    }

    return $arr;
  }
}
