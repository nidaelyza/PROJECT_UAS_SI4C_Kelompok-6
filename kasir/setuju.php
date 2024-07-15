<?php
include"../koneksi.php";

$id = $_GET['id'];

$set = mysqli_query($koneksi, "UPDATE tb_transaksi SET status = 'Selesai' WHERE id_trans = '$id'");
if($set){
	$_SESSION['info'] = 'Disetujui';
	header('location:index.php');
}else{
	$_SESSION['info'] = 'Gagal Disetujui';
	header('location:index.php');
}
?>