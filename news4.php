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

  </head>
  <body>

  
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
  
  <section class="probootstrap-section">
    <div class="container">
      <div class="probootstrap-section-heading text-center mb50 probootstrap-animate ">
       <!-- h4 class="sub-heading">Team</h4> -->
        <!-- <h2 class="heading">Berita-Berita Terbaru</h2> -->
      </div>
      <div class="row">

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 probootstrap-animate" style="width: 1100px;">
          <div class="media-item">
            <figure><img src="img/news4.jpg" alt="Free Template by uicookies.com" class="img-responsive" style="width: 1100px; height: 300px;"></figure>
            <div class="text">
              <h2 class="heading"><b>Event : Hutan Kota Kemayoran </b></h2>
              <p style="text-align: justify; color: black;">Pemerintah DKI Jakarta mengajak masyarakat untuk turut serta dalam mengikuti kegiatan menanam pohon dan mendaur ulang sampah-sampah yang berserakan di area hutan kota. Agenda ini dilaksanakan pada : </p>
              <p style="text-align: justify; color: black;">Tanggal : 24 Desember 2018.</p>
              <p style="text-align: justify; color: black;">Jam : 07.00 - Selesai</p>
              <p style="text-align: justify; color: black;">Kegiatan : Menanam Pohon, Mendaur Ulang Sampah, Makan Bersama.</p>
              <p style="text-align: justify; color: black;">Fasilitas : Transport, Makan, Bibit Sepuasnya, Kebersamaan</p>
              <p style="text-align: justify; color: black;">Alamat : Jl. Muara Bahari No. 40B, Kota Tua, Sunter Agung, Tj. Priok, Jakarta Utara</p>
              <p style="text-align: justify; color: black;">HTM : Gratis</p>
              <p style="text-align: justify; color: black;">Telp/WA : 081929382921</p>
              <p style="text-align: justify; color: black;">Untuk mengetahui jarak dan alamat lengkap dari lokasi hutan kota bisa klik map dibawah.</p>

              <div class="row">
    <div class="col-md-2">
      <br>
    </div>

    <div class="col-md-8">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15867.986208197706!2d106.8488424!3d-6.1311642!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a945c41be201a66!2sDanau+Hutan+Kota+Kemayoran!5e0!3m2!1sen!2sid!4v1541766805087" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="col-md-2">
      <br>
    </div>
  </div>
      <br>        
              
              <p><a href="news.php" class="btn btn-primary btn-sm">Kembali</a></p>
            </div>
          </div>
        </div>
        
        <div class="clearfix visible-lg-block visible-md-block visible-sm-block"></div>


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