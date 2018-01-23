<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Admin;
use App\Serial;
use App\Confirmation;

class MinstrelTellerController extends Controller
{

  public function index()
  {

    $adminRole = Admin::where('user_id', Auth::user()->id)->first();
    $checkAdminRole = $adminRole->role;
    $getListOfUsers = Serial::join('confirmations', 'confirmations.id', '=', 'serials.confirmation_id')
    ->join('users', 'users.id', '=', 'serials.user_id')
    ->select('serials.id', 'users.first_name', 'users.last_name', 'users.age', 'users.gender',
    'users.school', 'users.state', 'users.handicap', 'serials.teller_no', 'confirmations.confirmed')
    ->paginate(15);

    return view("admin.pages.tables.teller", compact('checkAdminRole', 'getListOfUsers'));

  }


  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    //
  }

  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    $checkSerial = Serial::join('confirmations', 'confirmations.id', '=', 'serials.confirmation_id')
    ->join('users', 'users.id', '=', 'serials.user_id')
    ->select('serials.id', 'users.first_name', 'users.last_name', 'users.age', 'users.gender',
    'users.address', 'users.state', 'users.handicap', 'serials.teller_no', 'confirmations.confirmed')
    ->findOrFail($id);
    $adminRole = Admin::where('user_id', Auth::user()->id)->first();
    $checkAdminRole = $adminRole->role;

    return view('admin.pages.crud.editTeller', compact('activateUser', 'checkSerial', 'checkConfirm', 'checkAdminRole'));
  }

  public function update(Request $request, $id)
  {
    $activateUser = User::findOrFail($id);
    $checkSerial = Serial::findOrFail($id);
    $checkConfirm = Confirmation::findOrFail($id);

    $checkSerial->update($request->all());
    $checkConfirm->update($request->all());

    return redirect('/teller')->with('success_status', 'User Edited');
  }

  public function destroy($id)
  {
    //
  }
}
