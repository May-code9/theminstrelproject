<?php

use App\Admin;
use App\Serial;
use App\Confirmation;
use App\User;

function countUser() {

}

function countSerial() {

}

function countConfirmation() {
  $getListOfUsersWithConfirmStatus = Confirmation::join('users', 'users.id', '=', 'confirmations.user_id')->count();
  return $getListOfUsersWithConfirmStatus;
}

function countAdmin() {

}
