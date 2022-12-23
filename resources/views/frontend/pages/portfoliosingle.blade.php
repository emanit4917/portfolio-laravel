@extends('frontend.layouts.master')
@section('content')

<!--================== Project Section Start ==================-->
<section class="section">
    <div class="container">
      <div class="row g-4 align-items-center">
  
        <div class="col-lg-6">
          <img src="{{asset('frontend')}}/images/project-img-two.png" alt="portfolio" class="img-fluid">
        </div>
        <div class="col-lg-6 ps-lg-5">
          <div class="mb-4">
            <h2 class="text-capitalize mb-3 h3">A Feast Of A Time-Honored History</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
              alteration in some form.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ipsum consequatur voluptate quis sed
              perferendis at sequi a nesciunt fuga harum nulla cumque quasi sunt laborum in explicabo, assumenda ad.</p>
          </div>
  
  
          <h4 class="mb-2">Technology</h4>
          <p> Communication / Social media / Content management systems / Analytics </p>
  
          <h4 class="mb-2">Categories </h4>
          <p>Marketing</p>
  
          <a href="#" class="text-capitalize btn btn-outline-primary px-4 py-2">Project Link</a>
        </div>
  
      </div>
    </div>
  </section>
  <!--================== Project Section End ==================-->
      
@endsection