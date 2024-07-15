<?php
include"../koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_menu WHERE id_menu = '$id'");
$edit = mysqli_fetch_array($data);
?>

<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Edit Data Menu</h1>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<form method="post" action="?page=menu_update">
								<table class="table table-hover">
									<tr>
										<td>ID Menu</td>
										<td>:</td>
										<td><input type="text" class="form-control" value="<?= $edit['id_menu']?>" name="id" readonly=""></td>
									</tr>
									<tr>
										<td>Kategori</td>
										<td>:</td>
										<td>
											<select name="kategori" class="form-control" required>
												<option value="">Pilih Kategori</option>
												<?php
												$kategori = mysqli_query($koneksi,"SELECT * FROM tb_jenismenu");

												while ($data = mysqli_fetch_array($kategori)) { ?>
													<option value="<?=$data['id']?>">
														<?=$data['nama']?>
													</option>
													<?php
												}
												?>
											</select>
										</td>
									</tr>
									<tr>
										<td>Nama Menu</td>
										<td>:</td>
										<td><input type="text" class="form-control" value="<?= $edit['nama_menu']?>" name="nama"></td>
									</tr>
									<tr>
										<td>Harga</td>
										<td>:</td>
										<td><input type="text" class="form-control" value="<?= $edit['harga']?>" name="harga"></td>
									</tr>
									<tr>
										<td colspan="3">
											<input type="submit" value="Update" class="btn btn-sm btn-primary">
											<a href="?page=menu" class="btn btn-sm btn-danger">Kembali</a>
										</td>
									</tr>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>