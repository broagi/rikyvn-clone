<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Helper\DataResponse;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function post_save(Request $request) {
      $validator = Validator::make($request->all(), [
        'name' => 'required',
        'phone_number' => 'required',
        'description' => 'required'
    ]);

    if($validator->fails()) {
      return DataResponse::fail($validator->errors());
    }

      return DataResponse::ok(Contact::create($request->all()));
    }
}
