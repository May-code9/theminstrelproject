<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Admin;
use App\Gallery;

class MinstrelDashboardController extends Controller
{
  public function index() {

    $adminRole = Admin::where('user_id', Auth::user()->id)->first();
    $checkAdminRole = $adminRole->role;
    return view('admin.pages.index', compact('checkAdminRole'));
  }
  public function addGallery() {
    $adminRole = Admin::where('user_id', Auth::user()->id)->first();
    $checkAdminRole = $adminRole->role;
    return view('admin.pages.gallery.gallery', compact('checkAdminRole'));
  }
  public function viewGallery() {
    $adminRole = Admin::where('user_id', Auth::user()->id)->first();
    $checkAdminRole = $adminRole->role;
    $galleries = Gallery::orderBy('id', 'desc')->get();
    return view('admin.pages.gallery.viewgallery', compact('checkAdminRole', 'galleries'));
  }
}
