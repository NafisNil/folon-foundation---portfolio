<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">

      <span class="brand-text font-weight-light"> Appoinrment dashboard - Connect With Dr. Atiq</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>
      @php
      $prefix = Request::route()->getPrefix();
      $route = Request::route()->getName();
      @endphp
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link active" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li>


            </ul>
          </li>
         <hr>
     <!--   <li class="nav-item">
            <a href="#" class="nav-link {{$route == 'doctor.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Settings

              </p>
            </a>
          </li>-->

          <li class="nav-item">
            <a href="{{ route('setting.index') }}" {{$route == 'setting.index'?'active':''}} class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Settings

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('slider.index') }}" {{$route == 'slider.index'?'active':''}} class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Slider

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('aboutus.index') }}" {{$route == 'aboutus.index'?'active':''}} class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                About Us

              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('counter.index') }}" {{$route == 'counter.index'?'active':''}} class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Counter

              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('team.index') }}" {{$route == 'team.index'?'active':''}} class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Team

              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('testimonial.index') }}" {{$route == 'testimonial.index'?'active':''}} class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Testimonial

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('whatwedo.index') }}" {{$route == 'whatwedo.index'?'active':''}} class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                What We Do

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('cause.index') }}" {{$route == 'cause.index'?'active':''}} class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Cause

              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('event.index') }}" {{$route == 'event.index'?'active':''}} class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Event

              </p>
            </a>
          </li>



          <li class="nav-item">
            <a href="{{ route('blog.index') }}" {{$route == 'blog.index'?'active':''}} class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Blog

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('social.index') }}" {{$route == 'social.index'?'active':''}} class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Social Media

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('contactform.index') }}" {{$route == 'contactform.index'?'active':''}} class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Contact Form

              </p>
            </a>
          </li>

         <hr>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
