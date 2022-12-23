 @extends('frontend.layouts.master')
 @section('content')

 <!--================== About Section Start ==================-->
 <section class="about-hero hero-area section" >
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-9 mx-auto">
          <h4 class="mb-3 text-primary">{{$about_info->hello}}</h4>
            <h1 class="mb-4">{{$about_info->title}}</h1>
          <p class="mb-4">
            {{$about_info->desc}}
          </p>
         
        </div>
        <div class="col-lg-10 mx-auto">
          <div class="about-hero-img" data-aos="zoom-in-up" data-aos-duration="2000">
            <img class="img-fluid" src="{{asset($about_info->photo)}}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="has-circle">
      <span class="circle circle-1"></span>
      <span class="circle circle-2"></span>
      <span class="circle circle-3"></span>
      <span class="circle circle-4"></span>
      <span class="circle circle-5"></span>
      <span class="circle circle-6"></span>
      <span class="circle circle-7"></span>
    </div>
  </section>
  <!--================== About Section End ==================-->

  <!--================== Brand Log Section Start ==================-->
  <section class="about-brand-logo brand-logo section pt-0">
    <div class="container">
      <div class="row mb-5 justify-content-center align-items-center text-center">
        <div class="col-lg-6 col-12 mx-auto ">
          <div class="section-title mb-md-4">
            <h2>my special <strong>clients
                <svg width="198" height="21" viewBox="0 0 198 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M2 18.7327C13.8854 9.74093 29.4859 8.69377 43.6964 6.03115C65.1095 2.01897 86.6266 1.40829 108.405 2.01061C137.628 2.81881 166.558 7.3721 195.577 11.0296"
                    stroke="#FF5733" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </strong></h2>
          </div>
        </div>
      </div>
      <div class="brand-logo-slider" data-aos="fade-up"  data-aos-duration="1500">
        @foreach ($brand_views as $brand_photo )
           <img class="brand-logo-img img-fluid" src="{{asset($brand_photo->brand_photo)}}" alt="img">
        @endforeach
      </div>
    </div>
    </div>
    </div>
  </section>
  <!--================== Brand Log Section End ==================-->

  <!--================== Blog Section Start ==================-->
  <section class="achivements section">
    <div class="container">
      <div class="row justify-content-between" data-aos="fade-up"  data-aos-duration="3000">
        <div class="col-lg-5">
          <div class="section-title mb-5">
            <h2>My of All personal <strong>
                achivements.....
                <svg width="198" height="21" viewBox="0 0 198 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M2 18.7327C13.8854 9.74093 29.4859 8.69377 43.6964 6.03115C65.1095 2.01897 86.6266 1.40829 108.405 2.01061C137.628 2.81881 166.558 7.3721 195.577 11.0296"
                    stroke="#FF5733" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </strong> </h2>
          </div>
          <div class="mb-5 mb-lg-0">
            <p>Lorem ipsum dolor sit amet, conse asdsd adipiscing
              elit. Malesa est sagittis et nualla leo ut nulla aliuam. Nisi, fermetum suspend vene ntis enim vel bedspend
            </p>
          </div>
       
        </div>
        <div class="col-lg-7">
          <div class="achivments-bg me-2">
            <div class=" border-bottom pb-4 mb-4">
              <span class="d-block mb-3 h4 text-secondery fw-normal">2017</span>
                   <h3 class="fs-4">Best Design award on Mobile Application for <strong class="text-primary">StartUp
                       Week Mobile</strong> </h3>
            </div>
            <div class=" border-bottom pb-4 mb-4">
              <span class="d-block  mb-3 h4 text-secondery fw-normal">2019</span>
                <h3 class="fs-4">Special Award for Creative concept "SafeNet" during <strong class="text-primary">SoftUni
                    Fest</strong> </h3>
            </div>
            <div class="border-bottom pb-4 mb-4">
              <span class="d-block mb-3 h4 text-secondery fw-normal">2019</span>
                <h3 class="fs-4">Behance featured project Match Frame Studio at <strong class="text-primary">Interaction
                    design</strong> </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================== Blog Section End ==================-->

  <!--================== Blog-post Section Start ==================-->
  <section class="blog-post section pt-0">
    <div class="container">
      <div class="row mb-5 justify-content-center align-items-center text-center">
        <div class="col-lg-6 col-12 mx-auto">
          <div class="section-title mb-5">
            <h2>My <strong>
                Blogpost
                <svg width="198" height="21" viewBox="0 0 198 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M2 18.7327C13.8854 9.74093 29.4859 8.69377 43.6964 6.03115C65.1095 2.01897 86.6266 1.40829 108.405 2.01061C137.628 2.81881 166.558 7.3721 195.577 11.0296"
                    stroke="#FF5733" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </strong> </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 mx-auto justify-content-center align-items-center ">
          @foreach ($blog_post_info as $bog_news)
            <div class="row justify-content-between align-items-center border-bottom blog mb-4 pb-4" data-aos="fade-up"  data-aos-duration="1000">
            <div class="col-md-9">
              <a href="#" class=" d-inline-block h3 mb-3 text-tertiary fw-bold">{{$bog_news->title}}</a>
                <p class="mb-1">{{$bog_news->desc}}</p>
                <a href="#" class="text-primary small">{{$bog_news->read}} <i class="fas fa-arrow-right small ms-2"></i></a>
            </div>
            <div class="col-md-2">
              <div class="blog-date">
                <h5>{{$bog_news->post_date}}  <span class="text-primary d-inline-block">{{$bog_news->parenting}} </span></h5>
              </div>
            </div>
          </div>
          @endforeach
          

     
        </div>
      </div>
    </div>
  </section>
  <!--================== Blog-post Section End ==================-->

       
 @endsection