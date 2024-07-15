<?php
session_start();
if (isset($_SESSION['user'])) {
  header('location:index.php');
}

include"koneksi.php";
$username = "";
$password = "";
$err = "";

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == '' or $password == '') {
    $err .= "<li>Masukkan Username dan Password!</li>";
  }
  if (empty($err)) {
    $cekuser = mysqli_query($koneksi, "SELECT id_user,username,password FROM tb_user WHERE username = '$username'");
    $hitung = mysqli_num_rows($cekuser);

    $cekadmin = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username = '$username'");
    $hitungg = mysqli_num_rows($cekadmin);

    $cekkasir = mysqli_query($koneksi, "SELECT * FROM tb_kasir WHERE username = '$username'");
    $hitunggg = mysqli_num_rows($cekkasir);

    if ($hitung){
      // Kalau data ditemukan
      $_SESSION['user'] = $username;
      $_SESSION['info'] = 'Login';
      header('location:index.php');
    }if ($hitungg){
      // Kalau data tidak ditemukan
      $_SESSION['user'] = $username;
      $_SESSION['info'] = 'Login';
      header('location:admin/admin.php');
    }
    if ($hitunggg){
      // Kalau data tidak ditemukan
      $_SESSION['user'] = $username;
      $_SESSION['info'] = 'Login';
      header('location:kasir/index.php');
    }
  }else{
    $err .= "<li>Password Anda Salah !</li>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TerasCaffe | Log in</title>
  <link href="logo.jpg" rel="icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
  <link rel="stylesheet" type="text/css" href="package/login.css">
  <!-- SweetAlert2 -->
  <link href="package/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>
  <div class="info-data" data-infodata="<?php if(isset($_SESSION['info'])){
    echo $_SESSION['info']; } unset($_SESSION['info']); ?>">
  </div>
  <video autoplay loop><source src="package/login.mp4"></video>
    <div class="login-box">
      <h5 class="text-white" href="#">Log In</h5>
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
          <input type="submit" name="login" value="Login" class="btn btn-md btn-primary">
        </div>
      </form>
      <br>
      <p>Baru di TerasCaffe?<a href="register.php" class="text-center"> Daftar.</a></p>
    </div>
    <!-- /.login-box -->
    <!-- jQuery -->
    <script src="adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="adminlte/dist/js/adminlte.min.js"></script>
    <!-- SweetAlert -->
    <script src="package/dist/sweetalert2.min.js"></script>
    <script src="js.js"></script>
  </body>
  </html>