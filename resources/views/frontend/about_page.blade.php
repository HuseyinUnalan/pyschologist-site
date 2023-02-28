@extends('frontend.main_master')
@section('content')
    <!--  Banner Area Start -->
    <div class="banner" style="position: relative;">
        <img src="{{ asset('frontend/img/banner/banner-1.jpg') }}" alt="" style="width:100%; height: 320px;">
        <div class="centered">
            <h2>About Us</h2>
            <div class="breadcumb">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!--  Banner Area End -->


    <div class="py-5 about pb-0">
        <div class="container">
            <!-- Row Start-->
            <div class="row">
                <!-- Picture Area Start-->
                <div class="col-lg-5 text-center">
                    <img src="{{ $abouts->photo }}" alt="wrappixel" />
                </div>
                <!-- Picture Area End-->
                <!-- Writing Area Start -->
                <div class="col-lg-7 pt-5">
                    <h3 class="my-3"> {{ $abouts->title }}</h3>
                    {!! $abouts->description !!}
                </div>
            </div>
            <!-- Writing Area End -->
        </div>
        <!-- Row End-->
    </div>
    @include('frontend.body.team_section')

    @include('frontend.body.testimonial_section')

    @include('frontend.body.client_section')
@endsection
