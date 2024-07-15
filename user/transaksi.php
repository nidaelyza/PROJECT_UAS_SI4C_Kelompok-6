<?php
$id = $_GET['id'];
$id_menu = $_GET['menu'];
$totall = $_GET['tot'];
$status = 'Menunggu Persetujuan';

$user = $_SESSION['user'];
$sl = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$user'");
$ser = mysqli_fetch_array($sl);
$rer = $ser['id_user'];

// Cek Alamat dan Notelp
$cekks = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user = '$rer'");
$al = mysqli_fetch_array($cekks);
$alamat = $al['alamat'];
$notelp = $al['notelp'];

if($alamat == '' or $notelp == ''){
	$_SESSION['info'] = 'Gagal Diproses';
	header('location:index.php');
}else{
	$insert = mysqli_query($koneksi, "INSERT INTO tb_order (id_user,id_menu,qty) SELECT id_user,id_menu,qty FROM tb_pesanan WHERE id_user = $rer");
	$del = mysqli_query($koneksi, "DELETE FROM tb_pesanan WHERE id_user = $rer");

	$inn = mysqli_query($koneksi, "INSERT INTO tb_transaksi (id_user,id_menu,total,status) VALUES ('$rer','$id_menu','$totall','$status')");

	if($insert && $del && $inn){
		$_SESSION['info'] = 'Diproses';
		header('location:index.php');
	}else{
		header('location:index.php');
	}
}

?>