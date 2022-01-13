    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left navbar-expand-xs navbar-dark bg-dark" id="sidenav-main">
        <div class="scrollbar-inner">
          
          <div class="navbar-inner">
              <!-- Collapse --><div class="collapse navbar-collapse" id="sidenav-collapse-main">
              <!-- Nav items -->
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link {{request()->routeIs('home') ? 'active' : '' }}" href="{{route('home')}}">
                          <i class="fas fa-th-large"></i>
                          <span class="nav-link-text">{{__('master.HOME')}}</span>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link collapsed" href="#navbar-staff" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                        <i class="fa fa-users"></i>
                        <span class="nav-link-text">Staff</span>
                      </a>
                      <div class="collapse" id="navbar-staff" style="">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="{{ route('staff.create')}}" class="nav-link nav-link-sub {{request()->routeIs('staff.create') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal"> Add New Staff </span>
                            </a>
                          </li>
                   
                          <li class="nav-item">
                            <a href="{{route('staff.index')}}" class="nav-link nav-link-sub {{request()->routeIs('staff.index') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal"> All Staff </span>
                            </a>
                          </li>

                          <li class="nav-item">
                            <a href="{{ route('active-staff')}}" class="nav-link nav-link-sub {{request()->routeIs('active-staff') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal"> Active Staff </span>
                            </a>
                          </li>

                          <li class="nav-item">
                            <a href="{{ route('deactive-staff')}}" class="nav-link nav-link-sub {{request()->routeIs('deactive-staff') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal"> Banned Staff </span>
                            </a>
                          </li>

                        </ul>
                      </div>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link collapsed" href="#navbar-team" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                        <i class="fas fa-user-friends"></i>
                        <span class="nav-link-text">Team</span>
                      </a>
                      <div class="collapse" id="navbar-team" style="">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="{{ route('team.create')}}" class="nav-link nav-link-sub {{request()->routeIs('team.create') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal"> Add New Member </span>
                            </a>
                          </li>
                   
                          <li class="nav-item">
                            <a href="{{route('team.index')}}" class="nav-link nav-link-sub {{request()->routeIs('team.index') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal"> All Members </span>
                            </a>
                          </li>

                        </ul>
                      </div>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link collapsed" href="#navbar-clients" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                        <i class="fas fa-tags"></i>
                        <span class="nav-link-text">Clients</span>
                      </a>
                      <div class="collapse" id="navbar-clients" style="">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="{{ route('clients.create')}}" class="nav-link nav-link-sub {{request()->routeIs('clients.create') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal"> Add New Client </span>
                            </a>
                          </li>
                   
                          <li class="nav-item">
                            <a href="{{route('clients.index')}}" class="nav-link nav-link-sub {{request()->routeIs('clients.index') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal"> All Clients </span>
                            </a>
                          </li>

                          <li class="nav-item">
                            <a href="{{ route('clientscategory.index')}}" class="nav-link nav-link-sub {{request()->routeIs('clientscategory.index') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal">Categories</span>
                            </a>
                          </li>

                        </ul>
                      </div>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link collapsed" href="#navbar-courses" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-courses">
                        <i class="fas fa-clipboard"></i>
                        <span class="nav-link-text">Courses</span>
                      </a>
                      <div class="collapse" id="navbar-courses" style="">
                        <ul class="nav nav-sm flex-column">

                          <li class="nav-item">
                            <a href="{{ route('courses.index')}}" class="nav-link nav-link-sub {{request()->routeIs('courses.index') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal">All Courses</span>
                            </a>
                          </li>

                          <li class="nav-item">
                            <a href="{{ route('coursecategory.index')}}" class="nav-link nav-link-sub {{request()->routeIs('coursecategory.index') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal">Categories</span>
                            </a>
                          </li>

                          <li class="nav-item">
                            <a href="{{ route('course-requestes')}}  " class="nav-link nav-link-sub">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal">Bookings</span>
                            </a>
                          </li>

                          <li class="nav-item">
                            <a href="{{ route('meetings.index')}}" class="nav-link nav-link-sub {{request()->routeIs('meetings.index') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal">All meetings</span>
                            </a>
                          </li>
                          
                        </ul>
                      </div>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link collapsed" href="#navbar-career" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                        <i class="fas fa-briefcase"></i>
                        <span class="nav-link-text">Careers</span>
                      </a>
                      <div class="collapse" id="navbar-career" style="">
                        <ul class="nav nav-sm flex-column">

                          <li class="nav-item">
                            <a href="{{ route('careers.index')}}" class="nav-link nav-link-sub {{request()->routeIs('careers.index') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal"> Careers</span>
                            </a>
                          </li>

                          <li class="nav-item">
                            <a href="{{route('career-requests')}}" class="nav-link nav-link-sub {{request()->routeIs('career-requests') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal"> Requests </span>
                            </a>
                          </li>
                          
                        </ul>
                      </div>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link {{request()->routeIs('learningtree.index') ? 'active' : '' }}" href="{{route('learningtree.index')}}">
                          <i class="fas fa-code-branch"></i>
                          <span class="nav-link-text">Learning Tree</span>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link {{request()->routeIs('blogs.index') ? 'active' : '' }}" href="{{route('blogs.index')}}">
                          <i class="fa fa-book"></i>
                          <span class="nav-link-text">Blogs</span>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link {{request()->routeIs('collaboration.index') ? 'active' : '' }}" href="{{route('collaboration.index')}}">
                          <i class="far fa-handshake"></i>
                          <span class="nav-link-text">Collaborations</span>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link {{request()->routeIs('testimonials.index') ? 'active' : '' }}" href="{{route('testimonials.index')}}">
                          <i class="fas fa-comment-dots"></i>
                          <span class="nav-link-text">Testimonials</span>
                      </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('messages') ? 'active' : '' }}" href="{{route('messages')}}">
                        <i class="ni ni-email-83"></i>
                        <span class="nav-link-text">Messages</span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('subscribers') ? 'active' : '' }}" href="{{route('subscribers')}}">
                        <i class="ni ni-bullet-list-67"></i>
                        <span class="nav-link-text">Subscribers List</span>
                    </a>
                  </li>

                  {{-- <li class="nav-item">
                      <a class="nav-link" href="#">
                          <i class="fas fa-copy"></i>
                          <span class="nav-link-text">Pages</span>
                      </a>
                  </li> --}}

                  <li class="nav-item">
                    <a class="nav-link collapsed" href="#navbar-slider" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                        <i class="fa fa-images"></i>
                      <span class="nav-link-text"> Slide Show</span>
                    </a>
                    <div class="collapse" id="navbar-slider" style="">
                      <ul class="nav nav-sm flex-column">
                        
                        <li class="nav-item">
                            <a class="nav-link nav-link-sub {{request()->is('slideshow/eg') ? 'active' : '' }}" href="{{ route('admin-show-slider', 'eg')}}">
                                <i class="far fa-dot-circle"></i>
                                <span class="nav-link-text">Egypt</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-link-sub {{request()->is('slideshow/sa') ? 'active' : '' }}" href="{{route('admin-show-slider', 'sa')}}">
                                <i class="far fa-dot-circle"></i>
                                <span class="nav-link-text">KSA</span>
                            </a>
                        </li>
                        
                      </ul>
                    </div>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link collapsed" href="#navbar-setting" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                        <i class="ni ni-settings"></i>
                        <span class="nav-link-text"> {{__('master.SETTINGS')}}</span>
                      </a>
                      <div class="collapse" id="navbar-setting" style="">
                        <ul class="nav nav-sm flex-column">
                          
                          <li class="nav-item">
                              <a href="{{ route('admin-setting')}}" class="nav-link nav-link-sub {{request()->routeIs('admin-setting') ? 'active' : '' }}">
                                <i class="far fa-dot-circle"></i>
                                <span class="sidenav-normal"> General Setting </span>
                              </a>
                          </li>
                          
                          <li class="nav-item">
                              <a href="{{route('socialmedia')}}" class="nav-link nav-link-sub {{request()->routeIs('socialmedia') ? 'active' : '' }}">
                                <i class="far fa-dot-circle"></i>
                                <span class="sidenav-normal"> Social Media </span>
                              </a>
                          </li>
                          
                        </ul>
                      </div>
                  </li>
                  
              </ul>
              <!-- Divider -->
              <hr class="my-3">
              <!-- Heading -->
              <h6 class="navbar-heading p-0 text-muted">
              </h6>
              <!-- Navigation -->
              <ul class="navbar-nav mb-md-3">
                
                  <li class="nav-item">
                      <a class="nav-link {{request()->routeIs('profile') ? 'active' : '' }}" href="{{route('profile')}}">
                          <i class="fa fa-user-circle"></i>
                          <span class="nav-link-text">{{__('master.PROFILE')}}</span>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                          <i class="ni ni-user-run"></i>
                          <span class="nav-link-text">{{__('master.LOGOUT')}} </span>
                      </a>
                  </li>
              </ul>
              </div>
          </div>
        </div>
    </nav>