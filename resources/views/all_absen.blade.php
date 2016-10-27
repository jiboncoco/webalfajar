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
       
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
        <div class="admin-seacrh" style="height:2px;">
            </div>

              <div style="width:95%;margin:auto;" class="box box-default collapsed-box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Master Absen</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                <form method="POST"  action="{{ url('manage_absen/save_absen_manual') }}" enctype="multipart/form-data">

                  <div class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Type</label>
                      <select id="selecttype" name="dt_absen_type" class="form-control not-res">
                        <option value="teacher">Teacher</option>
                        <option value="employee">Employee</option>
                      </select>
                    </div>
                  <div  class="col-xs-6 col-md-4">
                  <label for="exampleInputPassword1">Name</label>
                    <input type='text' name="dt_absen_name" class="form-control " required/>
                  </div>
                  </div>
                  <br>

                  <div class="row">
                  <div  class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Absen Code</label>
                    <input type="text" name="dt_absen_code" class="form-control not-res" placeholder="Absen Code" required/>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>

                   <div  class="col-xs-6 col-md-4">
                  <label for="exampleInputPassword1">Absen Time</label>
                  <div class='input-group date' id='absen_time'>
                    <input type='text' name="dt_absen_time" class="form-control absen_time" required/>
                      <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                  </div>
                  </div>
                  <br>
                  <div id="b-save"></div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <br>
                <div style="width:95%;margin:auto" class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Absen</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Absen Code</th>
                        <th>Absen Time</th>
                        <!-- <th>Absen Shift</th> -->
                        <th style="text-align:center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($dt_absens as $absens)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ preg_replace('/\|/', ' ', $absens->dt_absen_name) }}</td>
                        <td>{{ $absens->dt_absen_type }}</td>
                        <td>{{ $absens->dt_absen_code}}</td>
                        <td>{{ $absens->dt_absen_time }}</td>
                        <!-- <td>{{ $absens->dt_absen_shift}}</td> -->
                        <td style="text-align:center">
                        <!-- <a href="{{ url('manage_absen/edit_all_absen/'.$absens->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a> -->
                        <a href="{{ url('manage_absen/delete_all_absen/'.$absens->id)}}"><i style="font-size:20px;margin:0px " class="fa fa-trash"></i> </a>
                        </td>
                        
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
$('#selecttype').change(function(){
        if($(this).val() == "teacher"){
           $.ajax({
              url: "validate_absen",
              type: "POST",
              data: "dt_absen_nisn=" + dt_absen_nisn,
              sucesss: function(data) {
                  if (data == 1) {
                    // console.log(data);
                    //   $("#inp_statusdata").css("display","block");
                    //   $("#inp_uname").css("display","block");
                    //   $("#inp_pw").css("display","block");
                    //   $("#sub").css("display","block");
                  }
                  else {
                      // $("b-save").html("Your nip not available");
                  }
              }
          });
        }
        else{}
</script>
    <script type="text/javascript">
            $('.for_datatable').DataTable({
              "paging": true,
              "lengthChange": true,
              "searching": true,
              "ordering": true,
              "info": true,
              "autoWidth": true
            });
    $('.absen_time').datetimepicker({ format: 'YYYY-MM-DD HH:mm:ss' });
    </script>

@endsection
