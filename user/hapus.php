<?php

$id = $_GET['id'];
$delete = mysqli_query($koneksi,"DELETE FROM tb_pesanan WHERE id_menu = '$id'");
if($delete){
	$_SESSION['info'] = 'Dihapus';
	header('location:index.php');
}
?>