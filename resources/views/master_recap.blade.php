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
                <form method="POST"  action="{{ url('manage_teacher/save_master_teacher_recap') }}" enctype="multipart/form-data">
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

                  <input id="tyclass" type="hidden" name="type_class" value="tk"> 
                  <div class="row">
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Grade</label>
                      <select id="selecttypegrade" onclick="openclass()" name="dt_student_grade" class="form-control not-res">
                        @foreach($data_kelas as $grade)
                        <option value="{{$grade->dt_kelas_type}}">{{$grade->dt_kelas_type}}</option>
                        @endforeach
                      </select>
                    </div>

                  <input id="namestudent" type="hidden" name="name_student" value="tk1a">   
                    <div id="selecttypeclass" class="col-xs-6 col-md-4">
                      <label for="dt_student_kelas">Select Class</label>
                      <select name="dt_student_kelas" id="dt_student_kelas" class="form-control not-res">
                        <option value="">--Select Grade First--</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  
                  <div class="row">

                  <div  id="selectstudent" class="col-xs-6 col-md-4">
                  <label for="dt_student_kelas">Select Student</label>
                  <select name="dt_student_kelas" id="dt_student_kelas" class="form-control not-res">
                    <option value="">--Select Class First--</option>
                  </select>
                </div>
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Student Point</label>
                    <input type="text" name="dt_recap_nilai" class="form-control not-res" placeholder="10-100"/>
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
                        <td style="text-align:center">
                        <a href="{{ url('manage_teacher/edit_master_recap/'.$rekaps->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_teacher/delete_master_recap/'.$rekaps->id)}}"><i style="font-size:20px;margin:0px " class="fa fa-trash"></i> </a>
                        </td>
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
                  <div class="export">
                  <a href="{{ url('manage_teacher_recap/export_data/xls') }}"><button class="btn btn-success"><i class="fa fa-paper-plane-o"></i> xls</button></a>
                  <a href="{{ url('manage_teacher_recap/export_data/xlsx') }}"><button class="btn btn-info"><i class="fa fa-paper-plane-o"></i> xlsx</button></a>
                  <a href="{{ url('manage_teacher_recap/export_data/csv') }}"><button class="btn btn-warning"><i class="fa fa-paper-plane-o"></i> csv</button></a>
                  </div>
                  <div style="float:right;margin-top:40px;">
                  <form method="POST" action="{{ url('manage_teacher/import_data_teacher_recap') }}" enctype="multipart/form-data" class="form-inline">
                    <div class="form-group">
                      <input type="file" name="import_data_master_recap" class="form-control" placeholder="Email">
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

    <script type="text/javascript">
        $('#selecttypeclasstk').change(function(){
        if($(this).val() == "TK 1 A"){
          $("#namestudent").val("tk1a");
          $("#selecttypeclasstk1a").css("display","block");
          $('#selecttypeclasstk1b').hide();
          $('#selecttypeclasstk2a').hide();
          $('#selecttypeclasstk2b').hide();
          $('#selecttypeclasssd1a').hide();
          $('#selecttypeclasssd1b').hide();
          $('#selecttypeclasssd2a').hide();
          $('#selecttypeclasssd2b').hide();
          $('#selecttypeclasssd3a').hide();
          $('#selecttypeclasssd3b').hide();
          $('#selecttypeclasssd4a').hide();
          $('#selecttypeclasssd4b').hide();
          $('#selecttypeclasssd5a').hide();
          $('#selecttypeclasssd5b').hide();
          $('#selecttypeclasssd6a').hide();
          $('#selecttypeclasssd6b').hide();
          $('#selecttypeclasssmp1').hide();
          $('#selecttypeclasssmp2').hide();
          $('#selecttypeclasssmp3').hide();
          $('#selecttypeclasssma1').hide();
          $('#selecttypeclasssma2').hide();
          $('#selecttypeclasssma3').hide();
        }
        else if($(this).val() == "TK 1 B"){
          $("#namestudent").val("tk1b");
          $("#selecttypeclasstk1a").hide();
          $('#selecttypeclasstk1b').css("display","block");
          $('#selecttypeclasstk2a').hide();
          $('#selecttypeclasstk2b').hide();
          $('#selecttypeclasssd1a').hide();
          $('#selecttypeclasssd1b').hide();
          $('#selecttypeclasssd2a').hide();
          $('#selecttypeclasssd2b').hide();
          $('#selecttypeclasssd3a').hide();
          $('#selecttypeclasssd3b').hide();
          $('#selecttypeclasssd4a').hide();
          $('#selecttypeclasssd4b').hide();
          $('#selecttypeclasssd5a').hide();
          $('#selecttypeclasssd5b').hide();
          $('#selecttypeclasssd6a').hide();
          $('#selecttypeclasssd6b').hide();
          $('#selecttypeclasssmp1').hide();
          $('#selecttypeclasssmp2').hide();
          $('#selecttypeclasssmp3').hide();
          $('#selecttypeclasssma1').hide();
          $('#selecttypeclasssma2').hide();
          $('#selecttypeclasssma3').hide();
        }
        else if($(this).val() == "TK 2 A"){
          $("#namestudent").val("tk2a");
          $("#selecttypeclasstk1a").hide();
          $('#selecttypeclasstk1b').hide();
          $('#selecttypeclasstk2a').css("display","block");
          $('#selecttypeclasstk2b').hide();
          $('#selecttypeclasssd1a').hide();
          $('#selecttypeclasssd1b').hide();
          $('#selecttypeclasssd2a').hide();
          $('#selecttypeclasssd2b').hide();
          $('#selecttypeclasssd3a').hide();
          $('#selecttypeclasssd3b').hide();
          $('#selecttypeclasssd4a').hide();
          $('#selecttypeclasssd4b').hide();
          $('#selecttypeclasssd5a').hide();
          $('#selecttypeclasssd5b').hide();
          $('#selecttypeclasssd6a').hide();
          $('#selecttypeclasssd6b').hide();
          $('#selecttypeclasssmp1').hide();
          $('#selecttypeclasssmp2').hide();
          $('#selecttypeclasssmp3').hide();
          $('#selecttypeclasssma1').hide();
          $('#selecttypeclasssma2').hide();
          $('#selecttypeclasssma3').hide();
        }
        else if($(this).val() == "TK 2 B"){
          $("#namestudent").val("tk1b");
          $("#selecttypeclasstk1a").hide();
          $('#selecttypeclasstk1b').hide();
          $('#selecttypeclasstk2a').hide();
          $('#selecttypeclasstk2b').css("display","block");
          $('#selecttypeclasssd1a').hide();
          $('#selecttypeclasssd1b').hide();
          $('#selecttypeclasssd2a').hide();
          $('#selecttypeclasssd2b').hide();
          $('#selecttypeclasssd3a').hide();
          $('#selecttypeclasssd3b').hide();
          $('#selecttypeclasssd4a').hide();
          $('#selecttypeclasssd4b').hide();
          $('#selecttypeclasssd5a').hide();
          $('#selecttypeclasssd5b').hide();
          $('#selecttypeclasssd6a').hide();
          $('#selecttypeclasssd6b').hide();
          $('#selecttypeclasssmp1').hide();
          $('#selecttypeclasssmp2').hide();
          $('#selecttypeclasssmp3').hide();
          $('#selecttypeclasssma1').hide();
          $('#selecttypeclasssma2').hide();
          $('#selecttypeclasssma3').hide();
        }
      });

    </script>
@endsection
  