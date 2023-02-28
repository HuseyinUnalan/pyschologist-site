<div class="container mt-5 mb-5 text-center">
  <div class="row justify-content-center mb-4">
      <div class="col-md-7 text-center">
          <h3 class="mb-3">Blog</h3>
          <hr>
      </div>
  </div>
  <div class="row">


      @foreach ($blogs as $blog)
          <!-- Column -->
          <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                      <img src="{{ asset($blog->photo) }}" class="img-fluid blog-card" />
                  </div>
                  <div class="card-body">
                      <h5 class="card-title">{{ $blog->title }}</h5>
                      <p class="card-text">
                          {!! Str::limit($blog->description, 200) !!}


                      </p>
                      <a href="{{route('blog.details', $blog->id)}}" class="btn btn-blog">Read More</a>
                  </div>
                  <small class="text-muted cat">
                      <i class="fa fa-user text-info"></i>{{$blog->author}}
                      <i class="fa fa-clock-o text-info"></i>{{ Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}
                  </small>
              </div>
          </div>
          <!-- Column -->
      @endforeach

      <div class="col-md-12 mt-3 text-center">
          <a href="{{route('home.blog')}}" class="btn btn-blog-view text-white border-0 btn-md btn-arrow">
              <span>All Blogs</span>
          </a>
      </div>


  </div>
</div>