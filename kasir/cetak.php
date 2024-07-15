<?php 
include"../koneksi.php";
$id_tr = $_GET['id'];
$cetak = mysqli_query($koneksi, "SELECT tb_transaksi.*, tb_user.*, tb_menu.*, tb_order.* FROM tb_transaksi JOIN tb_user ON tb_transaksi.id_user = tb_user.id_user JOIN tb_menu ON tb_transaksi.id_menu = tb_menu.id_menu JOIN tb_order ON tb_transaksi.id_user = tb_order.id_user WHERE id_trans ='$id_tr'");
$data = mysqli_fetch_array($cetak);
?>

<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<div class="invoice">
		<div class="invoice-content">
			<div class="invoice-header">
				<div class="logo">
					<img src="../logo.jpg" width="400" alt="Logo Teras">
					<h1 style="text-align: center; color:#4d4d4d;">TerasCaffe</h1>
				</div>
			</div>
			<hr>
			<h4 style="text-align: center; color:#4d4d4d;">Bukti Transaksi</h4>

			<div class="invoice-body">
				<table class="table-invoice">
					<tr>
						<th>Nama pelanggan</th>
						<td><?=$data['username']?></td>
					</tr>
					<tr>
						<th>Nomor telepon</th>
						<td><?=$data['notelp']?></td>
					</tr>
					<tr>
						<th>Alamat</th>
						<td><?=$data['alamat']?></td>
					</tr>
				</table>

				<table class="table-invoice">
					<tr>
						<th>Tanggal order</th>
						<td><?=$data['tanggal']?></td>
					</tr>
				</table>

				<table class="tb_byr">
					<tr>
						<th class="tb_heading">Jenis Menu</th>
						<th class="tb_heading">Harga</th>
					</tr>
					<tr>
						<td><?=$data['nama_menu']?></td>
						<td><?="Rp. " . $data['harga'] . " x " . $data['qty']?></td>
					</tr>
					<tr>
						<th colspan="" class="ub">Total</th>
						<td class="ub-col"><?="Rp. " . $data['total']?></td>
					</tr>
				</table>

				<div class="ket">
					<p><span>Keterangan : </span>-</p>
				</div>

				<div class="invoice-footer">
					<h3 class="foot_logo"><span>Teras</span> Caffe</h3>
					<p>Terima kasih Atas Kunjungan Anda.</p>
				</div>

			</div>
			<br>
		</div>

		<div class="printbtn" id="btnPrint">
			<img src="../printer.svg" width="48" alt="print icon">
			<span>Cetak Invoice</span>
		</div>

		<a href="index.php" class="btn-back">Kembali</a>
	</div>
</div>

<script>
	let print = document.getElementById('btnPrint');
	print.addEventListener('click', function(){
		return window.print();
	});
</script>