<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Logo;

class LogoController extends Controller
{
    public function index(){
        return view('backend.logo.index');
    }

    public function store(Request $request){
        $request->validate([
            'logo_title'=> 'required',
            'logo_icon'=> 'required',
            ]);
    
        // database insert data
           $logo_data = New Logo;
           $logo_data->logo_title = $request->logo_title;
           $logo_data->logo_icon = $request->logo_icon;
          $logo_data->save();
    
        return back()->with('success','Logo  data insert successfully!');
    }

    public function create(){
        $logo_show = Logo::all();
        return view('backend.logo.create',compact('logo_show'));
    }

    public function destroy($id){
        Logo::find($id)->delete();
        return back()->with('del','Logo data delete successfully');  
    }

    public function edit($id){
       $logo_id = Logo::find($id);
        return view('backend.logo.edit',compact('logo_id'));
    }

    public function updated(Request $request, $id){
        $logo_info = Logo::find($id);
        $logo_info->logo_title = $request->logo_title;
        $logo_info->logo_icon = $request->logo_icon;
     
        $logo_info->save();

        return redirect()->route('logo.view')->with('status','Logo Updated Successfully');
    }
}
