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
          <h1>
            Mailbox
            <!-- <small>13 new messages</small> -->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Mailbox</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
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

                      <li><a href="{{ url('manage_message/compose_mail_to') }}"><i class="fa fa-at"></i> Mail to</a></li>
                    <li><a href="{{ url('manage_message/email_blast') }}"><i class="fa fa-share-alt"></i> Email Blast</a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
              <!-- <div class="box box-solid">
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
                </div>
              </div>-->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Inbox</h3>
                  <div class="box-tools pull-right">
                    <div class="has-feedback">
                      <input type="text" class="form-control input-sm" placeholder="Search Mail">
                      <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
                   
                    
                    <div class="pull-right">
                      <div class="btn-group">
                        <ul class="pagination">
                        {!! $dt_mails->render() !!}
                        </ul>
                      </div><!-- /.btn-group -->
                    </div><!-- /.pull-right -->
                  </div>
                  <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                      <tbody>
                        @foreach($dt_mails as $mail)
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                          @if(session('akses_type') == 'staff')
                          <td class="mailbox-name"><a href="{{ url('manage_message/message_staff/read_message/sent/'.$mail->id) }}">{{ $mail->dt_mail_from }}</a></td>
                          @elseif(session('akses_type') == 'root')
                          <td class="mailbox-name"><a href="{{ url('manage_message/message_root/read_message/sent/'.$mail->id) }}">{{ $mail->dt_mail_from }}</a></td>
                          @elseif(session('akses_type') == 'root+')
                          <td class="mailbox-name"><a href="{{ url('manage_message/message_root+/read_message/sent/'.$mail->id) }}">{{ $mail->dt_mail_from }}</a></td>
                          @endif
                          <td class="mailbox-subject"><b>{{ $mail->dt_mail_subject }} - </b> 
                                <?php
                                $string = strip_tags($mail->dt_mail_text);

                                if (strlen($string) > 20) {

                                    // truncate string
                                    $stringCut = substr($string, 0, 20);

                                    // make sure it ends in a word so assassinate doesn't become ass...
                                    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
                                }
                                echo $string;
                                ?>
                          </td>
                          <td class="mailbox-attachment"></td>
                          <td class="mailbox-date">{{ $mail->created_at }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table><!-- /.table -->

                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
                <div class="box-footer no-padding">
                  <div class="mailbox-controls">
                    <!-- Check all button -->

                    <div class="pull-right">
                        
                      <div class="btn-group">
                        <ul class="pagination">
                        {!! $dt_mails->render() !!}
                        </ul>
                      </div><!-- /.btn-group -->
                    </div><!-- /.pull-right -->
                  </div>
                </div>
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

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
    <script>
      $(function () {
        //Enable iCheck plugin for checkboxes
        //iCheck for checkbox and radio inputs
        $('.mailbox-messages input[type="checkbox"]').iCheck({
          checkboxClass: 'icheckbox_flat-blue',
          radioClass: 'iradio_flat-blue'
        });

        //Enable check and uncheck all functionality
        $(".checkbox-toggle").click(function () {
          var clicks = $(this).data('clicks');
          if (clicks) {
            //Uncheck all checkboxes
            $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
            $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
          } else {
            //Check all checkboxes
            $(".mailbox-messages input[type='checkbox']").iCheck("check");
            $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
          }
          $(this).data("clicks", !clicks);
        });

        //Handle starring for glyphicon and font awesome
        $(".mailbox-star").click(function (e) {
          e.preventDefault();
          //detect type
          var $this = $(this).find("a > i");
          var glyph = $this.hasClass("glyphicon");
          var fa = $this.hasClass("fa");

          //Switch states
          if (glyph) {
            $this.toggleClass("glyphicon-star");
            $this.toggleClass("glyphicon-star-empty");
          }

          if (fa) {
            $this.toggleClass("fa-star");
            $this.toggleClass("fa-star-o");
          }
        });
      });
    </script>
@endsection