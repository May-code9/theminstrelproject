<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
      'video_title', 'link', 'date_of_video', 'time_of_video'
    ];

    public function getDayAttribute() {
      return date_format($this->created_at, 'd');
    }
    public function getMonthAttribute() {
      return date_format($this->created_at, 'M');
    }
}
