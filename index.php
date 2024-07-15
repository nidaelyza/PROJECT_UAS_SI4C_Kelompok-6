<?php 
ob_start();
session_start();
if (!isset($_SESSION['user'])){
	header('location:home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=2.0">
	<title>TerasCaffe</title>
	<meta content="" name="description">
	<meta content="" name="keywords">
	<!-- Favicons -->
	<link href="logo.jpg" rel="icon">

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
	<!-- Theme style -->
	<link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-fz/x28n9YFQ4T5ofJ1cYG9H3lHp1fsHTt0vK4V4iAnIep4rKivBw5Jst8Zl/1Gbw" crossorigin="anonymous">
	<link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">

	<!-- SweetAlert2 -->
	<link href="package/dist/sweetalert2.min.css" rel="stylesheet">

	<style type="text/css">
		.nida{
			background-color: transparent;
			border: 0;
			color: white;
		}
		.labell{
			color: goldenrod;
		}
		.textt{
			color: black;
			position: relative;
			margin-left: 460px;
		}
	</style>
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

	<?php 
	include"koneksi.php"; ?>
	<?php
	if (isset($_GET['page'])) {

		$page = $_GET['page'];

		switch ($page) {
			case 'ubah':
			include"user/proses.php";
			break;

			case 'pesan':
			include"user/pesan.php";
			break;

			case 'hapus':
			include"user/hapus.php";
			break;

			case 'trans':
			include"user/transaksi.php";
			break;

			case 'cetak':
			include"kasir/cetak.php";
			break;
		}
	}else{
		include"homee.php";
	}
	?>

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

	<script>
		function Metode(){
			var metode = document.getElementById('metode').value;
			if (metode == 'BCA') {
				var mm = "Nomor Rekening : 741-047-7615                                                                               	"; 
				var mmm = " Atas Nama : Nida Elyza";
				document.getElementById('mm').value = mm + mmm;
			}
			if (metode == 'BRI') {
				var mm = "Nomor Rekening : 074-143-0477-61                                                                      	"; 
				var mmm = " Atas Nama : Nida Elyza";
				document.getElementById('mm').value = mm + mmm;
			}
			if (metode == 'BNI') {
				var mm = "Nomor Rekening : 45-007-776-91                                                                                "; 
				var mmm = " Atas Nama : Nida Elyza";
				document.getElementById('mm').value = mm + mmm;
			}
			if (metode == 'BSI') {
				var mm = "Nomor Rekening : 9808-0736-7516-1280                                                                      "; 
				var mmm = " Atas Nama : Nida Elyza";
				document.getElementById('mm').value = mm + mmm;
			}
			if (metode == 'DANA') {
				var mm = "Nomor DANA : 0822-9434-3465                                                                               	"; 
				var mmm = " Atas Nama : Nida Elyza";
				document.getElementById('mm').value = mm + mmm;
			}
		}
	</script>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>

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