@extends('app_admin')

@section('content')


  <body style="font-family: 'Raleway', sans-serif;" class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="{{ url('manage') }}" class="logo">
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
        <div class="modal fade" id="myModaldetailteacher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog-front">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Data Students</h4>
                    </div>
                        <div class="modal-body-front" style="height:560px;overflow-y:auto;">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div style="width:2000px" class="box-body">
                  <table id="for_datatable" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NISN</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Birth Place</th>
                        <th>Birth Date</th>
                        <th>Religion</th>
                        <th>Grade</th>
                        <th>Class</th>
                        <th>Age</th>
                        <th>Bloodtype</th>
                        <th>Parent Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Status Log</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($data_student as $teachers)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $teachers->dt_student_nisn}}</td>
                        <td>{{ preg_replace('/\|/', ' ', $teachers->dt_student_name) }}</td>
                        <td>{{ $teachers->dt_student_gender}}</td>
                        <td>{{ $teachers->dt_student_dobplace}}</td>
                        <td>{{ $teachers->dt_student_bplace}}</td>
                        <td>{{ $teachers->dt_student_religion}}</td>
                        <td>{{ $teachers->dt_student_grade}}</td>
                        <td>{{ $teachers->dt_student_kelas}}</td>
                        <td>{{ $teachers->dt_student_age}}</td>
                        <td>{{ $teachers->dt_student_bloodtype}}</td>
                        <td>{{ $teachers->dt_student_nameparent}}</td>
                        <td>{{ $teachers->dt_student_email}}</td>
                        <td>{{ $teachers->dt_student_contact}}</td>
                        <td>{{ $teachers->dt_student_address}}</td>
                        <td>{{ $teachers->dt_student_statuslog}}</td>
                        
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
                        </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
        <div class="admin-seacrh" style="height:2px;">
            </div>

              <br><br>
          <div style="width:95%;margin:auto" class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Students</h3>
                  <label style="float:right"><a data-toggle="modal" data-target="#myModaldetailteacher" href="#">View Detail</a></label>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>NISN</th>
                        <th>Grade</th>
                        <th>Class</th>
                        <th>Email</th>
                        <th>Status Log</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($data_student as $teachers)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ preg_replace('/\|/', ' ', $teachers->dt_student_name) }}</td>
                        <td>{{ $teachers->dt_student_nisn}}</td>
                        <td>{{ $teachers->dt_student_grade}}</td>
                        <td>{{ $teachers->dt_student_kelas}}</td>
                        <td>{{ $teachers->dt_student_email}}</td>
                        <td>{{ $teachers->dt_student_statuslog}}</td>
                        
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
                  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
        </section>
      </div>
      
</div>
</body>

    <script type="text/javascript">
            $('.for_datatable').DataTable({
              "paging": true,
              "lengthChange": true,
              "searching": true,
              "ordering": true,
              "info": true,
              "autoWidth": true,
              "responsive": true
            });
    $('.birth_date').datetimepicker({ format: 'YYYY-MM-DD' });
    </script>

@endsection
