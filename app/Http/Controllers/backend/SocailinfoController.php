<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\SocailInfo;

class SocailinfoController extends Controller
{
    public function index(){
        return view('backend.contact_info.index');
    }
    public function socialstore(Request $request){
    $social_data = New SocailInfo;
    $social_data->cont_address = $request->cont_address;
    $social_data->cont_social = $request->cont_social;
    $social_data->save();

    return redirect()->back()->with('success','Social information insert successfully!');
    }

    public function create(){
        $socail_info = SocailInfo::all();
        return view('backend.contact_info.create',compact('socail_info'));
    }
    public function destroy($id){
        SocailInfo::find($id)->delete();
        return back(); 
    }
}
