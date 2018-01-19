<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'age', 'gender', 'school', 'city', 'state', 'inspiration', 'handicap',
        'phone_number', 'phone_number2', 'parent_name', 'address', 'church'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setFirstNameAttribute($value) {
      $this->attributes['first_name'] = ucfirst($value);
    }
    public function setLastNameAttribute($value) {
      $this->attributes['last_name'] = ucfirst($value);
    }
}
