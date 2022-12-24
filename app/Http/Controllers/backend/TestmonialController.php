<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Testmonial;
use Image;
class TestmonialController extends Controller
{
    public function index(){
        return view('backend.testimonial.index');
    }
    public function store(Request $request){
        // $request->validate([
        //     'title_name'=> 'required',
        //     'desc'=> 'required',
        //     'title_grate'=> 'required',
        //     'photo_thum'=> 'required',
        //     'photo'=> 'required',
     
        //     ]);
    
        // database insert data
           $testmonial_data = New Testmonial;
           $testmonial_data->title_name = $request->title_name;
           $testmonial_data->desc = $request->desc;
           $testmonial_data->title_grate = $request->title_grate;
           $photo_thum = $request->photo_thum;
           
           if($photo_thum){
            $photo_path = $testmonial_data->photo_thum;
            
             if (file_exists($photo_path)){
                @unlink($photo_path);
            }
            
            $photoname =date('d-m-Y-H-i').'.'.$photo_thum->getClientOriginalExtension();
            $path =('backend/testmonial/'.$photoname);
           Image::make($photo_thum)->resize(70,70)->save($path);
           $testmonial_data ['photo_thum'] = $path;
         }

           $photo = $request->photo;

             if($photo){
                $photo_path = $testmonial_data->photo;
            
                if (file_exists($photo_path)){
                   @unlink($photo_path);
               }
                  $photoname =date('d-m-Y-H-i').'.'.$photo->getClientOriginalExtension();
                  $path =('backend/testmonial/'.$photoname);
                 Image::make($photo)->resize(356,420)->save($path);
                 $testmonial_data ['photo'] = $path;
              }
             $testmonial_data->save();
        
    
        return back()->with('success','Testmonial item data insert successfully!');
    }

    public function create(){
        $testmonial_id = Testmonial::all();
        return view('backend.testimonial.create',compact('testmonial_id'));
    }
    public function destroy($id){
         Testmonial::find($id)->delete();
         return back()->with('del','Testmonial item data delete successfully!');
    }

    public function edit($id){
        $test_show =  Testmonial::find($id);
        return view('backend.testimonial.edit',compact('test_show'));
    }

    public function updated(Request $request, $id){
    // database insert data
            $testmonial_update = Testmonial::find($id);
            $testmonial_update->title_name = $request->title_name;
            $testmonial_update->desc = $request->desc;
            $testmonial_update->title_grate = $request->title_grate;
            $photo_thum = $request->photo_thum;
            
            if($photo_thum){
                $photo_path = $testmonial_update->photo_thum;
            
             if (file_exists($photo_path)){
                @unlink($photo_path);
            }
            $photoname =date('d-m-Y-H-i').'.'.$photo_thum->getClientOriginalExtension();
            $path =('backend/testmonial/'.$photoname);
            Image::make($photo_thum)->resize(70,70)->save($path);
            $testmonial_update ['photo_thum'] = $path;
        }

            $photo = $request->photo;

            if($photo){
                $photo_path = $testmonial_update->photo;
            
             if (file_exists($photo_path)){
                @unlink($photo_path);
            }
                $photoname =date('d-m-Y-H-i').'.'.$photo->getClientOriginalExtension();
                $path =('backend/testmonial'.$photoname);
                Image::make($photo)->resize(356,420)->save($path);
                $testmonial_update ['photo'] = $path;
            }
            $testmonial_update->save();
        

        return back()->with('success','updated item data insert successfully!');
            }

}
