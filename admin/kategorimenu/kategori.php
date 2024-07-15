<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Kategori Menu</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="info-data" data-infodata="<?php if(isset($_SESSION['info'])){
		echo $_SESSION['info']; } unset($_SESSION['info']); ?>">
	</div>
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<a class="btn btn-primary" data-toggle="modal" data-target="#tambah" href="#">Tambah Kategori Menu</a>
							<br><br>
							<table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr class="bg-primary">
										<th>No</th>
										<th>Nama Kategori</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									include"../koneksi.php";
                    				//  mysqli_query untuk eksekusi
									$tampil = mysqli_query($koneksi,"SELECT * FROM tb_jenismenu");
									$no=1;
									while ($data = mysqli_fetch_array($tampil)) { ?>
										<tr>
											<td><?= $no ?></td>
											<td><?= $data['nama']?></td>
											<td>
												<a class="btn btn-sm btn-danger delete-data" href="?page=kategori_hapus&id=<?=$data['id']?>"><i class="fas fa-trash"></i> Hapus</a>
											</td>
										</tr>
										<?php
										$no++;
									}
									?>
								</tbody>
							</table><br><br>
						</div>
					</div>
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
	</div>
</div>

<div class="modal fade" id="tambah">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<form action="?page=kategori_add" method="post">
				<div class="modal-header bg-info">
					<h5 class="modal-title">Tambah Kategori Menu Baru</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="text" name="nama" class="form-control" placeholder="Kategori Menu" required>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-success">Tambahkan</button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>