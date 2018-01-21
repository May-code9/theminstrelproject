<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serial extends Model
{
    protected $fillable = [
      'teller_no', 'user_id', 'confirmation_id'
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
