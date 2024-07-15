<?php
include"../koneksi.php";

$get1 = mysqli_query($koneksi,"SELECT * FROM tb_menu");
$sum1 = mysqli_num_rows($get1);

$get2 = mysqli_query($koneksi,"SELECT * FROM tb_user");
$sum2 = mysqli_num_rows($get2);

$get3 = mysqli_query($koneksi,"SELECT SUM(total) as total FROM tb_transaksi");
$bet = mysqli_fetch_array($get3);
$subtotal = $bet['total'];
?>
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<?php
					echo "$hari_sekarang, $tanggal_sekarang"?>
					<div id="clock"></div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<div class="info-data" data-infodata="<?php if(isset($_SESSION['info'])){
		echo $_SESSION['info']; } unset($_SESSION['info']); ?>">
	</div>
	<div class="container-fluid">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-4 col-6">
				<!-- small box -->
				<div class="small-box bg-primary">
					<div class="inner">
						<h3><?=$sum1?></h3>

						<p>Jumlah Menu</p>
					</div>
					<div class="icon">
						<i class="ion ion-bag"></i>
					</div>
				</div>
			</div>
			<!-- ./col -->

			<div class="col-lg-4 col-6">
				<!-- small box -->
				<div class="small-box bg-warning">
					<div class="inner">
						<h3><?=$sum2?></h3>

						<p>Jumlah Akun Pengguna</p>
					</div>
					<div class="icon">
						<i class="ion ion-bag"></i>
					</div>
				</div>
			</div>
			<!-- ./col -->

			<div class="col-lg-4 col-6">
				<!-- small box -->
				<div class="small-box bg-success">
					<div class="inner">
						<h3>Rp. <?php echo number_format($subtotal) ?></h3>

						<p>Jumlah Pendapatan</p>
					</div>
					<div class="icon">
						<i class="ion ion-bag"></i>
					</div>
				</div>
			</div>
			<!-- ./col -->
		</div><br>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="card-col">
							<h2>Riwayat Transaksi</h2><br>
							<table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr class="bg-primary">
										<th>Tanggal & Waktu</th>
										<th>Nama Pelanggan</th>
										<th>Total Pesanan</th>
									</tr>
								</thead>
								<tbody>
									<?php
									include"../koneksi.php";
                    				//  mysqli_query untuk eksekusi
									$tampil = mysqli_query($koneksi,"SELECT tb_transaksi.*, tb_user.username FROM tb_transaksi LEFT JOIN tb_user ON tb_transaksi.id_user = tb_user.id_user");
									while ($data = mysqli_fetch_array($tampil)) {?>
										<tr>
											<td><?= $data['tanggal']?></td>
											<td><?= $data['username'] ?></td>
											<td>Rp. <?php echo number_format($data['total']) ?></td>
										</tr>
										<?php
									}
									?>
								</tbody>
							</table><br><br>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="card-col">
							<h2>Akun Pengguna</h2><br>
							<table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr class="bg-warning">
										<th>No</th>
										<th>Username</th>
										<th>Password</th>
										<th>Alamat</th>
										<th>No. Handphone</th>
									</tr>
								</thead>
								<tbody>
									<?php
									include"../koneksi.php";
                    				//  mysqli_query untuk eksekusi
									$tampil = mysqli_query($koneksi,"SELECT * FROM tb_user");
									$no=1;
									while ($data = mysqli_fetch_array($tampil)) { ?>
										<tr>
											<td><?= $no ?></td>
											<td><?= $data['username']?></td>
											<td><?= $data['password'] ?></td>
											<td><?= $data['alamat'] ?></td>
											<td><?= $data['notelp'] ?></td>
										</tr>
										<?php
										$no++;
									}
									?>
								</tbody>
							</table><br><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>