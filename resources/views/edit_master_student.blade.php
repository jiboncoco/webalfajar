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
                    <?php $i=1; ?>
                    @foreach($data_student as $teachers)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $teachers->dt_student_nip}}</td>
                        <td>{{ preg_replace('/\|/', ' ', $teachers->dt_student_name) }}</td>
                        <td>{{ $teachers->dt_student_gender}}</td>
                        <td>{{ $teachers->dt_student_dobplace}}</td>
                        <td>{{ $teachers->dt_student_place}}</td>
                        <td>{{ $teachers->dt_student_religion}}</td>
                        <td>{{ $teachers->dt_student_position}}</td>
                        <td>{{ $teachers->dt_student_age}}</td>
                        <td>{{ $teachers->dt_student_bloodtype}}</td>
                        <td>{{ $teachers->dt_student_for}}</td>
                        <td>{{ $teachers->dt_student_email}}</td>
                        <td>{{ $teachers->dt_student_contact}}</td>
                        <td>{{ $teachers->dt_student_address}}</td>
                        <td>{{ $teachers->dt_student_code_absen}}</td>
                        <td><img class="cover_photo_edit"></td>
                        <td>{{ $teachers->dt_student_statuslog}}</td>
                        <td>
                        <a href="{{ url('manage_student/edit_master_student/'.$teachers->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_student/delete_master_student/'.$teachers->id)}}"><i style="font-size:20px;margin:0px " class="fa fa-trash"></i> </a>
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
                  <h3 class="box-title">Edit Master Student</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                <form method="POST"  action="{{ url('manage_student/update_master_student') }}" enctype="multipart/form-data">
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
                    <label for="exampleInputPassword1">NISN</label>
                    <input value="{{ $data_edit->dt_student_nisn }}" type="text" name="dt_student_nisn" class="form-control not-res" maxlength="50" placeholder="NISN" onkeyup="this.value = minmaxnip(this.value, 0, 50)" required/>
                    <input type="hidden" name="id" value="{{ $data_edit->id }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Gender</label>
                      <select id="selecttype" name="dt_student_gender" class="form-control">
                        @if($data_edit->dt_student_gender == "male")
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
                    <input type="text" value="{{ preg_replace('/\|.+/', '', $data_edit->dt_student_name) }}" name="dt_student_fname" class="form-control not-res" maxlength="50" placeholder="First Name" onkeyup="this.value = minmaxname(this.value, 0, 50)" required/>
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
                    <input type="text" value="{{ preg_replace('/.+\|/', '', $data_edit->dt_student_name) }}" name="dt_student_lname" class="form-control not-res" maxlength="50" placeholder="Last Name" onkeyup="this.value = minmaxname(this.value, 0, 50)" required/>
                  </div>
                  </div>
                  <br>
<input id="tyclass" type="hidden" name="type_class" value="tk"> 
                  <div class="row">
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Grade</label>
                      <select id="selecttypegrade" name="dt_student_grade" class="form-control not-res">
                        @foreach($data_kelas as $grade)
                        <option value="{{$grade->dt_kelas_type}}">{{$grade->dt_kelas_type}}</option>
                        @endforeach
                      </select>
                    </div>
                    
                  <div  id="selecttypeclasstk" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Class</label>
                      <select name="dt_student_kelas_tk" class="form-control not-res">
                        @foreach($data_kelas_tk as $class_tk)
                        <option value="{{$class_tk->dt_kelas_name}}">{{$class_tk->dt_kelas_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div style="display:none" id="selecttypeclasssd" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Class</label>
                      <select name="dt_student_kelas_sd" class="form-control not-res">
                        @foreach($data_kelas_sd as $class_sd)
                        <option value="{{$class_sd->dt_kelas_name}}">{{$class_sd->dt_kelas_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div  style="display:none" id="selecttypeclasssmp" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Class</label>
                      <select name="dt_student_kelas_smp" class="form-control not-res">
                        @foreach($data_kelas_smp as $class_smp)
                        <option value="{{$class_smp->dt_kelas_name}}">{{$class_smp->dt_kelas_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div style="display:none" id="selecttypeclasssma" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Class</label>
                      <select name="dt_student_kelas_sma" class="form-control not-res">
                        @foreach($data_kelas_sma as $class_sma)
                        <option value="{{$class_sma->dt_kelas_name}}">{{$class_sma->dt_kelas_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Birth Place</label>
                    <input value="{{ $data_edit->dt_student_bplace }}" type="text" name="dt_student_bplace" class="form-control not-res" placeholder="Birth Place"/>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Birth Date</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' value="{{ $data_edit->dt_student_dobbplace }}" name="dt_student_dobplace" class="form-control not-res birth_date" />
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                  </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Religion</label>
                      <select id="selecttype" name="dt_student_religion" class="form-control not-res">
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="konghucu">Konghucu</option>
                        <option value="budha">Budha</option>
                        <option value="hindu">Hindu</option>
                      </select>
                    </div>
                    <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Parent Name</label>
                    <input value="{{ $data_edit->dt_student_nameparent }}" type="text" name="dt_student_nameparent" class="form-control not-res" placeholder="Parent Name"/>
                  </div>
                    <div class="col-xs-2">
                      <label for="exampleInputPassword1">Bloodtype</label>
                      <select id="selecttype" name="dt_student_bloodtype" class="form-control not-res-s">
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
                    <input value="{{ $data_edit->dt_student_contact }}" type="text" name="dt_student_contact" class="form-control not-res" placeholder="Contact"/>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Email</label>
                    <input value="{{ $data_edit->dt_student_email }}" type="email" name="dt_student_email" class="form-control not-res" placeholder="Email" required/>
                  </div>
                  <div class="col-xs-2">
                      <label for="exampleInputPassword1">Age</label>
                      <select id="selecttype" name="dt_student_age" class="form-control not-res-s">
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
                        <input value="{{ $data_edit->dt_student_address }}" type="text" name="dt_student_address" class="form-control not-res" placeholder="Address"/>
                      </div>
                  </div>
                  <br>

                  <div class="row">
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Status Log</label>
                      <select id="selecttype" name="dt_student_statuslog" class="form-control">
                        @if($data_edit->dt_student_statuslog == "active")
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
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ url('manage_student/master_student') }}"><button class="btn btn-danger">Cancel</button></a>
                </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              

<!--               <form method="POST" action="{{ url('manage_student/import_data_student') }}" enctype="multipart/form-data">
                
                <input type="file" name="import_file"/>
                <button type="submit">Import File</button>

              </form> -->
              @if(session('akses_type') == "staff")
              <br><br>
          <div style="width:95%;margin:auto" class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Students</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>NISN</th>
                        <th>Grade</th>
                        <th>Class</th>
                        <th>email</th>
                        <th>Status Log</th>
                        <th style="text-align:center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($data_student as $teachers)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ preg_replace('/\|/', ' ', $teachers->dt_student_name) }}</td>
                        <td>{{ $teachers->dt_student_nisn}}</td>
                        <td>{{ $teachers->dt_student_grade}}</td>
                        <td>{{ $teachers->dt_student_kelas}}</td>
                        <td>{{ $teachers->dt_student_email}}</td>
                        <td>{{ $teachers->dt_student_statuslog}}</td>
                        <td style="text-align:center">
                        <a href="{{ url('manage_student/edit_master_student/'.$teachers->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_student/delete_master_student/'.$teachers->id)}}"><i style="font-size:20px;margin:0px " class="fa fa-trash"></i> </a>
                        <a data-toggle="modal" data-target="#myModaldetailteacher" href="#"><i class="fa fa-eye"></i> </a>
                        </td>
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
                  <div class="export">
                  <a href="{{ url('manage_student/export_data/xls') }}"><button class="btn btn-success"><i class="fa fa-paper-plane-o"></i> xls</button></a>
                  <a href="{{ url('manage_student/export_data/xlsx') }}"><button class="btn btn-info"><i class="fa fa-paper-plane-o"></i> xlsx</button></a>
                  <a href="{{ url('manage_student/export_data/csv') }}"><button class="btn btn-warning"><i class="fa fa-paper-plane-o"></i> csv</button></a>
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

    <script type="text/javascript">
        $('#selecttypegrade').change(function(){
        if($(this).val() == "TK"){
          $("#selecttypeclasstk").css("display","block");
          $('#selecttypeclasssd').hide();
          $("#tyclass").val("tk");
          $('#selecttypeclasssmp').hide();
          $('#selecttypeclasssma').hide();
        }
        else if($(this).val() == "SD"){
          $("#selecttypeclasstk").hide();
          $("#tyclass").val("sd");
          $('#selecttypeclasssd').css("display","block");
          $('#selecttypeclasssmp').hide();
          $('#selecttypeclasssma').hide();
        }
        else if($(this).val() == "SMP"){
          $("#selecttypeclasstk").hide();
          $("#tyclass").val("smp");
          $('#selecttypeclasssd').hide();
          $('#selecttypeclasssmp').css("display","block");
          $('#selecttypeclasssma').hide();
        }
        else if($(this).val() == "SMA"){
          $("#selecttypeclasstk").hide();
          $("#tyclass").val("sma");
          $('#selecttypeclasssd').hide();
          $('#selecttypeclasssmp').hide();
          $('#selecttypeclasssma').css("display","block");
        }
      });

</script>
@endsection
