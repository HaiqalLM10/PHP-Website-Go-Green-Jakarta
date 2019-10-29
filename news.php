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
            <li class="active"><a href="news.html">News</a></li>
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
  <section class="probootstrap-section">
    <div class="container">
      <div class="probootstrap-section-heading text-center mb50 probootstrap-animate ">
       <!-- h4 class="sub-heading">Team</h4> -->
        <h2 class="heading">Berita-Berita Terbaru</h2> 
      </div>
      <div class="row">

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 probootstrap-animate" style="width: 1100px;">
          <div class="media-item">
            <figure><img src="img/news2.jpg" alt="Free Template by uicookies.com" class="img-responsive" style="width: 1100px; height: 300px;"></figure>
            <div class="text">
              <h2 class="heading">Pemkot Jakut Gencarkan Gerakan Menanam Sejuta Pohon</h2>
              <p style="text-align: justify;">Pemerintah Kota Administrasi Jakarta Utara yang bekerja sama dengan Komuitas Go Green Jakarta, terus mengajak semua komponnen masyarakat dan stakeholder untuk ikut aktif melakukan aksi tanam pohon. Gubernur DKI Jakarta, Anies Baswedan pun ikut mendukung program untuk menghijaukan Jakarta Utara itu.</p>
              <p><a href="news2.php" class="btn btn-primary btn-sm">View Details</a></p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 probootstrap-animate" style="width: 1100px;">
          <div class="media-item">
            <figure><img src="img/news4.jpg" alt="Free Template by uicookies.com" class="img-responsive" style="width: 1100px; height: 300px;"></figure>
            <div class="text">
              <h2 class="heading">Event : Hutan Kota Kemayoran</h2>
              <p style="text-align: justify;">Pemerintah DKI Jakarta mengajak masyarakat untuk turut serta dalam mengikuti kegiatan menanam pohon dan mendaur ulang sampah-sampah yang berserakan di area hutan kota. Agenda ini dilaksanakan pada :</p>
              <p><a href="news4.php" class="btn btn-primary btn-sm">View Details</a></p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 probootstrap-animate" style="width: 1100px;">
          <div class="media-item">
            <figure><img src="img/news1.jpg" alt="Free Template by uicookies.com" class="img-responsive" style="width: 1100px; height: 300px;"></figure>
            <div class="text">
              <h2 class="heading">Cara Menerapkan Gaya Hidup Go Green Sehari-Hari</h2>
              <p style="text-align: justify;">Go Green itu bukan cuma gerakan yang dibuat pemerintah untuk memperbaiki lingkungan di Indonesia. Tapi sebagai warga negara yang baik, kita juga bisa ikut berkontribusi dengan melakukan hal kecil ini dirumah loh. Meski terlihat sepele, tapi berdampak besar di lingkungan kita ini.
              Yuk ikuti tips Go Green berikut ini yang bisa kamu aplikasikan di rumah.</p>
              <p><a href="news1.php" class="btn btn-primary btn-sm">View Details</a></p>
            </div>
          </div>
        </div>

        <div class="clearfix visible-lg-block visible-md-block visible-sm-block"></div>

        <p style="float: right; margin-right: 80px;"><a href="newspage2.php" class="btn btn-primary btn-sm">Next Page</a></p>
      </div>
    </div>
  </section>

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
        <br>
      </div>
      <div class="row copyright">
        <div class="col-md-6">
          </div>
        </div>
        <div class="col-md-6">
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