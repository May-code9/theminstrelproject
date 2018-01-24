<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use Auth;

class MinstrelGuardianInfo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $adminRole = Admin::where('user_id', Auth::user()->id)->first();
      $checkAdminRole = $adminRole->role;
      $getListOfUsers = User::paginate(10);
      return view('admin.pages.tables.guardianinfo', compact('getListOfUsers', 'checkAdminRole'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $getGuardianInfo = User::findOrFail($id);
      $adminRole = Admin::where('user_id', Auth::user()->id)->first();
      $checkAdminRole = $adminRole->role;
      return view('admin.pages.crud.editGuardianInfo', compact('getGuardianInfo', 'checkAdminRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $getGuardianInfo = User::findOrFail($id);
        $getGuardianInfo->update($request->all());
        return redirect('/guardianinfo')->with("success_status", "Information Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
