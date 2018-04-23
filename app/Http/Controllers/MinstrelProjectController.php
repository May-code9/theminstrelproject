<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Admin;
use App\Serial;
use App\Video;
use App\Price;
use App\Gallery;
use App\Confirmation;

class MinstrelProjectController extends Controller
{
  public function index() {
    $home =  'active';
    $cover = 'Home';
    if(Auth::user()) {
      $checkForSerialNumber = Serial::where('user_id', '=', Auth::user()->id)->count();
      $checkIfAdmin = Admin::where('user_id', Auth::user()->id)->count();
      $countSerialNumber = Confirmation::where('user_id', Auth::user()->id)->count();
    }

    $prices = Price::get();
    return view('pages.index', compact('home', 'cover', 'checkForSerialNumber', 'checkSerialNumber', 'checkIfAdmin', 'prices'));
  }
  public function gallery() {
    $hall = 'active';
    $cover = 'Gallery';
    if(Auth::user()) {
      $checkIfAdmin = Admin::where('user_id', Auth::user()->id)->count();
    }
    $galleries = Gallery::orderBy('id', 'desc')->paginate(16);
    return view('pages.gallery', compact('hall', 'cover', 'checkIfAdmin', 'galleries'));
  }
  public function video() {
    $video = 'active';
    $cover = 'Video';
    if(Auth::user()) {
      $checkIfAdmin = Admin::where('user_id', Auth::user()->id)->count();
    }
    $videouploads = Video::orderBy('id', 'desc')->paginate(6);
    //$videos = Gallery::orderBy('id', 'desc')->get();
    return view('pages.video', compact('video', 'cover', 'checkIfAdmin', 'videouploads'));
  }
  public function donate() {
    $donate = 'active';
    $cover = 'Donate';
    if(Auth::user()) {
      $checkIfAdmin = Admin::where('user_id', Auth::user()->id)->count();
    }
    return view('pages.donate', compact('donate', 'cover', 'checkIfAdmin'));
  }

  public function about() {
    $about = 'active';
    $cover = 'About';
    if(Auth::user()) {
      $checkIfAdmin = Admin::where('user_id', Auth::user()->id)->count();
    }
    return view('pages.about', compact('about', 'cover', 'checkIfAdmin'));
  }
  public function teller() {
    if(Auth::user()) {
      $countConfirmation = Confirmation::where('user_id', Auth::user()->id)->count();
      if($countConfirmation == 0) {
        $cover = 'Contact';
        $checkIfAdmin = Admin::where('user_id', Auth::user()->id)->count();
        return view('pages.authenticate.teller', compact('cover', 'checkIfAdmin'));
      }elseif ($countConfirmation == 1) {
        $checkSerialNumber = Confirmation::where('user_id', Auth::user()->id)->get()->first();
        if($checkSerialNumber->confirmed == "Active") {
          return redirect('/')->with("alert", "<script>alert('you have already been approved')</script>");
        } else {
          $cover = 'Contact';
          $checkIfAdmin = Admin::where('user_id', Auth::user()->id)->count();
          return view('pages.authenticate.teller', compact('cover', 'checkIfAdmin'));
        }
      }
      else {
        return redirect('/')->with("alert", "<script>alert('you are not permitted to visit this page, Click on Register')</script>");
      }
    }
  }

  public function submitTeller(Request $request) {
    $checkForSerialNumber = Serial::where('user_id', Auth::user()->id)->count();
    if($checkForSerialNumber == 0) {
      $confirmation = new Confirmation;
      $confirmation->user_id = Auth::user()->id;
      $confirmation->confirmed = 0;
      $confirmation->save();

      $getConfirmation_id = Confirmation::where('user_id', Auth::user()->id)->get()->last();

      $teller = new Serial;
      $teller->user_id = Auth::user()->id;
      $teller->teller_no = $request->input('teller_no');
      $teller->confirmation_id = $getConfirmation_id->id;
      $teller->save();


      return redirect('/')->with("alert", "<script>alert('Teller Number Inserted, Registration will be Completed in the next 24 hours, once teller number has been verified')</script>");
    } else {

      $teller_no = $request->input('teller_no');
      Serial::where('user_id', Auth::user()->id)->update(['teller_no'=> $teller_no]);
      return redirect('/')->with("alert", "<script>alert('Teller Number Updated, Registration will be Completed in the next 24 hours, once teller number has been verified')</script>");
    }
  }
}
