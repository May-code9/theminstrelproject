<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Admin;

class AdminSearchController extends Controller
{
    public function searchAddressInfo(Request $request) {
      $adminRole = Admin::where('user_id', Auth::user()->id)->first();
      $checkAdminRole = $adminRole->role;
      $nameSearch = $request->get('name_search');
      $users = User::where('first_name', 'LIKE', '%'.$nameSearch.'%')
      ->orWhere('last_name', 'LIKE', '%'.$nameSearch.'%')
      ->get();
      return view('admin.pages.search.addressinfo', compact('nameSearch', 'users', 'checkAdminRole'));
    }
    public function searchContactInfo(Request $request) {
      $adminRole = Admin::where('user_id', Auth::user()->id)->first();
      $checkAdminRole = $adminRole->role;
      $nameSearch = $request->get('name_search');
      $users = User::where('first_name', 'LIKE', '%'.$nameSearch.'%')
      ->orWhere('last_name', 'LIKE', '%'.$nameSearch.'%')
      ->get();
      return view('admin.pages.search.contactinfo', compact('nameSearch', 'users', 'checkAdminRole'));
    }
}
