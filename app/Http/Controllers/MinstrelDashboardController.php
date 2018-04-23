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

  public function viewGalleryImg() {
    $adminRole = Admin::where('user_id', Auth::user()->id)->first();
    $checkAdminRole = $adminRole->role;
    $galleryImages = Gallery::orderBy('id', 'desc')->paginate(6);
    return view('admin.pages.gallery.viewgallery', compact('checkAdminRole', 'galleryImages'));
  }
  public function editGalleryImg($id) {
    $adminRole = Admin::where('user_id', Auth::user()->id)->first();
    $checkAdminRole = $adminRole->role;
    $galleryImages = Gallery::findOrFail($id);
    return view('admin.pages.gallery.edit', compact('checkAdminRole', 'galleryImages'));
  }
}
