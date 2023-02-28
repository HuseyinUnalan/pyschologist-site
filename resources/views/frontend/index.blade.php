   @extends('frontend.main_master')
   @section('content')
       <!-- Slider Section Start -->
       <div id="demo" class="carousel slide" data-ride="carousel">

           <!-- Indicators Start-->
           <ul class="carousel-indicators">

               @foreach ($slideractive as $activeslider)
                   <li data-target="#demo" data-slide-to="{{ $activeslider->id }}" class="active"></li>
               @endforeach
               @foreach ($sliders as $slider)
                   <li data-target="#demo" data-slide-to="{{ $slider->id }}"></li>
               @endforeach
           </ul>
           <!-- Indicators End-->

           <!-- The Slideshow Start -->
           <div class="carousel-inner">

               @foreach ($slideractive as $activeslider)
                   <div class="carousel-item active">
                       <img src="{{ $activeslider->photo }}" alt="">
                   </div>
               @endforeach

               @foreach ($sliders as $slider)
                   <div class="carousel-item ">
                       <img src="{{ $slider->photo }}" alt="">
                   </div>
               @endforeach


           </div>
           <!-- The Slideshow End -->

           <!-- Left and Right Controls Start -->
           <a class="carousel-control-prev" href="#demo" data-slide="prev">
               <span class="carousel-control-prev-icon"></span>
           </a>
           <a class="carousel-control-next" href="#demo" data-slide="next">
               <span class="carousel-control-next-icon"></span>
           </a>
           <!-- Left and Right Controls End -->

       </div>
       <!-- Slider Section End -->

       <!-- About Us Section Start -->
       <div class="py-5 about pb-0">
           <div class="container">
               <!-- Row Start-->
               <div class="row">

                   <!-- Picture Area Start-->
                   <div class="col-lg-5 text-center">
                       <img src="{{ asset($abouts->photo) }}" alt="wrappixel" />
                   </div>
                   <!-- Picture Area End-->

                   <!-- Writing Area Start -->
                   <div class="col-lg-7 pt-5">
                       <h3 class="my-3">{{ $abouts->title }}</h3>

                       {!! $abouts->home_description !!}

                       <div class="row">
                           <div class="col-md-12 my-4">
                               <a class="btn btn-info-gradiant btn-md border-0 text-white" href="about-us.html">
                                   <span>View Details</span>
                               </a>
                           </div>
                       </div>
                   </div>
                   <!-- Writing Area End -->

               </div>
               <!-- Row End-->
           </div>
       </div>
       <!-- About Us Section End -->


       <!-- Services Section Start -->
       <div class="bg-light py-3 services-area-two ">
           <div class="container mt-5 mb-5">
               <div class="row justify-content-center mb-4">
                   <div class="col-md-7 text-center">
                       <h3 class="mb-3">Services</h3>
                       <hr>
                   </div>
               </div>
               <!-- Row  -->
               <div class="row">


                   @foreach ($services as $service)
                       <!-- Column -->
                       <div class="col-lg-6 wrap-service13-box">
                           <div class="card card-shadow border-0 mb-4">
                               <div class="row no-gutters align-items-stretch">
                                   <div class="col-md-6 d-flex align-items-stretch">
                                       <img src="{{ asset($service->photo) }}" alt="wrapkit" class="img-fluid rounded" />
                                   </div>
                                   <div class="col-md-6 p-3 d-flex align-items-stretch">
                                       <div class="ml-2">
                                           <h6 class="font-weight-medium mt-2"><a href="javascript:void(0)" class="linking">
                                                   {{ $service->title }}</a></h6>
                                           <p class="mt-3"> {!! Str::limit($service->description, 100) !!}</p>
                                           <a href="{{ route('service.details', $service->id) }}"
                                               class="btn btn-services">Read More</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- Column -->
                   @endforeach

               </div>
           </div>
       </div>
       <!-- Services Section End -->




       <!-- Blog Section Start -->
       @include('frontend.body.blog_section')
       <!-- Blog Section End -->


       <!-- Our Team Section Start -->
       @include('frontend.body.team_section')
       <!-- Our Team Section End -->



       <!-- Testimonial Section Start -->
       @include('frontend.body.testimonial_section')
       <!-- Testimonial Section End -->
   @endsection
