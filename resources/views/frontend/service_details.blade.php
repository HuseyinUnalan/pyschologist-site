@extends('frontend.main_master')
@section('content')
    <!--  Banner Area Start -->
    <div class="banner" style="position: relative;">
        <img src="{{ asset('frontend/img/banner/banner-1.jpg') }}" alt="" style="width:100%; height: 320px;">
        <div class="centered">
            <h2>{{ $services->title }}</h2>
            <div class="breadcumb">
                <ul>
                    <li>
                        <a href="{{ route('/') }}">Home</a>
                    </li>
                    <li>{{ $services->title }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!--  Banner Area End -->

    <!-- Container Start -->
    <div class="container">
        <!-- Row Start -->
        <div class="row">


            <!-- Services Detail Sidebar Start-->
            <div class="col-xl-3 col-md-12 col-sm-12">
                <div class="services-details-sidebar">
                    <h4>Other Services</h4>
                    <hr>
                    @foreach ($allservices as $allservice)
                        <a href="{{ route('service.details', $allservice->id) }}">
                            <h5 class="services-sidebar"><i class="fa fa-chevron-right"></i>{{ $allservice->title }}</h5>
                        </a>
                    @endforeach
                </div>

                <div class="services-details-sidebar-contact mt-5">
                    <h4>Contact Us</h4>
                    <hr>
                    <a href=""><i class="fa fa-phone"></i>{{ $settings->phone }}</a>
                    <br>
                    <a href=""><i class="fa fa-envelope"></i>{{ $settings->mail }}</a>
                    <br>
                    <a href=""><i class="fa fa-map"></i>{{ $settings->address }}</a>
                </div>


            </div>
            <!-- Services Detail Sidebar End -->

            <!-- Services Details Start -->
            <div class="col-xl-9 col-md-12 services-details">
                <img src="{{ asset($services->photo) }}" alt="">

                <div class="mt-3">

                    <h4>{{ $services->title }}</h4>

                    {!! $services->description !!}
                </div>




            </div>
            <!-- Services Details End -->




        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
@endsection
