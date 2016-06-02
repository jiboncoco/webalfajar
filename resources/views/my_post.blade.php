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
          <div class="admin-seacrh">
          </div>
          <div style="width:95%;margin:auto" class="box">
                <div class="box-header">
                  <h3 class="box-title">My Post</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th style="text-align:center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($dt_blog_admins as $dt_blog_admin2)
                      <tr>
                        <td>{{$i++}}</td>
                        <td><a href="{{ url('view/'.$dt_blog_admin2->id) }}">{{ $dt_blog_admin2->dt_blog_title }}</a></td>
                        <td>
                          <?php
                          $string = strip_tags($dt_blog_admin2->dt_blog_text);

                          if (strlen($string) > 70) {

                              // truncate string
                              $stringCut = substr($string, 0, 70);

                              // make sure it ends in a word so assassinate doesn't become ass...
                              $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
                          }
                              echo $string;
                            ?>
                        </td>
                        <td style="text-align:center">
                        <label><a href="{{ url('manage_post/edit_post/'.$dt_blog_admin2->id) }}"> <i style="font-size:24px;margin-right:20px;" class="fa fa-pencil-square-o"></i> </a></label>
                        <label><a href="{{ url('manage_post/delete_post/'.$dt_blog_admin2->id) }}"> <i style="font-size:24px;color:rgb(202, 65, 65)" class="fa fa-trash"></i> </a></label>
                        </td>
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
<!--                   <div class="export">
                  <a href="{{ url('manage_all_account/export_data/xls') }}"><button class="btn btn-success"><i class="fa fa-paper-plane-o"></i> xls</button></a>
                  <a href="{{ url('manage_all_account/export_data/xlsx') }}"><button class="btn btn-info"><i class="fa fa-paper-plane-o"></i> xlsx</button></a>
                  <a href="{{ url('manage_all_account/export_data/csv') }}"><button class="btn btn-warning"><i class="fa fa-paper-plane-o"></i> csv</button></a>
                  </div> -->

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
              "autoWidth": true
            });
    $('.birth_date').datetimepicker({ format: 'YYYY-MM-DD' });
    </script>
@endsection
