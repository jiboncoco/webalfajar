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
              <div style="width:80%;margin:auto;" class="box box-default collapsed-box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Master Teacher</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                <form method="POST"  action="{{ url('manage_teacher/save_edit_master_teacher') }}" enctype="multipart/form-data">
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
                    <input type="text" value="{{ $data_edit->dt_teacher_nip }}" name="dt_teacher_nip" class="form-control" maxlength="10" placeholder="NIP" onkeyup="this.value = minmaxnip(this.value, 0, 10)" required/>
                    <input type="hidden" name="id" value="{{ $data_edit->id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Gender</label>
                      <select id="selecttype" name="dt_teacher_gender" class="form-control">
                        @if($data_edit->dt_teacher_gender == "Male")
                        <option value="male" selected>Male</option>
                        <option value="female">Female</option>
                        @else
                        <option value="male">Male</option>
                        <option value="female" selected>Female</option>
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
                    <label for="exampleInputPassword1">First Name</label>
                    <input type="text" value="{{ preg_replace('/\|.+/', '', $data_edit->dt_teacher_name) }}" name="dt_teacher_fname" class="form-control" maxlength="50" placeholder="First Name" onkeyup="this.value = minmaxname(this.value, 0, 50)" required/>
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
                    <input type="text" value="{{ preg_replace('/.+\|/', '', $data_edit->dt_teacher_name) }}" name="dt_teacher_lname" class="form-control" maxlength="50" placeholder="Last Name" onkeyup="this.value = minmaxname(this.value, 0, 50)" required/>
                  </div>
                  </div>
                  <br>

                  <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Birth Place</label>
                    <input type="text" value="{{ $data_edit->dobplace}}" name="dt_teacher_dobplace" class="form-control" placeholder="Birth Place"/>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Birth Date</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' value="{{ $data_edit->dt_teacher_dobplace}}" name="dt_teacher_dobplace" class="form-control birth_date" />
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                  </div>
                  <div class="col-xs-2">
                      <label for="exampleInputPassword1">Age</label>
                      <select id="selecttype" name="dt_teacher_age" class="form-control">
                        @for($i=1;$i<101;$i++)
                        <option value="{{$i}}" selected>{{$i}}</option>
                        @endfor
                      </select>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Religion</label>
                      <select id="selecttype" name="dt_teacher_religion" class="form-control">
                        @if($data_edit->dt_teacher_religion == "islam")
                        <option value="islam" selected>Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="konghucu">Konghucu</option>
                        <option value="budha">Budha</option>
                        <option value="hindu">Hindu</option>
                        @elseif($data_edit->dt_teacher_religion == "kristen")
                        <option value="islam">Islam</option>
                        <option value="kristen" selected>Kristen</option>
                        <option value="konghucu">Konghucu</option>
                        <option value="budha">Budha</option>
                        <option value="hindu">Hindu</option>
                        @elseif($data_edit->dt_teacher_religion == "konghucu")
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="konghucu" selected>Konghucu</option>
                        <option value="budha">Budha</option>
                        <option value="hindu">Hindu</option>
                        @elseif($data_edit->dt_teacher_religion == "budha")
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="konghucu">Konghucu</option>
                        <option value="budha" selected>Budha</option>
                        <option value="hindu">Hindu</option>
                        @else
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="konghucu">Konghucu</option>
                        <option value="budha">Budha</option>
                        <option value="hindu" selected>Hindu</option>
                        @endif
                      </select>
                    </div>
                    <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Position</label>
                      <select id="selecttype" name="dt_teacher_position" class="form-control">
                        @if($data_edit->dt_teacher_position == "tetap")
                        <option value="tetap" selected>Tetap</option>
                        <option value="kontrak">Kontrak</option>
                        @else
                        <option value="tetap">TEtap</option>
                        <option value="kontrak" selected>Kontrak</option>
                        @endif
                      </select>
                    </div>
                    <div class="col-xs-2">
                      <label for="exampleInputPassword1">Bloodtype</label>
                      <select id="selecttype" name="dt_teacher_bloodtype" class="form-control">
                        @if($data_edit->dt_teacher_bloodtype == "A")
                        <option value="A" selected>A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                        @elseif($data_edit->dt_teacher_bloodtype == "B")
                        <option value="A">A</option>
                        <option value="B" selected>B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                        @elseif($data_edit->dt_teacher_bloodtype == "AB")
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB" selected>AB</option>
                        <option value="O">O</option>
                        @else
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O" selected>O</option>
                        @endif
                      </select>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Contact</label>
                    <input type="text" value="{{ $data_edit->dt_teacher_contact }}" name="dt_teacher_contact" class="form-control" placeholder="Contact"/>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text"value="{{ $data_edit->dt_teacher_email }}" name="dt_teacher_email" class="form-control" placeholder="Email"/>
                  </div>
                  <div class="col-xs-2">
                      <label for="exampleInputPassword1">Teacher For</label>
                      <select id="selecttype" name="dt_teacher_for" class="form-control">
                        @if($data_edit->dt_teacher_for == "TK")
                        <option value="TK" selected>TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        @elseif($data_edit->dt_teacher_for == "SD")
                        <option value="TK">TK</option>
                        <option value="SD" selected>SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        @elseif($data_edit->dt_teacher_for == "SMP")
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP" selected>SMP</option>
                        <option value="SMA">SMA</option>
                        @else
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA" selected>SMA</option>
                        @endif
                      </select>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                      <div class="col-xs-10">
                        <label for="exampleInputPassword1">Address</label>
                        <input value="{{ $data_edit->dt_teacher_address}}" type="text" name="dt_teacher_address" class="form-control" placeholder="Address"/>
                      </div>
                  </div>
                  <br>

                  <div class="row">
                      <div class="col-xs-6 col-md-4">
                        <label for="exampleInputPassword1">Photo</label>
                        <img class="cover_photo_edit" src="{{ url('images/'.$data_edit->photo) }}">
                        <input  type="file" name="dt_teacher_name_img" class="form-control" placeholder="Photo"/>
                      </div>
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Status Log</label>
                      <select id="selecttype" name="dt_teacher_statuslog" class="form-control">
                        @if($data_edit->dt_teacher_statuslog == "active")
                        <option value="active" selected>Active</option>
                        <option value="disable">Disable</option> 
                        @else
                        <option value="active">Active</option>
                        <option value="disable" selected>Disable</option> 
                        @endif                     
                      </select>
                    </div>
                  </div>                  

                  <br><br>
                    <button type="submit" class="btn btn-primary">Save Data</button>
                </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            
              <br><br>
          <div style="width:80%;margin:auto" class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Teachers</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
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
                    <?php $i=1; ?>
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
                        <a href="{{ url('manage_teacher/detail_master_teacher/'.$teachers->id)}}"><i class="fa fa-eye"></i> </a>
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
    $('.birth_date').datetimepicker({ format: 'YYYY-MM-DD' });

        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
    </script>
@endsection
