@extends('frontend.main_master')
@section('content')
    <!--  Banner Area Start -->
    <div class="banner" style="position: relative;">
        <img src="{{ asset('frontend/img/banner/banner-1.jpg') }}" alt="" style="width:100%; height: 320px;">
        <div class="centered">
            <h2>Blog</h2>
            <div class="breadcumb">
                <ul>
                    <li>
                        <a href="{{ route('/') }}">Home</a>
                    </li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </div>
    <!--  Banner Area End -->


    <!-- Container Start -->
    <div class="container">
        <!-- Row Start -->
        <div class="row">
            <!-- Blog Details Start -->
            <div class="col-xl-9 col-md-12">


                @foreach ($allblogs as $allblog)
                    <!-- Column -->
                    <div class="blog-sidebar">
                        <img src="{{ asset($allblog->photo) }}" alt="">
                        <div class="mt-3">
                            <i class="fa fa-clock-o"></i>{{ Carbon\Carbon::parse($allblog->created_at)->diffForHumans() }}
                            <i class="fa fa-user"></i>{{ $allblog->author }}
                        </div>
                        <hr>
                        <div>
                            <h4>{{ $allblog->title }}</h4>
                            <p>{!! Str::limit($allblog->description, 200) !!}
                            </p>
                            <a href="{{route('blog.details', $allblog->id)}}" class="btn btn-blog-sidebar">Read More</a>
                        </div>
                    </div>
                    <!-- Column -->
                @endforeach



                <div class="pagination-wrap">
                    {{ $allblogs->links('vendor.pagination.default') }}
                </div>



            </div>
            <!-- Blog Details End -->

            <!-- Blog Detail Sidebar Start-->
            <div class="col-xl-3 col-md-12 col-sm-12">
                <div class="blog-sidebar-blogs">

                    <!-- Search Button Start -->
                    {{-- <div class="input-group mb-5">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" />
                        <button type="button" class="btn btn-search">Search</button>
                    </div> --}}
                    <!-- Search Button End -->

                    <!-- Categories Start -->
                    <h4 class="blog-sidebar-blogs-title">Categories</h4>
                    <hr>
                    <div class="blog-details-sidebar-category mb-5">

                      
                        @foreach ($categories as $categorie)
                            <a href="{{ route('category.blog', $categorie->id) }}" style="color: black;">
                                <h5><i class="fa fa-chevron-right"></i>{{ $categorie->blog_category }}</h5>
                            </a>
                        @endforeach
                    </div>
                    <!-- Categories End -->

                    <!-- Latest Blogs Start -->
                    <h4 class="blog-sidebar-blogs-title">Last Blogs</h4>
                    <hr>
                    <div class="row">

                        @foreach ($lastblogs as $lastblog)
                            <!-- Column -->
                            <div class="blog-sidebar-colum col-xl-12 col-md-6">
                                <img src="{{ asset($lastblog->photo) }}" alt="">
                                <div class="blog-sidebar-description">
                                    <a href="#">{{ $lastblog->title }}</a>
                                </div>
                            </div>
                            <!-- Column -->
                        @endforeach


                    </div>
                    <!-- Latest Blogs End -->

                </div>
            </div>
            <!-- Blog Detail Sidebar End -->


        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
@endsection
