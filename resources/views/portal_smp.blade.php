<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Website Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link id="callCss" rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" type="text/css" media="screen" charset="utf-8" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ url('font-awesome/css/font-awesome.min.css') }}">
    <link id="callCss"rel="stylesheet" href="{{ url('css/style.css') }}" type="text/css" media="screen" charset="utf-8" />

</head>
<body>

 

<!-- modal profile -->
<div class="modal fade" id="myModalvimi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<div class="modal fade" id="myModalkur" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<div class="modal fade" id="myModalfas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<div class="modal fade" id="myModalkepsek" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SMP : Headmaster</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($smp_headmas as $smphm)
                   {!! $smphm->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalguru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SMP : Teacher</h4>
            </div>
                <div class="modal-body-front">
                   <table class="for_datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>NIP</th>
                        <th>Teacher For</th>
                        <th>Position</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1;?>
                    @foreach($teacher as $teachers)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ preg_replace('/\|/', ' ', $teachers->dt_teacher_name) }}</td>
                        <td>{{ $teachers->dt_teacher_nip}}</td>
                        <td>{{ $teachers->dt_teacher_for}}</td>
                        <td>{{ $teachers->dt_teacher_position}}</td>
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SMP : Students</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($smp_student as $smpstu)
                   {!! $smpstu->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalalumni" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SMP : Alumni</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($smp_alumni as $smpalm)
                   {!! $smpalm->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalkomite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SMP : Committee</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($smp_commit as $smpcom)
                   {!! $smpcom->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalmitra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SMP : Partnerships</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($smp_partners as $smpps)
                   {!! $smpps->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalprestasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SMP : Achievement</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($smp_achiev as $smpachiev)
                   {!! $smpachiev->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalekskul" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog-front">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">SMP  : Extracurricular</h4>
            </div>
                <div class="modal-body-front">
                   @foreach($smp_extra as $smpxtra)
                   {!! $smpxtra->feature_text !!}
                   @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="myModalgaleritk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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


<!-- modal profile end -->

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
        <li class="dropdown">
          <a class="dropdown-toggle" id="profile-li" data-toggle="dropdown" href="#">Profile <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a data-toggle="modal" data-target="#myModalvimi" href="#">Vision & Mission</a></li>
            <li><a data-toggle="modal" data-target="#myModalkur" href="#">Curriculum</a></li>
            <li><a data-toggle="modal" data-target="#myModalfas" href="#">Facilities</a></li>
            <li><a data-toggle="modal" data-target="#myModalkepsek" href="#">Headmaster</a></li>
            <li><a data-toggle="modal" data-target="#myModalguru" href="#">Teacher</a></li>
            <li><a class="trigger right-caret" href="#">Students</a>
            <ul class="dropdown-menu sub-menu">
              <li><a data-toggle="modal" data-target="#myModal" href="#">Students</a></li>
              <li><a data-toggle="modal" data-target="#myModalalumni" href="#">Alumni</a></li>
            </ul>
            </li>
            <li><a data-toggle="modal" data-target="#myModalkomite" href="#">Committee</a></li>
            <li><a data-toggle="modal" data-target="#myModalmitra" href="#">Partnerships</a></li>
            <li><a data-toggle="modal" data-target="#myModalprestasi" href="#">Achievement</a></li>
            <li><a data-toggle="modal" data-target="#myModalekskul" href="#">Extracurricular</a></li>
          </ul>
        </li>
        <a data-toggle="modal" id="galeri-li" data-target="#myModalgaleritk" href="{{ url('#')}}"><li>Galery</li></a>
        <a class="a-li" href="{{ url('#newsSection')}}"><li>Information</li></a>
        <a class="a-li" href="{{ url('registration') }}"><li>Registration</li></a>
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
                    <a class="cntr" href="#"><img class="img-slide" src="{{ url('img/img_news/TK.png') }}" alt=""></a>
                    <div class="desc-img">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                </div>
                <a href="#" class="btn btn-large btn-primary" id="btn-rm-s">READ MORE</a>
                </div>

                <div class="item">
                    <a class="cntr" href="#"><img class="img-slide" src="{{ url('img/img_news/SD.png') }}" alt=""></a>
                    <div class="desc-img">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                </div>
                <a href="#" class="btn btn-large btn-primary" id="btn-rm-s">READ MORE</a>
                </div>

                <div class="item">
                    <a class="cntr" href="#"><img class="img-slide" src="{{ url('img/img_news/SMP.png') }}" alt=""></a>
                    <div class="desc-img">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                </div>
                <a href="#" class="btn btn-large btn-primary" id="btn-rm-s">READ MORE</a>
                </div>

                <div class="item">
                    <a class="cntr" href="#"><img class="img-slide" src="{{ url('img/img_news/SMA.png') }}" alt=""></a>
                    <div class="desc-img">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                </div>
                <a href="#" class="btn btn-large btn-primary" id="btn-rm-s">READ MORE</a>
                </div>
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
    <div class="content-s-portal">
    <div class="cs-search">
     <div class="row" style="border:none;margin-top:0px">
  <div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" name="search_smp" id="search_smp" placeholder="Search" required/>
      <div class="input-group-btn">
        <button type="submit" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="margin-bottom:10px;" aria-haspopup="true" aria-expanded="false">Informasi <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="{{ url('portal_smp/all') }}">All</a></li>
          <li><a href="{{ url('portal_smp/news') }}">News</a></li>
          <li><a href="{{ url('portal_smp/agenda') }}">Agenda</a></li>
          <li><a href="{{ url('portal_smp/announcement') }}">Announcement </a></li>
          <li><a href="{{ url('portal_smp/article') }}">Article</a></li>
        </ul>
      </div><!-- /btn-group -->
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
    </div>
    </div>
    <div class="content1-box-all">
    @foreach($dt_blog_portal_smp as $dt_blog_portal_smp2)
    <a href="{{ url('view/'.$dt_blog_portal_smp2->id) }}">
    <div class="content1-box">
      <img class="cb-img" src="{{ url('images/'.$dt_blog_portal_smp2->cover_photo) }}" />
      <div class="cb-title">
        {!! $dt_blog_portal_smp2->dt_blog_title !!}
      </div>
      <div class="cb-desc">
      <!-- {!! substr(preg_replace("/<img\s[^>]*?src\s*=\s*['\"]([^'\"]*?)['\"][^>]*?>/",'',$dt_blog_portal_smp2->dt_blog_text),0,400) !!}...... -->
      <?php
            $string = strip_tags($dt_blog_portal_smp2->dt_blog_text);

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
        <i class="fa fa-user"></i> {{$dt_blog_portal_smp2->dt_blog_create_by}} ({{$dt_blog_portal_smp2->dt_blog_by}})
        <p class="cb-date">
          {{$dt_blog_portal_smp2->created_at}}
        </p>
      </div>
    </div>
    @endforeach
    </a>
    </div>
      <div class="content1-button">
          <ul class="pagination">
          {!! $dt_blog_portal_smp->render() !!}
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
         <p class="notif-p">NEWS</p>
        <?php $i=1; ?>
        @foreach($news as $news)
        <div class="notif">
          <a href="{{ url('view/'.$news->id) }}">
          <label class="no-notif">{{ $i++ }}.</label>
          <label class="title-notif">{{ $news->dt_blog_title }}</label>
          </a>
          <p class="date-notif">{{ $news->created_at }}</p>
        </div>
        @endforeach
        <div class="notif-button">
          <a href="{{ url('news') }}">
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

<!-- Letter -->
<div id="letterServices">
<div class="title-news">
</div>
<div class="container">
    <form method="POST" action="{{ url('save_mailnews') }}" class="form-letter">
      News Letter
      <input class="input-letter" name="dt_mailnews_email" type="email" placeholder="Your Email" required>
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

<script type="text/javascript">
$(function(){
  $(".dropdown-menu > li > a.trigger").on("click",function(e){
    var current=$(this).next();
    var grandparent=$(this).parent().parent();
    if($(this).hasClass('left-caret')||$(this).hasClass('right-caret'))
      $(this).toggleClass('right-caret left-caret');
    grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
    grandparent.find(".sub-menu:visible").not(current).hide();
    current.toggle();
    e.stopPropagation();
  });
  $(".dropdown-menu > li > a:not(.trigger)").on("click",function(){
    var root=$(this).closest('.dropdown');
    root.find('.left-caret').toggleClass('right-caret left-caret');
    root.find('.sub-menu:visible').hide();
  });
});
</script>

<script>
$.ajaxSetup({
   headers: {'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')}
});
        $("input[name='search_smp']").keyup(function(e){
            // alert('asdasd');
            setTimeout(function(){
                $('.content1-box-all').html('<div class="content1-box-all">Loading...</div>');
                $.ajax({
                    'type': 'GET',
                    'url': '{{url("search_post_smp")}}/'+$('input[name=search_smp]').val(),
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
