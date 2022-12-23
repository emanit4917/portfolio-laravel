<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\About;
use Image;

class AboutController extends Controller
{
    public function index(){
        return view('backend.about.index');
    }
    public function store(Request $request){
        $request->validate([
            'hello'=> 'required',
            'title'=> 'required',
            'desc'=> 'required',
            'style_title'=> 'required',
            'photo'=> 'required',
     
            ]);
    
        // database insert data
           $about_data = New About;
           $about_data->hello = $request->hello;
           $about_data->title = $request->title;
           $about_data->desc = $request->desc;
           $about_data->style_title = $request->style_title;

            $photo = $request->photo;

             if($photo){
                  $photoname =date('d-m-Y-H-i').'.'.$photo->getClientOriginalExtension();
                  $path =('backend/about/'.$photoname);
                 Image::make($photo)->resize(926,449)->save($path);
                 $about_data ['photo'] = $path;
              }
             $about_data->save();
    
        return back()->with('success','About item data insert successfully!');
    }
    public function create(){
        $about_dbs = About::all();
        return view('backend.about.create',compact('about_dbs'));
    }
    public function destroy($id){
        About::find($id)->delete();
         return back()->with('del','About item data Delete successfully!');
    }
}
