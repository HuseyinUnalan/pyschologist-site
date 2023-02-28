<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title>{{$settings->title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset($settings->favicon)}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Css Files -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fancybox.css') }}">
     <!-- Icons Css -->
   <link rel="stylesheet" href="{{asset('frontend/css/icons.min.css')}}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

</head>

<body>



    @include('frontend.body.header')

    @yield('content')

 


    

    @include('frontend.body.footer')

    <!-- Scorll Button Start -->
    <button onclick="topFunction()" id="top" title="Go to top"><i class="fa fa-arrow-up"></i></button>
    <!-- Scorll Button End -->


    <script src="{{ asset('frontend/js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/fancybox.umd.j') }}s"></script>
    <script type="module">
        import { Fancybox } from "{{asset('frontend/js/fancybox.esm.js') }}";
    </script>


</body>



</html>
