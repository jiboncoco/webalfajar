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
                  <h3 class="box-title">Master Recap</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">             
                <form method="POST"  action="{{ url('manage_teacher/save_teacher_recap') }}" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-xs-8">
                      <label for="exampleInputPassword1">Select Type</label>
                      <select id="selecttype" name="dt_rekap_type" class="form-control not-res">
                        <option value="UN">UN</option>
                        <option value="Tugas Harian">Tugas Harian</option>
                        <option value="Tugas Kelompok">Tugas Kelompok</option>
                        <option value="Ulangan Harian">Ulangan Harian</option>
                        <option value="UTS">UTS</option>
                        <option value="UAS">UAS</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input id="tyclass" type="hidden" name="type_class" value="tk"> 
                  <div class="row">
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Grade</label>
                      <select id="selecttypegrade" onclick="openClass()" name="dt_rekap_for" class="form-control not-res">
                        @foreach($data_kelas as $grade)
                        <option value="{{$grade->dt_kelas_type}}">{{$grade->dt_kelas_type}}</option>
                        @endforeach
                      </select>
                    </div>

                  <input id="namestudent" type="hidden" name="name_student" value="tk1a">   
                    <div id="selecttypeclass" class="col-xs-6 col-md-4">
                      <label for="dt_kelas_name">Select Class</label>
                      <select onclick="openStudent()" name="dt_rekap_class" id="dt_kelas_name" class="form-control not-res">
                        <option value="">--Select Grade First--</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">

                  <div  id="selectstudent" class="col-xs-6 col-md-4">
                  <label for="dt_student">Select Student</label>
                  <select name="dt_rekap_name_student" id="dt_student_name" class="form-control not-res">
                    <option value="">--Select Class First--</option>
                  </select>
                </div>
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Student Point</label>
                    <input type="text" name="dt_rekap_nilai" class="form-control not-res" placeholder="10-100"/>
                  </div>
                  </div>

                  <br>
                   <div class="row">
                   <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Pelajaran</label>
                    <input type="text" name="dt_rekap_pelajaran" class="form-control not-res" placeholder="Pelajaran"/>
                  </div>
                    <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Semester</label>
                      <select name="dt_rekap_semester" class="form-control not-res">
                        <option value="MID SEMESTER 1">MID SEMESTER 1</option>
                        <option value="SEMESTER 1">SEMESTER 1</option>
                        <option value="MID SEMESTER 2">MID SEMESTER 2</option>
                        <option value="SEMESTER 2">SEMESTER 2</option>
                      </select>
                    </div>
                  </div>
                  <br>


                  
                  <br><br>
                    <button type="submit" class="btn btn-primary">Save Data</button>
                </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              

<!--               <form method="POST" action="{{ url('manage_student/import_data_student') }}" enctype="multipart/form-data">
                
                <input type="file" name="import_file"/>
                <button type="submit">Import File</button>

              </form> -->

              <br><br>
          <div style="width:95%;margin:auto" class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Recap</h3>
              </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Grade</th>
                        <th>Class</th>
                        <th>Point</th>
                        <th>Pelajaran</th>
                        <th>Semester</th>
                        <th style="text-align:center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($data_rekap as $rekaps)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $rekaps->dt_rekap_type }}</td>
                        <td>{{ preg_replace('/\|/', ' ', $rekaps->dt_rekap_name_student) }}</td>
                        <td>{{ $rekaps->dt_rekap_for }}</td>
                        <td>{{ $rekaps->dt_rekap_class }}</td>
                        <td>{{ $rekaps->dt_rekap_nilai }}</td>
                        <td>{{ $rekaps->dt_rekap_pelajaran }}</td>
                        <td>{{ $rekaps->dt_rekap_semester }}</td>
                        <td style="text-align:center">
                        <a href="{{ url('manage_teacher/edit_teacher_recap/'.$rekaps->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_teacher/delete_teacher_recap/'.$rekaps->id)}}"><i style="font-size:20px;margin:0px " class="fa fa-trash"></i> </a>
                        </td>
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
                  <div class="export">
                  <a href="{{ url('manage_teacher_recap/export_data/xls') }}"><button class="btn btn-success"><i class="fa fa-paper-plane-o"></i> xls</button></a>
                  <a href="{{ url('manage_teacher_recap/export_data/xlsx') }}"><button class="btn btn-info"><i class="fa fa-paper-plane-o"></i> xlsx</button></a>
                  <a href="{{ url('manage_teacher_recap/export_data/csv') }}"><button class="btn btn-warning"><i class="fa fa-paper-plane-o"></i> csv</button></a>
                  @if(session('akses_type')== "root" || session('akses_type')== "root+" || session('akses_type')== "staff")
                  <a onclick="return confirm('Yakin hapus semua data teacher rekap?')" href="{{url('delete/all/data/teacher_rekap')}}"><button class="btn btn-danger">Delete All</button></a>
                  @else
                  @endif
                  </div>
                  <div style="float:right;margin-top:40px;">
                  <form method="POST" action="{{ url('manage_teacher/import_data_teacher_recap') }}" enctype="multipart/form-data" class="form-inline">
                    <div class="form-group">
                      <input type="file" name="import_data_master_teacher_recap" class="form-control" placeholder="Email">
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
      }
    });
  }

</script>

@endsection  