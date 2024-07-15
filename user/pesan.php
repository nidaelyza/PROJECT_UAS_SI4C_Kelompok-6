<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_menu WHERE id_menu = '$id'");
$pesan = mysqli_fetch_array($data);
?>

<?php
if (isset($_POST['pesan'])) {
	$id_menu = $_POST['idmenu'];
	$id_user = $_POST['userid'];
	$qty = $_POST['qty'];

	// Periksa apakah menu sudah ada di keranjang
	$kueri = mysqli_query($koneksi, "SELECT * FROM tb_pesanan WHERE id_user = '$id_user' AND id_menu = '$id_menu'");
	$result3 = mysqli_fetch_array($kueri);

	if($result3){
		$jum = $result3['qty'] + $qty;
		$updateQuery = mysqli_query($koneksi, "UPDATE tb_pesanan SET qty = '$jum' WHERE id_user = '$id_user' AND id_menu = '$id_menu'");

		if($updateQuery){
			$_SESSION['info'] = 'Menambah';
			header('location:index.php');
		}else{
			$_SESSION['info'] = 'Gagal Diterima';
			header('location:index.php');
		}
	}else{
		try{
			$tambah = mysqli_query($koneksi, "INSERT INTO tb_pesanan (id_user,id_menu,qty) 
				VALUES ('$id_user','$id_menu','$qty')");

			// mengalihkan kehalaman utama
			if($tambah){
				$_SESSION['info'] = 'Ditambah';
				header('location:index.php');
			}else{
				$_SESSION['info'] = 'Gagal Ditambah';
				header('location:index.php');
			}
		}catch(mysqli_sql_exception $e){
			$e->getMessage();
		}
	}
}
?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-cente">
	<div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

		<h1 class="logo me-auto me-lg-0"><a href="">TerasCaffe</a></h1>
		<!-- Uncomment below if you prefer to use an image logo -->
		<!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

		<nav id="navbar" class="navbar order-last order-lg-0">
			<ul>
				<li><a class="nav-link scrollto active" href="#hero" style="font-size: 16px;">Beranda</a></li>
				<li><a class="nav-link scrollto" href="#profil" style="font-size: 16px;">Profil</a></li>
				<li><a class="nav-link scrollto" href="#menu" style="font-size: 16px;">Menu</a></li>
				<li><a class="nav-link scrollto" href="#pesanan" style="font-size: 16px;">Pesanan</a></li>
				<li><a class="nav-link scrollto" href="#transaksi" style="font-size: 16px;">Transaksi</a></li>
				<li><a class="nav-link scrollto" href="#lokasi" style="font-size: 16px;">Lokasi</a></li>
				<li><a class="nav-link scrollto" href="logout.php" style="font-size: 16px;">Logout</a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav><!-- .navbar -->
		<a href="#menu" class="book-a-table-btn scrollto d-none d-lg-flex">Pesan Sekarang</a>
	</div>
</header>
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
	<div class="container position-relative text-lg-start" data-aos="zoom-in" data-aos-delay="100">
		<div class="section-title">
			<p>Masukkan Jumlah Pesanan Anda</p>
		</div>
		<form method="post" action="">
			<?php
			$user = $_SESSION['user'];
			$sql = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$user'");
			$di_user = mysqli_fetch_array($sql);
			$us = $di_user['id_user'];
			?>
			<input type="hidden" name="idmenu" value="<?= $pesan['id_menu']?>">
			<input type="hidden" name="userid" value="<?= $us ?>">
			<input type="number" name="qty" class="form-control" placeholder="Banyaknya" required>
			<div class="btns">
				<input type="submit" name="pesan" value="Pesan" class="btn-menu animated fadeInUp scrollto bg-warning">
			</div>
		</form>
	</div>
</section><!-- End Hero -->