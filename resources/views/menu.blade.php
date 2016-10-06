          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

              @if(session('akses_type') == "student")
              <!-- <li class="dropdown notifications-menu">
                <a href="{{ url('absen_page') }}">
                  <i style="font-size:20px;color:white" class="fa fa-user"></i>
                </a> -->
                <!-- <ul style="height: 125px !important;" class="dropdown-menu">
                  <li>
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-circle-o"></i> Check
                        </a>
                      </li>
                      <li>
                        <a href="{{ url('absen_page') }}">
                          <i class="fa fa-bell-o"></i> Absen
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-male"></i> Absen By Admin
                        </a>
                      </li>
                    </ul>
                    </li>
                </ul> -->
              <!-- </li> -->

              @elseif(session('akses_type') == "Teacher" || session('akses_type') == "teacher")
              <li class="dropdown notifications-menu">
                <a href="{{ url('absen_page') }}">
                  <i style="font-size:20px;color:white" class="fa fa-user"></i>
                </a>
              <!-- <li class="dropdown notifications-menu">
                <a href="{{ url('absen_page') }}">
                  <i style="font-size:20px;color:white" class="fa fa-user"></i>
                </a>
                <ul style="height: 125px !important;" class="dropdown-menu">
                  <li>
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-circle-o"></i> Check
                        </a>
                      </li>
                      <li>
                        <a href="#" data-toggle="modal" data-target="#myModalabsen">
                          <i class="fa fa-bell-o"></i> Absen
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-male"></i> Absen By Admin
                        </a>
                      </li>
                    </ul>
                    </li>
                </ul> -->
              </li>

              @elseif(session('akses_type') == "Employee" || session('akses_type') == "employee")
              <li class="dropdown notifications-menu">
                <a href="{{ url('absen_page') }}">
                  <i style="font-size:20px;color:white" class="fa fa-user"></i>
                </a>
                <!-- <ul style="height: 125px !important;" class="dropdown-menu">
                  <li>
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-circle-o"></i> Check
                        </a>
                      </li>
                      <li>
                        <a href="{{ url('absen_page') }}">
                          <i class="fa fa-bell-o"></i> Absen
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-male"></i> Absen By Admin
                        </a>
                      </li>
                    </ul>
                    </li>
                </ul> -->
              </li>
              @endif
<!-- 
              <li class="dropdown notifications-menu">
                <a href="{{ url('absen_page') }}">
                  <i style="font-size:20px;color:white" class="fa fa-user"></i>
                </a>
              </li> -->
              <li class="dropdown messages-menu">
              @if(session('akses_type') == "staff")
                <a href="{{ url('manage_message/message_staff') }}">
                  <i style="font-size:17px;" class="fa fa-envelope-o"></i>
                </a>
              @elseif(session('akses_type') == "Teacher" || session('akses_type') == "teacher")
                <a href="{{ url('manage_message/message_teacher') }}">
                  <i style="font-size:17px;" class="fa fa-envelope-o"></i>
                </a>
              @elseif(session('akses_type') == "student")
                <a href="{{ url('manage_message/message_student') }}">
                  <i style="font-size:17px;" class="fa fa-envelope-o"></i>
                </a>
              </li>
              @elseif(session('akses_type') == "parent")
                <a href="{{ url('manage_message/message_parent') }}">
                  <i style="font-size:17px;" class="fa fa-envelope-o"></i>
                </a>
              @elseif(session('akses_type') == "employee" || session('akses_type') == "Employee")
                <a href="{{ url('manage_message/message_teacher') }}">
                  <i style="font-size:17px;" class="fa fa-envelope-o"></i>
                </a>
              @elseif(session('akses_type') == "root")
                <a href="{{ url('manage_message/message_root') }}">
                  <i style="font-size:17px;" class="fa fa-envelope-o"></i>
                </a>
              @elseif(session('akses_type') == "root+")
                <a href="{{ url('manage_message/message_root+') }}">
                  <i style="font-size:17px;" class="fa fa-envelope-o"></i>
                </a>
              @endif
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
                  @foreach($uname as $user)
                  <img src="{{ url('images/'.$user->akses_imguser) }}" class="user-image" alt="User Image">
                  @endforeach
                  <!-- <span class="hidden-xs">{{ session('akses_username') }}</span> -->
                  <span class="hidden-xs">@foreach($uname as $user) {{ $user->akses_username }} @endforeach</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    @foreach($uname as $user)
                      <img src="{{ url('images/'.$user->akses_imguser) }}" class="img-circle" alt="User Image">
                    @endforeach
                    <p>
                      @foreach($uname as $user) {{ $user->akses_username }} @endforeach - {{ session('akses_type') }}
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{{ url('manage_setting/edit_profile') }}" class="btn btn-default btn-flat">Edit Profile</a>
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