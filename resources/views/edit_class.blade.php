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
                  <h3 class="box-title">Edit Master Class</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                <form method="POST"  action="{{ url('manage_class/update_class') }}" enctype="multipart/form-data">
                  <br>
                  <div class="row">
                  <div class="col-xs-8">
                      <label for="exampleInputPassword1">Type Class</label>
                      <select id="selecttype" name="dt_kelas_type" class="form-control not-res">
                        @if($class_edit->dt_kelas_type == "TK")
                        <option value="TK" selected>TK</option>
                        <option value="SD">SD</option> 
                        <option value="SMP">SMP</option>  
                        <option value="SMA">SMA</option>   
                        @elseif($class_edit->dt_kelas_type == "SD")
                        <option value="TK">TK</option>
                        <option value="SD" selected>SD</option> 
                        <option value="SMP">SMP</option>  
                        <option value="SMA">SMA</option> 
                        @elseif($class_edit->dt_kelas_type == "SMP")
                        <option value="TK">TK</option>
                        <option value="SD">SD</option> 
                        <option value="SMP" selected>SMP</option>  
                        <option value="SMA">SMA</option> 
                        @elseif($class_edit->dt_kelas_type == "SMA")
                        <option value="TK">TK</option>
                        <option value="SD">SD</option> 
                        <option value="SMP">SMP</option>  
                        <option value="SMA" selected="">SMA</option>
                        @endif                
                      </select>
                    </div>
                  </div> 
                  <br>

                  <div class="row">
                  <div class="col-xs-6 col-md-4">
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
                    <label for="exampleInputPassword1">Class Name</label>
                    <input value="{{ $class_edit->dt_kelas_name }}" type="text" name="dt_kelas_name" class="form-control not-res" maxlength="40" placeholder="Type Post" onkeyup="this.value = minmaxname(this.value, 0, 40)" required/>
                    <input type="hidden" name="id" value="{{ $class_edit->id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Class Status</label>
                      <select id="selecttype" name="dt_kelas_status" class="form-control not-res">
                        @if($class_edit->dt_kelas_status == "active")
                        <option value="active" selected>Active</option>
                        <option value="disable">Disable</option>  
                        @elseif($class_edit->dt_kelas_status == "disable")
                        <option value="active">Active</option>
                        <option value="disable" selected>Disable</option>  
                        @endif                    
                      </select>
                    </div>
                  </div>                  

                  <br><br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>       
                <br>
                <div style="margin-top:-54px;margin-left:80px">
                  <a href="{{ url('manage_class/master_class') }}"><button class="btn btn-danger">Cancel</button></a>
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
                  <h3 class="box-title">Data Class</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Class Type</th>
                        <th>Class Name</th>
                        <th>Class Status</th>
                        <th style="text-align:center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($class as $post)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $post->dt_kelas_type }}</td>
                        <td>{{ $post->dt_kelas_name }}</td>
                        <td>{{ $post->dt_kelas_status }}</td>
                        <td style="text-align:center">
                        <a href="{{ url('manage_class/edit_class/'.$post->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_class/delete_class/'.$post->id)}}"><i style="font-size:20px;margin:0px " class="fa fa-trash"></i> </a>
                        </td>
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
<!--                   <div class="export">
                  <a href="{{ url('manage_all_account/export_data/xls') }}"><button class="btn btn-success"><i class="fa fa-paper-plane-o"></i> xls</button></a>
                  <a href="{{ url('manage_all_account/export_data/xlsx') }}"><button class="btn btn-info"><i class="fa fa-paper-plane-o"></i> xlsx</button></a>
                  <a href="{{ url('manage_all_account/export_data/csv') }}"><button class="btn btn-warning"><i class="fa fa-paper-plane-o"></i> csv</button></a>
                  </div> -->

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
    $('.birth_date').datetimepicker({ format: 'YYYY-MM-DD' });
    </script>
@endsection
