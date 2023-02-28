@extends('frontend.main_master')
@section('content')
    <!--  Banner Area Start -->
    <div class="banner" style="position: relative;">
        <img src="{{asset('frontend/img/banner/banner-1.jpg')}}" alt="" style="width:100%; height: 320px;">
        <div class="centered">
            <h2>Gallery</h2>
            <div class="breadcumb">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div>
    <!--  Banner Area End -->



    <!-- Gallery Section Start -->


    <div class="container mt-5 mb-5">
        <!-- Gallery -->
        <div class="row">

            <!-- Gallery -->
            <div class="row">


                @foreach ($gallerys as $gallery)
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <a data-fancybox="gallery" data-src="{{ asset($gallery->photo) }}">
                            <img src="{{ asset($gallery->photo) }}" class="w-100 shadow-1-strong rounded mb-4"
                                alt="Boat on Calm Water" />
                        </a>
                    </div>
                @endforeach








            </div>
            <!-- Gallery -->

        </div>
        <!-- Gallery -->
    </div>

    <!-- Gallery Section End -->
@endsection
