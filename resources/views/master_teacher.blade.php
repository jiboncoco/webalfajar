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
                    <h4 class="modal-title" id="myModalLabel">Data Teachers</h4>
                    </div>
                        <div class="modal-body-front">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="for_datatable" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NIP</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Birth Place and Date</th>
                        <th>Religion</th>
                        <th>Position</th>
                        <th>Age</th>
                        <th>Bloodtype</th>
                        <th>Teacher For</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Absen Code</th>
                        <th>Photo</th>
                        <th>Status Log</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=$data_teacher->firstItem(); ?>
                    @foreach($data_teacher as $teachers)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $teachers->dt_teacher_nip}}</td>
                        <td>{{ preg_replace('/\|/', ' ', $teachers->dt_teacher_name) }}</td>
                        <td>{{ $teachers->dt_teacher_gender}}</td>
                        <td>{{ $teachers->dt_teacher_dobplace}}</td>
                        <td>{{ $teachers->dt_teacher_religion}}</td>
                        <td>{{ $teachers->dt_teacher_position}}</td>
                        <td>{{ $teachers->dt_teacher_age}}</td>
                        <td>{{ $teachers->dt_teacher_bloodtype}}</td>
                        <td>{{ $teachers->dt_teacher_for}}</td>
                        <td>{{ $teachers->dt_teacher_email}}</td>
                        <td>{{ $teachers->dt_teacher_contact}}</td>
                        <td>{{ $teachers->dt_teacher_address}}</td>
                        <td>{{ $teachers->dt_teacher_code_absen}}</td>
                        <td><img class="cover_photo_edit"></td>
                        <td>{{ $teachers->dt_teacher_statuslog}}</td>
                        <td>
                        <a href="{{ url('manage_teacher/edit_master_teacher/'.$teachers->id)}}"><i class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_teacher/delete_master_teacher/'.$teachers->id)}}"><i class="fa fa-trash"></i> </a>
                        </td>
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
              <div style="width:95%;margin:auto;" class="box box-default collapsed-box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Master Teacher</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                <form method="POST"  action="{{ url('manage_teacher/save_master_teacher') }}" enctype="multipart/form-data">
                  <div class="row">
                  <div class="col-xs-6 col-md-4">
                 <script type="text/javascript">
                  function minmaxnip(value, min, max) 
                  {
                      if(parseInt(value) < min || isNaN(value)) 
                          return value; 
                      else if(parseInt(value) > max) 
                          return value; 
                      else return value;
                  }
                  </script>
                    <label for="exampleInputPassword1">NIP</label>
                    <input type="text" name="dt_teacher_nip" class="form-control not-res" maxlength="10" placeholder="NIP" onkeyup="this.value = minmaxnip(this.value, 0, 10)" required/>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Gender</label>
                      <select id="selecttype" name="dt_teacher_gender" class="form-control not-res">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
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
                    <input type="text" name="dt_teacher_fname" class="form-control not-res" maxlength="50" placeholder="First Name" onkeyup="this.value = minmaxname(this.value, 0, 50)" required/>
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
                    <input type="text" name="dt_teacher_lname" class="form-control not-res" maxlength="50" placeholder="Last Name" onkeyup="this.value = minmaxname(this.value, 0, 50)" required/>
                  </div>
                  </div>
                  <br>

                  <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Birth Place</label>
                    <input type="text" name="dt_teacher_bplace" class="form-control not-res" placeholder="Birth Place"/>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Birth Date</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' name="dt_teacher_dobplace" class="form-control not-res birth_date" />
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                  </div>
                  <div class="col-xs-4">
                      <label for="exampleInputPassword1">Age</label>
                      <select id="selecttype" name="dt_teacher_age" class="form-control not-res-s">
                        @for($i=1;$i<101;$i++)
                        <option value="{{$i}}">{{$i}}</option>
                        @endfor
                      </select>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Religion</label>
                      <select id="selecttype" name="dt_teacher_religion" class="form-control not-res">
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="konghucu">Konghucu</option>
                        <option value="budha">Budha</option>
                        <option value="hindu">Hindu</option>
                      </select>
                    </div>
                    <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Position</label>
                      <select id="selecttype" name="dt_teacher_position" class="form-control not-res">
                        <option value="tetap">Tetap</option>
                        <option value="kontrak">Kontrak</option>
                      </select>
                    </div>
                    <div class="col-xs-4">
                      <label for="exampleInputPassword1">Bloodtype</label>
                      <select id="selecttype" name="dt_teacher_bloodtype" class="form-control not-res-s">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                      </select>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Contact</label>
                    <input type="text" name="dt_teacher_contact" class="form-control not-res" placeholder="Contact"/>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="dt_teacher_email" class="form-control not-res" placeholder="Email" required/>
                  </div>
                  <div class="col-xs-4">
                      <label for="exampleInputPassword1">Teacher For</label>
                      <select id="selecttype" name="dt_teacher_for" class="form-control not-res-s">
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                      </select>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                      <div class="col-xs-10">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" name="dt_teacher_address" class="form-control not-res" placeholder="Address"/>
                      </div>
                  </div>
                  <br>

                  <div class="row">
                      <div class="col-xs-6 col-md-4">
                        <label for="exampleInputPassword1">Photo</label>
                        <input type="file" name="dt_teacher_name_img" class="form-control not-res" placeholder="Photo"/>
                      </div>
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Status Log</label>
                      <select id="selecttype" name="dt_teacher_statuslog" class="form-control not-res">
                        <option value="active">Active</option>
                        <option value="disable">Disable</option>                      
                      </select>
                    </div>
                  </div>                  

                  <br><br>
                    <button type="submit" class="btn btn-primary">Save Data</button>
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
                  <h3 class="box-title">Data Teachers</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>NIP</th>
                        <th>Teacher For</th>
                        <th>Position</th>
                        <th>Absen Code</th>
                        <th>Status Log</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=$data_teacher->firstItem(); ?>
                    @foreach($data_teacher as $teachers)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ preg_replace('/\|/', ' ', $teachers->dt_teacher_name) }}</td>
                        <td>{{ $teachers->dt_teacher_nip}}</td>
                        <td>{{ $teachers->dt_teacher_for}}</td>
                        <td>{{ $teachers->dt_teacher_position}}</td>
                        <td>{{ $teachers->dt_teacher_code_absen}}</td>
                        <td>{{ $teachers->dt_teacher_statuslog}}</td>
                        <td>
                        <a href="{{ url('manage_teacher/edit_master_teacher/'.$teachers->id)}}"><i class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_teacher/delete_master_teacher/'.$teachers->id)}}"><i class="fa fa-trash"></i> </a>
                        <a data-toggle="modal" data-target="#myModaldetailteacher" href="#"><i class="fa fa-eye"></i> </a>
                        </td>
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
                  <div class="export">
                  <a href="{{ url('manage_teacher/export_data/xls') }}"><button class="btn btn-success"><i class="fa fa-paper-plane-o"></i> xls</button></a>
                  <a href="{{ url('manage_teacher/export_data/xlsx') }}"><button class="btn btn-info"><i class="fa fa-paper-plane-o"></i> xlsx</button></a>
                  <a href="{{ url('manage_teacher/export_data/csv') }}"><button class="btn btn-warning"><i class="fa fa-paper-plane-o"></i> csv</button></a>
                  </div>
                   <ul class="pagination pull-right">
                  
                  {!! $data_teacher->render() !!}
                  
                  </ul>
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
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false
            });
    $('.birth_date').datetimepicker({ format: 'YYYY-MM-DD' });
    </script>
@endsection
