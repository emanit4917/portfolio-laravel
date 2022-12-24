<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Contact;

class ContactController extends Controller
{
    public function contactstore(Request $request){
        
    $contact_info = New Contact;
    $contact_info->first_name = $request->first_name;
    $contact_info->last_name = $request->last_name;
    $contact_info->email = $request->email;
    $contact_info->address = $request->address;
    $contact_info->message = $request->message;
    $contact_info->save();

    return redirect()->back()->with('success','Message send successfully!');
    }

   



}
