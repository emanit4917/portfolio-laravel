<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\SinglePortfolio;
use Image;

class SinglePortfolioController extends Controller
{
    public function index(){
        return view('backend.single_portfolio.index');
    }

    public function store(Request $request){
        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'technolgy'=> 'required',
            'category'=> 'required',
            'photo'=> 'required',
     
            ]);
    
        // database insert data
           $sigle_port = New SinglePortfolio;
           $sigle_port->title = $request->title;
           $sigle_port->description = $request->description;
           $sigle_port->technolgy = $request->technolgy;
           $sigle_port->category = $request->category;
          
           $photo = $request->photo;

             if($photo){
                  $photoname =date('d-m-Y-H-i').'.'.$photo->getClientOriginalExtension();
                  $path =('backend/sigle_portfolio/'.$photoname);
                 Image::make($photo)->resize(570,547)->save($path);
                 $sigle_port ['photo'] = $path;
              }
             $sigle_port->save();
    
        return back()->with('success','single portfolio item insert successfully!');
    }

    public function create(){
        $portfolio_data = SinglePortfolio::all();
        return view('backend.single_portfolio.create',compact('portfolio_data'));
    }
    
    public function destroy($id){
        SinglePortfolio::find($id)->delete();
        return back()->with('del','single portfolio delete successfully!');
    }
    public function edit($id){
        $single_portfolio_id = SinglePortfolio::find($id);
        return view('backend.single_portfolio.edit',compact('single_portfolio_id'));
    }
    public function updated(Request $request, $id){
        $single_portfolio_info = SinglePortfolio::find($id);
        $single_portfolio_info->title = $request->title;
        $single_portfolio_info->description = $request->description;
        $single_portfolio_info->technolgy = $request->technolgy;
        $single_portfolio_info->category = $request->technolgy;
        $photo = $request->photo;

        if($photo){
            $photo_path = $single_portfolio_info->pro_photo;
            
             if (file_exists($photo_path)){
                @unlink($photo_path);
            }
            $photoname =date('d-m-Y-H-i').'.'.$photo->getClientOriginalExtension();
            $path =('backend/sigle_portfolio/'.$photoname);

           Image::make($photo)->resize(570,547)->save($path);
           $single_portfolio_info ['photo'] = $path;
        }

        $single_portfolio_info->save();

        return redirect()->route('sigle.create')->with('status','Single portfolio Updated Successfully'); 
    }

}
