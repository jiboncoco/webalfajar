<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Perguruan Tinggi AL – FAJAR BEKASI | View</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link id="callCss" rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" type="text/css" media="screen" charset="utf-8" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ url('font-awesome/css/font-awesome.min.css') }}">
    <link id="callCss"rel="stylesheet" href="{{ url('css/style.css') }}" type="text/css" media="screen" charset="utf-8" />

</head>
<body class="body-view">



<!-- modal more comment -->
    <div class="modal fade" id="myModalmorecomment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-comment">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">More Comment</h4>
            </div>
                <div class="modal-body-front">
        <div class="view-comment">
        @foreach($dt_comment_all as $all_comments)
          <div class="line-comment">
        <div style="float:left" class="lc-img">
          <img class="img-lc" src="{{ url('images/'.preg_replace('/[^\da-z.]/i', '', $all_comments->dt_comment_img)) }}">
        </div>
        <div>
        <div class="ln-text">{{ preg_replace('/[^\da-z]/i', '', $all_comments->dt_comment_username) }}</div>
        <div style="width:94%;padding:0px" class="lc-text">{{ $all_comments->dt_comment_text }}</div>
        </div>
      </div>
      @endforeach
      </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

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
        <a class="a-li" href="{{ url('news') }}"><li>News</li></a>
        <li class="dropdown">
          <a class="dropdown-toggle" id="no-li" data-toggle="dropdown" href="#">Yayasan <span class="caret"></span></a>
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
            <li><a href="{{ url('announcement') }}">Announcement</a></li>
            <li><a href="{{ url('agenda') }}">Agenda</a></li>
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

<!-- allcontentview -->



    @if(isset($_SESSION['logged_in']))
      @if(!empty($_SESSION['akses_type']))
  <div class="allcontentview">
  <div class="contentview1">
  <div class="fillcv1">

  @foreach ($dt_blogs as $detail_view)
    <div class="cv-title">
      {{ $detail_view->dt_blog_title }}
    </div>

    <div class="cv-property">
    <a href="#"><div class="cv-comment">
        <i id="fa-com" class="fa fa-comments"></i>
         <label class="lab-jml-com"> 1</label>
    </div></a>
    <a href="#"><div class="cv-fb">
        <i id="fa-fb" class="fa fa-facebook-square"></i>
         <label class="lab-fb"> Facebook</label>
    </div></a>
    <a href="#"><div class="cv-tweet">
        <i id="fa-tweet" class="fa fa-twitter-square"></i>
         <label class="lab-tweet"> Twitter</label>
    </div></a>
    </div>

    <div class="cv-img">
      <img height="385" width="570" class="img-cv" src="{{ url('images/'.$detail_view->cover_photo) }}">
    </div>

    <div class="cv-auth">
      <i id="fa-usr" class="fa fa-user"></i>
      <label class="lab-cv-auth"> Authors : {{ $detail_view->dt_blog_create_by }} as ({{ $detail_view->dt_blog_by }})</label>
      <p class="cv-date">{{ $detail_view->created_at }}</p>
    </div>

    <div class="cv-text-news">
      {!! $detail_view->dt_blog_text !!}
    </div>
    @endforeach
    <div class="cv-comments">
      <div class="img-user-com">
      @foreach($uname as $user)
        <img class="img-uc" src="{{ url('images/'.$user->akses_imguser) }}">
      @endforeach
      </div>
      <div class="inp-com">
      <form method="POST" action="{{ url('save_comment') }}">
      <script type="text/javascript">
      function minmax(value, min, max) 
      {
          if(parseInt(value) < min || isNaN(value)) 
              return value; 
          else if(parseInt(value) > max) 
              return 140; 
          else return value;
      }
      </script>
        <input class="input-com" maxlength="140" name="dt_comment_text" id="dt_comment_text" placeholder="Comment" type="text" onkeyup="this.value = minmax(this.value, 0, 140)" required/>
        <input type="hidden" name="dt_comment_blog_id" value="{{ $detail_view->id}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="but-comm">
        <button class="button-com" type="submit">Send</button>
        </div>
      </form>
      </div>
    </div>

    <div class="view-comment">
      <p class="title-vc">Comment</p>
      @foreach($dt_comments as $comments)
      <div class="line-comment">
        <div style="float:left" class="lc-img">
        
          <img class="img-lc" src="{{ url('images/'.preg_replace('/[^\da-z.]/i', '', $comments->dt_comment_img)) }}">
        </div>
        <div>
        <div class="ln-text">{{ preg_replace('/[^\da-z]/i', '', $comments->dt_comment_username) }}</div>
        <div class="lc-text" id="komentar">
        {{ $comments->dt_comment_text }}
        </div>       
        </div>
      </div>
      @endforeach 
    </div>

    <div class="but-more-comment">
      <a href="#" data-toggle="modal" data-target="#myModalmorecomment"><button class="button-mc">More Comment</button></a>
    </div>
    <div class="other-news">
      <p class="title-on">More Post</p>
      @foreach($dt_blog_random as $dt_blog_random)
      <a href="{{ url('view/'.$dt_blog_random->id) }}"><div class="on-box">
        <img class="on-img" src="{{ url('images/'.$dt_blog_random->cover_photo) }}">
        <div class="on-title">
          <?php
              $string = strip_tags($dt_blog_random->dt_blog_title);

              if (strlen($string) > 30) {

                  // truncate string
                  $stringCut = substr($string, 0, 30);

                  // make sure it ends in a word so assassinate doesn't become ass...
                  $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
              }
              echo $string;
        ?>
      </div>
      </div>
      </a>
      @endforeach
    </div>

  </div>
  </div>

  <div class="contentview2">
      <div class="content2">
    <div class="content2-s">
      <form>
        <span class="input-group-btn">
      <input Not Like "*[!a-z]*" class="fnip" placeholder="NIP" required/>
      </span>
      </form>
    </div>
    <div class="content2-all">
      <div class="content2-text">
        Check on here, for everything. Search by your NIP.
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

<!-- allcontentview end-->

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

<!-- Sectionone block ends======================================== -->

<a href="#" class="go-top" ><i class="glyphicon glyphicon-arrow-up"></i></a>


<script src="{{ url('js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/jquery.scrollTo-1.4.3.1-min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/jquery.easing-1.3.min.js') }}"></script>
<script src="{{ url('js/default.js') }}"></script>


<script type="text/javascript">

    $(document).ready(function() {
    $('#myCarousel').carousel({
      interval: 3000
    });

    });


</script>

</body>
</html>
@endif
@else

<div class="allcontentview">
  <div class="contentview1">
  <div class="fillcv1">

  @foreach ($dt_blogs as $detail_view)
    <div class="cv-title">
      {{ $detail_view->dt_blog_title }}
    </div>

    <div class="cv-property">
    <a href="#"><div class="cv-comment">
        <i id="fa-com" class="fa fa-comments"></i>
         <label class="lab-jml-com"> 1</label>
    </div></a>
    <a href="#"><div class="cv-fb">
        <i id="fa-fb" class="fa fa-facebook-square"></i>
         <label class="lab-fb"> Facebook</label>
    </div></a>
    <a href="#"><div class="cv-tweet">
        <i id="fa-tweet" class="fa fa-twitter-square"></i>
         <label class="lab-tweet"> Twitter</label>
    </div></a>
    </div>

    <div class="cv-img">
      <img height="385" width="570" class="img-cv" src="{{ url('images/'.$detail_view->cover_photo) }}">
    </div>

    <div class="cv-auth">
      <i id="fa-usr" class="fa fa-user"></i>
      <label class="lab-cv-auth"> Authors : {{ $detail_view->dt_blog_create_by }} as ({{ $detail_view->dt_blog_by }})</label>
      <p class="cv-date">{{ $detail_view->created_at }}</p>
    </div>

    <div class="cv-text-news">
      {!! $detail_view->dt_blog_text !!}
    </div>
  @endforeach

<div class="view-comment">
      <p class="title-vc">Comment</p>
      @foreach($dt_comments as $comments)
      <div class="line-comment">
        <div style="float:left" class="lc-img">
        
          <img class="img-lc" src="{{ url('images/'.preg_replace('/[^\da-z.]/i', '', $comments->dt_comment_img)) }}">
        </div>
        <div>
        <div class="ln-text">{{ preg_replace('/[^\da-z]/i', '', $comments->dt_comment_username) }}</div>
        <div class="lc-text" id="komentar">
        {{ $comments->dt_comment_text }}
        </div>       
        </div>
      </div>
      @endforeach 
    </div>

    <div class="but-more-comment">
      <a href="#" data-toggle="modal" data-target="#myModalmorecomment"><button class="button-mc">More Comment</button></a>
    </div>

<div class="other-news">
      <p class="title-on">More Post</p>
      @foreach($dt_blog_random as $dt_blog_random)
      <a href="{{ url('view/'.$dt_blog_random->id) }}"><div class="on-box">
        <img class="on-img" src="{{ url('images/'.$dt_blog_random->cover_photo) }}">
        <div class="on-title">
        <?php
              $string = strip_tags($dt_blog_random->dt_blog_title);

              if (strlen($string) > 30) {

                  // truncate string
                  $stringCut = substr($string, 0, 30);

                  // make sure it ends in a word so assassinate doesn't become ass...
                  $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
              }
              echo $string;
        ?>
        </div>
      </div>
      </a>
      @endforeach
    </div>

  </div>
  </div>

  <div class="contentview2">
      <div class="content2">
    <div class="content2-s">
      <form>
        <span class="input-group-btn">
      <input Not Like "*[!a-z]*" class="fnip" placeholder="NIP" required/>
      </span>
      </form>
    </div>
    <div class="content2-all">
      <div class="content2-text">
        Check on here, for everything. Search by your NIP.
      </div>
        <div class="content2-notif">
        <p class="notif-p">ANNOUNCEMENT</p>
        <?php $i=1; ?>
        @foreach($announcement as $announcement)
        <div class="notif">
          <a href="{{ url('view/'.$announcement->id) }}">
          <label class="no-notif">{{ $i++ }}.</label>
          <label class="title-notif">
          <?php
            $string = strip_tags($announcement->dt_blog_title);

            if (strlen($string) > 25) {

                // truncate string
                $stringCut = substr($string, 0, 25);

                // make sure it ends in a word so assassinate doesn't become ass...
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
            }
            echo $string;
          ?>
      </label>
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
          <label class="title-notif"><?php
            $string = strip_tags($article->dt_blog_title);

            if (strlen($string) > 25) {

                // truncate string
                $stringCut = substr($string, 0, 25);

                // make sure it ends in a word so assassinate doesn't become ass...
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
            }
            echo $string;
      ?>
          </label>
          </a>
          <p class="date-notif">{{ $article->created_at }}</p>
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

<!-- allcontentview end-->

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

<!-- Sectionone block ends======================================== -->

<a href="#" class="go-top" ><i class="glyphicon glyphicon-arrow-up"></i></a>


<script src="{{ url('js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/jquery.scrollTo-1.4.3.1-min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/jquery.easing-1.3.min.js') }}"></script>
<script src="{{ url('js/default.js') }}"></script>


<script type="text/javascript">

    $(document).ready(function() {
    $('#myCarousel').carousel({
      interval: 3000
    });

    });


</script>

</body>
</html>
@endif