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
              <div style="width:95%;margin:auto;" class="box box-default collapsed-box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Master Absen</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                <form method="POST"  action="{{ url('manage_absen/update_absen') }}" enctype="multipart/form-data">

                  

                 <div class="row">
                     <div class="col-xs-8">
                      <label for="exampleInputPassword1">Absen Type</label>
                      <select id="selecttype" name="m_absen_type" class="form-control not-res">
                        @if($absen_edit->m_absen_type == "Morning")
                        <option value="Morning" selected>Morning</option>
                        <option value="Middle">Middle</option>  
                        <option value="Night">Night</option>  
                        <option value="Over Night">Over Night</option>    
                        @elseif($absen_edit->m_absen_type == "Middle")
                        <option value="Morning">Morning</option>
                        <option value="Middle" selected>Middle</option>  
                        <option value="Night">Night</option>  
                        <option value="Over Night">Over Night</option>  
                        @elseif($absen_edit->m_absen_type == "Night")
                        <option value="Morning">Morning</option>
                        <option value="Middle" >Middle</option>  
                        <option value="Night" selected>Night</option>  
                        <option value="Over Night">Over Night</option> 
                        @else
                        <option value="Morning">Morning</option>
                        <option value="Middle" >Middle</option>  
                        <option value="Night">Night</option>  
                        <option value="Over Night" selected>Over Night</option>    
                        @endif              
                      </select>
                    </div> 
                  </div>
                  <br>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <!--  <div class="row">
                  <div  class="col-xs-8">
                    <label for="exampleInputPassword1">Absen Type</label>
                    <input type="text" name="dt_absen_type" class="form-control not-res" placeholder="Absen Type" required/>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                  </div>
                  <br>
 -->
                  <div class="row">
                  <div  class="col-xs-6 col-md-4">
                  <label for="exampleInputPassword1">Come</label>
                  <div class='input-group date' id='datetimepicker1'>
                    <input value="{{ $absen_edit->m_absen_come }}" type='text' name="m_absen_come" class="form-control for_time" />
                      <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                  </div>
                  <div  class="col-xs-6 col-md-4">
                  <label for="exampleInputPassword1">Return</label>
                  <div class='input-group date' id='datetimepicker1'>
                    <input value="{{ $absen_edit->m_absen_return }}" type='text' name="m_absen_return" class="form-control for_time" />
                      <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                  </div>
                  </div>
                  <br>

                  <div class="row">
                     <div class="col-xs-8">
                      <label for="exampleInputPassword1">Status Log</label>
                      <select id="selecttype" name="m_absen_status" class="form-control not-res">
                       @if($absen_edit->m_absen_status == "active")
                        <option value="active" selected>Active</option>
                        <option value="disable">Disable</option> 
                        @elseif($absen_edit->m_absen_status == "disable")
                        <option value="active">Active</option>
                        <option value="disable" selected>Disable</option>    
                        @endif                     
                      </select>
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
                  <h3 class="box-title">Data Absen</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                   <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Type</th>
                        <th>Come</th>
                        <th>Return</th>
                        <th>Status</th>
                        <th style="text-align:center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($data_absen as $absen)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $absen->m_absen_type }}</td>
                        <td>{{ $absen->m_absen_come }}</td>
                        <td>{{ $absen->m_absen_return }}</td>
                        <td>{{ $absen->m_absen_status }}</td>
                        <td style="text-align:center">
                        <a href="{{ url('manage_absen/edit_absen/'.$absen->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_absen/delete_absen/'.$absen->id)}}"><i style="font-size:20px;margin:0px " class="fa fa-trash"></i> </a>
                        </td>
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
                  <div class="export">
                  <a href="{{ url('manage_absen/export_data/xls') }}"><button class="btn btn-success"><i class="fa fa-paper-plane-o"></i> xls</button></a>
                  <a href="{{ url('manage_absen/export_data/xlsx') }}"><button class="btn btn-info"><i class="fa fa-paper-plane-o"></i> xlsx</button></a>
                  <a href="{{ url('manage_absen/export_data/csv') }}"><button class="btn btn-warning"><i class="fa fa-paper-plane-o"></i> csv</button></a>
                  </div>
                  <div style="float:right;margin-top:40px;">
                  <form method="POST" action="{{ url('manage_teacher_sch/import_data_teacher_sch') }}" enctype="multipart/form-data" class="form-inline">
                    <div class="form-group">
                      <input type="file" name="import_data_master_teacher_sch" class="form-control" placeholder="Email">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                    <button type="submit" class="btn btn-default">Import File</button>
                  </form>
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
