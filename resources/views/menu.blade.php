          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i style="font-size:17px;" class="fa fa-envelope-o"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="{{ url('adminlte/dist/img/user4-128x128.jpg') }}" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="{{ url('/') }}">
                  <i style="font-size:20px;" class="fa fa-home"></i>
                </a>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ url('adminlte/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ session('akses_username') }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{ url('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                    <p>
                      {{ session('akses_username') }} - {{ session('akses_type') }}
                      <small>Member since {{ session('created_at') }}</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ url('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>