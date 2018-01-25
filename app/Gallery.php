<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
  protected $fillable = [
    'image_title', 'image_text', 'mini_image', 'large_image'
  ];
}
