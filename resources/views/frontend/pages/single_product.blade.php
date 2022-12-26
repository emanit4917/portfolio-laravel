@extends('frontend.layouts.master')
@section('content')

<!--================== Project Section Start ==================-->
<section class="section">
    <div class="container">
      <div class="row g-4 align-items-center">
  
        <div class="col-lg-6">
          <img src="{{asset($product->pro_photo)}}" alt="portfolio" class="img-fluid">
        </div>
        <div class="col-lg-6 ps-lg-5">
          <div class="mb-4">
            <h2 class="text-capitalize mb-3 h3">{{$product->pro_title}}</h2>
            <p>{{$product->description}}</p>
            
          </div>
  
  
          <h4 class="mb-2">Technology</h4>
          <p>{{$product->technolgy}}</p>
  
          <h4 class="mb-2">Categories </h4>
          <p>{{$product->category}}</p>
  
          <a href="#" class="text-capitalize btn btn-outline-primary px-4 py-2">Project Link</a>
        </div>
  
      </div>
    </div>
  </section>
  <!--================== Project Section End ==================-->
      
@endsection