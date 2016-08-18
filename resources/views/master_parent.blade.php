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

        <div class="modal fade" id="myModaldetailteacher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog-front">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Data Parent</h4>
                    </div>
                        <div class="modal-body-front" style="height:560px;overflow-y:auto;">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div style="width:1500px" class="box-body">
                  <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NISN</th>
                        <th>Student Grade</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Status Log</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($data_parent as $parents)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $parents->dt_parent_nisn}}</td>
                        <td>{{ $parents->dt_parent_student_grade }}</td>
                        <td>{{ preg_replace('/\|/', ' ', $parents->dt_parent_name) }}</td>
                        <td>{{ $parents->dt_parent_age}}</td>
                        <td>{{ $parents->dt_parent_email}}</td>
                        <td>{{ $parents->dt_parent_contact}}</td>
                        <td>{{ $parents->dt_parent_address}}</td>
                        <td>{{ $parents->dt_parent_statuslog}}</td>
                        
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
                  <h3 class="box-title">Master Parent</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                <form method="POST"  action="{{ url('manage_parent/save_parent') }}" enctype="multipart/form-data">

                  <div class="row">
                  <div class="col-xs-6 col-md-4">
                  <input id="tyclass" type="hidden" name="type_class" value="tk"> 
                      <label for="exampleInputPassword1">Select Grade Student</label>
                      <select id="selecttypegrade" name="dt_parent_student_grade" class="form-control not-res">
                        @foreach($data_kelas as $grade)
                        <option value="{{$grade->dt_kelas_type}}">{{$grade->dt_kelas_type}}</option>
                        @endforeach
                      </select>
                    </div>
                    
                  <div  id="selecttypeclasstk" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select NISN Student</label>
                      <select name="dt_parent_nisn_tk" class="form-control not-res">
                        @foreach($data_nisn_tk as $nisn_tk)
                        <option value="{{$nisn_tk->dt_student_nisn}}">{{$nisn_tk->dt_student_nisn}} ({{preg_replace('/\|/', ' ', $nisn_tk->dt_student_name)}})</option>
                        @endforeach
                      </select>
                    </div>
                  <div style="display:none" id="selecttypeclasssd" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select NISN Student</label>
                      <select name="dt_parent_nisn_sd" class="form-control not-res">
                        @foreach($data_nisn_sd as $nisn_sd)
                        <option value="{{$nisn_sd->dt_student_nisn}}">{{$nisn_sd->dt_student_nisn}} ({{preg_replace('/\|/', ' ', $nisn_sd->dt_student_name)}})</option>
                        @endforeach
                      </select>
                    </div>
                  <div  style="display:none" id="selecttypeclasssmp" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select NISN Student</label>
                      <select name="dt_parent_nisn_smp" class="form-control not-res">
                        @foreach($data_nisn_smp as $nisn_smp)
                        <option value="{{$nisn_smp->dt_student_nisn}}">{{$nisn_smp->dt_student_nisn}} ({{preg_replace('/\|/', ' ', $nisn_smp->dt_student_name)}})</option>
                        @endforeach
                      </select>
                    </div>
                  <div style="display:none" id="selecttypeclasssma" class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select NISN Student</label>
                      <select name="dt_parent_nisn_sma" class="form-control not-res">
                        @foreach($data_nisn_sma as $nisn_sma)
                        <option value="{{$nisn_sma->dt_student_nisn}}">{{$nisn_sma->dt_student_nisn}} ({{preg_replace('/\|/', ' ', $nisn_sma->dt_student_name)}})</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <br>

                  <!-- <div class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select NISN</label>
                      <select id="selecttype" name="dt_parent_nisn" class="form-control not-res">
                        @foreach($data_student as $student)
                        <option value="{{$student->dt_student_nisn}}">{{$student->dt_student_nisn}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div> -->
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
                    <input type="text" name="dt_parent_fname" class="form-control not-res" maxlength="50" placeholder="First Name" onkeyup="this.value = minmaxname(this.value, 0, 50)" required/>
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
                    <input type="text" name="dt_parent_lname" class="form-control not-res" maxlength="50" placeholder="Last Name" onkeyup="this.value = minmaxname(this.value, 0, 50)" required/>
                  </div>
                  </div>
                  <br>

                  <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Contact</label>
                    <input type="text" name="dt_parent_contact" class="form-control not-res" placeholder="Contact"/>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="dt_parent_email" class="form-control not-res" placeholder="Email" required/>
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
                        <input type="text" name="dt_parent_address" class="form-control not-res" placeholder="Address"/>
                      </div>
                  </div>
                  <br>

                  <div class="row">
                      <div class="col-xs-6 col-md-4">
                        <label for="exampleInputPassword1">Photo</label>
                        <input type="file" name="dt_parent_name_img" class="form-control not-res" placeholder="Photo"/>
                      </div>
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Status Log</label>
                      <select id="selecttype" name="dt_parent_statuslog" class="form-control not-res">
                        <option value="active">Active</option>
                        <option value="disable">Disable</option>                      
                      </select>
                    </div>
                  </div>                  

                  <br><br>
                    <button type="submit" class="btn btn-primary">Save Data</button>
                </form>                </div><!-- /.box-body -->
              </div><!-- /.box -->
              

<!--               <form method="POST" action="{{ url('manage_teacher/import_data_teacher') }}" enctype="multipart/form-data">
                
                <input type="file" name="import_file"/>
                <button type="submit">Import File</button>

              </form> -->

              <br><br>
          <div style="width:95%;margin:auto" class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Parent</h3>
                  <label style="float:right"><a data-toggle="modal" data-target="#myModaldetailteacher" href="#">View Detail</a></label>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>NISN</th>
                        <th>Student Grade</th>
                        <th>Email</th>
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
                        <td>{{ $parents->dt_parent_student_grade }}</td>
                        <td>{{ $parents->dt_parent_email}}</td>
                        <td>{{ $parents->dt_parent_statuslog}}</td>
                        <td style="text-align:center">
                        <a href="{{ url('manage_parent/edit_parent/'.$parents->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a>
                        <a href="{{ url('manage_parent/delete_parent/'.$parents->id)}}"><i style="font-size:20px;margin:0px " class="fa fa-trash"></i> </a>
                        </td>
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
                  <div class="export">
                  <a href="{{ url('manage_parent/export_data/xls') }}"><button class="btn btn-success"><i class="fa fa-paper-plane-o"></i> xls</button></a>
                  <a href="{{ url('manage_parent/export_data/xlsx') }}"><button class="btn btn-info"><i class="fa fa-paper-plane-o"></i> xlsx</button></a>
                  <a href="{{ url('manage_parent/export_data/csv') }}"><button class="btn btn-warning"><i class="fa fa-paper-plane-o"></i> csv</button></a>
                  </div>
                  <div style="float:right;margin-top:40px;">
                  <form method="POST" action="{{ url('manage_parent/import_data_parent') }}" enctype="multipart/form-data" class="form-inline">
                    <div class="form-group">
                      <input type="file" name="import_data_master_parent" class="form-control" placeholder="Email">
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
$('#selecttype').change(function(){
        if($(this).val() == "teacher"){
           $.ajax({
              url: "validate_parent",
              type: "POST",
              data: "dt_parent_nisn=" + dt_parent_nisn,
              sucesss: function(data) {
                  if (data == 1) {
                    // console.log(data);
                    //   $("#inp_statusdata").css("display","block");
                    //   $("#inp_uname").css("display","block");
                    //   $("#inp_pw").css("display","block");
                    //   $("#sub").css("display","block");
                  }
                  else {
                      // $("b-save").html("Your nip not available");
                  }
              }
          });
        }
        else{}
</script>
    <script type="text/javascript">
            $('#example2').DataTable({
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
@endsection
