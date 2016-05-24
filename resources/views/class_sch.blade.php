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

<div class="modal fade" id="myModaldetailteacher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog-front">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Data Class Schedule</h4>
                    </div>
                        <div class="modal-body-front">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                   <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Class</th>
                        <th>Day</th>
                        <th>Month</th>
                        <th>Year</th>
                        <th>Time</th>
                        <th>Schedule Make At</th>
                        <th>Teacher</th>
                        <th>Schedule</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($class_sch as $schs)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $schs->sch_class_forclass}}</td>
                        <td>{{ $schs->sch_class_day}}</td>
                        <td>{{ $schs->sch_class_month}}</td>
                        <td>{{ $schs->sch_class_year}}</td>
                        <td>{{ $schs->sch_class_time}}</td>
                        <td>{{ $schs->created_at}}</td>
                        <td>{{ preg_replace('/\|/', ' ', $schs->sch_class_teacher) }}</td>
                        <td>{{ $schs->sch_class_schedule}}</td>
                        <td>
                        <a href="{{ url('manage_class/edit_schedule_class/'.$schs->id)}}"><i class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_class/delete_schedule_class/'.$schs->id)}}"><i class="fa fa-trash"></i> </a>
                        </td>
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
                  <div class="export">
                 <!--  <a href="{{ url('manage_teacher/export_data/xls') }}"><button class="btn btn-success"><i class="fa fa-paper-plane-o"></i> xls</button></a>
                  <a href="{{ url('manage_teacher/export_data/xlsx') }}"><button class="btn btn-info"><i class="fa fa-paper-plane-o"></i> xlsx</button></a>
                  <a href="{{ url('manage_teacher/export_data/csv') }}"><button class="btn btn-warning"><i class="fa fa-paper-plane-o"></i> csv</button></a> -->
                  </div>
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
              <div style="width:95%;margin:auto;" class="box box-default collapsed-box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Master Class Schedule</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                <form method="POST"  action="{{ url('manage_class/save_schedule_class') }}" enctype="multipart/form-data">

                  <div id="teacher" class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Class</label>
                      <select id="selecttype" name="sch_class_forclass" class="form-control not-res">
                        @foreach($dt_class as $class)
                        <option value="{{$class->dt_kelas_name}}">{{$class->dt_kelas_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <br>

                  <div class="row"> 
                  <div  class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Day </label>
                      <select id="selecttype" name="sch_class_day" class="form-control not-res" >
                      <option value="senin">Senin</option>
                      <option value="selasa">Selasa</option>
                      <option value="rabu">Rabu</option>
                      <option value="kamis">Kamis</option>
                      <option value="jumat">Jumat</option>
                      <option value="sabtu">Sabtu</option>
                      <option value="minggu">Minggu</option>
                      </select>
                    </div>

                  <div  class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Month </label>
                      <select id="selecttype" name="sch_class_month" class="form-control not-res" >
                      <option value="januari">Januari</option>
                      <option value="februari">Februari</option>
                      <option value="maret">Maret</option>
                      <option value="april">April</option>
                      <option value="mei">Mei</option>
                      <option value="juni">Juni</option>
                      <option value="juli">Juli</option>
                      <option value="agustus">Agustus</option>
                      <option value="september">September</option>
                      <option value="oktober">Oktober</option>
                      <option value="november">November</option>
                      <option value="desember">Desember</option>
                      </select>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                  <div  class="col-xs-6 col-md-4">
                  <label for="exampleInputPassword1">Year</label>
                  <div class='input-group date' id='datetimepicker1'>
                    <input type='text' name="sch_class_year" class="form-control for_year" required/>
                      <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                  </div>

                  <div  class="col-xs-6 col-md-4">
                  <label for="exampleInputPassword1">Time</label>
                  <div class='input-group date' id='datetimepicker1'>
                    <input type='text' name="sch_class_time" class="form-control for_time" />
                      <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                  </div>
                  </div>
                  <br>

                  <div class="row">
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Teacher</label>
                      <select id="selecttype" name="sch_class_teacher" class="form-control not-res">
                        @foreach($dt_teachers as $teacher)
                        <option value="{{ $teacher->dt_teacher_name }}">{{ preg_replace('/\|/', ' ', $teacher->dt_teacher_name) }}</option>
                        @endforeach
                      </select>
                    </div>
                  <div  class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Schedule Class</label>
                    <input type="text" name="sch_class_schedule" class="form-control not-res" placeholder="Schedule Task" required/>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                  </div>

                  <br><br>
                  <div id="b-save"></div>
                    <button type="submit" class="btn btn-primary">Save</button>
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
                  <h3 class="box-title">Data Class Schedule</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                   <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Class</th>
                        <th>Day</th>
                        <th>Month</th>
                        <th>Year</th>
                        <th>Schedule</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($class_sch as $class_sch)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $class_sch->sch_class_forclass}}</td>
                        <td>{{ $class_sch->sch_class_day}}</td>
                        <td>{{ $class_sch->sch_class_month}}</td>
                        <td>{{ $class_sch->sch_class_year}}</td>
                        <td>{{ $class_sch->sch_class_schedule}}</td>
                        <td>
                        <a href="{{ url('manage_class/edit_schedule_class/'.$class_sch->id)}}"><i class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_class/delete_schedule_class/'.$class_sch->id)}}"><i class="fa fa-trash"></i> </a>
                        <a id="openBtn" data-toggle="modal" data-target="#myModaldetailteacher" href="#"><i class="fa fa-eye"></i> </a>
                        </td>
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
                  <div class="export">
                 <!--  <a href="{{ url('manage_teacher/export_data/xls') }}"><button class="btn btn-success"><i class="fa fa-paper-plane-o"></i> xls</button></a>
                  <a href="{{ url('manage_teacher/export_data/xlsx') }}"><button class="btn btn-info"><i class="fa fa-paper-plane-o"></i> xlsx</button></a>
                  <a href="{{ url('manage_teacher/export_data/csv') }}"><button class="btn btn-warning"><i class="fa fa-paper-plane-o"></i> csv</button></a> -->
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
//     <script type="text/javascript">

//   $('#openBtn').click(function(){
//     $('.modal-body').load('manage_class/detail_schedule_class/'.$class_sch->id,function(result){
//       $('#myModaldetailteacher').modal({show:true});
//   });
// });
//     </script>
@endsection
