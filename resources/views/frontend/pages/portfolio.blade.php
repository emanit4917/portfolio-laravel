@extends('frontend.layouts.master')
@section('content')

<!--================== Project Section Start ==================-->
<section class="projects section">
    <div class="container">
      <div class="row mb-5 text-center">
        <div class="col-lg-6 col-12 mx-auto ">
          <div class="section-title mb-5">
            <h2>My <strong>
                Selected
                <svg class="" width="198" height="21" viewBox="0 0 198 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M2 18.7327C13.8854 9.74093 29.4859 8.69377 43.6964 6.03115C65.1095 2.01897 86.6266 1.40829 108.405 2.01061C137.628 2.81881 166.558 7.3721 195.577 11.0296"
                    stroke="#FF5733" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </strong> projects
  
            </h2>
          </div>
        </div>
  
        <div class="col-12">
          <div class="btn-group portfolio-filters mb-3 mt-3" data-toggle="buttons">
            <label class="btn btn-outline-primary active">
              <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
            </label>
            <label class="btn btn-outline-primary">
              <input type="radio" name="shuffle-filter" value="events">Events
            </label>
            <label class="btn btn-outline-primary">
              <input type="radio" name="shuffle-filter" value="exhibition">Exhibition
            </label>
            <label class="btn btn-outline-primary">
              <input type="radio" name="shuffle-filter" value="marketing">Marketing
            </label>
            <label class="btn btn-outline-primary">
              <input type="radio" name="shuffle-filter" value="Branding"> branding
            </label>
          </div>
        </div>
      </div>
      <div class="row g-4 g-md-5 my-shuffle">
        <div class="col-md-6 image-item" data-groups="[&quot;exhibition&quot;]">
          <div class="card rounded-0 border-0" data-aos="fade-up" data-aos-duration="1500">
            <img class="img-fluid" src="{{asset('frontend')}}/images/project-img.png" alt="img">
            <div class="card-img-overlay">
              <div class="card-body">
                <a href="portfolio-single.html" class="h4 text-white"> Drinking from the sea of knowledge</a>
                <ul class="meta-list list-unstyled d-flex">
                  <li class="list-inline-item text-white fw-normal">Digital</li>
                  <li class="list-inline-item text-white fw-normal">Exhibition</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 image-item" data-groups="[&quot;Branding&quot;]">
          <div class="card rounded-0 border-0" data-aos="fade-up" data-aos-duration="1500">
            <img class="img-fluid" src="{{asset('frontend')}}/images/project-img-one.png" alt="img">
            <div class="card-img-overlay">
              <div class="card-body">
                <a href="portfolio-single.html" class="h4 text-white ">A Feast Of A Time-Honored History</a>
                <ul class="meta-list list-unstyled d-flex">
                  <li class="list-inline-item text-white fw-normal">Digital</li>
                  <li class="list-inline-item text-white fw-normal">Branding</li>
                </ul>
              </div>
            </div>
  
          </div>
        </div>
        <div class="col-md-6 image-item" data-groups="[&quot;events&quot;]">
          <div class="card rounded-0 border-0" data-aos="fade-up" data-aos-duration="2000">
            <img class="img-fluid" src="{{asset('frontend')}}/images/project-img-two.png" alt="img">
            <div class="card-img-overlay">
              <div class="card-body">
                <a href="portfolio-single.html" class="h4 text-white ">Google Play ACG Interactive Game</a>
                <ul class="meta-list list-unstyled d-flex">
                  <li class="list-inline-item text-white fw-normal">Digital</li>
                  <li class="list-inline-item text-white fw-normal">Events</li>
                </ul>
              </div>
            </div>
  
          </div>
        </div>
        <div class="col-md-6 image-item" data-groups="[&quot;marketing&quot;]">
          <div class="card rounded-0 border-0" data-aos="fade-up" data-aos-duration="2000">
            <img class="img-fluid" src="{{asset('frontend')}}/images/project-img-three.png" alt="img">
            <div class="card-img-overlay">
              <div class="card-body">
                <a href="portfolio-single.html" class="h4 text-white ">Monopoly Dreams Hong Kong</a>
                <ul class="meta-list list-unstyled d-flex">
                  <li class="list-inline-item text-white fw-normal">Digital</li>
                  <li class="list-inline-item text-white fw-normal">Marketing</li>
                </ul>
              </div>
            </div>
  
          </div>
        </div>
        <div class="col-md-6 image-item" data-groups="[&quot;exhibition&quot;]">
          <div class="card rounded-0 border-0" data-aos="fade-up" data-aos-duration="2500">
            <img class="img-fluid" src="{{asset('frontend')}}/images/project-img.png" alt="img">
            <div class="card-img-overlay">
              <div class="card-body">
                <a href="portfolio-single.html" class="h4 text-white"> Drinking from the sea of knowledge</a>
                <ul class="meta-list list-unstyled d-flex">
                  <li class="list-inline-item text-white fw-normal">Digital</li>
                  <li class="list-inline-item text-white fw-normal">Exhibition</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 image-item" data-groups="[&quot;Branding&quot;]">
          <div class="card rounded-0 border-0" data-aos="fade-up" data-aos-duration="2500">
            <img class="img-fluid" src="{{asset('frontend')}}/images/project-img-one.png" alt="img">
            <div class="card-img-overlay">
              <div class="card-body">
                <a href="portfolio-single.html" class="h4 text-white ">A Feast Of A Time-Honored History</a>
                <ul class="meta-list list-unstyled d-flex">
                  <li class="list-inline-item text-white fw-normal">Digital</li>
                  <li class="list-inline-item text-white fw-normal">Branding</li>
                </ul>
              </div>
            </div>
  
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================== Project Section End ==================-->
      
@endsection