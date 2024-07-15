<?php

	$id = $_POST['id'];	//parameter dari form
	$nama = $_POST['nama'];	//parameter dari form
	$harga = $_POST['harga'];	//parameter dari form
	$kategori = $_POST['kategori'];	//parameter dari form

	if (empty($kategori)) {
		mysqli_query($koneksi, "UPDATE tb_menu SET nama_menu= '$nama',
			harga = '$harga',
			jenis ='$kategori' 
			WHERE id_menu= '$id'");
	}
	else{
		mysqli_query($koneksi, "UPDATE tb_menu SET nama_menu='$nama',
			harga = '$harga',
			jenis ='$kategori'
			WHERE id_menu= '$id'");
	}


	// mengalihkan kehalaman menu
	$_SESSION['info'] = 'Mengedit';
	header('location:?page=menu')
	
	?>