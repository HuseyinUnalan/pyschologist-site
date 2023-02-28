<div class="testimonial6 py-5">
  <div class="container">
      <div class="row">

          <!-- Tab List Start -->
          <div class="col-lg-2 col-md-3">
              <div class="nav flex-column nav-pills testi6" id="v-pills-tab" role="tablist">

                  @foreach ($testimonialactive as $activetestimonial)
                      <a class="nav-link active" data-toggle="pill" href="#t6-{{ $activetestimonial->id }}"
                          role="tab" aria-controls="t6-1" aria-expanded="true">
                          <img src="{{ asset($activetestimonial->photo) }}" alt="wrapkit"
                              class="rounded-circle" />
                      </a>
                  @endforeach

                  @foreach ($testimonials as $testimonial)
                      <a class="nav-link" data-toggle="pill" href="#t6-{{ $testimonial->id }}" role="tab"
                          aria-controls="t6-1" aria-expanded="true">
                          <img src="{{ asset($testimonial->photo) }}" alt="wrapkit" class="rounded-circle" />
                      </a>
                  @endforeach

              </div>
          </div>
          <!-- Tab List End -->

          <div class="col-lg-9 col-md-8 ml-auto align-self-center">
              <div class="tab-content" id="v-pills-tabContent">

                  @foreach ($testimonialactive as $activetestimonial)
                      <!-- Column -->
                      <div class="tab-pane fade show active" id="t6-{{ $activetestimonial->id }}"
                          role="tabpanel">
                          <h3 class="font-weight-medium">What our Patients says</h3>
                          <hr>
                          <h6 class="subtitle mt-4 font-weight-normal">Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do mode tempor incididunt ut labore et dolore magna aliqua. Ut
                              enim
                              ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                              commodo
                              consequat.</h6>
                          <div class="d-flex mt-5">
                              <div>
                                  <h5 class="mb-0 text-uppercase font-weight-normal">
                                      {{ $activetestimonial->name }}</h5>
                              </div>
                          </div>
                      </div>
                      <!-- Column -->
                  @endforeach

                  @foreach ($testimonials as $testimonial)
                      <!-- Column -->
                      <div class="tab-pane fade show" id="t6-{{ $testimonial->id }}" role="tabpanel">
                          <h3 class="font-weight-medium">What our Patients says</h3>
                          <hr>
                          <h6 class="subtitle mt-4 font-weight-normal">Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do mode tempor incididunt ut labore et dolore magna aliqua. Ut
                              enim
                              ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                              commodo
                              consequat.</h6>
                          <div class="d-flex mt-5">
                              <div>
                                  <h5 class="mb-0 text-uppercase font-weight-normal">{{ $testimonial->name }}
                                  </h5>
                              </div>
                          </div>
                      </div>
                      <!-- Column -->
                  @endforeach


              </div>
          </div>
      </div>
  </div>
</div>