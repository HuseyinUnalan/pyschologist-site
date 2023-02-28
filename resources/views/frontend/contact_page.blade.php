@extends('frontend.main_master')
@section('content')
    <!-- Google Maps Start -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20Amerika%20Birle%C5%9Fik%20Devletleri!5e0!3m2!1str!2str!4v1673783811137!5m2!1str!2str"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- Google Maps End -->



    <!-- Contact Us Start -->
    <div class="py-5 contact">
        <div class="container">

            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    <strong>Success !</strong> {{ session('success') }}
                </div>
            @endif



            <div class="row">
                <!-- Column -->
                <div class="col-lg-5 pr-4 nomobile">
                    <img src="{{ asset('frontend/img/contact-us/contact-us.png') }}" class="img-fluid" alt="wrapkit" />
                </div>

                <div class="col-lg-7">
                    <div class="text-box">
                        <h2 class="font-weight-light">Ask Question and Contact Us</h2>
                        <hr>
                        <form action="{{ route('store.message') }}" class="mt-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="name" class="form-control" type="text" placeholder="Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="surname" class="form-control" type="text" placeholder="Surname"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="mail" class="form-control" type="email" placeholder="E-mail"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="subject" class="form-control" type="text" placeholder="Subject"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" id="txt" onKeyUp="check()" maxlength="255" cols="30" rows="4"
                                            class="form-control" placeholder="Messages (Max 255)" required></textarea>
                                        <div id="warning" class="mt-3"></div>
                                    </div>
                                </div>





                                <div class="col-lg-12 d-flex">
                                    <button type="submit" class="btn btn-md btn-info-gradiant border-0 text-white">
                                        <span> Send Messages </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card mt-4 border-0 mb-4">
                        <div class="row">


                            <div class="col-lg-4 col-md-4">
                                <div class="card-body d-flex align-items-center c-detail ">
                                    <div class="mr-3 align-self-center">
                                        <img src="{{ asset('frontend/img/contact-us/address.png') }}">
                                    </div>
                                    <div class="">
                                        <h6 class="font-weight-medium">Address</h6>
                                        <p class="">
                                            {{ $settings->address }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="card-body d-flex align-items-center c-detail">
                                    <div class="mr-3 align-self-center">
                                        <img src="{{ asset('frontend/img/contact-us/phone.png') }}">
                                    </div>
                                    <div class="">
                                        <h6 class="font-weight-medium">Phone</h6>
                                        <p class="">
                                            {{ $settings->phone }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="card-body d-flex align-items-center c-detail">
                                    <div class="mr-3 align-self-center">
                                        <img src="{{ asset('frontend/img/contact-us/mail.png') }}">
                                    </div>
                                    <div class="">
                                        <h6 class="font-weight-medium">Email</h6>
                                        <p class="">
                                            {{ $settings->mail }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Us End -->

    <script>
        function check() {
            stringLength = document.getElementById('txt').value.length;
            if (stringLength >= 255) {
                document.getElementById('warning').innerText = "Maximum characters are 255"
            } else {
                document.getElementById('warning').innerText = ""
            }
        }
    </script>
@endsection
