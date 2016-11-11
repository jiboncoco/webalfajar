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
                    <h4 class="modal-title" id="myModalLabel">Data New Student</h4>
                    </div>
                        <div class="modal-body-front" style="height:560px;overflow-y:auto;">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div style="width:1500px" class="box-body">
                  <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Grade</th>
                        <th>Class</th>
                        <th>Gender</th>
                        <th>Religion</th>
                        <th>Birth Date Place</th>
                        <th>Address</th>
                        <th>School Before</th>
                        <th>Father Name</th>
                        <th>Mother Name</th>
                        <th>Contact</th>
                        <th>Email Parent</th>
                        <th>Code Registrasi</th>
                        <th>Registration Time</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($dt_registrasi as $statuscode)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $statuscode->dt_reg_name_student }}</td>
                        <td>{{ $statuscode->dt_reg_type }}</td>
                        <td>{{ $statuscode->dt_reg_class }}</td>
                        <td>{{ $statuscode->dt_reg_gender }}</td>
                        <td>{{ $statuscode->dt_reg_religion }}</td>
                        <td>{{ $statuscode->dt_reg_place }}, {{ $statuscode->dt_reg_dob }}</td>
                        <td>{{ $statuscode->dt_reg_address }}</td>
                        <td>{{ $statuscode->dt_reg_before }}</td>
                        <td>{{ $statuscode->dt_reg_namefather }}</td>
                        <td>{{ $statuscode->dt_reg_namemother }}</td>
                        <td>{{ $statuscode->dt_reg_contact }}</td>
                        <td>{{ $statuscode->dt_reg_emailparent }}</td>
                        <td>{{ $statuscode->dt_reg_codereg }}</td>
                        <td>{{ $statuscode->created_at}}</td>
                        <td>{{ $statuscode->dt_reg_status_code }}</td>
                       
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

              <br><br>
          <div style="width:95%;margin:auto" class="box">
                <div class="box-header">
                  <h3 class="box-title">Data New Student</h3>
                  <label style="float:right"><a data-toggle="modal" data-target="#myModaldetailteacher" href="#">View Detail</a></label>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Grade</th>
                        <th>Class</th>
                        <th>Gender</th>
                        <th>Religion</th>
                        <!-- <th>Code Registrasi</th>
                        <th>Status</th> -->
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($dt_registrasi as $statuscode)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $statuscode->dt_reg_name_student }}</td>
                        <td>{{ $statuscode->dt_reg_type }}</td>
                        <td>{{ $statuscode->dt_reg_class }}</td>
                        <td>{{ $statuscode->dt_reg_gender }}</td>
                        <td>{{ $statuscode->dt_reg_religion }}</td>
                        <!-- <td>{{ $statuscode->dt_reg_codereg}}</td>
                        <td>{{ $statuscode->dt_reg_status_code }}</td> -->
                        <td style="text-align:center">
                        <!-- <a href="{{ url('manage_registration/edit_status_code/'.$statuscode->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a> -->
                        <a href="{{ url('manage_registration/delete_status_code/'.$statuscode->id)}}"><i style="font-size:20px;margin:0px " class="fa fa-trash"></i> </a>
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

@endsection
