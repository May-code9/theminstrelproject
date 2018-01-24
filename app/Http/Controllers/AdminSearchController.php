<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Admin;
use App\Serial;
use App\Confirmation;

class AdminSearchController extends Controller
{
    public function searchAddressInfo(Request $request) {
      $adminRole = Admin::where('user_id', Auth::user()->id)->first();
      $checkAdminRole = $adminRole->role;
      $nameSearch = $request->get('name_search');
      $users = User::where('first_name', 'LIKE', '%'.$nameSearch.'%')
      ->orWhere('last_name', 'LIKE', '%'.$nameSearch.'%')
      ->orWhere('city', 'LIKE', '%'.$nameSearch.'%')
      ->orWhere('state', 'LIKE', '%'.$nameSearch.'%')
      ->get();
      return view('admin.pages.search.addressinfo', compact('nameSearch', 'users', 'checkAdminRole'));
    }
    public function searchContactInfo(Request $request) {
      $adminRole = Admin::where('user_id', Auth::user()->id)->first();
      $checkAdminRole = $adminRole->role;
      $nameSearch = $request->get('name_search');
      $users = User::where('first_name', 'LIKE', '%'.$nameSearch.'%')
      ->orWhere('last_name', 'LIKE', '%'.$nameSearch.'%')
      ->orWhere('email', 'LIKE', '%'.$nameSearch.'%')
      ->orWhere('phone_number', 'LIKE', '%'.$nameSearch.'%')
      ->get();
      return view('admin.pages.search.contactinfo', compact('nameSearch', 'users', 'checkAdminRole'));
    }
    public function searchGuardianInfo(Request $request) {
      $adminRole = Admin::where('user_id', Auth::user()->id)->first();
      $checkAdminRole = $adminRole->role;
      $nameSearch = $request->get('name_search');
      $users = User::where('first_name', 'LIKE', '%'.$nameSearch.'%')
      ->orWhere('last_name', 'LIKE', '%'.$nameSearch.'%')
      ->orWhere('parent_name', 'LIKE', '%'.$nameSearch.'%')
      ->orWhere('phone_number2', 'LIKE', '%'.$nameSearch.'%')
      ->orWhere('church', 'LIKE', '%'.$nameSearch.'%')
      ->get();
      return view('admin.pages.search.guardianinfo', compact('nameSearch', 'users', 'checkAdminRole'));
    }
    public function searchPersonalInfo(Request $request) {
      $adminRole = Admin::where('user_id', Auth::user()->id)->first();
      $checkAdminRole = $adminRole->role;
      $nameSearch = $request->get('name_search');
      $users = User::where('first_name', 'LIKE', '%'.$nameSearch.'%')
      ->orWhere('last_name', 'LIKE', '%'.$nameSearch.'%')
      ->orWhere('gender', 'LIKE', '%'.$nameSearch.'%')
      ->orWhere('age', 'LIKE', '%'.$nameSearch.'%')
      ->get();
      return view('admin.pages.search.personalinfo', compact('nameSearch', 'users', 'checkAdminRole'));
    }
    public function searchTellerNo(Request $request) {
      $adminRole = Admin::where('user_id', Auth::user()->id)->first();
      $checkAdminRole = $adminRole->role;
      $nameSearch = $request->get('name_search');
      if($nameSearch == "active") {
        $nameSearch = 1;
        $users = Serial::join('confirmations', 'confirmations.id', '=', 'serials.confirmation_id')
        ->join('users', 'users.id', '=', 'serials.user_id')
        ->select('serials.id', 'users.first_name', 'users.last_name', 'users.age', 'users.gender',
        'users.school', 'users.state', 'users.handicap', 'serials.teller_no', 'confirmations.confirmed')
        ->where('confirmed', 'LIKE', '%'.$nameSearch.'%')
        ->get();
      } elseif($nameSearch == "not active") {
        $nameSearch = 0;
        $users = Serial::join('confirmations', 'confirmations.id', '=', 'serials.confirmation_id')
        ->join('users', 'users.id', '=', 'serials.user_id')
        ->select('serials.id', 'users.first_name', 'users.last_name', 'users.age', 'users.gender',
        'users.school', 'users.state', 'users.handicap', 'serials.teller_no', 'confirmations.confirmed')
        ->where('confirmed', 'LIKE', '%'.$nameSearch.'%')
        ->get();
      } else {
        $users = Serial::join('confirmations', 'confirmations.id', '=', 'serials.confirmation_id')
        ->join('users', 'users.id', '=', 'serials.user_id')
        ->select('serials.id', 'users.first_name', 'users.last_name', 'users.age', 'users.gender',
        'users.school', 'users.state', 'users.handicap', 'serials.teller_no', 'confirmations.confirmed')
        ->where('first_name', 'LIKE', '%'.$nameSearch.'%')
        ->orWhere('last_name', 'LIKE', '%'.$nameSearch.'%')
        ->orWhere('teller_no', 'LIKE', '%'.$nameSearch.'%')
        ->get();
      }
      return view('admin.pages.search.tellerno', compact('nameSearch', 'users', 'checkAdminRole'));
    }
}
