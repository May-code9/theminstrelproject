<?php

use App\Admin;
use App\Serial;
use App\Video;
use App\Gallery;
use App\Confirmation;
use App\User;

function countUser() {
  $getUsers = User::count();
  return $getUsers;
}

function countTeller() {
  $counter = Serial::count();
  return $counter;
}

function countConfirmation() {
  $getListOfUsersWithConfirmStatus = Confirmation::where('confirmed', 1)->count();
  return $getListOfUsersWithConfirmStatus;
}

function countSuperAdmin() {
  $counter = Admin::where('role', 4)->count();
  return $counter;
}

function countAdmin() {
  $counter = Admin::where('role', 3)->count();
  return $counter;
}

function countImages() {
  $counter = Gallery::count();
  return $counter;
}
function countVideos() {
  $counter = Video::count();
  return $counter;
}
