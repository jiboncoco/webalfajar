@extends('app_admin')

@section('content')
  
<body style="font-family: 'Raleway', sans-serif;" class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a href="{{ url('manage') }}" class="logo">
        <span class="logo-mini">
          <b>A</b>FJ
        </span>
        <span class="logo-lg">
          <b>AL</b> FAJAR
        </span>
      </a>
      <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
          
          @include('menu')

      </nav>
    </header>

          @include('sidebar')

    <div class="content-wrapper">
      <section class="content">
        <div class="admin-seacrh"></div>
        <div style="width:95%;margin:auto" class="box">
          <div class="box-header">
            <h3 class="box-title">All Post</h3>
          </div>
          <div class="box-body">
            <table class="for_datatable table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Post By</th>
                  <th style="text-align:center">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                    @foreach($dt_blogs as $dt_blog)
                <tr>
                  <td>{{$i++}}</td>
                  <td>
                    <a href="{{ url('view/'.$dt_blog->id) }}">{{ $dt_blog->dt_blog_title }}</a>
                  </td>
                  <td>
                    <?php
                          $string = strip_tags($dt_blog->dt_blog_text);

                          if (strlen($string) > 40) {

                              $stringCut = substr($string, 0, 40);
                              $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
                          }
                              echo $string;
                    ?>
                  </td>
                  <td>{{ $dt_blog->dt_blog_create_by }}</td>
                  <td style="text-align:center">
                    <label>
                      <a href="{{ url('manage_post/edit_post/'.$dt_blog->id) }}">
                        <i style="font-size:24px;margin-right:20px;" class="fa fa-pencil-square-o"></i>
                      </a>
                    </label>
                    <label>
                      <a href="{{ url('manage_post/delete_post/'.$dt_blog->id) }}">
                        <i style="font-size:24px;color:rgb(202, 65, 65)" class="fa fa-trash"></i>
                      </a>
                    </label>
                  </td>
                </tr>
                    @endforeach
              </tfoot>
            </table>
            <div class="export">
                  @if(session('akses_type')== "root" || session('akses_type')== "root+" || session('akses_type')== "staff")
              <a onclick="return confirm('Yakin hapus semua data post?')" href="{{url('delete/all/data/post')}}">
                <button class="btn btn-danger">Delete All</button>
              </a>
                  @else
                  @endif
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>undefined</body>undefined<script type="text/javascript">
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
