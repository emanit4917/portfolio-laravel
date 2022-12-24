<?php

namespace App\Http\Controllers;
use App\Models\backend\{Logo,Herosection,Brandlogo,Globals,Service,Testmonial,Product,About,
    BlogPost,SocailInfo};

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $logo_input = Logo::latest()->first();
        $hero_views = Herosection::all()->first();
        $brand_views = Brandlogo::all();
        $global_views = Globals::all()->first();
        $service_views = Service::all();
        $testmonial = Testmonial::all();
        $product_views = Product::all();
        return view('frontend.pages.home',compact('logo_input','hero_views',
        'brand_views','global_views','service_views','testmonial','product_views'));
    }

    public function about(){
        $logo_input = Logo::latest()->first();
        $about_info = About::all()->first();
        $brand_views = Brandlogo::all();
        $blog_post_info = BlogPost::all();
        return view('frontend.pages.about',compact('logo_input','about_info',
        'brand_views','blog_post_info'));
    }
    
    public function portfolio(){
        $logo_input = Logo::latest()->first();
        return view('frontend.pages.portfolio',compact('logo_input'));
    }
    public function single(){
        $logo_input = Logo::latest()->first();
        return view('frontend.pages.portfoliosingle',compact('logo_input'));
    }
    public function contact(){
        $socail_all = SocailInfo::latest()->get();

        $logo_input = Logo::latest()->first();
        return view('frontend.pages.contact',compact('logo_input','socail_all'));
    }
}
