<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Admin;
use App\Serial;
use App\Confirmation;

class MinstrelProjectController extends Controller
{
    public function index() {
      $home =  'active';
      $cover = 'Home';
      if(Auth::user()) {
        $checkForSerialNumber = Serial::where('user_id', Auth::user()->id)->count();
        $checkIfAdmin = Admin::where('user_id', Auth::user()->id)->count();
      }
      return view('pages.index', compact('home', 'cover', 'checkForSerialNumber', 'checkIfAdmin'));
    }
    public function gallery() {
      $gallery = 'active';
      $cover = 'Gallery';
      $checkIfAdmin = Admin::where('user_id', Auth::user()->id)->count();
      return view('pages.gallery', compact('gallery', 'cover', 'checkIfAdmin'));
    }
    public function donate() {
      $donate = 'active';
      $cover = 'Donate';
      $checkIfAdmin = Admin::where('user_id', Auth::user()->id)->count();
      return view('pages.donate', compact('donate', 'cover', 'checkIfAdmin'));
    }
    public function contact() {
      $contact = 'active';
      $cover = 'Contact';
      $checkIfAdmin = Admin::where('user_id', Auth::user()->id)->count();
      return view('pages.contacts', compact('contact', 'cover', 'checkIfAdmin'));
    }
    public function teller() {
      if(Auth::user()) {
        $checkSerialNumber = Serial::where('user_id', Auth::user()->id)->count();
        if($checkSerialNumber == 1) {
          return redirect('/')->with("alert", "<script>alert('you have already inputted the Teller number')</script>");
        }
        else {
          $cover = 'Contact';
          $checkIfAdmin = Admin::where('user_id', Auth::user()->id)->count();
          return view('pages.authenticate.teller', compact('cover', 'checkIfAdmin'));
        }
      }
      else {
        return redirect('/')->with("alert", "<script>alert('you are not permitted to visit this page, Click on Register')</script>");
      }
    }
    public function submitTeller(Request $request) {
      $checkForSerialNumber = Serial::where('user_id', Auth::user()->id)->count();
      if($checkForSerialNumber == 0) {
        $teller = new Serial;
        $teller->user_id = Auth::user()->id;
        $teller->teller_no = $request->input('teller_no');
        $teller->save();

        $confirmation = new Confirmation;
        $confirmation->user_id = Auth::user()->id;
        $confirmation->confirmed = 0;
        $confirmation->save();

        return redirect('/')->with("alert", "<script>alert('Teller Number Inserted, Registration will be Completed in the next 24 hours, once teller number has been verified')</script>");
      } else {
        return redirect('/')->with("alert", "<script>alert('You have already inserted Teller Number')</script>");
      }
    }
}
