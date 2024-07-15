const notifikasi = $('.info-data').data('infodata');

if(notifikasi == "Mengubah"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Berhasil '+notifikasi+' Data Profil Anda',
	})
}
if(notifikasi == "Login"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Berhasil '+notifikasi+' ke Akun Anda',
	})
}
if(notifikasi == "Ditambah"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Berhasil '+notifikasi+' ke Dalam Keranjang',
	})
}
if(notifikasi == "Menambah"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Berhasil '+notifikasi+' Qty',
	})
}
if(notifikasi == "Berhasil"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Akun Anda '+notifikasi+' di Buat',
	})
}
if(notifikasi == "Dihapus"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Menu '+notifikasi+' Dalam Pesanan Anda',
	})
}
if(notifikasi == "Menghapus"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Berhasil '+notifikasi+' Menu',
	})
}
if(notifikasi == "Hapus"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Berhasil '+notifikasi+' Kategori Menu',
	})
}
if(notifikasi == "Mengedit"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Berhasil '+notifikasi+' Menu',
	})
}
if(notifikasi == "Baru"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Menu '+notifikasi+' Ditambahkan',
	})
}
if(notifikasi == "Menu"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Kategori '+notifikasi+' Baru Ditambahkan',
	})
}
if(notifikasi == "Diproses"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Pesanan Anda Sedang '+notifikasi+ ', Lakukan Transaksi pada bagian Transaksi',
	})
}
if(notifikasi == "Kasir"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Hubungi '+notifikasi+' Untuk Meminta Struk Transaksi Anda',
	})
}


if(notifikasi == "Gagal Diproses"){
	Swal.fire({
		icon: 'error',
		title: 'Gagal',
		text: 'Pesanan Anda '+notifikasi+', Tambahkan Alamat dan No. HP pada Profil Anda',
	})
}


$('.delete-data').on('click', function(e){
	e.preventDefault();
	var getlink = $(this).attr('href');
	Swal.fire({
		title: 'Yakin Ingin di Hapus?',
		text: "Menu Anda Akan di Hapus Permanen!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yakin!'
	}).then((result) => {
		if (result.value) {
			window.location.href = getlink;
		}
	})
})
$('.setdata').on('click', function(e){
	e.preventDefault();
	var getlink = $(this).attr('href');
	Swal.fire({
		title: 'Konfirmasi Pembayaran?',
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes!'
	}).then((result) => {
		if (result.value) {
			window.location.href = getlink;
		}
	})
})