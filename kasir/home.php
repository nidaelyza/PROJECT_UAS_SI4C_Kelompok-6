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
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="card-col">
							<h2>Pesanan</h2><br>
							<table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr class="bg-primary">
										<th>Tanggal & Waktu</th>
										<th>Nama Pelanggan</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
									include"../koneksi.php";
                    				//  mysqli_query untuk eksekusi
									$tampil = mysqli_query($koneksi,"SELECT tb_transaksi.*, tb_user.username FROM tb_transaksi LEFT JOIN tb_user ON tb_transaksi.id_user = tb_user.id_user");
									while ($data = mysqli_fetch_array($tampil)) {
										if($data['status'] == 'Menunggu Persetujuan'){ ?>
											<tr>
												<td><?= $data['tanggal']?></td>
												<td><?= $data['username'] ?></td>
												<td>
													<a class="btn btn-sm setdata btn-danger" href="?page=setuju&id=<?=$data['id_trans']?>">Konfirmasi</a>
												</td>
											</tr>
											<?php
										}else{ ?>
											<tr>
												<td><?= $data['tanggal']?></td>
												<td><?= $data['username'] ?></td>
												<td><?=$data['status']?><br><a href="?page=cetak&id=<?=$data['id_trans']?>" class="btn btn-sm btn-success">Cetak Bukti</a>
												</td>
											</tr>
											<?php
										}
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
	</div>
</div>