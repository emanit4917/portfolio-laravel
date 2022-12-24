@extends('frontend.layouts.master')
@section('content')
  <!--================== Contact Section Start ==================-->
  <section class="contact section">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-6">
          <div class="mb-5 mb-lg-0">
            <h3 class="mb-4">Just Say Hi!......</h3>
            @if (session('success'))
            <div class="alert alert-info" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <h4 class="mb-5 pb-4 lh-sm">Lorem ipsum dolor sit amet, consectetur </h4>
          
            <form class="row px-4 px-md-0" action="{{route('contact.store')}}" method="post">
              @csrf
                <div class="col-md-6 contact-from border-bottom pb-4 mb-5">
                  <input type="text" name="first_name" placeholder="John" autocomplete="off" required>
                  <label>First Name</label>
                </div>
                <div class="col-md-6 contact-from border-bottom pb-4 mb-5">
                  <input type="text" name="last_name" placeholder="Doe" autocomplete="off" required>
                  <label>Last Name</label>
                </div>
                <div class="col-md-6 contact-from border-bottom pb-4 mb-5">
                  <input type="mail" name="email" placeholder="johndoe@gmail.com" autocomplete="off" required>
                  <label>Mail</label>
                </div>
                <div class="col-md-6 contact-from border-bottom pb-4 mb-5">
                  <input type="text" name="address" placeholder="Address" autocomplete="off" required>
                  <label>Address</label>
                </div>
                <div class="contact-from border-bottom pb-4 mb-5 w-100">
                  <input type="text" placeholder="Message" name="message" autocomplete="off" required>
                  <label>Message</label>
                </div>
              <button type="submit" class="btn btn-primary btn-lg mt-4">Submit Now</button>
            </form>
          </div>
        </div>

        <div class="col-lg-5 offset-lg-1">
          <div class="text-center text-lg-start">
            <h4 class="mb-4">Contact information</h4>
            <p class="mb-md-5">4517 Washington Ave. <br>
              Manchester, Kentucky <br>
              United States Of Anerica</p>
              <h4 class="mb-4">Social contacts</h4>
             <ul class="list-inline contact-us">
              @foreach ($socail_all as $rows )
                <li class="list-inline-item"><a href="#"> <i class="{{$rows->cont_social}}"></i></a></li>
              @endforeach
               
              
             </ul>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!--================== Contact Section End ==================-->
  @endsection