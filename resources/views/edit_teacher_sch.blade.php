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
                  <h3 class="box-title">Edit Teacher Schedule</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                <form method="POST"  action="{{ url('manage_teacher/update_schedule_teacher') }}" enctype="multipart/form-data">

                  <div id="teacher" class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select NIP Teacher</label>
                      <select id="selecttype" name="sch_code" class="form-control not-res">
                        @foreach($dt_teachers as $teacher)
                        <option value="{{$teacher->dt_teacher_nip}}">{{$teacher->dt_teacher_nip}} ({{$teacher->dt_teacher_name}}) </option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <br>

                  <div class="row"> 
                  <div  class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Day </label>
                      <select id="selecttype" name="sch_days" class="form-control not-res" >
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
                      <select id="selecttype" name="sch_month" class="form-control not-res" >
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
                    <input value="{{ $teacher_sch->sch_year }}" type='text' name="sch_year" class="form-control for_year" required/>
                      <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                  </div>

                  <div  class="col-xs-6 col-md-4">
                  <label for="exampleInputPassword1">Time</label>
                  <div class='input-group date' id='datetimepicker1'>
                    <input value="{{ $teacher_sch->sch_time }}" type='text' name="sch_time" class="form-control for_time" />
                      <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                  </div>
                  </div>
                  <br>

                  <div class="row">
                  <div  class="col-xs-8">
                    <label for="exampleInputPassword1">Schedule Task</label>
                    <input value="{{ $teacher_sch->sch_task }}" type="text" name="sch_task" class="form-control not-res" placeholder="Schedule Task" required/>
                    <input type="hidden" name="id" value="{{ $teacher_sch->id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                  </div>

                  <br><br>
                  <div id="b-save"></div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                <br>
                <div style="margin-top:-54px;margin-left:80px">
                    <a href="{{ url('manage_teacher/schedule_teacher') }}"><button class="btn btn-danger">Cancel</button></a>
                </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              

<!--               <form method="POST" action="{{ url('manage_teacher/import_data_teacher') }}" enctype="multipart/form-data">
                
                <input type="file" name="import_file"/>
                <button type="submit">Import File</button>

              </form> -->

              <br><br>
          <div style="width:95%;margin:auto" class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Teacher Schedule</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                   <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NIP</th>
                        <th>Days</th>
                        <th>Month</th>
                        <th>Year</th>
                        <th>Time</th>
                        <th>Task</th>
                        <th style="text-align:center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($teachersch as $teachers)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $teachers->sch_code}}</td>
                        <td>{{ $teachers->sch_days}}</td>
                        <td>{{ $teachers->sch_month}}</td>
                        <td>{{ $teachers->sch_year}}</td>
                        <td>{{ $teachers->sch_time}}</td>
                        <td>{{ $teachers->sch_task}}</td>
                        <td style="text-align:center">
                        <a href="{{ url('manage_teacher/edit_schedule_teacher/'.$teachers->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_teacher/delete_schedule_teacher/'.$teachers->id)}}"><i style="font-size:20px;margin:0px " class="fa fa-trash"></i> </a>
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
@endsection
