<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirmation extends Model
{
    protected $fillable = [
      'user_id', 'confirmed'
    ];

    public function getConfirmedAttribute($value) {
      if($value == 0) {
        $display = "Not Active";
      } else {
        $display = "Active";
      }
      return $display;
    }
    public function getHandicapAttribute($value) {
      if($value) {
        $display = $value;
      } else {
        $display = "None";
      }
      return $display;
    }
}
