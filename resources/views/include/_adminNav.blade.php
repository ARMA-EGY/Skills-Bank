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
                        <span class="nav-link-text">{{__('master.STAFF')}}</span>
                      </a>
                      <div class="collapse" id="navbar-staff" style="">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="{{ route('staff.create')}}" class="nav-link nav-link-sub {{request()->routeIs('staff.create') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal"> {{__('master.ADD-NEW-STAFF')}} </span>
                            </a>
                          </li>
                   
                          <li class="nav-item">
                            <a href="{{route('staff.index')}}" class="nav-link nav-link-sub {{request()->routeIs('staff.index') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal"> {{__('master.ALL-STAFF')}} </span>
                            </a>
                          </li>

                          <li class="nav-item">
                            <a href="{{ route('active-staff')}}" class="nav-link nav-link-sub {{request()->routeIs('active-staff') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal"> {{__('master.ACTIVE-STAFF')}} </span>
                            </a>
                          </li>

                          <li class="nav-item">
                            <a href="{{ route('deactive-staff')}}" class="nav-link nav-link-sub {{request()->routeIs('deactive-staff') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal"> {{__('master.BANNED-STAFF')}} </span>
                            </a>
                          </li>

                        </ul>
                      </div>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link collapsed" href="#navbar-roles" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                        <i class="fas fa-user-tag"></i>
                        <span class="nav-link-text"> {{__('master.ROLES')}}</span>
                      </a>
                      <div class="collapse" id="navbar-roles" style="">
                        <ul class="nav nav-sm flex-column">
                          
                          <li class="nav-item">
                              <a href="{{ route('permissions.create')}}" class="nav-link nav-link-sub {{request()->routeIs('permissions.create') ? 'active' : '' }}">
                                <i class="far fa-dot-circle"></i>
                                <span class="sidenav-normal"> {{__('master.ADD-NEW-ROLE')}} </span>
                              </a>
                          </li>
                          
                          <li class="nav-item">
                              <a href="{{route('permissions.index')}}" class="nav-link nav-link-sub {{request()->routeIs('permissions.index') ? 'active' : '' }}">
                                <i class="far fa-dot-circle"></i>
                                <span class="sidenav-normal"> {{__('master.ALL-ROLES')}} </span>
                              </a>
                          </li>
                          
                        </ul>
                      </div>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link collapsed" href="#navbar-reports" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                        <i class="far fa-chart-bar"></i>
                        <span class="nav-link-text"> {{__('master.REPORTS')}}</span>
                        <span class="badge badge-warning fs-9 p-1 mx-2">{{__('master.PENDING')}}</span>
                      </a>
                      <div class="collapse" id="navbar-reports" style="">
                        <ul class="nav nav-sm flex-column">
                          
                          <li class="nav-item">
                              <a href="#" class="nav-link nav-link-sub">
                                <i class="far fa-dot-circle"></i>
                                <span class="sidenav-normal"> Report 1 </span>
                              </a>
                          </li>
                          
                          <li class="nav-item">
                              <a href="#" class="nav-link nav-link-sub">
                                <i class="far fa-dot-circle"></i>
                                <span class="sidenav-normal"> Report 2 </span>
                              </a>
                          </li>
                          
                        </ul>
                      </div>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link {{request()->routeIs('admin-setting') ? 'active' : '' }}" href="{{route('admin-setting')}}">
                          <i class="ni ni-settings"></i>
                          <span class="nav-link-text">{{__('master.SETTINGS')}}</span>
                      </a>
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
                      <a class="nav-link collapsed" href="#navbar-lang" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                        <i class="fas fa-language"></i>
                        <span class="nav-link-text">{{__('master.LANGUAGE')}}</span>
                      </a>
                      <div class="collapse" id="navbar-lang" style="">
                        <ul class="nav nav-sm flex-column">

                          @if (LaravelLocalization::getCurrentLocale() == 'ar')

                                  <li class="nav-item">
                                      <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}" class="nav-link nav-link-sub">
                                      <img class="w-20 mx-2" src="{{ asset('admin_assets/flags/en.png')}}" alt="English">
                                      <span class="sidenav-normal"> {{__('master.ENGLISH')}}</span>
                                      </a>
                                  </li>

                                  <li class="nav-item">
                                      <a href="#" class="nav-link nav-link-sub active">
                                      <img class="w-20 mx-2" src="{{ asset('admin_assets/flags/ar.png')}}" alt="Arabic">
                                      <span class="sidenav-normal">{{__('master.ARABIC')}}  </span>
                                      </a>
                                  </li>

                          @elseif (LaravelLocalization::getCurrentLocale() == 'en')  

                                  <li class="nav-item">
                                      <a href="#" class="nav-link nav-link-sub active">
                                      <img class="w-20 mx-2" src="{{ asset('admin_assets/flags/en.png')}}" alt="English">
                                      <span class="sidenav-normal"> {{__('master.ENGLISH')}}</span>
                                      </a>
                                  </li>

                                  <li class="nav-item">
                                      <a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}" class="nav-link nav-link-sub ">
                                      <img class="w-20 mx-2" src="{{ asset('admin_assets/flags/ar.png')}}" alt="Arabic">
                                      <span class="sidenav-normal">{{__('master.ARABIC')}}  </span>
                                      </a>
                                  </li>
                          @endif
                          
                        </ul>
                      </div>
                  </li>

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