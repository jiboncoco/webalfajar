<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Perguruan Tinggi AL – FAJAR BEKASI | Agenda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link id="callCss" rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ url('font-awesome/css/font-awesome.min.css') }}">
    <link id="callCss"rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8" />

</head>
<body>

 

<!-- modal yayasan -->
<div class="modal fade" id="myModalyay1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Foundation : Vision & Mission</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($yayasan_vimi as $yvm)
                   {!! $yvm->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalyay2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Foundation : Education</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($yayasan_edu as $yedu)
                   {!! $yedu->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalyay3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Foundation : Profile</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($yayasan_profile as $yprof)
                   {!! $yprof->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalyay4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Foundation : Galery</h4>
            </div>
                <div class="modal-body-front">
                   <div class="modal-galeri">
                  @foreach($yayasan_galery as $ygalery)
                  
                    <!-- <img class="bm-galeri" src="{{url('img/img_galery/galery.jpg')}}"> -->
                    {!! $ygalery->feature_text !!}
                    
                    <label class="bm-desc">
                      <blockquote>
                    {{$ygalery->created_at}} By : {{$ygalery->feature_create_by}}
                      </blockquote>
                    </label>
                  @endforeach
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- modal yayasan end -->

<!-- modal tk -->

<div class="modal fade" id="myModaltk1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">TK : Vision & Mission</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($tk_vimi as $tkvm)
                   {!! $tkvm->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModaltk2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">TK : Curriculum</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($tk_kurkul as $tkkurkul)
                   {!! $tkkurkul->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModaltk3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">TK : Facilities</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($tk_fasilitas as $tkfas)
                   {!! $tkfas->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModaltk4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">TK : Galery</h4>
            </div>
                <div class="modal-body-front">
                   <div class="modal-galeri">
                  @foreach($tk_galery as $tkgalery)
                  
                    <!-- <img class="bm-galeri" src="{{url('img/img_galery/galery.jpg')}}"> -->
                    {!! $tkgalery->feature_text !!}
                    
                    <label class="bm-desc">
                      <blockquote>
                    {{$tkgalery->created_at}} By : {{$tkgalery->feature_create_by}}
                      </blockquote>
                    </label>
                  @endforeach
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<!-- modal tk end -->

<!-- modal sd -->

<div class="modal fade" id="myModalsd1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SD : Vision & Mission</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($sd_vimi as $sdvm)
                   {!! $sdvm->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalsd2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SD : Curriculum</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($sd_kurkul as $sdkurkul)
                   {!! $sdkurkul->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalsd3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SD : Facilities</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($sd_fasilitas as $sdfas)
                   {!! $sdfas->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalsd4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SD : Galery</h4>
            </div>
                <div class="modal-body-front">
                   <div class="modal-galeri">
                  @foreach($sd_galery as $sdgalery)
                  
                    <!-- <img class="bm-galeri" src="{{url('img/img_galery/galery.jpg')}}"> -->
                    {!! $sdgalery->feature_text !!}
                    
                    <label class="bm-desc">
                      <blockquote>
                    {{$sdgalery->created_at}} By : {{$sdgalery->feature_create_by}}
                      </blockquote>
                    </label>
                  @endforeach
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>


<!-- modal sd end -->

<!-- modal smp -->

<div class="modal fade" id="myModalsmp1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SMP : Vision & Mission</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($smp_vimi as $smpvm)
                   {!! $smpvm->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalsmp2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SMP : Curriculum</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($smp_kurkul as $smpkurkul)
                   {!! $smpkurkul->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalsmp3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SMP : Facilities</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($smp_fasilitas as $smpfas)
                   {!! $smpfas->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalsmp4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SMP : Galery</h4>
            </div>
                <div class="modal-body-front">
                   <div class="modal-galeri">
                  @foreach($smp_galery as $smpgalery)
                  
                    <!-- <img class="bm-galeri" src="{{url('img/img_galery/galery.jpg')}}"> -->
                    {!! $smpgalery->feature_text !!}
                    
                    <label class="bm-desc">
                      <blockquote>
                    {{$smpgalery->created_at}} By : {{$smpgalery->feature_create_by}}
                      </blockquote>
                    </label>
                  @endforeach
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<!-- modal smp end -->

<!-- modal sma -->

<div class="modal fade" id="myModalsma1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SMA : Vision & Mission</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($sma_vimi as $smavm)
                   {!! $smavm->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalsma2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SMA : Curriculum</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($sma_kurkul as $smakurkul)
                   {!! $smakurkul->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalsma3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SMA : Facilities</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($sma_fasilitas as $smafas)
                   {!! $smafas->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalsma4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SMA : Galery</h4>
            </div>
                <div class="modal-body-front">
                   <div class="modal-galeri">
                  @foreach($sma_galery as $smagalery)
                  
                    <!-- <img class="bm-galeri" src="{{url('img/img_galery/galery.jpg')}}"> -->
                    {!! $smagalery->feature_text !!}
                    
                    <label class="bm-desc">
                      <blockquote>
                    {{$smagalery->created_at}} By : {{$smagalery->feature_create_by}}
                      </blockquote>
                    </label>
                  @endforeach
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<!-- modal sma end -->

<!-- modal dkm -->

<div class="modal fade" id="myModaldkm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">DKM : Facilities</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($dkm_fasilitas as $dfasilitas)
                   {!! $dfasilitas->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModaldkm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">DKM : Galery</h4>
            </div>
                <div class="modal-body-front">
                   <div class="modal-galeri">
                  @foreach($dkm_galery as $dkmgalery)
                  
                    <!-- <img class="bm-galeri" src="{{url('img/img_galery/galery.jpg')}}"> -->
                    {!! $dkmgalery->feature_text !!}
                    
                    <label class="bm-desc">
                      <blockquote>
                    {{$dkmgalery->created_at}} By : {{$dkmgalery->feature_create_by}}
                      </blockquote>
                    </label>
                  @endforeach
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>


<!-- modal dkm end -->

<div id="carouselSection" class="cntr">
</div>
<div id="headerSection">

    <nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" id="nb-logo" href="#">
      <img class="navbar-brand" style="height:80px;width:80px;margin-top:-31px" src="{{ url('http://alfajarbekasi.or.id/ppdb/images/logo.png') }}">
      Al - Fajar</a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <a class="a-li" href="{{ url('/')}}"><li>Home</li></a>
        <a class="a-li" href="{{url('news')}}"><li>News</li></a>
        <li class="dropdown">
          <a class="dropdown-toggle" id="no-li" data-toggle="dropdown" href="#">Foundation <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a data-toggle="modal" data-target="#myModalyay1" href="#">Vision & Mission</a></li>
            <li><a data-toggle="modal" data-target="#myModalyay2" href="#">Education</a></li>
            <li><a data-toggle="modal" data-target="#myModalyay3" href="#">Profile</a></li>
            <li><a data-toggle="modal" data-target="#myModalyay4" href="#">Galery</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" id="no-li" data-toggle="dropdown" href="#">TK <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('portal_tk') }}">Portal TK</a></li>
            <li><a data-toggle="modal" data-target="#myModaltk1" href="#">Vision & Mission</a></li>
            <li><a data-toggle="modal" data-target="#myModaltk2" href="#">Curriculum</a></li>
            <li><a data-toggle="modal" data-target="#myModaltk3" href="#">Facilities</a></li>
            <li><a data-toggle="modal" data-target="#myModaltk4" href="#">Galery</a></li>
            <li><a href="{{ url('registration') }}">Registration</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" id="no-li" data-toggle="dropdown" href="#">SD <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('portal_sd') }}">Portal SD</a></li>
            <li><a data-toggle="modal" data-target="#myModalsd1" href="#">Vision & Mission</a></li>
            <li><a data-toggle="modal" data-target="#myModalsd2" href="#">Curriculum</a></li>
            <li><a data-toggle="modal" data-target="#myModalsd3" href="#">Facilities</a></li>
            <li><a data-toggle="modal" data-target="#myModalsd4" href="#">Galery</a></li>
            <li><a href="{{ url('registration') }}">Registration</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" id="no-li" data-toggle="dropdown" href="#">SMP <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('portal_smp') }}">Portal SMP</a></li>
            <li><a data-toggle="modal" data-target="#myModalsmp1" href="#">Vision & Mission</a></li>
            <li><a data-toggle="modal" data-target="#myModalsmp2" href="#">Curriculum</a></li>
            <li><a data-toggle="modal" data-target="#myModalsmp3" href="#">Facilities</a></li>
            <li><a data-toggle="modal" data-target="#myModalsmp4" href="#">Galery</a></li>
            <li><a href="{{ url('registration') }}">Registration</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" id="no-li" data-toggle="dropdown" href="#">SMA <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('portal_sma') }}">Portal SMA</a></li>
            <li><a data-toggle="modal" data-target="#myModalsma1" href="#">Vision & Mission</a></li>
            <li><a data-toggle="modal" data-target="#myModalsma2" href="#">Curriculum</a></li>
            <li><a data-toggle="modal" data-target="#myModalsma3" href="#">Facilities</a></li>
            <li><a data-toggle="modal" data-target="#myModalsma4" href="#">Galery</a></li>
            <li><a href="{{ url('registration') }}">Registration</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" id="no-li" data-toggle="dropdown" href="#">DKM <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a data-toggle="modal" data-target="#myModaldkm1" href="#">Facilities</a></li>
            <li><a data-toggle="modal" data-target="#myModaldkm2" href="#">Galery</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" id="no-li" data-toggle="dropdown" href="#">Information <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#newsSection">Agenda</a></li>
            <li><a href="{{ url('announcement')}}">Announcement</a></li>
            <li><a href="{{ url('article') }}">Article</a></li>
          </ul>
        </li>
        @if(isset($_SESSION['logged_in']))
        @if(isset($_SESSION['akses_type']))
          @if($_SESSION['akses_type'] == 'student' || $_SESSION['akses_type'] == 'parent')
        <a id="a-li" style="cursor:pointer" href="{{url('manage')}}"><li>Manage</li></a>
        <a class="a-li" href="{{url('logout')}}"><li>Logout</li></a>
          @else
        <a class="a-li" href="{{url('manage')}}"><li>Manage</li></a>
        <a class="a-li" href="{{url('logout')}}"><li>Logout</li></a>
          @endif
         @endif
         @else
        <a class="a-li" href="{{ url('login') }}"><li>Login</li></a>
        @endif

      </ul>
    </div>
  </div>
</nav>
    </div>

<!--Header Ends================================================ -->
        <div id="myCarousel" class="carousel slide">

            <div class="carousel-inner">
                <div class="item active">
                    <a class="cntr" href="#"><img class="img-slide" style="border-radius:4px;box-shadow: 10px 10px 5px #888888;" src="{{ url('img/all_icon/default.jpg')}}" alt=""></a>
                    <div class="desc-img">
                  <p style="font-size:35px;font-weight:bold;color:white">WELCOME TO WEBSITE AL-FAJAR BEKASI</p>
                  <p style="font-style:italic;font-size:20px;font-weight:bold">" Optimalisasi potensi (fitrah, bakat) peserta didik menuju insan beriman, cendekia, trampil dan tangguh. "</p>
                </div>
                <!-- <a href="#" class="btn btn-large btn-primary" id="btn-rm-s">READ MORE</a> -->
                </div>

                @foreach($dt_blog_all as $all_blog)
                <div class="item">
                    <a class="cntr" href="#"><img class="img-slide" style="border-radius:4px;" src="{{ url('images/'.$all_blog->cover_photo) }}" alt=""></a>
                    <div class="desc-img">
                    <?php
                          $string = strip_tags($all_blog->dt_blog_text);

                          if (strlen($string) > 300) {

                              // truncate string
                              $stringCut = substr($string, 0, 300);

                              // make sure it ends in a word so assassinate doesn't become ass...
                              $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
                          }
                          echo $string;
                    ?>
                  </div>
                <a href="{{ url('view/'.$all_blog->id) }}" class="btn btn-large btn-primary" id="btn-rm-s">READ MORE</a>
                </div>
                @endforeach
                <div id="newsSection">
            </div>
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>

<!-- Sectionone block ends======================================== -->

<!-- informasi -->
<div class="fullcontent">

<!-- content1 -->

  <div class="content1">
    <div class="content-s">
      <form role="form" data-toggle="validator">
        <span class="input-group-btn">
      <input class="fcs" name="search_agenda" id="search_agenda" placeholder="Search Agenda..." required/>
      </span>
      </form>
    </div>
    <div class="content1-box-all">
    @foreach($dt_blog_all_agenda as $dt_blog_all_agenda2)
    <a href="{{ url('view/'.$dt_blog_all_agenda2->id) }}">
    <div class="content1-box">
      <img class="cb-img" src="{{ url('images/'.$dt_blog_all_agenda2->cover_photo) }}" />
      <div class="cb-title">
        {!! $dt_blog_all_agenda2->dt_blog_title !!}
      </div>
      <div class="cb-desc">
      <?php
            $string = strip_tags($dt_blog_all_agenda2->dt_blog_text);

            if (strlen($string) > 300) {

                // truncate string
                $stringCut = substr($string, 0, 300);

                // make sure it ends in a word so assassinate doesn't become ass...
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
            }
            echo $string;
      ?>
      </div>
      <div class="cb-inf">
        <i class="fa fa-user"></i> {{$dt_blog_all_agenda2->dt_blog_create_by}} ({{$dt_blog_all_agenda2->dt_blog_by}})
        <p class="cb-date">
          {{$dt_blog_all_agenda2->created_at}}
        </p>
      </div>
    </div>
    @endforeach
    </a>

    </div>
      <div class="content1-button">
          <ul class="pagination">
          {!! $dt_blog_all_agenda->render() !!}
          </ul>
      </div>
  </div>

<!-- content2 -->

  <div class="content2">
    <div class="content2-s">
      <form>
        <span class="input-group-btn">
      <input Not Like "*[!a-z]*" class="fnip" placeholder="NISN" required/>
      </span>
      </form>
    </div>
    <div class="content2-all">
      <div class="content2-text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </div>
        <div class="content2-notif">
       <p class="notif-p">ANNOUNCEMENT</p>
       <?php $i=1; ?>
        @foreach($announcement as $announcement)
        <div class="notif">
          <a href="{{ url('view/'.$announcement->id) }}">
          <label class="no-notif">{{ $i++ }}.</label>
          <label class="title-notif">{{ $announcement->dt_blog_title }}</label>
          </a>
          <p class="date-notif">{{ $announcement->created_at }}</p>
        </div>
        @endforeach
        <div class="notif-button">
          <a href="{{ url('announcement') }}">
          <button class="notif-b">More</button>
          </a>
        </div>
        </div>
          <div class="content2-notif">
            <p class="notif-p">ARTICLE</p>
          <?php $z=1; ?>
         @foreach($article as $article)
        <div class="notif">
          <a href="{{ url('view/'.$article->id) }}">
          <label class="no-notif">{{ $z++ }}.</label>
          <label class="title-notif">{{ $article->dt_blog_title }}</label>
          </a>
          <p class="date-notif">{{ $article->dt_blog_title }}</p>
        </div>
        @endforeach
        <div class="notif-button">
          <a href="{{ url('article') }}">
          <button class="notif-b">More</button>
          </a>
        </div>
          </div>
            <div class="content2-fb">
              <p class="title-fb">FACEBOOK PAGES</p>
            </div>
              <div class="content2-maps">
              <p class="title-maps">MAPS</p>
              </div>
    </div>
  </div>
</div>
</div>

<!-- Letter -->
<div id="letterServices">
<div class="title-news">
</div>
<div class="container">
    <form method="POST" action="{{ url('save_mailnews') }}" class="form-letter">
      News Letter
      <input class="input-letter" name="dt_mailnews_email" type="email" placeholder="Your Email" required/>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <button class="button-letter" type="submit">Send</button>
    </form>
</div>
</div>
</div>
<!-- footer -->
     <div class="footerSection container">

</div>
<div class="footer-wel">
    <div class="footer-content">
        <div class="footer-lable">
            <label><a class="footer-a1" href="#">Facebook</a></label>
            <label><a class="footer-a1" href="#">Twitter</a></label>
            <label><a class="footer-a1" href="#">Meet The Team</a></label>
        </div>
        <div class="footer-lable2">
            <label style="color : rgb(20, 210, 210)">© 2016 JICOS, All rights reserved. <a class="footer-a" href="#"> Achmad Fauzi </a> and <a <a class="footer-a" href=""> Rizda Annisa .</a> Perguruan Islam Al - Fajar <a class="footer-a" href=""> Contact , </a> and JICOS <a class="footer-a" href=""> About. </a>.</label>
        </div>
    </div>
</div>

<!-- Wrapper end -->


<a href="#" class="go-top" ><i class="glyphicon glyphicon-arrow-up"></i></a>


<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>
<script src="js/jquery.easing-1.3.min.js"></script>
<script src="js/default.js"></script>

<script type="text/javascript">

    $(document).ready(function() {
    $('#myCarousel').carousel({
      interval: 3000
    });

    });


</script>

<script>
$.ajaxSetup({
   headers: {'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')}
});
        $("input[name='search_agenda']").keyup(function(e){
            // alert('asdasd');
            setTimeout(function(){
                $('.content1-box-all').html('<div class="content1-box-all">Loading...</div>');
                $.ajax({
                    'type': 'GET',
                    'url': '{{url("search_agenda")}}/'+$('input[name=search_agenda]').val(),
                    'success': function(data){
                    if (data) {
                        $('.content1-box-all').html(data);
                    }else{
                        $('.content1-box-all').html('<div class="content1-box-all">Pencarian tidak ditemukan..</div>');
                    }
                    }
                });
            }, 500);
        });
    </script>

</body>
</html>
