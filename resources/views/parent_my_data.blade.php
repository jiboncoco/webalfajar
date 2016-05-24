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
            @foreach($data_parent as $parent)
            <a href="{{ url('manage_parent/edit_my_data/'.$parent->id)}}"><label style="float:right;color:#fff;cursor:pointer"><i class="fa fa-pencil"></i> Edit</label></a>
            </div>
              <div style="width:100%;" class="panel-body">
            <table class="table">
              <tr class="dt-con">
                <td class="dt">NISN</td>
                <td class="con">: {{ $parent->dt_parent_nisn }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Name</td>
                <td class="con">: {{ preg_replace('/\|/', ' ', $parent->dt_parent_name) }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Email</td>
                <td class="con">: {{ $parent->dt_parent_email }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Status</td>
                <td class="con">: {{ $parent->dt_parent_statuslog }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Age</td>
                <td class="con">: {{ $parent->dt_parent_age }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Contact</td>
                <td class="con">: {{ $parent->dt_parent_contact }}</td>
              </tr>
              <tr class="dt-con">
                <td class="dt">Address</td>
                <td class="con">: {{ $parent->dt_parent_address }}</td>
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
