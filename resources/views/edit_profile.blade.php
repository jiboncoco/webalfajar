@extends('app_admin')

@section('content')


  <body style="font-family: 'Raleway', sans-serif;" class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>FJ</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>AL</b> FAJAR</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          
          @include('menu')

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->

          @include('sidebar')
       
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
        <div class="admin-seacrh" style="height:2px;">
            </div>
            <div style="width:85%;margin:auto" class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Profile</h3>
                </div><!-- /.box-header -->
                  @foreach($akses_edit as $akses_edit)
                <form method="POST"  action="{{ url('manage_setting/update_profile') }}" enctype="multipart/form-data">
                  <div class="box-body">
                  <div class="form-group">
                      <label for="exampleInputPassword1">Type</label>
                      <select id="selecttype" name="akses_type" class="form-control not-res" readonly="readonly">
                        @if($akses_edit->akses_type == "teacher")
                        <option value="teacher" selected>Teacher</option>
                        @elseif($akses_edit->akses_type == "parent")
                        <option value="parent" selected>Parent</option>
                        @elseif($akses_edit->akses_type == "staff")
                        <option value="student" selected>Staff</option>
                        @elseif($akses_edit->akses_type == "root")
                        <option value="student" selected>Root</option>
                        @elseif($akses_edit->akses_type == "root+")
                        <option value="student" selected>Root+</option>
                        @endif
                      </select>
                    </div>
                  <br>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input style="background:#eee !important" type="email" name="akses_email" value="{{ $akses_edit->akses_email }}" class="form-control not-res" placeholder="Email" readonly="readonly">
                  </div> 
                  <br>

                 <div class="form-group">
                 <script type="text/javascript">
                  function minmaxnip(value, min, max) 
                  {
                      if(parseInt(value) < min || isNaN(value)) 
                          return value; 
                      else if(parseInt(value) > max) 
                          return value; 
                      else return value;
                  }
                  </script>
                  <script type="text/javascript">

                  </script>
                    <label for="exampleInputPassword1">Akses Code</label>
                    <input style="background:#eee !important" type="text" value="{{ $akses_edit->akses_code }}" name="akses_code" class="form-control not-res" maxlength="10" placeholder="NIP" onkeyup="this.value = minmaxnip(this.value, 0, 10)" readonly="readonly">
                    <input type="hidden" name="id" value="{{$akses_edit->id}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                  <br>

                  <div class="form-group">
                      <label for="exampleInputPassword1">Status Data</label>
                      <select id="selecttype" name="akses_status_data" class="form-control not-res" readonly="readonly">
                      @if( $akses_edit->akses_status_data == "active")
                      <option value="active" selected>Active</option>
                      @else( $akses_edit->akses_status_data == "disable")
                      <option value="disable" selected>Disable</option>
                      @endif
                      </select>
                  </div>
                  <br>

                 <div class="form-group">
                 <script type="text/javascript">
                  function minmaxname(value, min, max) 
                  {
                      if(parseInt(value) < min || isNaN(value)) 
                          return value; 
                      else if(parseInt(value) > max) 
                          return value; 
                      else return value;
                  }
                  </script>
                    <label for="exampleInputPassword1">Username</label>
                    <input value="{{ $akses_edit->akses_username }}" type="text" name="akses_username" class="form-control not-res" maxlength="20" placeholder="Username" onkeyup="this.value = minmaxname(this.value, 0, 50)" required/>
                  </div>
                  <br>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input value="{{ $akses_edit->akses_password }}" type="password" name="akses_password" class="form-control not-res" maxlength="20" placeholder="Password" onkeyup="this.value = minmaxname(this.value, 0, 50)" required/>
                  </div>
                  <br>

                  <div class="form-group">
                    <img class="cover_photo_edit" src="{{ url('images/'.$akses_edit->akses_imguser) }}">
                    <label for="exampleInputPassword1">Image User</label>
                    <input type="file" name="akses_imguser" value="{{ $akses_edit->akses_imguser }}" class="form-control not-res" placeholder="Image User" />
                  </div>

                  <br><br>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
                <br>
                <div style="margin-top:-64px;margin-left:92px">
                    <a href="{{ url('manage_setting/edit_profile') }}"><button class="btn btn-danger">Cancel</button></a>
                </div>
                @endforeach
              </div><!-- /.box -->
        </section>
      </div>
      
</div>
</body>
    <script type="text/javascript">
            $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false
            });
    $('.birth_date').datetimepicker({ format: 'YYYY-MM-DD' });
    </script>
@endsection
