<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Helper\DataResponse;
use Log;

class BackendContactController extends Controller
{
    public function getindex(Request $request) {
      $contacts = Contact::all();
      return view('backend.contacts', ["contacts" => $contacts]);
    }

    public function delete(Request $request, $id) {
      $contact = Contact::where('id', $id)->first();
      Log::info($id);
      if (!$contact) {
        abort(404);
      }
  
      if ($contact->delete()) {
        return redirect()->route('contacts')->with('status', 'Delete Successfully');
      }
  
      return redirect()->route('contacts')->with('status', 'Delete Fail');
    }
}
