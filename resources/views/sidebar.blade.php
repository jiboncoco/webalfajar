      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 343px;">
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ url('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
            <p>{{ session('akses_username') }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          @if(isset($_SESSION['logged_in']))
          @if(!empty($_SESSION['akses_type']))
          @if($_SESSION['akses_type'] == 'staff')
          <ul class="sidebar-menu">
            <li class="header">NAVIGATION</li>
            <li class="active treeview">
              <a href="{{ url('manage') }}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Manage Account</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_account/all_account') }}"><i class="fa fa-tag"></i> Manage All Account</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Manage Teacher</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_teacher/master_teacher') }}"><i class="fa fa-user-secret"></i> Master Teacher</a></li>
                <li><a href="{{ url('manage_teacher/schedule_teacher') }}"><i class="fa fa-calendar"></i> Schedule Teacher</a></li>
                <li><a href="{{ url('manage_teacher/absen_teacher') }}"><i class="fa fa-thumb-tack"></i> Absen Teacher</a></li>
                <li><a href="{{ url('manage_teacher/master_teacher_recap') }}"><i class="fa fa-envelope"></i> Master Teacher Recap</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Manage Student</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_student/master_student') }}"><i class="fa fa-user"></i> Master Student</a></li>
                <li><a href="{{ url('manage_student/absen_student') }}"><i class="fa fa-thumb-tack"></i> Absen Student</a></li>
                <li><a href="{{ url('manage_student/update_grade_student') }}"><i class="fa fa-envelope"></i> Update Grade Student</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i> 
                <span>Manage Parent</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_parent/master_parent') }}"><i class="fa fa-user-secret"></i> Master Parent</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i> 
                <span>Manage Class</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_class/master_class') }}"><i class="fa fa-user-secret"></i> Master Class</a></li>
                <li><a href="{{ url('manage_class/master_schedule_class') }}"><i class="fa fa-envelope"></i> Master Schedule Class</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-archive"></i>
                <span>Manage Post</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_post/my_post') }}"><i class="fa fa-list"></i> My Post</a></li>
                <li><a href="{{ url('manage_post/master_post') }}"><i class="fa fa-th"></i> Master Post</a></li>
                <li><a href="{{ url('manage_post/master_type_post') }}"><i class="fa fa-list"></i> Master Type Post</a></li>
                <li><a href="{{ url('manage_post/master_class_post') }}"><i class="fa fa-columns"></i> Master Class Post</a></li>
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Manage Feature</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_feature/master_feature') }}"><i class="fa fa-user-secret"></i> Master Feature</a></li>
               </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> 
                <span>Manage Registration</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_registration/master_new_student')}}"><i class="fa fa-user-plus"></i> Master New Student</a></li>
                <li><a href="{{ url('manage_registration/filter_new_student')}}"><i class="fa fa-check-square-o"></i> Filter New Student</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cogs"></i>
                <span>Manage Setting</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_setting/edit_profile')}}"><i class="fa fa-cog"></i> Edit Profile</a></li>
                <li><a href="{{ url('manage_setting/alfajar_help')}}"><i class="fa fa-bookmark-o"></i> Al - Fajar Help</a></li>
              </ul>
            </li>
          </ul>

          @elseif($_SESSION['akses_type'] == 'teacher')
                    <ul class="sidebar-menu">
            <li class="header">NAVIGATION</li>
            <li class="active treeview">
              <a href="{{ url('manage') }}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Manage Teacher</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_teacher/my_data') }}"><i class="fa fa-puzzle-piece"></i> My Data</a></li>
                <li><a href="{{ url('manage_teacher/my_schedule') }}"><i class="fa fa-calendar"></i> My Schedule</a></li>
                <li><a href="{{ url('manage_teacher/my_absen') }}"><i class="fa fa-thumb-tack"></i> My Absen</a></li>
                <li><a href="{{ url('manage_teacher/master_recap') }}"><i class="fa fa-envelope"></i> Master Recap</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span style="font-size:13.5px">Manage Student & Parent</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li><a href="{{ url('manage_student/activity_student') }}"><i class="fa fa-puzzle-piece"></i> Activity Student</a></li>
              <li><a href="{{ url('manage_student/detail_student_and_parent') }}"><i class="fa fa-file-text-o"></i> Detail Student & Parent</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-align-center"></i>
                <span>Manage Task</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_task/master_task') }}"><i class="fa fa-files-o"></i> Master Task</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-archive"></i>
                <span>Manage Post</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_post/my_post') }}"><i class="fa fa-list"></i> My Post</a></li>
                <li><a href="{{ url('manage_post/master_post') }}"><i class="fa fa-th"></i> Master Post</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cogs"></i>
                <span>Manage Setting</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_setting/edit_profile')}}"><i class="fa fa-cog"></i> Edit Profile</a></li>
                <li><a href="{{ url('manage_setting/alfajar_help')}}"><i class="fa fa-bookmark-o"></i> Al - Fajar Help</a></li>
              </ul>
            </li>
          </ul>

          @elseif($_SESSION['akses_type'] == 'student')
           <ul class="sidebar-menu">
            <li class="header">NAVIGATION</li>
            <li class="active treeview">
              <a href="{{ url('manage') }}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Manage Student</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li><a href="{{ url('manage_student/my_data') }}"><i class="fa fa-puzzle-piece"></i> My Data</a></li>
              <li><a href="{{ url('manage_student/my_activity') }}"><i class="fa fa-file-text-o"></i> My Activity</a></li>
              <li><a href="{{ url('manage_student/schedule_class') }}"><i class="fa fa-calendar"></i> Schedule Class</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-archive"></i>
                <span>Manage Post</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_post/my_post') }}"><i class="fa fa-th"></i> My Post</a></li>
                <li><a href="{{ url('manage_post/master_post') }}"><i class="fa fa-th"></i> Master Post</a></li>              
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cogs"></i>
                <span>Manage Setting</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_setting/edit_profile')}}"><i class="fa fa-cog"></i> Edit Profile</a></li>
                <li><a href="{{ url('manage_setting/alfajar_help')}}"><i class="fa fa-bookmark-o"></i> Al - Fajar Help</a></li>
              </ul>
            </li>
          </ul>

          @elseif($_SESSION['akses_type'] == 'parent')
           <ul class="sidebar-menu">
            <li class="header">NAVIGATION</li>
            <li class="active treeview">
              <a href="{{ url('manage') }}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Manage Parent</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li><a href="{{ url('manage_parent/my_data') }}"><i class="fa fa-puzzle-piece"></i> My Data</a></li>
                <li><a href="{{ url('manage_parent/student_activity') }}"><i class="fa fa-puzzle-piece"></i> Student Activity</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-archive"></i>
                <span>Manage Post</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_post/my_post') }}"><i class="fa fa-list"></i> My Post</a></li>
                <li><a href="{{ url('manage_post/master_post') }}"><i class="fa fa-th"></i> Master Post</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cogs"></i>
                <span>Manage Setting</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_setting/edit_profile')}}"><i class="fa fa-cog"></i> Edit Profile</a></li>
                <li><a href="{{ url('manage_setting/alfajar_help')}}"><i class="fa fa-bookmark-o"></i> Al - Fajar Help</a></li>
              </ul>
            </li>
          </ul>

          @endif
          @endif
          @endif
          
        </section>
      </div>
        <!-- /.sidebar -->
      </aside>