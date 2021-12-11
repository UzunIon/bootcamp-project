<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContact()
    {
      return view('contact');
      // return redirect()->route('sendContact');
    }
  
    public function sendContact()
    {
      return view('showContact');
      // return redirect()->route('sendContact');
    }
}
