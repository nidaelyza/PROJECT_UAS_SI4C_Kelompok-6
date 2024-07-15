<?php

	$nama = $_POST['nama'];	//parameter dari form

	mysqli_query($koneksi, "INSERT INTO tb_jenismenu (nama)
		VALUES ('$nama')");
	// mengalihkan kehalaman index.php
	$_SESSION['info'] = 'Menu';
	header('location:?page=kategori')
	?>