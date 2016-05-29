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
<section class="content-header">
<div class="row">
            <div class="col-md-3">
              @if(session('akses_type') == 'staff')
              <a href="{{ url('manage_message/message_staff/compose') }}" class="btn btn-primary btn-block margin-bottom">Compose</a>
            @elseif(session('akses_type') == 'root')
              <a href="{{ url('manage_message/message_root/compose') }}" class="btn btn-primary btn-block margin-bottom">Compose</a>
            @elseif(session('akses_type') == 'root+')
              <a href="{{ url('manage_message/message_root+/compose') }}" class="btn btn-primary btn-block margin-bottom">Compose</a>
            @endif
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Folders</h3>
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                   @if(session('akses_type') == 'staff')
                      <li><a href="{{ url('manage_message/message_staff') }}"><i class="fa fa-inbox"></i> Inbox</a></li>
                    @elseif(session('akses_type') == 'root')
                      <li><a href="{{ url('manage_message/message_root') }}"><i class="fa fa-inbox"></i> Inbox</a></li>
                    @elseif(session('akses_type') == 'root+')
                      <li><a href="{{ url('manage_message/message_root+') }}"><i class="fa fa-inbox"></i> Inbox</a></li>
                    @endif

                    @if(session('akses_type') == 'staff')
                      <li><a href="{{ url('manage_message/message_staff/sent') }}"><i class="fa fa-envelope-o"></i> Sent</a></li>
                    @elseif(session('akses_type') == 'root')
                      <li><a href="{{ url('manage_message/message_root/sent') }}"><i class="fa fa-envelope-o"></i> Sent</a></li>
                    @elseif(session('akses_type') == 'root+')
                      <li><a href="{{ url('manage_message/message_root+/sent') }}"><i class="fa fa-envelope-o"></i> Sent</a></li>
                    @endif
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Labels</h3>
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Read Mail</h3>
                  <div class="box-tools pull-right">
                    <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                    <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="mailbox-read-info">
                    <h3>{{ $dt_mails->dt_mail_subject }}</h3>
                    <h5>From: {{ $dt_mails->dt_mail_from }}<span class="mailbox-read-time pull-right">{{ $dt_mails->created_at }}</span></h5>
                  </div><!-- /.mailbox-read-info -->
                  <div class="mailbox-controls with-border text-center">
                    <div class="btn-group">

                  </div><!-- /.mailbox-controls -->
                  <div class="mailbox-read-message">
                    {!! {{ $dt_mails->dt_mail_text }} !!}
                  </div><!-- /.mailbox-read-message -->
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="pull-right">
                    @if(session('akses_type') == 'staff')
                      <a href="{{ url('manage_message/message_staff/compose') }}" <button class="btn btn-default"><i class="fa fa-reply"></i> Reply</button></a>
                    @elseif(session('akses_type') == 'root')
                      <a href="{{ url('manage_message/message_root/compose') }}" <button class="btn btn-default"><i class="fa fa-reply"></i> Reply</button></a>
                    @elseif(session('akses_type') == 'root+')
                      <a href="{{ url('manage_message/message_root+/compose') }}" <button class="btn btn-default"><i class="fa fa-reply"></i> Reply</button></a>
                    @endif
                    <a href="{{ url('manage_message/message_staff') }}"><button class="btn btn-default"><i class="fa fa-close"></i> Cancel</button></a>
                  </div>
                   @if(session('akses_type') == 'staff')
                    <a href="{{ url('manage_message/message_staff') }}"><button class="btn btn-danger"><i class="fa fa-close"></i> Cancel</button>
                    @elseif(session('akses_type') == 'root')
                    <a href="{{ url('manage_message/message_root') }}"><button class="btn btn-danger"><i class="fa fa-close"></i> Cancel</button>
                    @if(session('akses_type') == 'root+')
                    <a href="{{ url('manage_message/message_root+') }}"><button class="btn btn-danger"><i class="fa fa-close"></i> Cancel</button>
                    @endif
                  <button class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                </div><!-- /.box-footer -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

              </div>
        </section>
      </div>
      
</div>
</body>

@endsection