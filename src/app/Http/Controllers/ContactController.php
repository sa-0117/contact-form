<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index() {
        return view('index');
    }
  
    public function confirm(Request $request) {
        $contact = $request-> only(['name', 'email', 'tel', 'content']);
        return view('confirm', compact('contact'));

    }
}


