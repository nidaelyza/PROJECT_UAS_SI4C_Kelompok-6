<?php

	$nama = $_POST['nama_menu'];	//parameter dari form
	$harga = $_POST['harga'];	//parameter dari form
	$jenis = $_POST['jenis'];	//parameter dari form

	mysqli_query($koneksi, "INSERT INTO tb_menu (nama_menu,jenis,harga)
		VALUES ('$nama','$jenis','$harga')");
	// mengalihkan kehalaman index.php
	$_SESSION['info'] = 'Baru';
	header('location:?page=menu')
	?>