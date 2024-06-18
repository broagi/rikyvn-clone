<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portifolio extends Model
{
    use HasFactory;

    protected $table = 'portifolio';

    protected $fillable = [
      'title',
      'ordering',
      'thumbnail',
      'image1',
      'image2',
      'image3',
      'color1',
      'color2',
      'link'
  ];
}
