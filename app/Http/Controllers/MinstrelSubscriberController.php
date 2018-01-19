<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Admin;
use App\Confirmation;

class MinstrelSubscriberController extends Controller
{

    public function index()
    {
      if(Auth::user()) {
        $adminRole = Admin::where('user_id', Auth::user()->id)->first();
        $checkAdminRole = $adminRole->role;
        $getListOfUsers = Confirmation::join('users', 'users.id', '=', 'confirmations.user_id')->paginate(15);

        return view("admin.pages.tables.subscriber", compact('checkAdminRole', 'getListOfUsers'));
      } else {
        return redirect('/');
      }
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
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
