  @extends('frontend.main_master')
  @section('content')
      <!--  Banner Area Start -->
      <div class="banner" style="position: relative;">
          <img src="{{ asset('frontend/img/banner/banner-1.jpg') }}" alt="" style="width:100%; height: 320px;">
          <div class="centered">
              <h2>Services</h2>
              <div class="breadcumb">
                  <ul>
                      <li>
                          <a href="{{ route('/') }}">Home</a>
                      </li>
                      <li>Services</li>
                  </ul>
              </div>
          </div>
      </div>
      <!--  Banner Area End -->

      <!-- Services Section Start -->
      <div class="bg-light py-3 services-area-two ">
          <div class="container mt-5 mb-5">
              <!-- Row  -->
              <div class="row">


                  @foreach ($allservices as $allservice)
                      <!-- Column -->
                      <div class="col-lg-6 wrap-service13-box">
                          <div class="card card-shadow border-0 mb-4">
                              <div class="row no-gutters align-items-stretch">
                                  <div class="col-md-6 d-flex align-items-stretch">
                                      <img src="{{ asset($allservice->photo) }}" alt="wrapkit" class="img-fluid rounded" />
                                  </div>
                                  <div class="col-md-6 p-3 d-flex align-items-stretch">
                                      <div class="ml-2">
                                          <h6 class="font-weight-medium mt-2"><a href="javascript:void(0)"
                                                  class="linking">{{ $allservice->title }}</a></h6>
                                          <p class="mt-3"> {!! Str::limit($allservice->title, 100) !!} </p>
                                          <a href="{{ route('service.details', $allservice->id) }}"
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
  @endsection
