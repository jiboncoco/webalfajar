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
          <div class="detail-news">
            <div class="img-detail-news">
              <img class="img-dn" src="{{ url('img/img_news/news2.jpg') }}">
            </div>
            <div class="title-detail-news">
              LOREM IPSUM
            </div>
            <div class="content-detail-news">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
            </div>
          </div>

          <div class="detail-news">
            <div class="img-detail-news">
              <img class="img-dn" src="{{ url('img/img_news/news2.jpg') }}">
            </div>
            <div class="title-detail-news">
              LOREM IPSUM
            </div>
            <div class="content-detail-news">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
            </div>
          </div>

          <div class="detail-news">
            <div class="img-detail-news">
              <img class="img-dn" src="{{ url('img/img_news/news2.jpg') }}">
            </div>
            <div class="title-detail-news">
              LOREM IPSUM
            </div>
            <div class="content-detail-news">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
            </div>
          </div>

          <div class="detail-news">
            <div class="img-detail-news">
              <img class="img-dn" src="{{ url('img/img_news/news2.jpg') }}">
            </div>
            <div class="title-detail-news">
              LOREM IPSUM
            </div>
            <div class="content-detail-news">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
            </div>
          </div>
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