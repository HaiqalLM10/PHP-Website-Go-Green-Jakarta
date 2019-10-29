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
            <figure><img src="img/news1.jpg" alt="Free Template by uicookies.com" class="img-responsive" style="width: 1100px; height: 300px;"></figure>
            <div class="text">
              <h2 class="heading"><b>Cara Menerapkan Gaya Hidup Go Green Sehari-Hari</b></h2>
              <p style="text-align: justify; color: black;">Go Green itu bukan cuma gerakan yang dibuat pemerintah untuk memperbaiki lingkungan di Indonesia. Tapi sebagai warga negara yang baik, kita juga bisa ikut berkontribusi dengan melakukan hal kecil ini dirumah loh. Meski terlihat sepele, tapi berdampak besar di lingkungan kita ini.
              Yuk ikuti tips Go Green berikut ini yang bisa kamu aplikasikan di rumah.</p>
              <h2 class="heading"> 1. Set Alarm Mati AC Otomatis </h2>
              <img src="img/news1A.jpg" alt="Free Template by uicookies.com" class="img-responsive" style="width: 1024px; height: 600px;">
              <p style="text-align: justify; color: black;">Go Green itu bisa dimulai bahkan sejak kamu lagi tidur. Kalau kamu biasanya tidur selalu pakai AC, usahain matiin AC tersebut secara otomatis di jam 4 pagi. Jam 4 pagi kan umumnya udah mulai dingin jadi kamu nggak begitu memerlukan AC lagi. Jadi selain lebih hemat, kamu juga bisa menerapkan gaya hidup go green dengan mudah.</p>
              <h2 class="heading"> 2. Tidur Dengan Lampu Mati </h2>
              <img src="img/news1B.jpg" alt="Free Template by uicookies.com" class="img-responsive" style="width: 1024px; height: 600px;">
              <p style="text-align: justify; color: black;">Selain AC, kamu juga bisa memperhatikan penggunaan lampu saat kamu tidur. Selain baik untuk kesehatan dan juga peremajaan kulit, mematikan lampu saat tidur juga membuatmu lebih bersahabat dengan alam. Kalau kamu belum terbiasa untuk gelap-gelapan saat tidur, kamu bisa mulai mencoba pakai lampu tidur yang watt-nya jauh lebih kecil</p>
              <h2 class="heading"> 3. Matiin Handphone-mu Saat Tidur </h2>
              <img src="img/news1C.jpg" alt="Free Template by uicookies.com" class="img-responsive" style="width: 1024px; height: 600px;">
              <p style="text-align: justify; color: black;">Saat tidur, otomatis handphone-mu nggak akan terpakai. Daripada baterai lama-lama terkuras sendiri dan membuatmu jadi lebih cepat nge-charge, lebih baik matikan handphone-mu saat sedang tidur. Selain bisa menghambat radiasi, mematikan handphone saat tidur juga akan membantu menghemat listrik.</p>
              <h2 class="heading"> 4. Mulai Naik Transportasi Umum </h2>
              <img src="img/news1D.jpg" alt="Free Template by uicookies.com" class="img-responsive" style="width: 1024px; height: 600px;">
              <p style="text-align: justify; color: black;">Di Indonesia sekarang lagi banyaknya pembangunan untuk transportasi umum. Untuk mengurangi polusi kota, akan lebih baik untuk kamu mulai menggunakan transportasi umum untuk pergi sehari-hari. Ada Transjakarta, bis umum atau bahkan Commuterline yang sekarang udah lebih nyaman, lho. Selain bisa go green-an, kamu juga bisa menghemat dan mengurangi kemacetan. </h2>
              <h2 class="heading"> 5. Bawa Botol Minum Kemana-mana </h2>
              <img src="img/news1E.jpg" alt="Free Template by uicookies.com" class="img-responsive" style="width: 1024px; height: 600px;">
              <p style="text-align: justify; color: black;">Bekas-bekas sampah botol minum plastik itu nggak baik untuk lingkungan, lho. Daripada kamu membeli air mineral saat makan siang di kantin, lebih baik kamu membawa tumblr sendiri dan meminta staff kantinmu untuk mengisi air mineral tersebut. Hindari membeli air minum botolan karena dapat menambah jumlah sampah yang ada.</p>
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