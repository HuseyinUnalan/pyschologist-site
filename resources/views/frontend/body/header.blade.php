<!-- Top Bar Start -->
<div class="topnav">
    <div class="container">
        <div class="row">

            <div class="col-xl-4 col-md-4 col-sm-12 col-12 top-phone-mobil">
                <a href="#">
                    <i class="fa fa-phone"></i>{{ $settings->phone }}
                </a>
            </div>

            <div class="col-xl-4 col-md-4 col-sm-12 col-12 top-mail-mobil">
                <a href="#">
                    <i class="fa fa-envelope"></i>{{ $settings->mail }}
                </a>
            </div>

            <div class="col-xl-4 col-md-4 col-sm-12 col-12 top-address-mobil">
                <a href="#">
                    <i class="fa fa-map"></i>{{ $settings->address }}
                </a>
            </div>

        </div>
    </div>
</div>
<!-- Top Bar End -->


<!-- Header Section Start  -->
<nav id="navbar-sticky" class="navbar navbar-expand-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('/') }}">
            <img src="{{ asset($settings->logo) }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <img src="{{ asset('frontend/img/menu.png') }}" alt="">
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-sm-5">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.service') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.contact') }}">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.faq') }}">Faq</a>
                </li>
            </ul>
        </div>
        <a href="{{ route('home.contact') }}" class=" btn btn-contact nomobile">Get Appointment</a>




    </div>
</nav>
<!-- Header Section End -->
