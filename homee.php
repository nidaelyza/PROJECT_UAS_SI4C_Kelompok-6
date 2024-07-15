<div class="info-data" data-infodata="<?php if(isset($_SESSION['info'])){
	echo $_SESSION['info']; } unset($_SESSION['info']); ?>">
</div>

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
	<div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
		<div class="row">
			<div class="col-lg-12">
				<h1>Hallo, <?php echo $_SESSION['user']?></h1>
				<h1>Selamat Datang di <span>TerasCaffe</span></h1>
				<h2>Jadikan setiap menu makanan dan minuman kami sebagai pengalaman yang tak terlupakan!</h2>

				<div class="btns">
					<a class="btn-menu animated fadeInUp scrollto" href="https://wa.me/+6282294343465" target="_blank" data-tooltip-target="tooltip-waIndex" data-tooltip-placement="left" data-tooltip-style="light" class="w-[60px] h-[60px] p-2 bg-[#25d366] hover:bg-teal-700 duration-[400ms] ease-in-out  flex justify-center items-center text-white text-[33px] rounded-full">Wa Kasir</a>
					<div id="tooltip-waIndex" role="tooltip" class="absolute z-10 invisible inline-block w-max px-3 py-2 text-sm text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip font-thin transition-all duration-500 ease-[cubic-beziercubic-bezier(0.25, 0.1, 0.6, 0.9)]">
						<div class="tooltip-arrow" data-popper-arrow></div>
					</div>
					<a href="#menu" class="btn-book animated fadeInUp scrollto">Pesan Menu Anda</a>
				</div>
			</div>
		</div>
	</div>
</section><!-- End Hero -->

<!-- ======= Profil Section ======= -->
<section id="profil" class="book-a-table bg-dark">
	<div class="container" data-aos="fade-up">

		<div class="section-title">
			<h2>Biodata</h2>
			<p>Profil Anda</p>
		</div>

		<div class="card">
			<div class="card-body">
				<form method="post" action="?page=ubah" class="php-email-form">
					<div class="row">
						<div class="col-sm-12">
							<table class="table table-hover">
								<?php 
								include'koneksi.php';
								$log = $_SESSION['user'];
								$user = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$log'");
								$di_user = mysqli_fetch_array($user);
								?>
								<tr>
									<th>Username</th>
									<td></td>
									<td>
										<input type="hidden" name="id" value="<?= $di_user['id_user']?>">
										<input type="text" name="username" class="form-control" value="<?= $di_user['username']?>" required>
									</td>
								</tr>
								<tr>
									<th>Password</th>
									<td></td>
									<td>
										<input type="password" name="password" class="form-control" value="<?= $di_user['password']?>" required>
									</td>
								</tr>
								<tr>
									<th>No. Handphone</th>
									<td></td>
									<td>
										<input type="text" name="notelp" class="form-control" value="<?= $di_user['notelp']?>" required>
									</td>
								</tr>
								<tr>
									<th>Alamat</th>
									<td></td>
									<td>
										<textarea name="alamat" rows="5" cols="40" class="form-control" required><?= $di_user['alamat']?></textarea>
									</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="textt">
						<button type="submit" name="simpan" class="book-a-table-btn scrollto d-lg-flex">Ubah Profil</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section><!-- End Profil Section -->

<!-- ======= Menu Section ======= -->
<section id="menu" class="menu section-bg">
	<div class="container" data-aos="fade-up">

		<div class="section-title">
			<h2>Menu</h2>
			<p>Menu - Menu Lezat Kami</p>
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
				<?php
				include'koneksi.php';
				$que = mysqli_query($koneksi, "SELECT tb_menu.*, tb_jenismenu.nama FROM tb_menu JOIN tb_jenismenu ON tb_menu.jenis = tb_jenismenu.id WHERE tb_jenismenu.nama = 'Nasi Goreng'");
				while ($ue = mysqli_fetch_array($que)) { ?>
					<div class="menu-content">
						<a href="?page=pesan&id=<?=$ue['id_menu']?>"><?= $ue['nama_menu'] ?></a><span>Rp. <?php echo number_format($ue['harga'])?></span>
					</div>
					<?php
				}
				?>
				<br>

				<div class="menu-ingredients">
					MIE GORENG
				</div>
				<?php
				include'koneksi.php';
				$que = mysqli_query($koneksi, "SELECT tb_menu.*, tb_jenismenu.nama FROM tb_menu JOIN tb_jenismenu ON tb_menu.jenis = tb_jenismenu.id WHERE tb_jenismenu.nama = 'Mie Goreng'");
				while ($ue = mysqli_fetch_array($que)) { ?>
					<div class="menu-content">
						<a href="?page=pesan&id=<?=$ue['id_menu']?>"><?= $ue['nama_menu'] ?></a><span>Rp. <?php echo number_format($ue['harga'])?></span>
					</div>
					<?php
				}
				?>
			</div>

			<div class="col-lg-6 menu-item filter-starters">
				<div class="menu-ingredients">
					INDOMIE
				</div>
				<?php
				include'koneksi.php';
				$que = mysqli_query($koneksi, "SELECT tb_menu.*, tb_jenismenu.nama FROM tb_menu JOIN tb_jenismenu ON tb_menu.jenis = tb_jenismenu.id WHERE tb_jenismenu.nama = 'Indomie'");
				while ($ue = mysqli_fetch_array($que)) { ?>
					<div class="menu-content">
						<a href="?page=pesan&id=<?=$ue['id_menu']?>"><?= $ue['nama_menu'] ?></a><span>Rp. <?php echo number_format($ue['harga'])?></span>
					</div>
					<?php
				}
				?>
				<br>

				<div class="menu-ingredients">
					KWETIAW
				</div>
				<?php
				include'koneksi.php';
				$que = mysqli_query($koneksi, "SELECT tb_menu.*, tb_jenismenu.nama FROM tb_menu JOIN tb_jenismenu ON tb_menu.jenis = tb_jenismenu.id WHERE tb_jenismenu.nama = 'Kwetiaw'");
				while ($ue = mysqli_fetch_array($que)) { ?>
					<div class="menu-content">
						<a href="?page=pesan&id=<?=$ue['id_menu']?>"><?= $ue['nama_menu'] ?></a><span>Rp. <?php echo number_format($ue['harga'])?></span>
					</div>
					<?php
				}
				?>
			</div>

			<div class="col-lg-6 menu-item filter-salads">
				<div class="menu-ingredients">
					ANEKA JUS
				</div>
				<?php
				include'koneksi.php';
				$que = mysqli_query($koneksi, "SELECT tb_menu.*, tb_jenismenu.nama FROM tb_menu JOIN tb_jenismenu ON tb_menu.jenis = tb_jenismenu.id WHERE tb_jenismenu.nama = 'Aneka Jus'");
				while ($ue = mysqli_fetch_array($que)) { ?>
					<div class="menu-content">
						<a href="?page=pesan&id=<?=$ue['id_menu']?>"><?= $ue['nama_menu'] ?></a><span>Rp. <?php echo number_format($ue['harga'])?></span>
					</div>
					<?php
				}
				?>
				<br>

				<div class="menu-ingredients">
					KWETIAW
				</div>
				<?php
				include'koneksi.php';
				$que = mysqli_query($koneksi, "SELECT tb_menu.*, tb_jenismenu.nama FROM tb_menu JOIN tb_jenismenu ON tb_menu.jenis = tb_jenismenu.id WHERE tb_jenismenu.nama = 'Tea'");
				while ($ue = mysqli_fetch_array($que)) { ?>
					<div class="menu-content">
						<a href="?page=pesan&id=<?=$ue['id_menu']?>"><?= $ue['nama_menu'] ?></a><span>Rp. <?php echo number_format($ue['harga'])?></span>
					</div>
					<?php
				}
				?>
			</div>

			<div class="col-lg-6 menu-item filter-salads">
				<div class="menu-ingredients">
					COFFEE
				</div>
				<?php
				include'koneksi.php';
				$que = mysqli_query($koneksi, "SELECT tb_menu.*, tb_jenismenu.nama FROM tb_menu JOIN tb_jenismenu ON tb_menu.jenis = tb_jenismenu.id WHERE tb_jenismenu.nama = 'Coffee'");
				while ($ue = mysqli_fetch_array($que)) { ?>
					<div class="menu-content">
						<a href="?page=pesan&id=<?=$ue['id_menu']?>"><?= $ue['nama_menu'] ?></a><span>Rp. <?php echo number_format($ue['harga'])?></span>
					</div>
					<?php
				}
				?>
				<br>

				<div class="menu-ingredients">
					NON COFFEE
				</div>
				<?php
				include'koneksi.php';
				$que = mysqli_query($koneksi, "SELECT tb_menu.*, tb_jenismenu.nama FROM tb_menu JOIN tb_jenismenu ON tb_menu.jenis = tb_jenismenu.id WHERE tb_jenismenu.nama = 'Non Coffee'");
				while ($ue = mysqli_fetch_array($que)) { ?>
					<div class="menu-content">
						<a href="?page=pesan&id=<?=$ue['id_menu']?>"><?= $ue['nama_menu'] ?></a><span>Rp. <?php echo number_format($ue['harga'])?></span>
					</div>
					<?php
				}
				?>
			</div>

			<div class="col-lg-6 menu-item filter-specialty">
				<div class="menu-ingredients">
					SNACK
				</div>
				<?php
				include'koneksi.php';
				$que = mysqli_query($koneksi, "SELECT tb_menu.*, tb_jenismenu.nama FROM tb_menu JOIN tb_jenismenu ON tb_menu.jenis = tb_jenismenu.id WHERE tb_jenismenu.nama = 'Snack'");
				while ($ue = mysqli_fetch_array($que)) { ?>
					<div class="menu-content">
						<a href="?page=pesan&id=<?=$ue['id_menu']?>"><?= $ue['nama_menu'] ?></a><span>Rp. <?php echo number_format($ue['harga'])?></span>
					</div>
					<?php
				}
				?>
			</div>

			<div class="col-lg-6 menu-item filter-specialty">
				<div class="menu-ingredients">
					DIMSUM
				</div>
				<?php
				include'koneksi.php';
				$que = mysqli_query($koneksi, "SELECT tb_menu.*, tb_jenismenu.nama FROM tb_menu JOIN tb_jenismenu ON tb_menu.jenis = tb_jenismenu.id WHERE tb_jenismenu.nama = 'Dimsum'");
				while ($ue = mysqli_fetch_array($que)) { ?>
					<div class="menu-content">
						<a href="?page=pesan&id=<?=$ue['id_menu']?>"><?= $ue['nama_menu'] ?></a><span>Rp. <?php echo number_format($ue['harga'])?></span>
					</div>
					<?php
				}
				?>
				<br>
				<div class="menu-ingredients">
					ROTI BAKAR
				</div>
				<?php
				include'koneksi.php';
				$que = mysqli_query($koneksi, "SELECT tb_menu.*, tb_jenismenu.nama FROM tb_menu JOIN tb_jenismenu ON tb_menu.jenis = tb_jenismenu.id WHERE tb_jenismenu.nama = 'Roti Bakar'");
				while ($ue = mysqli_fetch_array($que)) { ?>
					<div class="menu-content">
						<a href="?page=pesan&id=<?=$ue['id_menu']?>"><?= $ue['nama_menu'] ?></a><span>Rp. <?php echo number_format($ue['harga'])?></span>
					</div>
					<?php
				}
				?>
			</div>

		</div>
	</div>
</section><!-- End Menu Section -->

<!-- ======= Events Section ======= -->
<section id="pesanan" class="book-a-table bg-dark">
	<div class="container" data-aos="fade-up">

		<div class="section-title">
			<h2>Pesanan</h2>
			<p>Pesanan Anda</p>
		</div>

		<div class="testimonial-item">
			<?php
			include"koneksi.php";
			$log = $_SESSION['user'];
			$user = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$log'");
			$di_user = mysqli_fetch_array($user);
			$us = $di_user['id_user'];

			$nampil = mysqli_query($koneksi, "SELECT * FROM tb_pesanan WHERE id_user = $us");
			$wors = mysqli_num_rows($nampil);
			if($wors){ ?>
				<div class="row">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No. Pesanan</th>
								<th>Menu</th>
								<th>Harga</th>
								<th>Qty</th>
								<th>Total</th>
								<th>Hapus</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$user = $_SESSION['user'];
							$sql = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$user'");
							$di_user = mysqli_fetch_array($sql);
							$us = $di_user['id_user'];

							$query = mysqli_query($koneksi, "SELECT tb_menu.id_menu, tb_menu.nama_menu, tb_menu.harga, tb_pesanan.id_cart, tb_pesanan.qty FROM tb_menu LEFT JOIN tb_pesanan ON tb_menu.id_menu = tb_pesanan.id_menu WHERE tb_pesanan.id_user = $us GROUP BY tb_pesanan.id_cart");
							$re = mysqli_num_rows($query);
							while ($result1 = mysqli_fetch_array($query)) { 
								$id_menu = $result1['id_menu'];
								$id = $result1['id_cart']; ?>
								<tr>
									<td><?= $id ?></td>
									<td><?= $result1['nama_menu']?></td>
									<td>Rp. <?php echo number_format($result1['harga'])?></td>
									<td><?= $result1['qty']?></td>
									<?php $total[$id_menu] = $result1['harga'] * $result1['qty']?>
									<td>Rp. <?php echo number_format($total[$id_menu])?></td>
									<td>
										<a href="?page=hapus&id=<?=$result1['id_menu']?>" class="btn btn-danger delete-data rounded-circle">
											<i class="fas fa-trash"></i>
										</a>
									</td>
									<?php
									$subtotal = array_sum($total);
									?>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<div class="row">
						<div class="col-sm-12">
							<table>
								<?php
								if($re > 0){ ?>
									<td style="font-size: 18px; color: white;">Anda dapat <b style="color: red;"> menghapus</b> jenis menu dalam pesanan Anda jika ada<b style="color: red;"> perubahan.</b><br>Jika tidak ada <b style="color: red;">perubahan lagi,</b> Anda dapat melanjutkan <b>Pemesanan</b> dengan memilih tombol <b>Pesan</b>.
									</td>
									<?php
								}
								?>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-9"></div>
						<div class="col-sm-3">
							<form method="post" action="">
								<table class="table">
									<thead>
										<tr>
											<th>Subtotal</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><b>Rp. <?php echo number_format($subtotal);?></b></td>
											<th>
												<a class="btn btn-sm btn-success" href="?page=trans&id=<?=$id?>&menu=<?=$id_menu?>&tot=<?=$subtotal?>">Pesan</a>
												<a class="btn btn-sm btn-danger" href="index.php">Batal</a>
											</th>
										</tr>
									</tbody>
								</table>
							</form>
						</div>
					</div>
				</div>
				<?php
			}else{ ?>
				<div class="alert alert-danger alert-dismissible text-center">
					Pesanan Masih Kosong!
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section><!-- End Events Section -->

<!-- ======= Transaksi Section ======= -->
<section id="transaksi" class="menu section-bg">
	<div class="container" data-aos="fade-up">

		<div class="section-title">
			<h2>Transaksi</h2>
			<p>Transaksi Anda</p>
		</div>
		<?php
		$sql = mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE id_user = $us");
		$status = mysqli_fetch_array($sql);
		$stat = $status['status'];
		if ($stat == 'Selesai') { ?>
			<div class="row">
				<div class="card">
					<div class="card-body">
						<a class="btn btn-primary" data-toggle="modal" data-target="#modal" href="#">Cetak Bukti</a>
						<table class="table table-hover">

							<br>
							<thead>
								<tr>
									<th>No. Pesanan</th>
									<th>Tanggal & Waktu</th>
									<th>Menu</th>
									<th>Qty</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$user = $_SESSION['user'];
								$sql = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$user'");
								$di_user = mysqli_fetch_array($sql);
								$us = $di_user['id_user'];

								$query = mysqli_query($koneksi, "SELECT tb_order.*, tb_menu.nama_menu FROM tb_order JOIN tb_menu ON tb_menu.id_menu = tb_order.id_menu WHERE tb_order.id_user = $us GROUP BY tb_order.id_or");
								$re = mysqli_num_rows($query);
								while ($result1 = mysqli_fetch_array($query)) {
									$id_menu = $result1['id_menu'];
									$id = $result1['id_or']; ?>
									<tr>
										<td><?= $id ?></td>
										<td><?= $result1['tanggal'] ?></td>
										<td><?= $result1['nama_menu']?></td>
										<td><?= $result1['qty']?></td>
									</tr>
									<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<?php
		}else{ ?>
			<div class="row">
				<div class="card">
					<div class="card-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>No. Transaksi</th>
									<th>Tanggal & Waktu</th>
									<th>Menu</th>
									<th>Qty</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$user = $_SESSION['user'];
								$sql = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$user'");
								$di_user = mysqli_fetch_array($sql);
								$us = $di_user['id_user'];

								$query = mysqli_query($koneksi, "SELECT tb_order.*, tb_menu.nama_menu FROM tb_order JOIN tb_menu ON tb_menu.id_menu = tb_order.id_menu WHERE tb_order.id_user = $us GROUP BY tb_order.id_or");
								$re = mysqli_num_rows($query);
								while ($result1 = mysqli_fetch_array($query)) {
									$id_menu = $result1['id_menu'];
									$id = $result1['id_or']; ?>
									<tr>
										<td><?= $id ?></td>
										<td><?= $result1['tanggal'] ?></td>
										<td><?= $result1['nama_menu']?></td>
										<td><?= $result1['qty']?></td>
									</tr>
									<?php
								}
								?>
							</tbody>
						</table>
						<table class="table">
							<?php
							include'koneksi.php';
							$jml = mysqli_query($koneksi, "SELECT SUM(total) AS total_bayar FROM tb_transaksi WHERE id_user = $us");
							$jm = mysqli_num_rows($jml);
							$tot = mysqli_fetch_array($jml);
							if($jm){
								?>
								<tr>
									<th>Jumlah Pembayaran</th>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td style="color: red;"><b>Rp. <?php echo number_format($tot['total_bayar']) ?></b></td>
								</tr>
								<?php
							}
							?>
						</table>
						<table class="table table-hover">
							<tr>
								<th>Metode Pembayaran</th>
								<td>
									<select id="metode" name="method" class="form-control" onchange="Metode()" required>
										<option value="" disabled selected>Pilih Metode Transfer</option>
										<option value="BCA">Bank Central Asia (BCA)</option>
										<option value="BRI">Bank Rakyat Indonesia (BRI)</option>
										<option value="BNI">Bank Negara Indonesia (BNI)</option>
										<option value="BSI">Bank Syariah Indonesia (BSI)</option>
										<option value="DANA">DANA</option>
									</select>
									<textarea id="mm" class="form-control" name="method" onchange="Metode()" readonly></textarea>
								</td>
							</tr>
						</table>
						<table class="table table-hover">
							<tr>
								<th>Lanjutan :</th>
								<td>Jika sudah melakukan pembayaran dengan mentransfer nominal<b style="color: red;"> Jumlah Pembayaran,</b><br>Segera konfirmasi pembayaran ke<b style="color: red;"> Kasir</b> pada <b style="color: red;">Bagian Beranda,</b> dengan menyertakan <b style="color: red;">Bukti Transfer.</b>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</section><!-- End Transaksi Section -->

<!-- ======= Lokasi Section ======= -->
<section id="lokasi" class="menu section-bg">
	<div class="container" data-aos="fade-up">

		<div class="section-title">
			<h2>Lokasi</h2>
			<p>Lokasi TerasCaffe</p>
		</div>
	</div>

	<div data-aos="fade-up">
		<iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d996.3355617948254!2d99.61568446951092!3d2.714252639429581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30326a394bd22631%3A0x8b403c143308faaa!2sTeras%20Coffee!5e0!3m2!1sid!2sid!4v1717691956603!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
	</div>
</section><!-- End Lokasi Section -->

<div class="modal fade" id="modal">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header bg-danger">
				<h4 class="modal-title">Struk Pesanan</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p><b>Hubungi Kasir Agar Mengirimkan Struk Pesanan Anda.</b></p>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-success" data-dismiss="modal">OK!</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
      <!-- /.modal -->