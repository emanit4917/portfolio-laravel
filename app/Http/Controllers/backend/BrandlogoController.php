<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Brandlogo;
use Image;

class BrandlogoController extends Controller
{
    public function index(){
        return view('backend.brand_logo.index');
    }
    public function store(Request $request){
      
           $brand_id = New Brandlogo;
            $brand_photo = $request->brand_photo;

             if($brand_photo){
                  $photoname =date('d-m-Y-H-i').'.'.$brand_photo->getClientOriginalExtension();
                  $path =('backend/brand'.$photoname);
                 Image::make($brand_photo)->resize(130,130)->save($path);
                 $brand_id ['brand_photo'] = $path;
              }
             $brand_id->save();
    
          return back()->with('success','Brand item data insert successfully!');
    }
    public function create(){
        $barnd = Brandlogo::all();
        return view('backend.brand_logo.create',compact('barnd'));
    }
    public function destroy($id){
        Brandlogo::find($id)->delete();
        return back();
    }
}
