<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TerasCaffe | Login Untuk Memulai</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="logo.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style type="text/css">
    .nida{
      background-color: transparent;
      border: 0;
      color: white;
    }
  </style>

  <!-- =======================================================
  * Template Name: Restaurantly
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+62-822-9434-3465</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Senin-Jumat : 11.00 - 23.00 WIB</span></i>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="">TerasCaffe</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="">Album</a></li>
          <li><a class="nav-link scrollto" href="">Lokasi</a></li>
          <li><a class="nav-link scrollto" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="" class="book-a-table-btn scrollto d-none d-lg-flex">Pesan Sekarang</a>
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="alert alert-danger alert-dismissible">
        Silahkan Login Terlebih Dahulu Untuk Memulai Pesanan Anda!
      </div>
      <div class="row">
        <div class="col-lg-12">
          <h1>Selamat Datang di <span>TerasCaffe</span></h1>
          <h2>Jadikan setiap menu makanan dan minuman kami sebagai pengalaman yang tak terlupakan!</h2>

          <div class="btns">
            <a href="" class="btn-book animated fadeInUp scrollto">Pesan Menu Anda</a>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Periksa Menu Lezat Kami</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-starters">Makanan</li>
              <li data-filter=".filter-salads">Minuman</li>
              <li data-filter=".filter-specialty">Cemilan</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-ingredients">
              NASI GORENG
            </div>
            <div class="menu-content">
              <a href="">Nasi Goreng Biasa</a><span>15 K</span>
            </div>
            <div class="menu-content">
              <a href="">Nasi Goreng Pattaya</a><span>18 K</span>
            </div>
            <div class="menu-content">
              <a href="">Nasi Goreng Seafood</a><span>18 K</span>
            </div>
            <div class="menu-content">
              <a href="">Nasi Goreng Kampung</a><span>16 K</span>
            </div>
            <div class="menu-content">
              <a href="">Nasi Goreng Spesial</a><span>20 K</span>
            </div>
            <div class="menu-content">
              <a href="">Nasi Goreng Spesial Ayam</a><span>25 K</span>
            </div><br>
            <div class="menu-ingredients">
              MIE GORENG
            </div>
            <div class="menu-content">
              <a href="">Mie Goreng Biasa</a><span>15 K</span>
            </div>
            <div class="menu-content">
              <a href="">Mie Goreng Seafood</a><span>18 K</span>
            </div>
            <div class="menu-content">
              <a href="">Mie Goreng Spesial</a><span>20 K</span>
            </div>
            <div class="menu-content">
              <a href="">Mie Goreng Komplit</a><span>25 K</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-ingredients">
              INDOMIE
            </div>
            <div class="menu-content">
              <a href="">Indomie Tumis</a><span>18 K</span>
            </div>
            <div class="menu-content">
              <a href="">Indomie Kuah</a><span>18 K</span>
            </div>
            <div class="menu-content">
              <a href="">Indomie Goreng</a><span>18 K</span>
            </div><br>
            <div class="menu-ingredients">
              KWETIAW
            </div>
            <div class="menu-content">
              <a href="">Kwetiaw Goreng</a><span>15 K</span>
            </div>
            <div class="menu-content">
              <a href="">Kwetiaw Goreng Seafood</a><span>20 K</span>
            </div>
            <div class="menu-content">
              <a href="">Kwetiaw Goreng Spesial</a><span>25 K</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-ingredients">
              ANEKA JUS
            </div>
            <div class="menu-content">
              <a href="">Jus Jeruk</a><span>10 K</span>
            </div>
            <div class="menu-content">
              <a href="">Jus Alpukat</a><span>10 K</span>
            </div>
            <div class="menu-content">
              <a href="">Jus Semangka</a><span>10 K</span>
            </div>
            <div class="menu-content">
              <a href="">Jus Terong Belanda</a><span>10 K</span>
            </div>
            <div class="menu-content">
              <a href="">Jus Buah Naga</a><span>10 K</span>
            </div>
            <div class="menu-content">
              <a href="">Jus Kuini</a><span>10 K</span>
            </div><br>
            <div class="menu-ingredients">
              TEA
            </div>
            <div class="menu-content">
              <a href="">Teh Manis </a><span>7 K</span>
            </div>
            <div class="menu-content">
              <a href="">Teh Tarik</a><span>7 K</span>
            </div>
            <div class="menu-content">
              <a href="">Lemon Tea</a><span>10 K</span>
            </div>
            <div class="menu-content">
              <a href="">Thai Tea</a><span>10 K</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-ingredients">
              HOT COFFEE
            </div>
            <div class="menu-content">
              <a href="">Espresso</a><span>16 K</span>
            </div>
            <div class="menu-content">
              <a href="">Cappucino</a><span>20 K</span>
            </div>
            <div class="menu-content">
              <a href="">Americano</a><span>18 K</span>
            </div>
            <div class="menu-content">
              <a href="">Long Black</a><span>18 K</span>
            </div>
            <div class="menu-content">
              <a href="">Moccacino</a><span>20 K</span>
            </div>
            <div class="menu-content">
              <a href="">Sanger</a><span>18 K</span>
            </div><br>
            <div class="menu-ingredients">
              NON COFFEE
            </div>
            <div class="menu-content">
              <a href="">Matcha</a><span>18 K</span>
            </div>
            <div class="menu-content">
              <a href="">Red Velvet</a><span>18 K</span>
            </div>
            <div class="menu-content">
              <a href="">Chocolate</a><span>18 K</span>
            </div>
            <div class="menu-content">
              <a href="">Vanila</a><span>18 K</span>
            </div>
            <div class="menu-content">
              <a href="">Taro</a><span>18 K</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-ingredients">
              SNACK
            </div>
            <div class="menu-content">
              <a href="">Kentang Goreng</a><span>15 K</span>
            </div>
            <div class="menu-content">
              <a href="">Nugget Goreng</a><span>15 K</span>
            </div>
            <div class="menu-content">
              <a href="">Jamur Crispy</a><span>15 K</span>
            </div>
            <div class="menu-content">
              <a href="">Pisang Crispy Coklat</a><span>14 K</span>
            </div>
            <div class="menu-content">
              <a href="">Pisang Crispy Coklat Keju</a><span>16 K</span>
            </div>
            <div class="menu-content">
              <a href="">Bakwan Jagung</a><span>10 K</span>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-ingredients">
              DIMSUM
            </div>
            <div class="menu-content">
              <a href="">Dimsum Ayam</a><span>20 K</span>
            </div>
            <div class="menu-content">
              <a href="">Dimsum Udang</a><span>20 K</span>
            </div>
            <div class="menu-content">
              <a href="">Dimsum Kepiting</a><span>20 K</span>
            </div><br>
            <div class="menu-ingredients">
              ROTI BAKAR
            </div>
            <div class="menu-content">
              <a href="">Roti Bakar Pisang Coklat</a><span>18 K</span>
            </div>
            <div class="menu-content">
              <a href="">Roti Bakar Pisang Keju</a><span>18 K</span>
            </div>
            <div class="menu-content">
              <a href="">Roti Bakar Pisang Coklat Keju</a><span>22 K</span>
            </div>
            <div class="menu-content">
              <a href="">Roti Bakar Pisang Strawberry</a><span>22 K</span>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Menu Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="text-center">
            <div class="footer-info">
              <h3>TerasCaffe</h3>
              <p>
                Rahuning II, Kec. Rahuning, <br>
                Kabupaten Asahan, Sumatera Utara 21273<br><br>
                <strong>WhatsApp:</strong> +62-822-9434-3465<br>
                <strong>Email:</strong> nidaelyza@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>TerasCaffe</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>