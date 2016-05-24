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
          <div class="container-fluid">
            <div class="panel panel-primary">
            <div style="height:40px" class="panel-heading">
            <label style="float:left">My Data</label>
            @foreach($data_student as $student)
            <a href="{{ url('manage_student/edit_my_data/'.$student->id)}}"><label style="float:right;color:#fff;cursor:pointer"><i class="fa fa-pencil"></i> Edit</label></a>
            </div>
              <div style="width:100%;" class="panel-body">
            <table class="table">
              <tr class="dt-con">
                <td class="dt">NISN</td>
                <td class="con">: {{ $student->dt_student_nisn }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Name</td>
                <td class="con">: {{ preg_replace('/\|/', ' ', $student->dt_student_name) }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Grade</td>
                <td class="con">: {{ $student->dt_student_grade }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Kelas</td>
                <td class="con">: {{ $student->dt_student_kelas }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Gender</td>
                <td class="con">: {{ $student->dt_student_gender }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Birthday Place</td>
                <td class="con">: {{ $student->dt_student_bplace }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Religion</td>
                <td class="con">: {{ $student->dt_student_religion }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Name Parent</td>
                <td class="con">: {{ $student->dt_student_nameparent }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Age</td>
                <td class="con">: {{ $student->dt_student_age }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Bloodtype</td>
                <td class="con">: {{ $student->dt_student_bloodtype }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Email</td>
                <td class="con">: {{ $student->dt_student_email }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Contact</td>
                <td class="con">: {{ $student->dt_student_contact }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Address</td>
                <td class="con">: {{ $student->dt_student_address }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Status Log</td>
                <td class="con">: {{ $student->dt_student_statuslog }}</td>
              </tr>
            </table>
            @endforeach
              </div>
            </div>
              </div>
          </div>
        </section>
      </div>
      
</div>
</body>


    <script type="text/javascript">
            $('.for_datatable'.DataTable({
              "paging": true,
              "lengthChange": true,
              "searching": true,
              "ordering": true,
              "info": true,
              "autoWidth": true
            };
    $('.birth_date').datetimepicker({ format: 'YYYY-MM-DD' });
    </script>
@endsection
