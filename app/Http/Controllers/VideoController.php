<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Admin;
use App\Video;

class VideoController extends Controller
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
      $videolinks = Video::orderBy('id', 'desc')->paginate(8);

      return view("admin.pages.video.viewvideo", compact("checkAdminRole", "videolinks"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $adminRole = Admin::where('user_id', Auth::user()->id)->first();
      $checkAdminRole = $adminRole->role;
      return view("admin.pages.video.video", compact("checkAdminRole"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
          Video::create($request->all());
          return redirect()->back()->with("success_status", "Video Link Added");
        } catch (QueryException $e) {
          return redirect()->back()->with("failure_status", "Something Went Wrong");
        }

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
      $adminRole = Admin::where('user_id', Auth::user()->id)->first();
      $checkAdminRole = $adminRole->role;
      $videolinks = Video::orderBy('id', 'desc')->findOrFail($id);

      return view("admin.pages.video.editvideo", compact("checkAdminRole", "videolinks"));
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
        $videolink = Video::findOrFail($id);
        $videolink->update($request->all());
        return redirect('/videoupload')->with("success_status", "Video Details Updated");
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
