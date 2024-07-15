<?php 
ob_start();
session_start();
if (!isset($_SESSION['user'])){
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TerasCaffe | Admin Dashboard</title>
  <link href="../logo.jpg" rel="icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../adminlte/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link href="../package/dist/sweetalert2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <style type="text/css">
    .dropdown-item:hover{
      background-color: dodgerblue;
      color: white;
    }
  </style>
</head>
<body class="sidebar-mini">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item-log">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto md-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"><i class="nav-icon fas fa-user"></i></a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown"> 
            <a class="dropdown-item" href="../logout.php">Logout</a>
          </div>
        </li>
      </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="../logo.jpg" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
      </a>
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../logo.jpg" class="img-rounded" alt="User Image">
          </div>
          <div class="info">
            <?php
            if (isset($_SESSION['user'])) { ?>
              <a href="#"><?php echo $_SESSION['user']; }?></a>
            </div>
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="admin.php" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=menu" class="nav-link">
                  <i class="nav-icon fas fa-barcode"></i>
                  <p>
                    Daftar Menu
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=kategori" class="nav-link">
                  <i class="nav-icon fas fa-inbox"></i>
                  <p>
                    Kategori Menu
                  </p>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- /.sidebar-menu -->
      </aside>
      <?php 
      date_default_timezone_set('Asia/Jakarta');
      $nama_hari = array('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
      $indeks_hari = date('w');
      $hari_sekarang = $nama_hari[$indeks_hari];
      $tanggal_sekarang = date(" d F Y ");
      $waktu_sekarang = date('H:i:s');?>
      <?php
      include"../koneksi.php";
      ?>

      <?php

      if (isset($_GET['page'])) {

        $page = $_GET['page'];

        switch ($page) {
         case 'home':
         include"admin/home.php";
         break;

         case 'setuju':
         include"setuju.php";
         break;

         case 'cetak':
         include"cetak.php";
         break;

         case 'menu':
         include"menu/menu.php";
         break;
         case 'menu_edit':
         include"menu/editmenu.php";
         break;
         case 'menu_hapus':
         include"menu/hapusmenu.php";
         break;
         case 'menu_update':
         include"menu/updatemenu.php";
         break;
         case 'proses':
         include"menu/proses.php";
         break;

         case 'kategori':
         include"kategorimenu/kategori.php";
         break;
         case 'kategori_hapus':
         include"kategorimenu/hapus.php";
         break;
         case 'kategori_add':
         include"kategorimenu/proses.php";
         break;
       }
     }else{
      include"home.php";
    }
    ?>
    <footer class="main-footer">
      <strong>Copyright &copy; 2024 <a href="#">TerasCaffe</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> BETA
      </div>
    </footer>
  </div>
  <script>
    setInterval(() => {
      let date = new Date()
      let clock = document.getElementById('clock');
      clock.innerHTML =
      date.getHours()+":"+
      date.getMinutes()+":"+
      date.getSeconds()
    }, 1000);
  </script>

  <!-- jQuery -->
  <script src="../adminlte/plugins/jquery/jquery.min.js"></script>
  <!-- ChartJS -->
  <script src="../adminlte/plugins/chart.js/Chart.min.js"></script>
  <!-- JQVMap -->
  <script src="../adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../adminlte/dist/js/adminlte.js"></script>
  <!-- SweetAlert -->
  <script src="../package/dist/sweetalert2.min.js"></script>
  <script src="../js.js"></script>
</body>
</html>