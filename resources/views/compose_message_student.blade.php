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
              <a href="{{ url('manage_message/message_student') }}" class="btn btn-primary btn-block margin-bottom">Back to Inbox</a>
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Folders</h3>
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="{{ url('manage_message/message_student') }}"><i class="fa fa-inbox"></i> Inbox </a></li>
                    <li><a href="{{ url('manage_message/message_student/sent') }}"><i class="fa fa-envelope-o"></i> Sent</a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
              
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="box box-primary">
            <form method="POST" action="{{ url('manage_message/message_student/send') }}" enctype="multipart/form-data">
                <div class="box-header with-border">
                  <h3 class="box-title">Compose New Message</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

                <div class="form-group">
                    @foreach($from as $from)
                    <input class="form-control" name="dt_mail_from" placeholder="From:" value="{{ $from->akses_email }}" readonly/>
                    @endforeach
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="email" placeholder="To:" name="dt_mail_to" required/>
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
              <div style="float:left;margin-top:-45px;margin-left:10px">
                <a href="{{ url('manage_message/message_student') }}"><button class="btn btn-danger"><i class="fa fa-close"></i> Cancel</button></a>
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
        //Add text editor
        $("#compose-textarea").wysihtml5();
      });
    </script>
@endsection