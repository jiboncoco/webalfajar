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
           <!--  <small>13 new messages</small> -->
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
            <!-- @if(session('akses_type') == 'staff')
              <a href="{{ url('manage_message/message_staff') }}" class="btn btn-primary btn-block margin-bottom">Back to Inbox</a>
            @elseif(session('akses_type') == 'root')
              <a href="{{ url('manage_message/message_root') }}" class="btn btn-primary btn-block margin-bottom">Back to Inbox</a>
            @elseif(session('akses_type') == 'root+')
              <a href="{{ url('manage_message/message_root+') }}" class="btn btn-primary btn-block margin-bottom">Back to Inbox</a>
            @endif -->
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
                    @elseif(session('akses_type') == 'teacher')
                      <li><a href="{{ url('manage_message/message_teacher') }}"><i class="fa fa-inbox"></i> Inbox</a></li>
                    @endif

                    @if(session('akses_type') == 'staff')
                      <li><a href="{{ url('manage_message/message_staff/sent') }}"><i class="fa fa-envelope-o"></i> Sent</a></li>
                    @elseif(session('akses_type') == 'root')
                      <li><a href="{{ url('manage_message/message_root/sent') }}"><i class="fa fa-envelope-o"></i> Sent</a></li>
                    @elseif(session('akses_type') == 'root+')
                      <li><a href="{{ url('manage_message/message_root+/sent') }}"><i class="fa fa-envelope-o"></i> Sent</a></li>
                    @elseif(session('akses_type') == 'teacher')
                      <li><a href="{{ url('manage_message/message_teacher/sent') }}"><i class="fa fa-envelope-o"></i> Sent</a></li>
                    @endif

                    @if(session('akses_type') == 'staff')
                      <li><a href="{{ url('manage_message/message_staff') }}"><i class="fa fa-envelope-square"></i> Message</a></li>
                    @elseif(session('akses_type') == 'root')
                      <li><a href="{{ url('manage_message/message_root') }}"><i class="fa fa-envelope-square"></i> Message</a></li>
                    @elseif(session('akses_type') == 'root+')
                      <li><a href="{{ url('manage_message/message_root+') }}"><i class="fa fa-envelope-square"></i> Message</a></li>
                    @elseif(session('akses_type') == 'teacher')
                      <li><a href="{{ url('manage_message/message_teacher') }}"><i class="fa fa-envelope-square"></i> Message</a></li>
                    @endif

                    
                    <li><a href="{{ url('manage_message/email_blast') }}"><i class="fa fa-share-alt"></i> Email Blast</a></li>

                  </ul>
                </div><!-- /.box-body -->
              </div>
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
              </div> --><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="box box-primary">
            <form method="POST" action="{{ url('manage_message/mail_to/send') }}" enctype="multipart/form-data">
                <div class="box-header with-border">
                  <h3 class="box-title">Compose New Email</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

                <div class="form-group">
                @foreach($from as $from)
                    <input class="form-control" name="dt_mail_from" placeholder="From:" value="{{ $from->akses_username }}" readonly/>
                    @endforeach
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="email" name="dt_mail_to" placeholder="To:" required/>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="dt_mail_subject" placeholder="Subject:" required/>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <textarea class="form-control ckeditor" id="editor1" name="dt_mail_text" placeholder="Content" class="materialize-textarea" rows="6" required/></textarea>
                     
                    </textarea>
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="pull-right">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                   
                  </div>
                </div><!-- /.box-footer -->
              </form>
              </form>
              </form>
              
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
        //Add text editor
        $("#compose-textarea").wysihtml5();
      });
    </script>
@endsection