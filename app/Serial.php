<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serial extends Model
{
    protected $fillable = [
      'teller_no', 'user_id'
    ];
}
