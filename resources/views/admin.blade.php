@extends('app_admin')

@section('content')

<head>
    <style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 100%; }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script type="text/javascript">

// var map;  
// function initMap() {
//   map = new google.maps.Map(document.getElementById('map'), {
//     center: {lat: -6.255714, lng: 106.869773},
//     zoom: 106.869773
//   });
// }
function setMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -6.204831, lng: 106.840848},
    zoom: 10
  });
  var infoWindow = new google.maps.InfoWindow({map: map});

  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      console.log(pos);
      infoWindow.setPosition(pos);
      infoWindow.setContent('Location found.');
      map.setCenter(pos);
      var origin = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
      
      var destination = new google.maps.LatLng({{\App\dt_maps::first()['dt_maps_lat']}}, {{\App\dt_maps::first()['dt_maps_long']}});

      var service = new google.maps.DistanceMatrixService();
      service.getDistanceMatrix(
        {
          origins: [origin],
          destinations: [destination],
          travelMode: google.maps.TravelMode.DRIVING,
        }, callback);

      function callback(response, status) {
        console.log(response);
        // See Parsing the Results for
        // the basics of a callback function.
      }
    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
}

function check()
        {
          var km = rows[0].elements[0].distance.text;
            if (km <= '1 m') {

            }
        }

var km = rows[0].elements[0].distance.text;

    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqQadIC2HyO-iA45aEyroyBipDTdua9y4&callback=initMap">
    </script>
  </body>

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

<!--         <div class="admin-news">
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

               
                $stringCut = substr($string, 0, 300);

               
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

        </section>
        <div class="button-admin">
        <div class="content1-button">
          <ul class="pagination">
          {!! $dt_blog_admins->render() !!}
          </ul>
      </div>
        </div> -->
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

    <script type="text/javascript">
    if({{!$absen}}){
      $.ajax({
      url:'{{url("manage_absen/save_absen_p")}}',
      type:'POST',
      sucess:function(data){
      }
      });
    }
    </script>
@endsection