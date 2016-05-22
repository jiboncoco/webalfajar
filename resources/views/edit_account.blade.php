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
              <div style="width:95%;margin:auto;" class="box box-default collapsed-box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Account</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                <form method="POST"  action="{{ url('manage_account/update_account') }}" enctype="multipart/form-data">
                  <div class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Type</label>
                      <select id="selecttype" name="akses_type" class="form-control not-res">
                        @if($akses_edit->akses_type == "teacher")
                        <option value="teacher" selected>Teacher</option>
                        <option value="parent">Parent</option>
                        <option value="student">Student</option>
                        @elseif($akses_edit->akses_type == "parent")
                        <option value="teacher">Teacher</option>
                        <option value="parent" selected>Parent</option>
                        <option value="student">Student</option>
                        @else
                        <option value="teacher">Teacher</option>
                        <option value="parent">Parent</option>
                        <option value="student" selected>Student</option>
                        @endif
                      </select>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                  <div  class="col-xs-6 col-md-4">
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
                    <input type="text" value="{{ $akses_edit->akses_code }}" name="akses_code" class="form-control not-res" maxlength="10" placeholder="NIP" onkeyup="this.value = minmaxnip(this.value, 0, 10)" />
                    <input type="hidden" name="id" value="{{$akses_edit->id}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>

                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Status Data</label>
                      <select id="selecttype" name="akses_status_data" class="form-control not-res" >
                      @if( $akses_edit->akses_status_data == "active")
                      <option value="active" selected>Active</option>
                      <option value="disable">Disable</option>
                      @else( $akses_edit->akses_status_data == "disable")
                      <option value="active">Active</option>
                      <option value="disable" selected>Disable</option>
                      @endif
                      </select>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                  <div  class="col-xs-6 col-md-4">
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
                    <input value="{{ $akses_edit->akses_username }}" type="text" name="akses_username" class="form-control not-res" maxlength="20" placeholder="Username" onkeyup="this.value = minmaxname(this.value, 0, 50)" />
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Password</label>
                    <input value="{{ $akses_edit->akses_password }}" type="password" name="akses_password" class="form-control not-res" maxlength="20" placeholder="Password" onkeyup="this.value = minmaxname(this.value, 0, 50)" />
                  </div>
                  </div>

                  <br><br>
                    <button  type="submit" class="btn btn-primary">Save Data</button>
                </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              

<!--               <form method="POST" action="{{ url('manage_teacher/import_data_teacher') }}" enctype="multipart/form-data">
                
                <input type="file" name="import_file"/>
                <button type="submit">Import File</button>

              </form> -->

              <br><br>
          <div style="width:95%;margin:auto" class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Access All Account</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Type</th>
                        <th>Code</th>
                        <th>Status Data</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=$aksess->firstItem(); ?>
                    @foreach($aksess as $akses)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $akses->akses_type}}</td>
                        <td>{{ $akses->akses_code}}</td>
                        <td>{{ $akses->akses_status_data}}</td>
                        <td>{{ $akses->akses_username}}</td>
                        <td>{{ $akses->akses_password}}</td>
                        <td>
                        <a href="{{ url('manage_account/edit_account/'.$akses->id)}}"><i class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_account/delete_account/'.$akses->id)}}"><i class="fa fa-trash"></i> </a>
                        </td>
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
                  <div class="export">
                  <a href="{{ url('manage_all_account/export_data/xls') }}"><button class="btn btn-success"><i class="fa fa-paper-plane-o"></i> xls</button></a>
                  <a href="{{ url('manage_all_account/export_data/xlsx') }}"><button class="btn btn-info"><i class="fa fa-paper-plane-o"></i> xlsx</button></a>
                  <a href="{{ url('manage_all_account/export_data/csv') }}"><button class="btn btn-warning"><i class="fa fa-paper-plane-o"></i> csv</button></a>
                  </div>
                   <ul class="pagination pull-right">
                  
                  {!! $aksess->render() !!}
                  
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
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
