<?php
session_start();

if(isset($_POST['simpan'])){
	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$notelp = $_POST['notelp'];
	$alamat = $_POST['alamat'];

	$ubahdata = mysqli_query($koneksi, "UPDATE tb_user SET username = '$username', password = '$password', notelp = '$notelp', alamat = '$alamat' WHERE id_user = '$id'");

	if($ubahdata){
		$_SESSION['info'] = 'Mengubah';
		header('location:index.php');
	}
}
?>