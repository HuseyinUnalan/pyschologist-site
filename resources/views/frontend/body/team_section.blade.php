<div class="py-5 team-area bg-light">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-7 text-center">
                <h3 class="mb-3">Our Doctors</h3>
                <hr>
            </div>
        </div>
        <div class="row">

            @foreach ($teams as $team)
                <!-- column  -->
                <div class="col-lg-3 col-md-3 col-sm-12 mb-4 text-center">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset($team->photo) }}" alt="wrapkit" class="img-fluid" />
                        </div>
                        <div class="col-md-12">
                            <div class="pt-2">
                                <h5 class="mt-4 font-weight-medium mb-0">{{ $team->name }}</h5>
                                <h6 class="subtitle">{{ $team->position }}</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do incididunt ut labore
                                    et
                                    dolore magna aliqua.</p>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"
                                            class="text-decoration-none d-block px-1"><i
                                                class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"
                                            class="text-decoration-none d-block px-1"><i
                                                class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"
                                            class="text-decoration-none d-block px-1"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"
                                            class="text-decoration-none d-block px-1"><i
                                                class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                </div>
                <!-- column  -->
            @endforeach


            <div class="col-md-12  text-center">
                <a href="#" class="btn btn-team-view text-white border-0 btn-md btn-arrow">
                    <span>All Team</span>
                </a>
            </div>

        </div>
    </div>
</div>