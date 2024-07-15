<?php

$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM tb_menu WHERE id_menu = '$id'");

$_SESSION['info'] = 'Menghapus';
header('location:?page=menu')
?>