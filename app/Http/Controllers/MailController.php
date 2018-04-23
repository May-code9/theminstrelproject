<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail;
use App\Mail\NewContactRequest;
use App\Admin;
use App\Http\Requests\ContactRequest;

class MailController extends Controller
{
  public function contact() {
    $contact = 'active';
    $cover = 'Contact';
    if(Auth::user()) {
      $checkIfAdmin = Admin::where('user_id', Auth::user()->id)->count();
    }
    return view('pages.contacts', compact('contact', 'cover', 'checkIfAdmin'));
  }
  public function storeContact(ContactRequest $request) {
    Mail::to('contact@theminstrelproject.org')
    ->cc($request->email)
    ->send(new NewContactRequest($request));
    return redirect()->back()->with('success_status', 'Message Delivered');
  }
}
