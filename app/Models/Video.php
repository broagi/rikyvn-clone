<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
      'path',
      'title',
      'ordering',
      'cover',
      'embed_frame',
      'description',
      'slug',
      'primary'
  ];
}
