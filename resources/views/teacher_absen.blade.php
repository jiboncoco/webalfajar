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
            <span class="sr-only">Toggle navigation style="text-align:center"</span>
          </a>
          
          @include('menu')

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->

          @include('sidebar')
        style="text-align:center"
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
        <div class="admin-seacrh" style="height:2px;">
            </div>

          <div style="width:95%;margin:auto" class="box">
                <div class="box-header">
                @if(session('akses_type') != 'root' || session('akses_type') != 'root+')
                  <h3 class="box-title">My Absen</h3>
                @else
                  <h3 class="box-title">Absen Teacher and Employee</h3>
                @endif
                </div><!-- /.box-header -->
                <div class="box-body">
                   <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Code</th>
                        <th>Time</th>
                        <!-- <th>Shift</th>
                        <th>Detail</th> -->
                        @if(session('akses_type') != "Teacher")
                        <th style="text-align:center">Action</th>
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($absensi as $absen)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ preg_replace('/\|/', ' ', $absen->dt_absen_name) }}</td>
                        <td>{{ $absen->dt_absen_type }}</td>
                        <td>{{ $absen->dt_absen_code }}</td>
                        <td>{{ $absen->dt_absen_time }}</td>
                        <!-- <td>{{ $absen->dt_absen_shift }}</td>
                        <td>{{ $absen->dt_absen_detail }}</td> -->
                        <td style="text-align:center">
                        <!-- <a href="{{ url('manage_absen/edit_absen/'.$absen->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a> -->
                        @if(session('akses_type') != "Teacher")
                        <a href="{{ url('manage_teacher/delete_absen/'.$absen->id)}}"><i style="font-size:20px;margin:0px " class="fa fa-trash"></i> </a>
                        </td>
                        @endif
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
                  <div class="export">
                  <a href="{{ url('manage_teacher/absen/export_data/xls') }}"><button class="btn btn-success"><i class="fa fa-paper-plane-o"></i> xls</button></a>
                  <a href="{{ url('manage_teacher/absen/export_data/xlsx') }}"><button class="btn btn-info"><i class="fa fa-paper-plane-o"></i> xlsx</button></a>
                  <a href="{{ url('manage_teacher/absen/export_data/csv') }}"><button class="btn btn-warning"><i class="fa fa-paper-plane-o"></i> csv</button></a>
                  @if(session('akses_type')== "root" || session('akses_type')== "root+" || session('akses_type')== "staff")
                  <a onclick="return confirm('Yakin hapus semua data absen?')" href="{{url('delete/all/data/teacher_absen')}}"><button class="btn btn-danger">Delete All</button></a>
                  @else
                  @endif
                  </div>
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
              "autoWidth": true
            });
    $('.for_year').datetimepicker({ format: 'YYYY' });
    $('.for_time').datetimepicker({ format: 'HH:mm:ss' });
    </script>
@endsection
