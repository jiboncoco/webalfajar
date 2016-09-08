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
                  <h3 class="box-title">Edit Account</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                <form method="POST"  action="{{ url('manage_account/update_account') }}" enctype="multipart/form-data">
                  <div class="row">  
                      <input id="tyco" type="hidden" name="type_code" value="nip">               
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Type</label>
                      <select id="selecttype" name="akses_type" class="form-control not-res">
                      @if(session('akses_type') == "staff")
                        @if($akses_edit->akses_type == "teacher")
                        <option value="teacher" selected>Teacher</option>
                        <option value="parent">Parent</option>
                        <option value="student">Student</option>
                        @elseif($akses_edit->akses_type == "employee")
                        <option value="employee" selected>Employee</option>
                        <option value="teacher">Teacher</option>
                        <option value="parent">Parent</option>
                        <option value="student">Student</option>
                        @elseif($akses_edit->akses_type == "parent")
                        <option value="teacher">Teacher</option>
                        <option value="parent" selected>Parent</option>
                        <option value="student">Student</option>
                        @elseif($akses_edit->akses_type == "student")
                        <option value="teacher">Teacher</option>
                        <option value="parent">Parent</option>
                        <option value="student" selected>Student</option>
                        @elseif($akses_edit->akses_type == "staff")
                        <option value="staff" selected>Staff</option>
                        @elseif($akses_edit->akses_type == "root")
                        <option value="root" selected>Root</option>
                        @elseif($akses_edit->akses_type == "root+")
                        <option value="root+" selected>Root+</option>
                        @endif
                      @else
                        @if($akses_edit->akses_type == "teacher")
                        <option value="teacher" selected>Teacher</option>
                        <option value="employee">Employee</option>
                        <option value="parent">Parent</option>
                        <option value="student">Student</option>
                        <option value="staff">Staff</option>
                        <option value="root">Root</option>
                        <option value="root+">Root+</option>
                        @elseif($akses_edit->akses_type == "employee")
                        <option value="employee" selected>Employee</option>
                        <option value="teacher">Teacher</option>
                        <option value="parent">Parent</option>
                        <option value="student">Student</option>
                        <option value="staff">Staff</option>
                        <option value="root">Root</option>
                        <option value="root+">Root+</option>
                        @elseif($akses_edit->akses_type == "parent")
                        <option value="parent" selected>Parent</option>
                        <option value="employee">Employee</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                        <option value="staff">Staff</option>
                        <option value="root">Root</option>
                        <option value="root+">Root+</option>
                        @elseif($akses_edit->akses_type == "student")
                        <option value="student" selected>Student</option>
                        <option value="employee">Employee</option>
                        <option value="parent">Parent</option>
                        <option value="teacher">Teacher</option>
                        <option value="staff">Staff</option>
                        <option value="root">Root</option>
                        <option value="root+">Root+</option>
                        @elseif($akses_edit->akses_type == "staff")
                        <option value="staff" selected>Staff</option>
                        <option value="employee">Employee</option>
                        <option value="parent">Parent</option>
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                        <option value="root">Root</option>
                        <option value="root+">Root+</option>
                        @elseif($akses_edit->akses_type == "root")
                        <option value="root" selected>Root</option>
                        <option value="employee">Employee</option>
                        <option value="parent">Parent</option>
                        <option value="student">Student</option>
                        <option value="staff">Staff</option>
                        <option value="teacher">Teacher</option>
                        <option value="root+">Root+</option>
                        @elseif($akses_edit->akses_type == "root+")
                        <option value="root+" selected>Root+</option>
                        <option value="employee">Employee</option>
                        <option value="parent">Parent</option>
                        <option value="student">Student</option>
                        <option value="staff">Staff</option>
                        <option value="root">Root</option>
                        <option value="teacher">Teacher</option>
                        @endif
                      @endif
                      </select>
                    </div>
                  </div>
                  <br>

                  <div id="teacher" class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select NIP Teacher</label>
                      <select id="selectteacher" name="akses_code_nip" class="form-control not-res">
                        @foreach($dt_teachers as $teacher)
                        <option value="{{$teacher->dt_teacher_nip}}">{{$teacher->dt_teacher_nip}} ({{ preg_replace('/\|/', ' ', $teacher->dt_teacher_name) }})</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <br>

                  <div style="display:none;margin-bottom:10px;margin-top:-10px;" id="parent" class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select NISN Student</label>
                      <select id="selectparent" name="akses_code_parent" class="form-control not-res">
                        @foreach($dt_parents as $parent)
                        <option value="{{$parent->dt_parent_nisn}}">{{$parent->dt_parent_nisn}} ({{preg_replace('/\|/', ' ', $parent->dt_parent_name)}})</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div style="display:none;margin-bottom:10px;margin-top:-10px;" id="employee" class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select NIP Employee</label>
                      <select id="selectparent" name="akses_code_employee" class="form-control not-res">
                        @foreach($dt_employees as $employee)
                        <option value="{{$employee->dt_teacher_nip}}">{{$employee->dt_teacher_nip}} ({{ preg_replace('/\|/', ' ', $employee->dt_teacher_name) }})</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  

                  <div style="display:none;margin-bottom:10px;margin-top:-10px;" id="student" class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select NISN Students</label>
                      <select id="selectstudent" name="akses_code_student" class="form-control not-res">
                        @foreach($dt_students as $student)
                        <option value="{{$student->dt_student_nisn}}">{{$student->dt_student_nisn}} ({{preg_replace('/\|/', ' ', $student->dt_student_name)}})</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div style="display:none;margin-bottom:10px;margin-top:-10px;" id="staff" class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Access Code</label>
                      <select id="selectstaff" name="akses_code_staff" class="form-control not-res">
                        @foreach($dt_staffs as $staff)
                        <option value="{{$staff->akses_log_code}}">{{$staff->akses_log_code}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <input id="tymail" type="hidden" name="type_email" value="teacher"> 
                  <div id="mailteacher" class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Email Teacher</label>
                      <select id="emailteacher" name="akses_email_teacher" class="form-control not-res">
                        @foreach($dt_teachers as $teacher)
                        <option value="{{$teacher->dt_teacher_email}}">{{$teacher->dt_teacher_email}} ({{ preg_replace('/\|/', ' ', $teacher->dt_teacher_name) }})</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <br>

                  <div style="display:none;margin-bottom:10px;margin-top:-10px;" id="mailemployee" class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Email Employee</label>
                      <select id="emailemployee" name="akses_email_employee" class="form-control not-res">
                        @foreach($dt_employees as $employee)
                        <option value="{{$employee->dt_teacher_email}}">{{$employee->dt_teacher_email}} ({{ preg_replace('/\|/', ' ', $employee->dt_teacher_name) }})</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <div style="display:none;margin-bottom:10px;margin-top:-10px;" id="mailparent" class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Email Parents</label>
                      <select id="emailparent" name="akses_email_parent" class="form-control not-res">
                        @foreach($dt_parents as $parent)
                        <option value="{{$parent->dt_parent_email}}">{{$parent->dt_parent_email}} ({{preg_replace('/\|/', ' ', $parent->dt_parent_name)}})</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  

                  <div style="display:none;margin-bottom:10px;margin-top:-10px;" id="mailstudent" class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Email Students</label>
                      <select id="emailstudent" name="akses_email_student" class="form-control not-res">
                        @foreach($dt_students as $student)
                        <option value="{{$student->dt_student_email}}">{{$student->dt_student_email}} ({{preg_replace('/\|/', ' ', $student->dt_student_name)}})</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  

                  <div class="row"> 
                  <div  class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Status Data</label>
                      <select id="selecttype" name="akses_status_data" class="form-control not-res" >
                      <option value="active">Active</option>
                      <option value="disable">Disable</option>
                      </select>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                  <div  class="col-xs-6 col-md-4">
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
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" value="{{ $akses_edit->akses_username }}" name="akses_username" class="form-control not-res" maxlength="20" placeholder="Username" onkeyup="this.value = minmaxname(this.value, 0, 20)" required/>
                    <input type="hidden" name="id" value="{{$akses_edit->id}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                  <div  class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" value="{{ $akses_edit->akses_password }}" name="akses_password" class="form-control not-res" maxlength="20" placeholder="Password" onkeyup="this.value = minmaxname(this.value, 0, 20)" required/>
                  </div>
                  </div>

                  <br>
                  <div class="form-group">
                    <img class="cover_photo_edit" src="{{ url('images/'.$akses_edit->akses_imguser) }}">
                    <label for="exampleInputPassword1">Image User</label>
                    <input type="file" name="akses_imguser" value="{{ $akses_edit->akses_imguser }}" class="form-control not-res" placeholder="Image User" />
                  </div>

                  <br><br>
                  <div id="b-save">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                  <br>
                </form>
                <div style="margin-top:-54px;margin-left:80px">
                  <a href="{{ url('manage_account/all_account') }}"><button class="btn btn-danger">Cancel</button></a>
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
                  <h3 class="box-title">Data Access All Account</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Type</th>
                        <th>Code</th>
                        <th>Status Data</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th style="text-align:center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($aksess as $akses)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $akses->akses_type}}</td>
                        <td>{{ $akses->akses_code}}</td>
                        <td>{{ $akses->akses_status_data}}</td>
                        <td>{{ $akses->akses_username}}</td>
                        <td>{{ $akses->akses_email}}</td>
                        <td style="text-align:center">
                        <a href="{{ url('manage_account/edit_account/'.$akses->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_account/delete_account/'.$akses->id)}}"><i style="font-size:20px;margin:0px " class="fa fa-trash"></i> </a>
                        </td>
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
                  <div class="export">
                 <!--  <a href="{{ url('manage_all_account/export_data/xls') }}"><button class="btn btn-success"><i class="fa fa-paper-plane-o"></i> xls</button></a>
                  <a href="{{ url('manage_all_account/export_data/xlsx') }}"><button class="btn btn-info"><i class="fa fa-paper-plane-o"></i> xlsx</button></a>
                  <a href="{{ url('manage_all_account/export_data/csv') }}"><button class="btn btn-warning"><i class="fa fa-paper-plane-o"></i> csv</button></a>
                   --></div>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
        </section>
      </div>
      
</div>
</body>
<script type="text/javascript">
        $('#selecttype').change(function(){
        if($(this).val() == "teacher"){
          $("#teacher").css("display","block");
          $('#student').hide();
          $('#employee').hide();
          $("#tyco").val("nip");
          $('#parent').hide();
          $('#staff').hide();
        }
        else if($(this).val() == "parent"){
          $("#parent").css("display","block");
          $('#teacher').hide();
          $('#employee').hide();
          $('#student').hide();
          $('#staff').hide();
          $("#tyco").val("parent");
        }
        else if($(this).val() == "employee"){
          $("#employee").css("display","block");
          $('#teacher').hide();
          $('#parent').hide();
          $('#student').hide();
          $('#staff').hide();
          $("#tyco").val("employee");
        }
        else if($(this).val() == "student"){
          $("#student").css("display","block");
          $('#teacher').hide();
          $('#employee').hide();
          $('#parent').hide();
          $('#staff').hide();
          $("#tyco").val("student");
        }
        else{
          $("#student").hide();
          $('#teacher').hide();
          $('#employee').hide();
          $('#parent').hide();
          $('#staff').css("display","block");
          $("#tyco").val("staff");
        }
      });

</script>

<script type="text/javascript">
        $('#selecttype').change(function(){
        if($(this).val() == "teacher"){
          $("#mailteacher").css("display","block");
          $('#mailstudent').hide();
          $('#mailemployee').hide();
          $("#tymail").val("teacher");
          $('#mailparent').hide();
        }
        else if($(this).val() == "parent"){
          $("#mailparent").css("display","block");
          $('#mailteacher').hide();
          $('#mailemployee').hide();
          $('#mailstudent').hide();
          $("#tymail").val("parent");
        }
        else if($(this).val() == "employee"){
          $("#mailemployee").css("display","block");
          $('#mailteacher').hide();
          $('#mailstudent').hide();
          $('#mailparent').hide();
          $("#tymail").val("employee");
        }
        else if($(this).val() == "student"){
          $("#mailstudent").css("display","block");
          $('#mailteacher').hide();
          $('#mailemployee').hide();
          $('#mailparent').hide();
          $("#tymail").val("student");
        }
        else {
          $("#mailteacher").css("display","block");
          $('#mailstudent').hide();
          $('#mailemployee').hide();
          $("#tymail").val("teacher");
          $('#mailparent').hide();
        }
      });

</script>

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
