@extends('frontend.main_master')
@section('content')
    <!--  Banner Area Start -->
    <div class="banner" style="position: relative;">
        <img src="{{ asset('frontend/img/banner/banner-1.jpg') }}" alt="" style="width:100%; height: 320px;">
        <div class="centered">
            <h2>Faq</h2>
            <div class="breadcumb">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Faq</li>
                </ul>
            </div>
        </div>
    </div>
    <!--  Banner Area End -->

    <!-- Faq Section Start -->

    <section class="accordion-section clearfix mt-5 mb-5" aria-label="Question Accordions">
        <div class="container">
            <h3><i class="fa fa-plus"></i>Frequently Asked Questions</h3>
            <hr>

            <div class="row">

                <!-- Faq Section Left Side Start -->
                <div class="panel-group col-xl-6" id="accordion" role="tablist" aria-multiselectable="true">



                    @foreach ($leftfaqs as $leftfaq)
                        <div class="panel panel-default">
                            <div class="panel-heading p-3 mb-3" role="tab" id="heading{{ $leftfaq->id }}">
                                <h3 class="panel-title">
                                    <a class="collapsed" role="button" title="" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapse{{ $leftfaq->id }}" aria-expanded="true"
                                        aria-controls="collapse{{ $leftfaq->id }}">
                                        {{ $leftfaq->title }} <i class="fas fa-chevron-down" style="float: right"></i>
                                    </a>
                                </h3>
                            </div>
                            <div id="collapse{{ $leftfaq->id }}" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="heading{{ $leftfaq->id }}">
                                <div class="panel-body px-3 mb-4">
                                    {!! $leftfaq->description !!}
                                </div>
                            </div>
                        </div>
                    @endforeach




                </div>
                <!-- Faq Section Left Side End -->


                <!-- Faq Section Right Side Start -->
                <div class="panel-group col-xl-6" id="accordion" role="tablist" aria-multiselectable="true">

                    @foreach ($rightfaqs as $rightfaq)
                        <!-- Column -->
                        <div class="panel panel-default">
                            <div class="panel-heading p-3 mb-3" role="tab" id="heading{{ $rightfaq->id }}">
                                <h3 class="panel-title">
                                    <a class="collapsed" role="button" title="" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapse{{ $rightfaq->id }}" aria-expanded="true"
                                        aria-controls="collapse{{ $rightfaq->id }}">
                                        {{ $rightfaq->title }} <i class="fas fa-chevron-down" style="float: right"></i>
                                    </a>
                                </h3>
                            </div>
                            <div id="collapse{{ $rightfaq->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $rightfaq->id }}">
                                <div class="panel-body px-3 mb-4">
                                    {!! $rightfaq->description !!}
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    @endforeach


                </div>
                <!-- Faq Section Right Side End -->

            </div>



        </div>
    </section>
    <!-- Faq Section End -->
@endsection
