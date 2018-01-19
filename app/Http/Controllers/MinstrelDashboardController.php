<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Admin;

class MinstrelDashboardController extends Controller
{
    public function index() {
      if(Auth::user()) {
        $adminRole = Admin::where('user_id', Auth::user()->id)->first();
        $checkAdminRole = $adminRole->role;
        return view('admin.pages.index', compact('checkAdminRole'));
      } else {
        return redirect('/');
      }
    }
}
