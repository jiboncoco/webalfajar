<!DOCTYPE html>
<html lang="en" style="padding:0px;">
<head>
    <meta charset="utf-8">
    <title>Website Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link id="callCss" rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ url('font-awesome/css/font-awesome.min.css') }}">
    <link id="callCss"rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8" />
    <link href="{{ url('css/animations.css') }}" rel='stylesheet'>

</head>
<body>
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
      <img class="navbar-brand" style="height:80px;width:80px;margin-top:-31px" src="img/all_icon/logo.png">
      Al - Fajar</a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul style="margin-top:15px;" class="nav navbar-nav">
        <a class="a-li" href="#carouselSection"><li>Home</li></a>
        <a class="a-li" href="#newsServices"><li>News</li></a>
        <a class="a-li" href="#yayasanSection"><li>Foundation</li></a>
        <a class="a-li" href="#portfolioSection"><li>TK</li></a>
        <a class="a-li" href="#meetourteamSection"><li>SD</li></a>
        <a class="a-li" href="#recentpostSection"><li>SMP</li></a>
        <a class="a-li" href="#contactSection"><li>SMA</li></a>
        <a class="a-li" href="#dkmSection"><li>DKM</li></a>
        <a class="a-li" href="#informasiServices"><li>Information</li></a>
        @if(isset($_SESSION['logged_in']))
        @if(!empty($_SESSION['akses_type']))
          <!-- @if($_SESSION['akses_type'] == 'student' || $_SESSION['akses_type'] == 'parent'  || $_SESSION['akses_type'] == 'staff' || $_SESSION['akses_type'] == 'teacher') -->
        <a id="a-li" style="cursor:pointer" href="{{url('manage')}}"><li>Manage</li></a>
        <a class="a-li" href="{{url('logout')}}"><li>Logout</li></a>
        <!--   @else -->
        <a class="a-li" href="{{url('manage')}}"><li>Manage</li></a>
        <a class="a-li" href="{{url('logout')}}"><li>Logout</li></a>
          @endif
         <!-- @endif -->
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
                    <a class="cntr" href="#"><img class="img-slide" src="img/img_home/TK.png" alt=""></a>
                    <div class="desc-img">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                </div>
                <a href="#" class="btn btn-large btn-primary" id="btn-rm-s">READ MORE</a>
                </div>

                <div class="item">
                    <a class="cntr" href="#"><img class="img-slide" src="img/img_home/SD.png" alt=""></a>
                    <div class="desc-img">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                </div>
                <a href="#" class="btn btn-large btn-primary" id="btn-rm-s">READ MORE</a>
                </div>

                <div class="item">
                    <a class="cntr" href="#"><img class="img-slide" src="img/img_home/SMP.png" alt=""></a>
                    <div class="desc-img">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                </div>
                <a href="#" class="btn btn-large btn-primary" id="btn-rm-s">READ MORE</a>
                </div>

                <div class="item">
                    <a class="cntr" href="#"><img class="img-slide" src="img/img_home/SMA.png" alt=""></a>
                    <div class="desc-img">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                </div>
                <a href="#" class="btn btn-large btn-primary" id="btn-rm-s">READ MORE</a>
                </div>
            </div>
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>

<!-- Sectionone block ends======================================== -->

<!-- NEWS======================================== -->
<div id="newsServices" class="animatedParent">
<div class="title-news">
  NEWS
</div>
<div class="container">
                <div class="row" style="border-bottom:none;">
      @foreach($dt_blogs as $dt_blog)
      <a href="{{ url('view/'.$dt_blog->id) }}">
      <div id="info-boxx" class="col-md-4 col-xs-12">
      <div class="info-img">
        <img class="infoimg2 animated bounceInLeft" src="{{ url('images/'.$dt_blog->cover_photo) }}" ></div>
        <h4>{{ $dt_blog->dt_blog_title }}</h4>
        <p class="animated flipInY">
                <?php
            $string = strip_tags($dt_blog->dt_blog_text);

            if (strlen($string) > 300) {

                // truncate string
                $stringCut = substr($string, 0, 150);

                // make sure it ends in a word so assassinate doesn't become ass...
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
            }
            echo $string;
      ?>
        </p>
      </div>
      </a>
      @endforeach
    </div>
</div>
<a href="{{ url('news') }}" class="btn btn-large btn-primary animated rotateInUpLeft" id="btn-rm-s">ALL NEWS</a>
</div>
</div>

<!-- NEWS======================================== -->


<div class="modal fade" id="myModalport1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<div class="modal fade" id="myModalport2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<div class="modal fade" id="myModalport3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<div class="modal fade" id="myModalport4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalmeet1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<div class="modal fade" id="myModalmeet2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<div class="modal fade" id="myModalmeet3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<div class="modal fade" id="myModalmeet4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>


<div class="modal fade" id="myModalrec1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<div class="modal fade" id="myModalrec2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<div class="modal fade" id="myModalrec3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<div class="modal fade" id="myModalrec4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                </div></form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalcont1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<div class="modal fade" id="myModalcont2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<div class="modal fade" id="myModalcont3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<div class="modal fade" id="myModalcont4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SMA : Galery</h4>
            </div>
                <div class="modal-body-front">
                  @foreach($sma_galery as $smagalery)
                  
                    <!-- <img class="bm-galeri" src="{{url('img/img_galery/galery.jpg')}}"> -->
                    {!! $smagalery->feature_text !!}
                    
                    <label class="bm-desc">
                      <blockquote>
                    {{$smagalery->created_at}} By : {{$smagalery->feature_create_by}}
                      </blockquote>
                    </label>
                  @endforeach
                </div></form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>


<div class="modal fade" id="myModalyay1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Foundation : Vision & Mission </h4>
            </div>
                <div class="modal-body-front">
                  @foreach($yayasan_vimi as $ymv)
                  {!! $ymv->feature_text !!}
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
                @foreach($yayasan_edu as $edu)
                  {!! $edu->feature_text !!}
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
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>


<!-- YAYASAN -->

<div id="yayasanSection" class="animatedParent">
<div class="content-port">
<div class="class-img  animated fadeInDown">
    <img class="img-c" src="{{ url('img/img_home/yayasan.png') }}">
</div>
<div class="class-lab">
    <a class="a-lab-yay" data-toggle="modal" data-target="#myModalyay1" href="#"><label class="lab-c-yay animated rotateInDownLeft">Visions</label></a>
    <a class="a-lab-yay" data-toggle="modal" data-target="#myModalyay2" href="#"><label id="lab-c-font" class="lab-c-yay animated rotateInDownLeft">Education</label></a>
    <a class="a-lab-yay" data-toggle="modal" data-target="#myModalyay3" href="#"><label class="lab-c-yay animated rotateInUpRight">Profile</label></a>
    <a class="a-lab-yay" data-toggle="modal" data-target="#myModalyay4" href="#"><label class="lab-c-yay animated rotateInUpRight">Galery</label></a>
</div>
</div>
</div>

<!-- YAYASAN END -->

<!-- TK======================================== -->
<div id="portfolioSection" class="animatedParent">
<div class="content-port">
<div class="class-img  animated fadeInDown">
    <img class="img-c" src="{{ url('img/img_home/TK.png') }}">
</div>
<div class="class-lab">
    <a class="a-lab-port" href="{{ url('portal_tk') }}"><label class="lab-c-port animated fadeInLeft">Portal TK</label></a>
    <a class="a-lab-port" data-toggle="modal" data-target="#myModalport1" href="#"><label class="lab-c-port animated fadeInLeft">Visions</label></a>
    <a class="a-lab-port" data-toggle="modal" data-target="#myModalport2" href="#"><label class="lab-c-port animated fadeInDown">Curriculum</label></a>
    <a class="a-lab-port" data-toggle="modal" data-target="#myModalport3" href="#"><label class="lab-c-port animated fadeInDown">Facilities</label></a>
    <a class="a-lab-port" data-toggle="modal" data-target="#myModalport4" href="#"><label class="lab-c-port animated fadeInRight">Galery</label></a>
    <a class="a-lab-port" href="{{ url('registration') }}"><label class="lab-c-port animated fadeInRight">Registration</label></a>
</div>
</div>
</div>

<!-- SD ======================================== -->
<div id="meetourteamSection" class="animatedParent">
<div class="content-port">
<div class="class-img  animated fadeInDown">
    <img class="img-c" src="{{ url('img/img_home/SD.png') }}">
</div>
<div class="class-lab ">
    <a class="a-lab-meet" href="{{ url('portal_sd') }}"><label class="lab-c-meet animated fadeInLeft">Portal SD</label></a>
    <a class="a-lab-meet" data-toggle="modal" data-target="#myModalmeet1" href="#"><label class="lab-c-meet animated fadeInLeft">Visions</label></a>
    <a class="a-lab-meet" data-toggle="modal" data-target="#myModalmeet2" href="#"><label class="lab-c-meet animated fadeInDown">Curriculum</label></a>
    <a class="a-lab-meet" data-toggle="modal" data-target="#myModalmeet3" href="#"><label class="lab-c-meet animated fadeInDown">Facilities</label></a>
    <a class="a-lab-meet" data-toggle="modal" data-target="#myModalmeet4" href="#"><label class="lab-c-meet animated fadeInRight">Galery</label></a>
    <a class="a-lab-meet" href="{{ url('registration') }}"><label class="lab-c-meet animated fadeInRight">Registration</label></a>
</div>
</div>
</div>


<!-- SMP======================================== -->
<div id="recentpostSection" class="animatedParent">
<div class="content-port">
<div class="class-img  animated fadeInDown">
    <img class="img-c" src="{{ url('img/img_home/SMP.png') }}">
</div>
<div class="class-lab ">
    <a class="a-lab-rec" href="{{ url('portal_smp') }}"><label class="lab-c-rec animated fadeInLeft">Portal SMP</label></a>
    <a class="a-lab-rec" data-toggle="modal" data-target="#myModalrec1" href="#"><label class="lab-c-rec animated fadeInLeft">Visions</label></a>
    <a class="a-lab-rec" data-toggle="modal" data-target="#myModalrec2" href="#"><label class="lab-c-rec animated fadeInDown">Curriculum</label></a>
    <a class="a-lab-rec" data-toggle="modal" data-target="#myModalrec3" href="#"><label class="lab-c-rec animated fadeInDown">Facilities</label></a>
    <a class="a-lab-rec" data-toggle="modal" data-target="#myModalrec4" href="#"><label class="lab-c-rec animated fadeInRight">Galery</label></a>
    <a class="a-lab-rec" href="{{ url('registration') }}"><label class="lab-c-rec animated fadeInRight">Registration</label></a>
</div>
</div>
</div>

<!-- SMA -->
<div id="contactSection" class="animatedParent">
<div class="content-port">
<div class="class-img  animated fadeInDown">
    <img class="img-c" src="{{ url('img/img_home/SMA.png') }}">
</div>
<div class="class-lab ">
    <a class="a-lab-cont" href="{{ url('portal_sma') }}"><label class="lab-c-cont animated fadeInLeft">Portal SMA</label></a>
    <a class="a-lab-cont" data-toggle="modal" data-target="#myModalcont1" href="#"><label class="lab-c-cont animated fadeInLeft">Visions</label></a>
    <a class="a-lab-cont" data-toggle="modal" data-target="#myModalcont2" href="#"><label class="lab-c-cont animated fadeInDown">Curriculum</label></a>
    <a class="a-lab-cont" data-toggle="modal" data-target="#myModalcont3" href="#"><label class="lab-c-cont animated fadeInDown">Facilities</label></a>
    <a class="a-lab-cont" data-toggle="modal" data-target="#myModalcont4" href="#"><label class="lab-c-cont animated fadeInRight">Galery</label></a>
    <a class="a-lab-cont" href="{{ url('registration') }}"><label class="lab-c-cont animated fadeInRight">Registration</label></a>
</div>
</div>
</div>

<!-- DKM -->

<div id="dkmSection" class="animatedParent">
<div class="content-port">
<div class="class-img  animated fadeInDown">
    <img class="img-c" src="{{ url('img/img_home/dkm.png') }}">
</div>
<div style="padding-top:70px;" class="class-lab ">
    <a class="a-lab-dkm" data-toggle="modal" data-target="#myModaldkm1" href="#"><label class="lab-c-dkm animated rollIn">Facilities</label></a>
    <a class="a-lab-dkm" data-toggle="modal" data-target="#myModaldkm2" href="#"><label class="lab-c-dkm animated rotateInDownRight">Galery</label></a>
</div>
</div>
</div>

<!-- Informasi -->

<div id="informasiServices" class="animatedParent">
<div class="title-news">
  INFORMATION
</div>
<div class="container">
                <div class="row" style="border-bottom:none;">

      <div class="col-md-4 col-xs-12">

      <div class="info-img animated pulse">
      <a href="{{ url('agenda') }}">
        <img class="infoimg" src="img/img_home/img-agenda.png" ></div>
      </a>
        <h4>Agenda</h4>
      </div>
      <div class="col-md-4 col-xs-12">
        <div class="info-img animated pulse">
      <a href="{{ url('announcement') }}">
        <img class="infoimg" src="img/img_home/img-pengumuman.png" ></div>
      </a>
        <h4>Announcement</h4>
      </div>
      <div class="col-md-4 col-xs-12">
        <div class="info-img animated pulse">
      <a href="{{ url('article') }}">
        <img class="infoimg" src="img/img_home/img-artikel.png" ></div>
      </a>
        <h4>Article</h4>
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
    <form class="form-letter">
      News Letter
      <input class="input-letter" name="" type="email" placeholder="Your Email" required>
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
<script src="js/css3-animate-it.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#myCarousel').carousel({
      interval: 3000
    });
    });
</script>

</body>
</html>