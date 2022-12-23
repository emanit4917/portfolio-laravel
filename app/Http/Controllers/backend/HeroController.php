<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Herosection;
use Image;

class HeroController extends Controller
{
    public function index(){
        return view('backend.hero.index');
    }

    public function store(Request $request){
        $request->validate([
            'title'=> 'required',
            'skill_title'=> 'required',
            'short_desc'=> 'required',
            'photo'=> 'required',
            'button'=> 'required',
     
            ]);
    
        // database insert data
           $hero_data = New Herosection;
           $hero_data->title = $request->title;
           $hero_data->skill_title = $request->skill_title;
           $hero_data->short_desc = $request->short_desc;
           $hero_data->button = $request->button;
          
           $photo = $request->photo;

             if($photo){
                  $photoname =date('d-m-Y-H-i').'.'.$photo->getClientOriginalExtension();
                  $path =('backend/hero/'.$photoname);
                 Image::make($photo)->resize(130,130)->save($path);
                 $hero_data ['photo'] = $path;
              }
             $hero_data->save();
    
        return back()->with('success','Hero item data insert successfully!');
    }

    public function create(){
        $here_id = Herosection::all();
        return view('backend.hero.create',compact('here_id'));
    }

    public function destroy($id){
        Herosection::find($id)->delete();
        return back()->with('del','Hero item data delete successfully!');
    }

    public function edit($id){
        $hero_show = Herosection::find($id);
        return view('backend.hero.edit',compact('hero_show'));
    }
    public function updated (Request $request, $id){
        $hero = Herosection::find($id);
        $hero->title = $request->title;
        $hero->skill_title = $request->skill_title;
        $hero->short_desc = $request->short_desc;
        $hero->button = $request->button;

        $photo = $request->photo;
       
        if($photo){
            $photo_path = $hero->photo;
            
             if (file_exists($photo_path)){
                @unlink($photo_path);
            }
            $photoname =date('d-m-Y-H-i').'.'.$photo->getClientOriginalExtension();
            $path =('backend/hero/'.$photoname);

           Image::make($photo)->resize(130,130)->save($path);
           $hero ['photo'] = $path;
        }

      

        $hero->save();

        return redirect()->route('hero.create')->with('status','Hero Updated Successfully'); 
    }
}
