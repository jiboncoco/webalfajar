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
                  <h3 class="box-title">Edit Status Code</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                <form method="POST"  action="{{ url('manage_registration/update_status_code') }}" enctype="multipart/form-data">
                  <br>
                  <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Name</label>
                    <input value="{{ $edit_statuscode->dt_reg_name_student }}" type="text" name="dt_reg_name_student" class="form-control not-res" readonly="readonly">
                    <input type="hidden" name="id" value="{{ $edit_statuscode->id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Grade</label>
                    <input value="{{ $edit_statuscode->dt_reg_type }}" type="text" name="dt_reg_type" class="form-control not-res" readonly="readonly">
                    <input type="hidden" name="id" value="{{ $edit_statuscode->id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Class Status</label>
                      <select id="selecttype" name="dt_reg_status_code" class="form-control not-res">
                        @if($edit_statuscode->dt_reg_status_code == "active")
                        <option value="active" selected>Active</option>
                        <option value="disable">Disable</option>  
                        @elseif($edit_statuscode->dt_reg_status_code == "disable")
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

              <br><br>
          <div style="width:95%;margin:auto" class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Status Code Registration</h3>
                  <label style="float:right"><a data-toggle="modal" data-target="#myModaldetailteacher" href="#">View Detail</a></label>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Grade</th>
                        <th>Code Registrasi</th>
                        <th>Status</th>
                        <th style="text-align:center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($dt_registrasi as $statuscode)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $statuscode->dt_reg_name_student}}</td>
                        <td>{{ $statuscode->dt_reg_type}}</td>
                        <td>{{ $statuscode->dt_reg_codereg}}</td>
                        <td>{{ $statuscode->dt_reg_status_code }}</td>
                        <td style="text-align:center">
                        <a href="{{ url('manage_registration/edit_status_code/'.$statuscode->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_registration/delete_status_code/'.$statuscode->id)}}"><i style="font-size:20px;margin:0px " class="fa fa-trash"></i> </a>
                        </td>
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
              "autoWidth": true
            });
    $('.birth_date').datetimepicker({ format: 'YYYY-MM-DD' });
    </script>
@endsection
