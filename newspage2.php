<?php
session_start();
$koneksi = new mysqli("localhost","root","","pakcondro"); 

if(!isset($_SESSION['Admin']))
{
    echo "<script>alert('anda harus login');</script>";
echo "<script>location='login.php';</script>";
header('location:login.php');
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Go Green Jakarta</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand|Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- START: header -->
  
  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="news.php" class="probootstrap-logo">Go Green Jakarta<span>.</span></a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li class="active"><a href="news.php">News</a></li>
            <li><a href="event.php">Event</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
          <div class="extra-text visible-xs"> 
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Connect</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->
  <!-- <section class="probootstrap-slider flexslider">
    <div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 49;">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="probootstrap-slider-text text-center">
              <h1 class="probootstrap-heading probootstrap-animate mb20" data-animate-effect="fadeIn">About Us</h1>
              <div class="probootstrap-animate probootstrap-sub-wrap mb30" data-animate-effect="fadeIn">A new website template by <a href="https://uicookies.com/">uicookies.com</a> under license <a href="https://uicookies.com/license/">Creative Commons 3.0</a></div>
              <p class="probootstrap-animate" data-animate-effect="fadeIn"><a href="#" class="btn btn-ghost btn-ghost-white">Get This</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <ul class="slides">
      <li style="background-image: url(img/slider_1.jpg);"></li>
      <li style="background-image: url(img/slider_2.jpg);"></li>
    </ul>
  </section>
  <!-- END: slider  -->
  <!-- <section class="probootstrap-section">
    <div class="container">
      <div class="probootstrap-section-heading text-center mb50 probootstrap-animate">
        <h4 class="sub-heading">About</h4>
        <h2 class="heading">Our Company History</h2>
      </div>
      <div class="row">
        <div class="col-md-12 probootstrap-animate">
          <figure>
            <img src="img/slider_4.jpg" alt="Free HTML5 Bootstrap Template by uicookies.com" class="img-responsive img-rounded">
          </figure>
        </div>
        <div class="col-md-6 probootstrap-animate">
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
          A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
        </div>
        <div class="col-md-6 probootstrap-animate">
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        </div>
      </div>
    </div>
  </section> --> 

  <section class="probootstrap-section">
    <div class="container">
      <div class="probootstrap-section-heading text-center mb50 probootstrap-animate ">
       <!-- h4 class="sub-heading">Team</h4> -->
        <h2 class="heading">Berita-Berita Terbaru</h2> 
      </div>
      <div class="row">

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 probootstrap-animate" style="width: 1100px;">
          <div class="media-item">
            <figure><img src="img/news5.jpg" alt="Free Template by uicookies.com" class="img-responsive" style="width: 1100px; height: 300px;"></figure>
            <div class="text">
              <h2 class="heading">Event : Hutan Srengseng</h2>
              <p style="text-align: justify;">Pemerintah DKI Jakarta mengajak masyarakat untuk turut serta dalam mengikuti kegiatan menanam pohon dan mendaur ulang sampah-sampah yang berserakan di area hutan kota. Agenda ini dilaksanakan pada :</p>
              <p><a href="news5.php" class="btn btn-primary btn-sm">View Details</a></p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 probootstrap-animate" style="width: 1100px;">
          <div class="media-item">
            <figure><img src="img/news3.jpg" alt="Free Template by uicookies.com" class="img-responsive" style="width: 1100px; height: 300px;"></figure>
            <div class="text">
              <h2 class="heading">9 Taman Baru yang Keren di Jakarta</h2>
              <p style="text-align: justify;">Main ke taman yuk! Mungkin kalimat ini akan menjadi ajakan yang jadi tren di Jakarta. Sejak tahun 2015, pemerintah DKI Jakarta mulai menambah dan memperbarui taman-taman yang ada di Jakarta. Taman atau ruang terbuka hijau ini juga tak hanya sebagai paru-paru kota saja namun dilengkapi juga beragam fasilitas unik yang membuat para pengunjung betah berlama-lama. </p>
              <p><a href="news3.php" class="btn btn-primary btn-sm">View Details</a></p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 probootstrap-animate" style="width: 1100px;">
          <div class="media-item">
            <figure><img src="img/news6.jpg" alt="Free Template by uicookies.com" class="img-responsive" style="width: 1100px; height: 300px;"></figure>
            <div class="text">
              <h2 class="heading">Event : Taman Suropati</h2>
              <p style="text-align: justify;">Pemerintah DKI Jakarta mengajak masyarakat untuk turut serta dalam mengikuti kegiatan menanam pohon dan mendaur ulang sampah-sampah yang berserakan di aera taman. Agenda ini dilaksanakan pada: </p>
              <p><a href="news6.php" class="btn btn-primary btn-sm">View Details</a></p>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="media-item">
            <figure><img src="img/person_2.jpg" alt="Free Template by uicookies.com" class="img-responsive"></figure>
            <div class="text">
              <h2 class="heading">Matt Anderson</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#" class="btn btn-primary btn-sm">View Details</a></p>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="media-item">
            <figure><img src="img/person_3.jpg" alt="Free Template by uicookies.com" class="img-responsive"></figure>
            <div class="text">
              <h2 class="heading">Nick Patterson</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#" class="btn btn-primary btn-sm">View Details</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="media-item">
            <figure><img src="img/person_4.jpg" alt="Free Template by uicookies.com" class="img-responsive"></figure>
            <div class="text">
              <h2 class="heading">Dave Fleming</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#" class="btn btn-primary btn-sm">View Details</a></p>
            </div>
          </div>
        </div>

        <div class="clearfix visible-lg-block visible-md-block visible-sm-block"></div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="media-item">
            <figure><img src="img/person_3.jpg" alt="Free Template by uicookies.com" class="img-responsive"></figure>
            <div class="text">
              <h2 class="heading">Nick Patterson</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#" class="btn btn-primary btn-sm">View Details</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="media-item">
            <figure><img src="img/person_4.jpg" alt="Free Template by uicookies.com" class="img-responsive"></figure>
            <div class="text">
              <h2 class="heading">Dave Fleming</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#" class="btn btn-primary btn-sm">View Details</a></p>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="media-item">
            <figure><img src="img/person_1.jpg" alt="Free Template by uicookies.com" class="img-responsive"></figure>
            <div class="text">
              <h2 class="heading">Greg Wolf</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#" class="btn btn-primary btn-sm">View Details</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="media-item">
            <figure><img src="img/person_2.jpg" alt="Free Template by uicookies.com" class="img-responsive"></figure>
            <div class="text">
              <h2 class="heading">Matt Anderson</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#" class="btn btn-primary btn-sm">View Details</a></p>
            </div>
          </div>
        </div> -->

        <div class="clearfix visible-lg-block visible-md-block visible-sm-block"></div>

        <p style="float: right; margin-right: 80px;"><a href="#" class="btn btn-primary btn-sm">Next Page</a></p>
        <p style="float: left; margin-left: 15px;"><a href="news.php" class="btn btn-primary btn-sm">Previous Page</a></p>
      </div>
    </div>
  </section>



  <!-- <section class="probootstrap-section probootstrap-bg" style="background-image: url(img/slider_2.jpg);">
    <div class="container text-center">
      <h2 class="heading probootstrap-animate" data-animate-effect="fadeIn">Fresh &amp; Non-GMO Products</h2>
      <p class="sub-heading probootstrap-animate" data-animate-effect="fadeIn">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    </div>
  </section>

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service">
            <div class="icon"><i class="icon-leaf"></i></div>
            <h2 class="heading">Fresh Vegies &amp; Fruits</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service">
            <div class="icon"><i class="icon-hand"></i></div>
            <h2 class="heading">Locally Grown Vegetables</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service">
            <div class="icon"><i class="icon-tree"></i></div>
            <h2 class="heading">Natural As It's In Nature</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="clearfix visible-lg-block visible-md-block"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service">
            <div class="icon"><i class="icon-location"></i></div>
            <h2 class="heading">From Country Side</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service">
            <div class="icon"><i class="icon-water"></i></div>
            <h2 class="heading">Alkaline Water</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service">
            <div class="icon"><i class="icon-air"></i></div>
            <h2 class="heading">Fresh Air</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="clearfix visible-lg-block visible-md-block"></div>
      </div>
    </div>
  </section> -->

  <footer class="probootstrap-footer probootstrap-bg" style="background-image: url(img/slider_3.jpg); padding-top: 5px; height: 420px">

    <div class="container">
      <div class="row mb60">
        <div class="col-md-3">
          <div class="probootstrap-footer-widget justify">
            <h4 class="heading">Contact</h4>
            <ul class="probootstrap-footer-social">
            <p>No Telp: 087741585572</p>
            <p>Komunitasgogreen@gmail.com</p>
            <p>Jalan Gading Raya blok c no 37 DKI Jakarta</p>
      <h5>&copy; 2018 <b><i>Kelompok Apa Aja Dah</b></i></h5>
              </ul>
          </div> 
        </div>
        <div class="col-md-3">
      <!-- <div class="probootstrap-footer-widget justify">
            <h4 class="heading">Product</h4>
            <ul class="stack-link">
        <li><a href="#">Organic Fruits</a></li>
              <li><a href="#">Organic Vegeables</a></li>
              <li><a href="#">Non-GMO Products</a></li>
              <li><a href="#">Locally Grown Products</a></li>
            </ul>
          </div> -->
          <br>
        </div>
        <div class="col-md-3">
      <div class="probootstrap-footer-widget">
            <h4 class="heading">Anggota Kelompok</h4>
            <ul class="stack-link">
              <p>Alif Faturrahman (50415541)</p>
        <p>Diky Pamungkas (51415902)</p>
              <p>Haiqal Muhamad Alfarisi (53415003)</p>
        <p>Jovandy Saputro (534156009)</p>
            </ul>
          </div> 
          <br>
        </div>
        <div class="col-md-3">
          <!-- <div class="probootstrap-footer-widget">
            <h4 class="heading">Subscribe</h4>
            <p>Far far away behind the word mountains far from.</p>
            <form action="#">
              <div class="form-field">
                <input type="text" class="form-control" placeholder="Enter your email">
                <button class="btn btn-subscribe"><i class="icon-arrow-long-right"></i></button>
              </div>
            </form>
          </div>
        </div> -->
        <br>
      </div>
      <div class="row copyright">
        <div class="col-md-6">
        <!--   <div class="probootstrap-footer-widget">
            <p>&copy; 2017 <a href="https://uicookies.com/">uiCookies:Green</a>. Designed by <a href="https://uicookies.com/">uicookies.com</a></p> -->
          </div>
        </div>
        <div class="col-md-6">
          <!-- <div class="probootstrap-footer-widget right">
            <ul class="probootstrap-footer-social">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div> -->
        </div>
      </div>
    </div>
  </footer>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  

  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>

  </body>
</html>