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
                      <select id="selecttypegrade" name="dt_student_grade" class="form-control not-res">
                        @foreach($data_kelas as $grade)
                        <option value="{{$grade->dt_kelas_type}}">{{$grade->dt_kelas_type}}</option>
                        @endforeach
                      </select>
                    </div>

                  <input id="namestudent" type="hidden" name="name_student" value="tk1a">   
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
                    
                  <div  id="selecttypeclasstk1a" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Student</label>
                      <select name="dt_student_kelas_tk1a" class="form-control not-res">
                        @foreach($data_student_tk1a as $s_tk1a)
                        <option value="{{$s_tk1a->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_tk1a->dt_student_name)}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div style="display:none" id="selecttypeclasstk1b" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Student</label>
                      <select name="dt_student_kelas_tk1b" class="form-control not-res">
                        @foreach($data_student_tk1b as $s_tk1b)
                        <option value="{{$s_tk1b->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_tk1b->dt_student_name)}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div style="display:none" id="selecttypeclasstk2a" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Student</label>
                      <select name="dt_student_kelas_tk2a" class="form-control not-res">
                        @foreach($data_student_tk2a as $s_tk2a)
                        <option value="{{$s_tk2a->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_tk2a->dt_student_name)}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div style="display:none" id="selecttypeclasstk2b" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Student</label>
                      <select name="dt_student_kelas_tk2b" class="form-control not-res">
                        @foreach($data_student_tk2b as $s_tk2b)
                        <option value="{{$s_tk2b->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_tk2b->dt_student_name)}}</option>
                        @endforeach
                      </select>
                    </div>
                  
                  <div style="display:none" id="selecttypeclasssd1a" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Student</label>
                      <select name="dt_student_kelas_sd1a" class="form-control not-res">
                        @foreach($data_student_sd1a as $s_sd1a)
                        <option value="{{$s_sd1a->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_sd1a->dt_student_name)}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div style="display:none" id="selecttypeclasssd1b" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Student</label>
                      <select name="dt_student_kelas_sd1b" class="form-control not-res">
                        @foreach($data_student_sd1b as $s_sd1b)
                        <option value="{{$s_sd1b->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_sd1b->dt_student_name)}}</option>
                        @endforeach
                      </select> 
                    </div>  
                  <div style="display:none" id="selecttypeclasssd2a" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Student</label>
                      <select name="dt_student_kelas_sd3a" class="form-control not-res">
                        @foreach($data_student_sd2a as $s_sd2a)
                        <option value="{{$s_sd2a->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_sd2a->dt_student_name)}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div style="display:none" id="selecttypeclasssd2b" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword2">Select Student</label>
                      <select name="dt_student_kelas_sd2b" class="form-control not-res">
                        @foreach($data_student_sd2b as $s_sd2b)
                        <option value="{{$s_sd2b->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_sd2b->dt_student_name)}}</option>
                        @endforeach
                      </select> 
                    </div>
                  <div style="display:none" id="selecttypeclasssd3a" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Student</label>
                      <select name="dt_student_kelas_sd4a" class="form-control not-res">
                        @foreach($data_student_sd3a as $s_sd3a)
                        <option value="{{$s_sd3a->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_sd3a->dt_student_name)}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div style="display:none" id="selecttypeclasssd3b" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword4">Select Student</label>
                      <select name="dt_student_kelas_sd4b" class="form-control not-res">
                        @foreach($data_student_sd3b as $s_sd3b)
                        <option value="{{$s_sd3b->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_sd3b->dt_student_name)}}</option>
                        @endforeach
                      </select> 
                    </div>
                  <div style="display:none" id="selecttypeclasssd4a" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Student</label>
                      <select name="dt_student_kelas_sd5a" class="form-control not-res">
                        @foreach($data_student_sd4a as $s_sd4a)
                        <option value="{{$s_sd4a->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_sd4a->dt_student_name)}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div style="display:none" id="selecttypeclasssd4b" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword5">Select Student</label>
                      <select name="dt_student_kelas_sd4b" class="form-control not-res">
                        @foreach($data_student_sd4b as $s_sd4b)
                        <option value="{{$s_sd4b->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_sd4b->dt_student_name)}}</option>
                        @endforeach
                      </select> 
                    </div>
                  <div style="display:none" id="selecttypeclasssd5a" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Student</label>
                      <select name="dt_student_kelas_sd6a" class="form-control not-res">
                        @foreach($data_student_sd5a as $s_sd5a)
                        <option value="{{$s_sd5a->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_sd5a->dt_student_name)}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div style="display:none" id="selecttypeclasssd5b" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword6">Select Student</label>
                      <select name="dt_student_kelas_sd5b" class="form-control not-res">
                        @foreach($data_student_sd5b as $s_sd5b)
                        <option value="{{$s_sd5b->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_sd5b->dt_student_name)}}</option>
                        @endforeach
                      </select> 
                    </div>
                   <div style="display:none" id="selecttypeclasssd6a" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Student</label>
                      <select name="dt_student_kelas_sd6a" class="form-control not-res">
                        @foreach($data_student_sd6a as $s_sd6a)
                        <option value="{{$s_sd6a->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_sd6a->dt_student_name)}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div style="display:none" id="selecttypeclasssd6b" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword6">Select Student</label>
                      <select name="dt_student_kelas_sd6b" class="form-control not-res">
                        @foreach($data_student_sd6b as $s_sd6b)
                        <option value="{{$s_sd6b->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_sd6b->dt_student_name)}}</option>
                        @endforeach
                      </select> 
                    </div>

                  <div  style="display:none" id="selecttypeclasssmp1" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Student</label>
                      <select name="dt_student_kelas_smp1" class="form-control not-res">
                        @foreach($data_student_smp1 as $s_smp1)
                        <option value="{{$s_smp1->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_smp1->dt_student_name)}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div  style="display:none" id="selecttypeclasssmp2" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Student</label>
                      <select name="dt_student_kelas_smp1" class="form-control not-res">
                        @foreach($data_student_smp2 as $s_smp2)
                        <option value="{{$s_smp2->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_smp2->dt_student_name)}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div  style="display:none" id="selecttypeclasssmp3" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Student</label>
                      <select name="dt_student_kelas_smp3" class="form-control not-res">
                        @foreach($data_student_smp3 as $s_smp3)
                        <option value="{{$s_smp3->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_smp3->dt_student_name)}}</option>
                        @endforeach
                      </select>
                    </div>

                  <div style="display:none" id="selecttypeclasssma1" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Student</label>
                      <select name="dt_student_kelas_sma1" class="form-control not-res">
                        @foreach($data_student_sma1 as $s_sma1)
                        <option value="{{$s_sma1->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_sma1->dt_student_name)}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div style="display:none" id="selecttypeclasssma2" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Student</label>
                      <select name="dt_student_kelas_sma2" class="form-control not-res">
                        @foreach($data_student_sma2 as $s_sma2)
                        <option value="{{$s_sma2->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_sma2->dt_student_name)}}</option>
                        @endforeach
                      </select>
                    </div>
                  <div style="display:none" id="selecttypeclasssma3" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Student</label>
                      <select name="dt_student_kelas_sma3" class="form-control not-res">
                        @foreach($data_student_sma3 as $s_sma3)
                        <option value="{{$s_sma3->dt_student_name}}">{{preg_replace('/\|/', ' ', $s_sma3->dt_student_name)}}</option>
                        @endforeach
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
  