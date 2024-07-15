<?php
session_start();
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM tb_jenismenu WHERE id = '$id'");

$_SESSION['info'] = 'Hapus';
header('location:?page=kategori')
?>