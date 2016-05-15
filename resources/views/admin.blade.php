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
            <div class="col-lg-12">
              <div class="input-group">
                <input type="text" class="form-control" aria-label="..." placeholder="Search" required/>
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="margin-bottom:0px;" aria-haspopup="true" aria-expanded="false">All Information <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">News</a></li>
                    <li><a href="#">Agenda</a></li>
                    <li><a href="#">Announcement </a></li>
                    <li><a href="#">Article</a></li>
                    <li><a href="#">All Information</a></li>
                  </ul>
                </div><!-- /btn-group -->
              </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
          </div>

        <div class="admin-news">
        @foreach($dt_blog_admins as $dt_blog_admin)
        
          <div class="detail-news">
          <a href="{{ url('view/'.$dt_blog_admin->id) }}">
            <div class="img-detail-news">
              <img class="img-dn" src="{{ url('images/'.$dt_blog_admin ->cover_photo) }}">
            </div>
            <div class="title-detail-news">
              {{ $dt_blog_admin->dt_blog_title }}
            </div>
            <div class="content-detail-news">
              <?php
            $string = strip_tags($dt_blog_admin->dt_blog_text);

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
            <label><a href="{{ url('manage_post/edit_post/'.$dt_blog_admin->id) }}"> Edit Post </a></label>
            <label><a href="{{ url('manage_post/delete_post/'.$dt_blog_admin->id) }}"> Delete Post </a></label>
          </div>
          </div>
          @endforeach
          </div>

        </section><!-- /.content -->
        <div class="button-admin">
        <a href="#">
          <button class="admin-cb-button">
            More Information
          </button>
        </a>
        </div>
      </div><!-- /.content-wrapper -->


    </div><!-- ./wrapper -->
@endsection