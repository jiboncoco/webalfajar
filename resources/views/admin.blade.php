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
        <div class="modal fade" id="myModalabsen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog-front">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Foundation : Profile</h4>
              </div>
              <div class="modal-body-front">
                <form method="POST"  action="{{ url('manage_absen/save_absen_p')}}" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-default">Absen</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <script type="text/javascript">

    $.ajaxSetup({
   headers: {'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')}
});
        $('input[name=search_admin]').keyup(function(e){
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