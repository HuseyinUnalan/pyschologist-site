   <!-- Counter Start -->
   <div class="counter-bg-color">
       <div class="container ">
           <div class="row text-center ">

               <!-- Column -->
               <div class="col">
                   <div class="counter">
                       <i class="fa fa-users fa-2x"></i>
                       <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
                       <p class="count-text ">Happy Patients</p>
                   </div>
               </div>
               <!-- Column -->

               <!-- Column -->
               <div class="col">
                   <div class="counter">
                       <i class="fa fa-check fa-2x"></i>
                       <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
                       <p class="count-text ">Award</p>
                   </div>
               </div>
               <!-- Column -->

               <!-- Column -->
               <div class="col">
                   <div class="counter">
                       <i class="fa fa-user-plus fa-2x"></i>
                       <h2 class="timer count-title count-number" data-to="50" data-speed="1500"></h2>
                       <p class="count-text ">Specialist</p>
                   </div>
               </div>
               <!-- Column -->

           </div>
       </div>
   </div>
   <!-- Counter End -->


   <!-- Footer Section Start -->
   <footer class="page-footer font-small blue pt-4">
       <!-- Footer Links -->
       <div class="container text-center text-md-left">
           <!-- Grid row -->
           <div class="row">
               <!-- Grid column -->
               <div class="col-md-6 mt-md-0 mt-3">
                   <!-- Content -->
                   <img src="{{ asset($settings->logo) }}" class="footer-logo" alt="">
                   <p>
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore doloremque, ipsam eligendi
                       assumenda amet, exercitationem deleniti, vero tenetur neque velit quasi recusandae repudiandae?
                   <p>
               </div>
               <!-- Grid column -->
               <hr class="clearfix w-100 d-md-none pb-3">
               <!-- Grid column -->
               <div class="col-md-2 mb-md-0 mb-3">
                   <!-- Links -->
                   <h5 class="text-uppercase">Quick Link</h5>
                   <ul class="list-unstyled">
                       <li>
                           <a href="{{ route('/') }}">Home</a>
                       </li>
                       <li>
                           <a href="{{ route('home.about') }}">About Us</a>
                       </li>
                       <li>
                           <a href="{{ route('home.blog') }}">Blog</a>
                       </li>
                       <li>
                           <a href="{{ route('home.service') }}">Services</a>
                       </li>
                       <li>
                           <a href="{{ route('home.contact') }}">Contact Us</a>
                       </li>
                   </ul>
               </div>
               <!-- Grid column -->
               <!-- Grid column -->
               <div class="col-md-4 mb-md-0 mb-3 ">
                   <!-- Links -->
                   <h5 class="text-uppercase">Get In Touch</h5>
                   <ul class="list-unstyled">
                       <li>
                           <a href="tel:{{ $settings->phone }}">
                               <i class="fa fa-phone"></i>{{ $settings->phone }}
                           </a>
                       </li>
                       <li>
                           <a href="mailto:{{ $settings->mail }}">
                               <i class="fa fa-envelope"></i>{{ $settings->mail }}
                           </a>
                       </li>
                       <li>
                           <a href="JavaScript:Void(0)">
                               <i class="fa fa-map"></i>{{ $settings->address }}
                           </a>
                       </li>
                       <li>

                           @foreach ($socials as $social)
                               <a href="{{ $social->link }}" class="m-2" target="_blank">
                                   <i class="{{ $social->icon }}"></i>
                               </a>
                           @endforeach



                       </li>
                   </ul>
               </div>
               <!-- Grid column -->
           </div>
           <!-- Grid row -->
       </div>
       <!-- Footer Links -->

       <!-- Copyright -->
       <div class="footer-copyright text-center py-3">© 2023 Copyright
           <a href="https://www.linkedin.com/in/huseyin-unalan/" target="_blank">Hseyin4</a>
       </div>
       <!-- Copyright -->

   </footer>
   <!-- Footer Section End -->
