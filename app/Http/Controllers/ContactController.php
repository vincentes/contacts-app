<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller
{
    public function allForUserId(Request $request) {
        return json_encode(Contact::whereUserId(Auth::id())->with('messages')->get() );    
    }

    public function delete(Request $request, $id) {
        Contact::whereId($id)->delete();
        return json_encode(["message" => "Deleted succesfully.", "status" => 200]);    
    }
}
