<?php
    require_once ("inc/config.php");
?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PHP Bootcamp Bitirme Ödevi (Imperial Bootstrap Template)</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Imperial - v5.8.0
  * Template URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
  <?php
          $sorgu = $baglan->select('anasayfa',['baslik','resim',
          'yazi'])->run();
          foreach ($sorgu as $satir)
          echo"
              <div class='hero-container'>
              <div data-aos='fade-in'>
              <div class='hero-logo'>
              <img class='' src='$satir[resim]' alt='Imperial'>
              </div>

              $satir[baslik]
              $satir[yazi]
              <div class='actions'>
              <a href='#about' class='btn-get-started'>ABOUT US</a>
              <a href='#services' class='btn-services'>OUR SERVICES</a>
              </div>
              </div>
              </div>";
?>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use a text logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Imperial</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">
            HOME PAGE</a></li>
          <li><a class="nav-link scrollto" href="#about">ABOUT US</a></li>
          <li><a class="nav-link scrollto" href="#services">OUR SERVICES</a></li>
          <li><a class="nav-link scrollto" href="iletisim.php">CONTACT</a></li>
          </ul>
          
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
          <?php
          $sorgu = $baglan->select('hakkimizda',['baslik','resim',
          'aciklama'])->run();
          foreach ($sorgu as $satir)
          echo"
          <div class='container' data-aos='fade-up'>
          <div class='row'>
          <div class='col-md-12'>
          <h3 class='section-title'>$satir[baslik]</h3> 
          <div class='section-title-divider'></div>
          </div>
          </div>
          </div>
          <div class='container about-container' data-aos='fade-up' data-aos-delay='200'>
          <div class='row'>

          <div class='col-lg-6 about-img'>
          <img src='$satir[resim]'alt=''>
          </div>

          <div class='col-md-6 about-content'>

          $satir[aciklama]
          </div>
          </div>
          </div>";
          ?>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container">
        <div class="row" data-aos="fade-up">
          <div class="col-md-12">
            <h3 class="section-title">OUR SERVICES</h3>
            <div class="section-title-divider"></div>
            
        </div>

        
       
        <?php
        $sorgu = $baglan->select('hizmetlerimiz')->orderBy('id', 'asc')->run();
        foreach ($sorgu  as $satir)
        
          echo "
              <div class='row' data-aos='fade-up' data-aos-delay='200'>
              <div class='service-icon'><a href=''><i class='$satir[ikon]'></i></a></div>  
              <div><h4 class='service-title'>$satir[icerik1]</h4>
              <p class='service-description'>$satir[icerik2]</p>
              
              </div> 
              ";
          
          
          ?>
          
          
          
        </div>
      </div>
    </section><!-- End Services Section -->

    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Imperial Theme</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>