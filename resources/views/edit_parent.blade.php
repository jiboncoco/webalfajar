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
                  <h3 class="box-title">Edit Data Parent</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                <form method="POST"  action="{{ url('manage_parent/update_parent') }}" enctype="multipart/form-data">

                  <div class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select NISN</label>
                      <select id="selecttype" name="dt_parent_nisn" class="form-control not-res">
                        @foreach($data_student as $student)
                        <option value="{{$student->dt_student_nisn}}">{{$student->dt_student_nisn}}</option>
                        @endforeach
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
                    <label for="exampleInputPassword1">First Name</label>
                    <input value="{{ preg_replace('/\|.+/', '', $data_edit->dt_parent_name) }}" type="text" name="dt_parent_fname" class="form-control not-res" maxlength="50" placeholder="First Name" onkeyup="this.value = minmaxname(this.value, 0, 50)" required/>
                    <input type="hidden" name="id" value="{{ $data_edit->id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
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
                    <label for="exampleInputPassword1">Last Name</label>
                    <input value="{{ preg_replace('/.+\|/', '', $data_edit->dt_parent_name) }}" type="text" name="dt_parent_lname" class="form-control not-res" maxlength="50" placeholder="Last Name" onkeyup="this.value = minmaxname(this.value, 0, 50)" required/>
                  </div>
                  </div>
                  <br>

                  <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Contact</label>
                    <input value="{{ $data_edit->dt_parent_contact }}" type="text" name="dt_parent_contact" class="form-control not-res" placeholder="Contact"/>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Email</label>
                    <input value="{{ $data_edit->dt_parent_email }}" type="email" name="dt_parent_email" class="form-control not-res" placeholder="Email"/>
                  </div>
                  <div class="col-xs-2">
                      <label for="exampleInputPassword1">Age</label>
                      <select id="selecttype" name="dt_parent_age" class="form-control not-res-s">
                        @for($i=1;$i<101;$i++)
                        <option value="{{$i}}">{{$i}}</option>
                        @endfor
                      </select>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                      <div class="col-xs-8">
                        <label for="exampleInputPassword1">Address</label>
                        <input value="{{ $data_edit->dt_parent_address }}" type="text" name="dt_parent_address" class="form-control not-res" placeholder="Address"/>
                      </div>
                  </div>
                  <br>

                  <div class="row">
                      <div class="col-xs-6 col-md-4">
                        <label for="exampleInputPassword1">Photo</label>
                        <img class="cover_photo_edit" src="{{ url('images/'.$data_edit->dt_parent_name_img) }}">
                        <input type="file" name="dt_parent_name_img" class="form-control not-res" placeholder="Photo"/>
                      </div>
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Status Log</label>
                      <select id="selecttype" name="dt_parent_statuslog" class="form-control not-res">
                        @if($data_edit->dt_parent_statuslog == "active")
                        <option value="active" selected>Active</option>
                        <option value="disable">Disable</option>  
                        @elseif($data_edit->dt_parent_statuslog == "disable")
                        <option value="active">Active</option>
                        <option value="disable" selected>Disable</option>     
                        @endif               
                      </select>
                    </div>
                  </div>                  

                  <br><br>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ url('manage_parent/master_parent') }}"><button class="btn btn-danger">Cancel</button></a>
                </form>                </div><!-- /.box-body -->
              </div><!-- /.box -->
              

<!--               <form method="POST" action="{{ url('manage_teacher/import_data_teacher') }}" enctype="multipart/form-data">
                
                <input type="file" name="import_file"/>
                <button type="submit">Import File</button>

              </form> -->
@if(session('akses_type') == "staff")
              <br><br>
          <div style="width:95%;margin:auto" class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Parent</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>NISN</th>
                        <th>Status Log</th>
                        <th style="text-align:center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($data_parent as $parents)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ preg_replace('/\|/', ' ', $parents->dt_parent_name) }}</td>
                        <td>{{ $parents->dt_parent_nisn}}</td>
                        <td>{{ $parents->dt_parent_statuslog}}</td>
                        <td style="text-align:center">
                        <a href="{{ url('manage_parent/edit_parent/'.$parents->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_parent/delete_parent/'.$parents->id)}}"><i style="font-size:20px;margin:0px " class="fa fa-trash"></i> </a>
                        <a data-toggle="modal" data-target="#myModaldetailteacher" href="#"><i class="fa fa-eye"></i> </a>
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

                </div><!-- /.box-body -->
              </div><!-- /.box -->
@else
@endif
              </div>
        </section>
      </div>
      
</div>
</body>
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
