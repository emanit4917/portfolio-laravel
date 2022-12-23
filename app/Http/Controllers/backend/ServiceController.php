<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Service;

class ServiceController extends Controller
{
    public function index(){
        return view('backend.service.index');
    }
    public function store(Request $request){
         $request->validate([
            'title'=> 'required',
            'desc'=> 'required',
            'icon'=> 'required',
            'button'=> 'required',
        
        ]);

        $service_data = new Service;
        $service_data->title = $request->title;
        $service_data->desc = $request->desc;
        $service_data->icon = $request->icon;
        $service_data->button = $request->button;
    
        $service_data->save();

        return back()->with('success', 'Service data insert successfully');
    }

    public function create(){
        $service_db = Service::all();
        return view('backend.service.create',compact('service_db'));
    }

    public function destroy($id){
        Service::find($id)->delete();
        return back()->with('del', 'Service delete insert successfully');
    }

    public function edit($id){
        $service_id = Service::find($id);
        return view('backend.service.edit',compact('service_id'));
    }

    public function updated(Request $request, $id){
        $service_data = Service::find($id);
        $service_data->title = $request->title;
        $service_data->desc = $request->desc;
        $service_data->icon = $request->icon;
        $service_data->button = $request->button;
        $service_data->save();

        return redirect()->route('service.view')->with('status','Portfolio Updated Successfully');
    }
    
}
