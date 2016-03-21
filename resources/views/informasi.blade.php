<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Website Sekolah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link id="callCss" rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ url('font-awesome/css/font-awesome.min.css') }}">
    <link id="callCss"rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8" />

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

      <a class="navbar-brand" href="#">
      <img class="navbar-brand" style="height:80px;width:80px;margin-top:-31px" src="{{ url('http://alfajarbekasi.or.id/ppdb/images/logo.png') }}">
      Al - Fajar</a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/')}}">Home</a></li>
        <li><a href="#newsSection">News</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Yayasan <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Visi Misi</a></li>
            <li><a href="#">Sistem Pendidikan</a></li>
            <li><a href="#">Profil</a></li>
            <li><a href="#">Galeri Kegiatan</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">TK <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Visi Misi</a></li>
            <li><a href="#">Kurikulum</a></li>
            <li><a href="#">Fasilitas</a></li>
            <li><a href="#">Galeri Kegiatan</a></li>
            <li><a href="#">Pendaftaran</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">SD <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Visi Misi</a></li>
            <li><a href="#">Kurikulum</a></li>
            <li><a href="#">Fasilitas</a></li>
            <li><a href="#">Galeri Kegiatan</a></li>
            <li><a href="#">Pendaftaran</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">SMP <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Visi Misi</a></li>
            <li><a href="#">Kurikulum</a></li>
            <li><a href="#">Fasilitas</a></li>
            <li><a href="#">Galeri Kegiatan</a></li>
            <li><a href="#">Pendaftaran</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">SMA <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Visi Misi</a></li>
            <li><a href="#">Kurikulum</a></li>
            <li><a href="#">Fasilitas</a></li>
            <li><a href="#">Galeri Kegiatan</a></li>
            <li><a href="#">Pendaftaran</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">DKM <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Fasilitas</a></li>
            <li><a href="#">Galeri Kegiatas</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Informasi <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Pengumuman</a></li>
            <li><a href="#">Agenda</a></li>
            <li><a href="#">Berita</a></li>
            <li><a href="#">Artikel</a></li>
          </ul>
        </li>
        <li><a href="{{ url('login') }}">Sign In</a></li>

      </ul>
    </div>
  </div>
</nav>
    </div>

<!--Header Ends================================================ -->
        <div id="myCarousel" class="carousel slide">

            <div class="carousel-inner">
                <div class="item active">
                    <a class="cntr" href="#"><img class="img-slide" src="img/img_news/TK.png" alt=""></a>
                    <div class="desc-img">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                </div>
                <a href="#" class="btn btn-large btn-primary" id="btn-rm-s">READ MORE</a>
                </div>

                <div class="item">
                    <a class="cntr" href="#"><img class="img-slide" src="img/img_news/SD.png" alt=""></a>
                    <div class="desc-img">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                </div>
                <a href="#" class="btn btn-large btn-primary" id="btn-rm-s">READ MORE</a>
                </div>

                <div class="item">
                    <a class="cntr" href="#"><img class="img-slide" src="img/img_news/SMP.png" alt=""></a>
                    <div class="desc-img">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam est. Mauris faucibus tellus ac auctor posuere.
                </div>
                <a href="#" class="btn btn-large btn-primary" id="btn-rm-s">READ MORE</a>
                </div>

                <div class="item">
                    <a class="cntr" href="#"><img class="img-slide" src="img/img_news/SMA.png" alt=""></a>
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
    <div class="content-s">
      <form>
        <span class="input-group-btn">
        <button id="btn-s" class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
      <input class="fcs" placeholder="Search" />
      </span>
      </form>
    </div>
    <div class="content1-box-all">
    <div class="content1-box">
        <img class="cb-img" src="img/img_news/news1.png" />
      <div class="cb-title">
        Lorem Ipsum
      </div>
      <div class="cb-desc">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </div>
      <div class="cb-inf">
        <i class="fa fa-user"></i> Authors : Admin
        <p class="cb-date">
          31 Desember 2015
        </p>
      </div>
    </div>
    <div class="content1-box">
        <img class="cb-img" src="img/img_news/news1.png" />
      <div class="cb-title">
        Lorem Ipsum
      </div>
      <div class="cb-desc">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </div>
      <div class="cb-inf">
        <i class="fa fa-user"></i> Authors : Admin
        <p class="cb-date">
          31 Desember 2015
        </p>
      </div>
    </div>
    <div class="content1-box">
        <img class="cb-img" src="img/img_news/news1.png" />
      <div class="cb-title">
        Lorem Ipsum
      </div>
      <div class="cb-desc">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </div>
      <div class="cb-inf">
        <i class="fa fa-user"></i> Authors : Admin
        <p class="cb-date">
          31 Desember 2015
        </p>
      </div>
    </div>
    <div class="content1-box">
        <img class="cb-img" src="img/img_news/news1.png" />
      <div class="cb-title">
        Lorem Ipsum
      </div>
      <div class="cb-desc">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </div>
      <div class="cb-inf">
        <i class="fa fa-user"></i> Authors : Admin
        <p class="cb-date">
          31 Desember 2015
        </p>
      </div>
    </div>
    <div class="content1-box">
        <img class="cb-img" src="img/img_news/news1.png" />
      <div class="cb-title">
        Lorem Ipsum
      </div>
      <div class="cb-desc">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </div>
      <div class="cb-inf">
        <i class="fa fa-user"></i> Authors : Admin
        <p class="cb-date">
          31 Desember 2015
        </p>
      </div>
    </div>
    <div class="content1-box">
        <img class="cb-img" src="img/img_news/news1.png" />
      <div class="cb-title">
        Lorem Ipsum
      </div>
      <div class="cb-desc">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </div>
      <div class="cb-inf">
        <i class="fa fa-user"></i> Authors : Admin
        <p class="cb-date">
          31 Desember 2015
        </p>
      </div>
    </div>

    </div>
      <div class="content1-button">
        <button class="cb-button">More News</button>
      </div>
  </div>

<!-- content2 -->

  <div class="content2">
    <div class="content2-s">
      <form>
        <span class="input-group-btn">
        <button id="btn-s2" class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
      <input class="fnip" placeholder="NIP" />
      </span>
      </form>
    </div>
    <div class="content2-all">
      <div class="content2-text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </div>
        <div class="content2-notif">
        <p class="notif-p">PENGUMUMAN</p>
        <div class="notif">
          <label class="no-notif">1.</label>
          <label class="title-notif">Lorem Ipsum</label>
          <p class="date-notif">31 Desember 2016</p>
        </div>
        <div class="notif">
          <label class="no-notif">2.</label>
          <label class="title-notif">Lorem Ipsum</label>
          <p class="date-notif">31 Desember 2016</p>
        </div>
        <div class="notif">
          <label class="no-notif">3.</label>
          <label class="title-notif">Lorem Ipsum</label>
          <p class="date-notif">31 Desember 2016</p>
        </div>
        <div class="notif-button">
          <button class="notif-b">More</button>
        </div>
        </div>
          <div class="content2-notif">
            <p class="notif-p">ARTIKEL</p>
        <div class="notif">
          <label class="no-notif">1.</label>
          <label class="title-notif">Lorem Ipsum</label>
          <p class="date-notif">31 Desember 2016</p>
        </div>
        <div class="notif">
          <label class="no-notif">2.</label>
          <label class="title-notif">Lorem Ipsum</label>
          <p class="date-notif">31 Desember 2016</p>
        </div>
        <div class="notif">
          <label class="no-notif">3.</label>
          <label class="title-notif">Lorem Ipsum</label>
          <p class="date-notif">31 Desember 2016</p>
        </div>
        <div class="notif-button">
          <button class="notif-b">More</button>
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
    <form class="form-letter">
      New Letter
      <input class="input-letter" name="" placeholder="Your Email">
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

</body>
</html>
