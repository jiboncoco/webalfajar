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
    <blockquote class="master_p">Edit Post</blockquote>
    <div class="master_post_content">

      <form method="POST"  action="{{ url('manage_post/save_edit_post') }}">
        <label for="exampleInputPassword1">Select a Type</label>
      <select id="selecttype" name="dt_blog_type" class="form-control">
      @foreach($m_blogs as $m_blog)
        <option value="{{ $m_blog -> m_blog_name_type }}">{{ $m_blog -> m_blog_name_type }}</option>
      @endforeach
      </select>
      <br>
      <label for="exampleInputPassword1">This Text For</label>
      <select style="margin-bottom:15px"  name="dt_blog_for" class="form-control col-lg-6">
      @foreach($m_kelass as $m_kelas)
        <option value="{{ $m_kelas -> m_kelas_name }}">{{ $m_kelas -> m_kelas_name }}</option>
      @endforeach
      </select>
    <br>

        <label for="exampleInputPassword1">Cover Photo</label><br>
      <img class="cover_photo_edit" src="{{ url('images/'.$data->cover_photo) }}">
      <input value="{{ $data->cover_photo }}" type="file" name="cover_photo" required/>
      <br>
    <div id="inputdate">
    
    <label for="exampleInputPassword1">Date Event</label>
    <div class='input-group date' id='datetimepicker1'>
      <input value="{{ $data->dt_blog_date_event }}" type='text' name="dt_blog_date_event" class="form-control for_date" />
        <span class="input-group-addon">
        <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
    </div>
    <br>
        <div class="form-group">
          <label for="exampleInputPassword1">Title</label>
          <input type="text" value="{{ $data->dt_blog_title}}" name="dt_blog_title" class="form-control" id="exampleInputEmail1" placeholder="Title">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>
    <br>
        <div class="form-group">
          <label for="exampleInputPassword1">Content</label>
          <textarea class="form-control ckeditor" id="editor1" name="dt_blog_text" placeholder="Content" class="materialize-textarea" rows="6">
          {{ $data->dt_blog_text }}
          </textarea>
        </div>
    
      <br><br>
        <button type="submit" class="btn btn-default">Save Post</button>
      </form>
    </div>

</div>
</div>
</div>

<script type="text/javascript">
 $('.for_date').datetimepicker({ format: 'YYYY-MM-DD HH:mm:ss' });
  // $(".for_date").datepicker();
      $('#selecttype').change(function(){
        if($(this).val() != "agenda"){
          $('#inputdate').hide();
        }
        else{
          $('#inputdate').show();
        }
      });
      </script>
@endsection