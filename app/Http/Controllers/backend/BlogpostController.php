<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\BlogPost;

class BlogpostController extends Controller
{
    public function index(){
        return view('backend.blog_post.index');
    }

    public function store(Request $request){
        // dd($request->all());
        // // $request->validate([
        // //     'title'=> 'required',
        // //     'desc'=> 'required',
        // //     'read'=> 'required',
        // //     'post_date'=> 'required',
        // //     'parenting'=> 'required',
     
        // //     ]);
    
        // database insert data
           $blog_data = New BlogPost;
           $blog_data->title = $request->title;
           $blog_data->desc = $request->desc;
           $blog_data->read = $request->read;
           $blog_data->post_date = $request->post_date;
           $blog_data->parenting = $request->parenting;
           $blog_data->save();
    
        return back()->with('success','Blog post item data insert successfully!');
    }

    public function creates(){
        $blog_data = BlogPost::all();
        return view('backend.blog_post.create',compact('blog_data'));
    }
    public function destroy($id){
        BlogPost::find($id)->delete();
        return back()->with('del','Blog post  data delete successfully!');
    }

    public function edit($id){
        $blog_id = BlogPost::find($id);
       return view('backend.blog_post.edit',compact('blog_id'));
    }
    public function updated(Request $request, $id){
        $blog_updated = BlogPost::find($id);
        $blog_updated->title = $request->title;
        $blog_updated->desc = $request->desc;
        $blog_updated->read = $request->read;
        $blog_updated->post_date = $request->post_date;
        $blog_updated->parenting = $request->parenting;
        $blog_updated->save();
        return redirect()->route('blog.create')->with('status','Hero Updated Successfully'); 
    }
}
