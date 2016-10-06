@extends('app_admin')

@section('content')

<head>
    <style type="text/css">
      html, body { height: 11%; margin: 0; padding: 0; }
      #map { height: 1%; }
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
var km;
function initMap() {

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
           km = response.rows[0].elements[0].distance.value;
           console.log(km);
           // alert(km);
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

function cekjarak()
        {
       $('#myModalcekjarak').modal('hide');
            if (km < 1000 || km == 1000) {
              $('#myModalabsen').modal();
              // swal({title : "Here's a message!", text: "It's pretty, isn't it?"},function(){ window.location.href = "{{ url('manage_absen/save_absen_p')}}"; });
              console.log(km);
            } else{
              $('#myModalreject').modal();
              // swal("Sorry!", "Jarak Anda dengan Sekolah terlalu Jauh!", "error");
              console.log(km);
            }
        }



    </script>

    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCf2ruhSBcZncsbcxuBGV5VEji2JAqkITs&callback=initMap">
    </script>
  </body>

  <body style="font-family: 'Raleway', sans-serif;" class="hold-transition skin-blue sidebar-mini">
    <div style="min-height:0" class="wrapper">

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
      <div style="text-align:center;min-height: 685px !important;" class="content-wrapper">

        <!-- Main content -->
        <section  class="content">
@if (session('status'))
            <div style="margin-top:50px" class="alert alert-success">
                {{ session('status') }}
            </div>
@endif
  <div id="myModalcekabsen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content" style="width:60%;height:200px;margin-left:auto;margin-right:auto;margin-top:200px">
            <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
            <h4 class="modal-title" id="myModalLabel">Cek Absen</h4>
            </div>
                <div style="text-align:center;margin-top:50px;" class="modal-body-front">
                  <!-- <form method="POST"  action="{{ url('manage_absen/save_absen_p')}}" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                   <button onclick="cekabsen()" type="submit" class="btn btn-default">Cek Absen</button>
                  <!-- </form> -->
            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div> -->
        </div>
      </div>

  <div class="modal fade" id="myModalabsen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content absen">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title absen-head" id="myModalLabel">Click button to Absen</h4>
            </div>
                <div class="modal-body-front absen-bd">
                  <form method="POST"  action="{{ url('manage_absen/save_absen_p')}}" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   <button type="submit" class="btn btn-default ab-but">Absen</button>
                  </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
  </div>

  <div class="modal fade" id="myModalwarn" tabindex="-1" role="dialog" aria-labelledby="rejectModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:red">Peringatan</h4>
      </div>
    <div class="modal-body">
      <p>Anda sudah Absen</p>
    </div>
  <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
    </div>
  </div>
</div>

  <div class="modal fade" id="myModalreject" tabindex="-1" role="dialog" aria-labelledby="rejectModalLabel">
  <div class="modal-dialog">
    <div class="modal-content warn">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color:red;font-size:27px;">Peringatan</h4>
      </div>
    <div class="modal-body warnb">
      <p>Jarak Anda dengan sekolah terlalu jauh.</p>
    </div>
     <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
    </div>
  </div>
</div>

  <div class="modal fade" id="myModalcekjarak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content" style="width:60%;height:200px;margin-left:auto;margin-right:auto;margin-top:200px">
            <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
            <h4 class="modal-title" id="myModalLabel">Cek Jarak</h4>
            </div>
                <div style="text-align:center;margin-top:50px;" class="modal-body-front">
                  <!-- <form method="POST"  action="{{ url('manage_absen/save_absen_p')}}" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                   <button onclick="cekjarak()" type="submit" class="btn btn-default">Cek Jarak</button>
                  <!-- </form> -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>

    </div>
      </section>
      </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->

    <script type="text/javascript">

    function cekabsen(){
        $.ajax({
            url: "{!! url('cekabsen') !!}",
            data: {},
            dataType: "json",
            type: "get",
            success:function(data)
            {
                // if (data[0]["stat"] == "kosong") {
                    // $('#myModalcekjarak').modal();
                    swal({title: "Cek Jarak",   text: "Cek Jarak Anda dengan Sekolah", confirmButtonColor: "#4476cc", confirmButtonText: "Cek Jarak",   closeOnConfirm: true }, function(){ cekjarak(); });
                // }else{
                    // $('#myModalwarn').modal();
                //     swal("Thank You!", "You've been absent!", "success");
                // }
            }

        });
    }
    </script>

@endsection
