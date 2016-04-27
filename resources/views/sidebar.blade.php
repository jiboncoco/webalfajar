      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ url('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
<!--             @if(isset($_SESSION['logged_in']))
            @if(isset($_SESSION['akses_username']))
              <p><?php echo $_SESSION['akses_username'] ?></p>
            @endif
            @endif -->

            <p>Achmad Fauzi</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
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
                <li><a href="{{ url('manage/account_teacher') }}"><i class="fa fa-tag"></i> Account Teacher</a></li>
                <li><a href="{{ url('manage/account_student') }}"><i class="fa fa-tag"></i> Account Student</a></li>
                <li><a href="{{ url('manage/account_parent') }}"><i class="fa fa-tag"></i> Account Parent</a></li>
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
                <li><a href="{{ url('manage_teacher/email_blast_teacher') }}"><i class="fa fa-envelope"></i> Email Blast Teacher</a></li>
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
                <li><a href="{{ url('manage_student/schedule_student') }}"><i class="fa fa-calendar"></i> Schedule Student</a></li>
                <li><a href="{{ url('manage_student/absen_student') }}"><i class="fa fa-thumb-tack"></i> Absen Student</a></li>
                <li><a href="{{ url('manage_student/email_blast_student') }}"><i class="fa fa-envelope"></i> Email Blast Student</a></li>
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
                <li><a href="{{ url('manage_parent/email_blast_parent') }}"><i class="fa fa-envelope"></i> Email Blast Parent</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-archive"></i>
                <span>Manage Post</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_post/master_post') }}"><i class="fa fa-th"></i> Master Post</a></li>
                <li><a href="{{ url('manage_post/activity_post') }}"><i class="fa fa-edit"></i> Activity Post</a></li>
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
        </section>
        <!-- /.sidebar -->
      </aside>