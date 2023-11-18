<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Helper\DataResponse;

class ContactController extends Controller
{
    public function getindex(Request $request) {
      $contacts = Contact::all();
      return view('backend.contacts', ["contacts" => $contacts]);
    }
}
