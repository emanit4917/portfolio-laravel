<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\Product;
use Image;
use Laravel\Ui\Presets\React;

class ProductController extends Controller
{
    public function index(){
        return view('backend.protuct.index');
    }
    public function store(Request $request){
        $request->validate([
            'pro_title'=> 'required',
            'description'=> 'required',
            'technolgy'=> 'required',
            'category'=> 'required',
            'digital'=> 'required',
            'brand_name'=> 'required',
            'pro_photo'=> 'required',
        
        ]);

        $product_data = new Product;
        $product_data->pro_title = $request->pro_title;
        $product_data->description = $request->description;
        $product_data->technolgy = $request->technolgy;
        $product_data->category = $request->category;
        $product_data->digital = $request->digital;
        $product_data->brand_name = $request->brand_name;
        $pro_photo = $request->pro_photo;
        
        if($pro_photo){
            $photoname =date('d-m-Y-H-i').'.'.$pro_photo->getClientOriginalExtension();
            $path =('backend/product/'.$photoname);
           Image::make($pro_photo)->resize(535,534)->save($path);
           $product_data ['pro_photo'] = $path;
        }
    
        $product_data->save();

        return back()->with('success', 'Product data insert successfully');
    }
    public function create(){
        $product_view = Product::all();
        return view('backend.protuct.create',compact('product_view'));
    }

    public function destroy($id){
        Product::find($id)->delete();
        return back()->with('del', 'Product delete  successfully');
    }
    
    public function edit($id){
        $product_show = Product::find($id);
        return view('backend.protuct.edit',compact('product_show'));
       
    }
    public function updated(Request $request, $id){
        $product_info = Product::find($id);
        $product_info->pro_title = $request->pro_title;
        $product_info->description = $request->description;
        $product_info->technolgy = $request->technolgy;
        $product_info->category = $request->category;
        $product_info->digital = $request->digital;
        $product_info->brand_name = $request->brand_name;
        $pro_photo = $request->pro_photo;

        if($pro_photo){
            $photo_path = $product_info->pro_photo;
            
             if (file_exists($photo_path)){
                @unlink($photo_path);
            }
            $photoname =date('d-m-Y-H-i').'.'.$pro_photo->getClientOriginalExtension();
            $path =('backend/product/'.$photoname);

           Image::make($pro_photo)->resize(535,534)->save($path);
           $product_info ['pro_photo'] = $path;
        }

        $product_info->save();

        return redirect()->route('product.create')->with('status','Product Updated Successfully'); 
    }


}
