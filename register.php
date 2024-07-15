<?php
session_start();
if (isset($_SESSION['user'])) {
  header('location:index.php');
}
include"koneksi.php";
$username = "";
$password = "";
$err = "";

if (isset($_POST['daftar'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == '' or $password == '') {
    $err .= "<li>Isi Data Terlebih Dahulu !</li>";
  }
  if (empty($err)) {
    mysqli_query($koneksi, "INSERT INTO tb_user (username,password) VALUES ('$username','$password')");
    $_SESSION['info'] = 'Berhasil';
    header('location:login.php');
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Sekarang! | TerasCaffe</title>
  <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
  <link rel="stylesheet" type="text/css" href="package/login.css">
</head>
<body>
  <video autoplay loop>
    <source src="package/login.mp4">
    </video>
    <div class="login-box">
      <h5 class="text-white" href="#">Daftar</h5>
      <br>
      <?php
      if ($err) {
        echo "<ul>$err</ul>";
      }
      ?>
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="input-group mb-3 justify-content-center">
          <input type="submit" name="daftar" value="Daftar" class="btn btn-md btn-primary">
        </div>
      </form>
      <br>
      <p>Punya Akun?<a href="login.php" class="text-center"> Login.</a></p>
    </div>
    <!-- jQuery -->
    <script src="adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="adminlte/dist/js/adminlte.min.js"></script>
  </body>
  </html>
