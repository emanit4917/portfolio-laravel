<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use App\Models\backend\Globals;

class GlobalController extends Controller
{
    public function index(){
        return view('backend.global.inbox');
    }

    public function store(Request $request){


    $global_data = new Globals;
    $global_data->global_title = $request->global_title;
    $global_data->global_desc = $request->global_desc;
    $global_data->save();

     return back()->with('success', 'Gobal data insert successfully');  
    }

    public function create(){
        $global_info = Globals::all();
        return view('backend.global.create',compact('global_info'));
    }
    public function destroy($id){
        Globals::find($id)->delete();
        return back()->with('del', 'Gobal data delete successfully');  
    }
}
