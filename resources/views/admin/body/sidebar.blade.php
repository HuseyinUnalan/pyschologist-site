<div class="vertical-menu">
    <div data-simplebar class="h-100">



        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>




                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="far fa-image"></i>
                        <span>Slider Operations</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.slider') }}">All Slider</a></li>
                        <li><a href="{{ route('add.slider') }}">Add Slider</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="far fa-images"></i>
                        <span>Gallery Operations</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.gallery') }}">All Gallery</a></li>
                        <li><a href="{{ route('add.gallery') }}">Add Gallery</a></li>
                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-shield-user-line"></i>
                        <span>About Operations</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('edit.about') }}">About Page</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-settings-3-line"></i>
                        <span>Settings Operations</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('settings.edit') }}">Settings Page</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-honour-line"></i>
                        <span>Service Operations</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.service') }}">All Service</a></li>
                        <li><a href="{{ route('add.service') }}">Add Service</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-pen-nib-fill"></i>
                        <span>Blog Operations</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.blog.category') }}">All Blog Category</a></li>
                        <li><a href="{{ route('add.blog.category') }}">Add Blog Category</a></li>

                        <li><a href="{{ route('all.blog') }}">All Blog</a></li>
                        <li><a href="{{ route('add.blog') }}">Add Blog</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-user-plus"></i>
                        <span>Testimonial Operations</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.testimonial') }}">All Testimonial</a></li>
                        <li><a href="{{ route('add.testimonial') }}">Add Testimonial</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-team-line"></i>
                        <span>Client Operations</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.client') }}">All Client</a></li>
                        <li><a href="{{ route('add.client') }}">Add Client</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-question"></i>
                        <span>Faq Operations</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.faq') }}">All Faq</a></li>
                        <li><a href="{{ route('add.faq') }}">Add Faq</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="far fa-thumbs-up"></i>
                        <span>Social Operations</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.social') }}">All Social Media</a></li>
                        <li><a href="{{ route('add.social') }}">Add Social Media</a></li>
                        <li><a href="{{ route('all.icon') }}">All Icon</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-group-line"></i>
                        <span>Team Operations</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.team') }}">All Team</a></li>
                        <li><a href="{{ route('add.team') }}">Add Team</a></li>
                    </ul>
                </li>

                <hr>

                @php
                    $message = DB::table('messages')
                        ->where('read_status', 0)
                        ->count();
                @endphp

                <li>
                    <a href="{{ route('all.message') }}" class=" waves-effect">
                        <i class="fas fa-envelope"></i>
                        <span>Messages</span>
                        @if ($message > 0)
                            @php
                                $unread = $message;
                            @endphp
                            <span class="badge rounded-pill bg-success float-end">{{ $message }}</span>
                        @else
                        @endif
                    </a>
                </li>

                <li>
                    <a href="{{ route('calendar') }}" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>Calendar</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('todo') }}" class=" waves-effect">
                        <i class="fas fa-list-ol"></i>
                        <span>To Do List</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('all.icon') }}" target="_blank">
                        <i class="fas fa-icons"></i>
                        <span>All Icon</span>
                    </a>

                </li>

                <li>
                    <a href="{{ route('/') }}" target="_blank">
                        <i class="ri-earth-fill"></i>
                        <span>Web Site</span>
                    </a>

                </li>




                {{-- 
              <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                      <i class="ri-mail-send-line"></i>
                      <span>Home Slide Setup</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="{{ route('home.slide') }}">Home Slide</a></li>
                  </ul>
              </li>

              <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                      <i class="ri-mail-send-line"></i>
                      <span>About Page Setup</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="{{ route('about.page') }}">About Page</a></li>
                      <li><a href="{{ route('about.multi.image') }}">About Multi Image</a></li>
                      <li><a href="{{ route('all.multi.image') }}">All Multi Image</a></li>
                  </ul>
              </li>


              <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                      <i class="ri-mail-send-line"></i>
                      <span>Portfolio Page Setup</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="{{ route('all.portfolio') }}">All Portfolio</a></li>
                      <li><a href="{{ route('add.portfolio') }}">Add Portfolio</a></li>
                  </ul>
              </li>



              <li>


              <li class="menu-title">Pages</li>

              <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                      <i class="ri-account-circle-line"></i>
                      <span>Blog Category</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="{{ route('all.blog.category') }}">All Blog Category</a></li>
                      <li><a href="{{ route('add.blog.category') }}">Add Blog Category</a></li>

                  </ul>
              </li>

              <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                      <i class="ri-profile-line"></i>
                      <span>Blog Page</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="{{ route('all.blog') }}">All Blog</a></li>
                      <li><a href="{{ route('add.blog') }}">Add Blog</a></li>
                  </ul>
              </li>


              <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                      <i class="ri-profile-line"></i>
                      <span>Footer Page Setup</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="{{ route('footer.setup') }}">Footer Setup</a></li>
                  </ul>
              </li>

              <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                      <i class="ri-profile-line"></i>
                      <span>Contact Message</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="{{ route('contact.message') }}">Contact Message</a></li>
                  </ul>
              </li> --}}



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
