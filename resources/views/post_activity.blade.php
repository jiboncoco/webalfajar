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
            @if(session('akses_type') == "parent")
            @else
              <div style="width:95%;margin:auto;" class="box box-default collapsed-box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Post Activity</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">             
                <form method="POST"  action="{{ url('manage_student/save_student_activity') }}" enctype="multipart/form-data">
                  <div class="row">
                  @if(session('akses_type') == "student")
                    <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Student Grade</label>
                    @foreach($data_student as $student)
                    <input type="text" value="{{$student->dt_student_grade}}" name="dt_aktivitas_grade" class="form-control not-res" readonly="true" />
                    @endforeach
                  </div>
                  @else
                  <input id="tyclass" type="hidden" name="type_class" value="tk">
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Grade</label>
                      <select id="selecttypegrade" onclick="openClass()" name="dt_aktivitas_grade" class="form-control not-res">
                        @foreach($data_kelas as $grade)
                        <option value="{{$grade->dt_kelas_type}}">{{$grade->dt_kelas_type}}</option>
                        @endforeach
                      </select>
                    </div>
                    @endif
                   @if(session('akses_type') == "student")
                  <div style="display:none"  class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Permission</label>
                      <select name="dt_aktivitas_permission" class="form-control not-res" >
                      <option value="Approve">Approve</option>
                      <option value="Not Approve">Not Approve</option>
                      <option value="Notice">Notice</option>
                      <option value="No Reason">No Reason</option>
                      <option value="Not in my class hours">Not in my class hours</option>
                      </select>
                    </div>
                    @else
                    <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Permission</label>
                      <select name="dt_aktivitas_permission" class="form-control not-res" >
                      <option value="Approve">Approve</option>
                      <option value="Not Approve">Not Approve</option>
                      <option value="Notice">Notice</option>
                      <option value="No Reason">No Reason</option>
                      <option value="Not in my class hours">Not in my class hours</option>
                      </select>
                    </div>
                    @endif
                  </div>
                  <br>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="row">
                  @if(session('akses_type') == "student")
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Student Class</label>
                    @foreach($data_student as $student)
                    <input type="text" value="{{$student->dt_student_kelas}}" name="dt_aktivitas_class" class="form-control not-res" readonly="true" />
                    @endforeach
                  </div>
                  @else
                  <input id="namestudent" type="hidden" name="name_student" value="tk1a">   
                    <div id="selecttypeclass" class="col-xs-6 col-md-4">
                      <label for="dt_kelas_name">Select Class</label>
                      <select onclick="openStudent()" name="dt_aktivitas_class" id="dt_kelas_name" class="form-control not-res">
                        <option value="">--Select Grade First--</option>
                      </select>
                    </div>
                    @endif

                  @if(session('akses_type') == "student")
                    <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Student Name</label>
                    @foreach($data_student as $student)
                    <input type="text" value="{{$student->dt_student_name}}" name="dt_aktivitas_name" class="form-control not-res" readonly="true" />
                    @endforeach
                  </div>
                  @else
                  <div  id="selectstudent" class="col-xs-6 col-md-4">
                  <label for="dt_student">Select Student</label>
                  <select onclick="openStudentNISN()" name="dt_aktivitas_name" id="dt_student_name" class="form-control not-res">
                    <option value="">--Select Class First--</option>
                  </select>
                </div>
                @endif
                  </div>
                  <br>
                  
                  <div class="row">

                  @if(session('akses_type') == "student")
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Student NISN</label>
                    @foreach($data_student as $student)
                    <input type="text" value="{{$student->dt_student_nisn}}" name="dt_aktivitas_nisn" class="form-control not-res" readonly="true" />
                    @endforeach
                  </div>
                  @else
                  <div  id="selectstudent" class="col-xs-6 col-md-4">
                  <label for="dt_student">Select Student NISN</label>
                  <select name="dt_aktivitas_nisn" id="dt_student_nisn" class="form-control not-res">
                    <option value="">--Select Student First--</option>
                  </select>
                </div>
                @endif
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Date</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' placeholder="Date" name="dt_aktivitas_date" class="form-control not-res birth_date" />
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                  </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-xs-8">
                        <label for="exampleInputPassword1">Reason</label>
                        <input type="text" name="dt_aktivitas_reason" class="form-control not-res" placeholder="Reason"/>
                      </div>
                  </div>
                  <br>
                  
                  <br><br>
                    <button type="submit" class="btn btn-primary">Save Data</button>
                </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              @endif
              
              

<!--               <form method="POST" action="{{ url('manage_student/import_data_student') }}" enctype="multipart/form-data">
                
                <input type="file" name="import_file"/>
                <button type="submit">Import File</button>

              </form> -->

              <br><br>
          <div style="width:95%;margin:auto" class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Activity Student</h3>
              </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Grade</th>
                        <th>Class</th>
                        <th>Date</th>
                        <th>Permission</th>
                        <th>Reason</th>
                        @if(session('akses_type') == "parent")
                        @else
                        <th style="text-align:center">Action</th>
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($data_aktivitas as $aktivitass)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ preg_replace('/\|/', ' ', $aktivitass->dt_aktivitas_name) }}</td>
                        <td>{{ $aktivitass->dt_aktivitas_grade }}</td>
                        <td>{{ $aktivitass->dt_aktivitas_class }}</td>
                        <td>{{ $aktivitass->dt_aktivitas_date }}</td>
                        <td>{{ $aktivitass->dt_aktivitas_permission }}</td>
                        <td>{{ $aktivitass->dt_aktivitas_reason }}</td>
                        @if(session('akses_type') == "parent")
                        @elseif(session('akses_type') == "student")
                        <td style="text-align:center">
                        
                        <a href="{{ url('manage_student/edit_student_activity/'.$aktivitass->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a>
                        @else
                        <td style="text-align:center">
                        <a href="{{ url('manage_student/edit_student_activity/'.$aktivitass->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_student/delete_student_activity/'.$aktivitass->id)}}"><i style="font-size:20px;margin:0px " class="fa fa-trash"></i> </a>
                        @endif
                        </td>
                        </td>
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
                  <div class="export">
                  <a href="{{ url('manage_student/activity/export_data/xls') }}"><button class="btn btn-success"><i class="fa fa-paper-plane-o"></i> xls</button></a>
                  <a href="{{ url('manage_student/activity/export_data/xlsx') }}"><button class="btn btn-info"><i class="fa fa-paper-plane-o"></i> xlsx</button></a>
                  <a href="{{ url('manage_student/activity/export_data/csv') }}"><button class="btn btn-warning"><i class="fa fa-paper-plane-o"></i> csv</button></a>
                  @if(session('akses_type')== "root" || session('akses_type')== "root+" || session('akses_type')== "staff")
                  <a onclick="return confirm('Yakin hapus semua data aktivitas?')" href="{{url('delete/all/data/activity')}}"><button class="btn btn-danger">Delete All</button></a>
                  @else
                  @endif
                  </div>
                  <!-- <div style="float:right;margin-top:40px;">
                  <form method="POST" action="{{ url('manage_student/import_data_activity_student') }}" enctype="multipart/form-data" class="form-inline">
                    <div class="form-group">
                      <input type="file" name="import_data_activity_student" class="form-control" placeholder="File">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                    <button type="submit" class="btn btn-default">Import File</button>
                  </form>
                  </div>    -->
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
              "autoWidth": true,
              "responsive": true
            });
    $('.birth_date').datetimepicker({ format: 'YYYY-MM-DD' });
    </script>

<script>
  function openClass(){
    var grade = $("#selecttypegrade").val();
    $.ajax({
      url:'{{url("manage_teacher_recap/get_class")}}',
      dataType:'json',
      type:'POST',
      beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
      data:{grade:grade},
      success:function(data){
        var isikelas = '';
        for(kelas in data){
          isikelas+= '<option value="'+data[kelas].dt_kelas_name+'">'+data[kelas].dt_kelas_name+'</option>';
        }
        $("#dt_kelas_name").html(isikelas);
        $("#dt_kelas_name").attr('onclick','openStudent()');
      }
    });
  }
  
  function openStudent(){
    var kelas = $("#dt_kelas_name").val();
    $.ajax({
      url:'{{url("manage_teacher_recap/get_student")}}',
      dataType:'json',
      type:'POST',
      beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
      data:{class:kelas},
      success:function(data){
        var isikelas = '';
        for(kelas in data){
          isikelas+= '<option value="'+data[kelas].dt_student_name+'">'+data[kelas].dt_student_name+'</option>';
        }
        $("#dt_student_name").html(isikelas);
        $("#dt_student_name").attr('onclick','openStudentNISN()');
      }
    });
  }

  function openStudentNISN(){
    var nisn = $("#dt_student_name").val();
    $.ajax({
      url:'{{url("manage_student/get_student_nisn")}}',
      dataType:'json',
      type:'POST',
      beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
      data:{student:nisn},
      success:function(data){
        var isinisn = '';
        for(nisn in data){
          isinisn+= '<option value="'+data[nisn].dt_student_nisn+'">'+data[nisn].dt_student_nisn+'</option>';
        }
        $("#dt_student_nisn").html(isinisn);
      }
    });
  }

</script>


@endsection  