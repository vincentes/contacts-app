<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ContactController extends Controller
{
    public function allForUserId(Request $request) {
        return json_encode(Contact::whereUserId(Auth::id())->with('messages')->get() );    
    }

    public function delete(Request $request, $id) {
        Contact::whereId($id)->delete();
        return json_encode(["message" => "Deleted succesfully.", "status" => 200]);    
    }

    public function update(Request $request, $id) {
        $contact = Contact::whereId($id)->first();
        $imageName = $contact->pic;
        
        error_log(json_encode($request->all()));


        if($request->pic) {
            $imageName = time().'.'.$request->pic->extension();
            Storage::disk('public')->put($imageName, file_get_contents($request->pic));
            $contact->pic = $imageName;
        }

        $attr = $request->all();
        $attr['pic'] = $imageName;

        Contact::whereId($id)->update($attr);
        $updated = Contact::whereId($id)->get();
        return json_encode(["message" => "Saved succesfully.", "status" => 200, "updated" => $updated]);    
    }

    public function create(Request $request) {
        $attr = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|min:6|max:20',
            'email' => 'required|string|email|unique:contacts,email',
            'title' => 'required|string',
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_id' => 'required'
        ]);

        if($request->pic) {
            $imageName = time().'.'.$request->pic->extension();
            Storage::disk('public')->put($imageName, file_get_contents($request->pic));
            $attr['pic'] = $imageName;
        }

        $contact = Contact::create($attr);

        return json_encode(["message" => "Created succesfully.", "status" => 201, "contact" => $contact]);    
    }
}
