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
<!--             <div class="col-lg-12">
              <div class="input-group">
                <input type="text" class="form-control" name="search_admin" id="search_admin" placeholder="Search" required/>
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="margin-bottom:0px;" aria-haspopup="true" aria-expanded="false">All Information <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="{{ url('manage/news') }}">News</a></li>
                    <li><a href="{{ url('manage/agenda') }}">Agenda</a></li>
                    <li><a href="{{ url('manage/announcement') }}">Announcement </a></li>
                    <li><a href="{{ url('manage/article') }}">Article</a></li>
                    <li><a href="{{ url('manage/all') }}">All Information</a></li>
                  </ul>
                </div>
              </div>
            </div> -->
          </div>

        <div class="admin-news">
        @foreach($dt_blog_admins as $dt_blog_admin2)
        
          <div class="detail-news">
          <a href="{{ url('view/'.$dt_blog_admin2->id) }}">
            <div class="img-detail-news">
              <img class="img-dn" src="{{ url('images/'.$dt_blog_admin2 ->cover_photo) }}">
            </div>
            <div class="title-detail-news">
              {{ $dt_blog_admin2->dt_blog_title }}
            </div>
            <div class="content-detail-news">
              <?php
            $string = strip_tags($dt_blog_admin2->dt_blog_text);

            if (strlen($string) > 300) {

                // truncate string
                $stringCut = substr($string, 0, 300);

                // make sure it ends in a word so assassinate doesn't become ass...
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
            }
                echo $string;
              ?>
            </div>
          </a>
          <div class="attr">
          <hr/>
           By : {{ $dt_blog_admin2->dt_blog_create_by }} <br>
           {{ $dt_blog_admin2->created_at }}
          </div>
          </div>
          @endforeach
          </div>

        </section><!-- /.content -->
        <div class="button-admin">
        <div class="content1-button">
          <ul class="pagination">
          {!! $dt_blog_admins->render() !!}
          </ul>
      </div>
        </div>
      </div><!-- /.content-wrapper -->


    </div><!-- ./wrapper -->

    <script type="text/javascript">

    $.ajaxSetup({
   headers: {'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')}
});
        $('input[name=search_admin]').keyup(function(e){
            // alert('asdasd');
            setTimeout(function(){
                $('.admin-news').html('<div class="admin-news">Loading...</div>');
                $.ajax({
                    'type': 'GET',
                    'url': '{{url("search_post_admin")}}/'+$('input[name=search_admin]').val(),
                    'success': function(data){
                    if (data) {
                        $('.admin-news').html(data);
                    }else{
                        $('.admin-news').html('<div class="admin-news">Pencarian tidak ditemukan..</div>');
                    }
                    }
                });
            }, 500);
        });
    </script>
@endsection