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
           <div style="width:95%;margin:auto" class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Teacher Schedule</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                   <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NIP</th>
                        <th>Days</th>
                        <th>Month</th>
                        <th>Year</th>
                        <th>Time</th>
                        <th>Task</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($sch_teacher as $teachers)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $teachers->sch_code}}</td>
                        <td>{{ $teachers->sch_days}}</td>
                        <td>{{ $teachers->sch_month}}</td>
                        <td>{{ $teachers->sch_year}}</td>
                        <td>{{ $teachers->sch_time}}</td>
                        <td>{{ $teachers->sch_task}}</td>
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
                  <div class="export">
                 <!--  <a href="{{ url('manage_teacher/export_data/xls') }}"><button class="btn btn-success"><i class="fa fa-paper-plane-o"></i> xls</button></a>
                  <a href="{{ url('manage_teacher/export_data/xlsx') }}"><button class="btn btn-info"><i class="fa fa-paper-plane-o"></i> xlsx</button></a>
                  <a href="{{ url('manage_teacher/export_data/csv') }}"><button class="btn btn-warning"><i class="fa fa-paper-plane-o"></i> csv</button></a> -->
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
          $("#teacher").css("display","block");
          $('#student').hide();
          $('#parent').hide();
        }
        else if($(this).val() == "parent"){
          $("#parent").css("display","block");
          $('#teacher').hide();
          $('#student').hide();
        }
        else{
          $("#student").css("display","block");
          $('#teacher').hide();
          $('#parent').hide();
        }
      });

</script>

    <script type="text/javascript">
            $('.for_datatable').DataTable({
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
