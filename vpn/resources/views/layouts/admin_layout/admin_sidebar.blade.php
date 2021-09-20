  <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-dark elevation-4">
    <a href="index3.html" class="brand-link">
      
        <img src="{{ asset('images/admin_images/icons8-settings-50.png') }}" class="img-circle elevation-2" alt="User Image">
      
      <span class="brand-text font-weight-bold">&nbsp;&nbsp; VPN APP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('images/admin_images/avatar04.png  ') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block font-weight-bold">{{ Auth::user()->name }}</a>
      </div>
    </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          @if(Session::get('page')=="dashboard")
          <?php $active = "active";?>
          @else
          <?php $active = ""; ?>
          @endif
          <h5><a href="{{ url('/home') }}" class="nav-link {{$active}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a></h5>
        </li>

          <!--  -->
        <li class="nav-item">
          @if(Session::get('page')=="customer")
          <?php $active = "active";?>
          @else
          <?php $active = ""; ?>
          @endif
          <h5><a href="{{ url('/customer/index') }}" class="nav-link {{$active}}">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Users
            </p>
          </a></h5>
        </li>
          <!--  -->

        <li class="nav-item">
          @if(Session::get('page')=="pass")
          <?php $active = "active";?>
          @else
          <?php $active = ""; ?>
          @endif
          <h5><a href="{{ url('/change-password') }}" class="nav-link {{$active}}">
            <i class=" nav-icon fas fa-lock"></i>
            <p>
              Change-Password
            </p>
          </a></h5>
        </li>
          <!--  -->
        
        <li class="nav-item">
          @if(Session::get('page')=="settings")
          <?php $active = "active";?>
          @else
          <?php $active = ""; ?>
          @endif
          <h5>
            <a class="nav-link"  href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
        
              <i class=" nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </h5>
        </li>
            <!--  -->
      </ul>
    </nav>
  </div>
</aside>
