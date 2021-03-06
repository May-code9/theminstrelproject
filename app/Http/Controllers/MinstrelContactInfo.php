<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use Auth;

class MinstrelContactInfo extends Controller
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
        $getListOfUsers = User::paginate(20);
        return view('admin.pages.tables.contactinfo', compact('getListOfUsers', 'checkAdminRole'));
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
        $getContactInfo = User::findOrFail($id);
        $adminRole = Admin::where('user_id', Auth::user()->id)->first();
        $checkAdminRole = $adminRole->role;
        return view('admin.pages.crud.editContactInfo', compact('getContactInfo', 'checkAdminRole'));
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
        $getContactInfo = User::findOrFail($id);
        $getContactInfo->update($request->all());
        return redirect('/contactinfo')->with("success_status", "User Edited");
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
