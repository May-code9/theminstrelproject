<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
      'video_title', 'link', 'date_of_video', 'time_of_video'
    ];
    protected $dates = [
      'date_of_video'
    ];

    public function getDayAttribute() {
      return date_format($this->date_of_video, 'd');
    }
    public function getMonthAttribute() {
      return date_format($this->date_of_video, 'M');
    }
}
