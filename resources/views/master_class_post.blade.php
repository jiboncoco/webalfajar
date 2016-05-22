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
                  <h3 class="box-title">Master Class Post</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                <form method="POST"  action="{{ url('manage_post/save_master_class_post') }}" enctype="multipart/form-data">
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
                    <input type="text" name="m_kelas_name" class="form-control not-res" maxlength="15" placeholder="Class Name" onkeyup="this.value = minmaxname(this.value, 0, 15)" required/>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Class Status</label>
                      <select id="selecttype" name="m_kelas_status" class="form-control not-res">
                        <option value="active">Active</option>
                        <option value="disable">Disable</option>                      
                      </select>
                    </div>
                  </div>                  

                  <br><br>
                    <button type="submit" class="btn btn-primary">Save Data</button>
                </form>                </div><!-- /.box-body -->
              </div><!-- /.box -->
              

<!--               <form method="POST" action="{{ url('manage_teacher/import_data_teacher') }}" enctype="multipart/form-data">
                
                <input type="file" name="import_file"/>
                <button type="submit">Import File</button>

              </form> -->

              <br><br>
          <div style="width:95%;margin:auto" class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Class Post</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Class Name</th>
                        <th>Class Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($m_kelass as $post)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $post->m_kelas_name}}</td>
                        <td>{{ $post->m_kelas_status}}</td>
                        <td>
                        <a href="{{ url('manage_post/edit_master_class_post/'.$post->id)}}"><i class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_post/delete_master_class_post/'.$post->id)}}"><i class="fa fa-trash"></i> </a>
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
    <script type="text/javascript">
            $('#example2').DataTable({
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
