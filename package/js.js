const notifikasi = $('.info-data').data('infodata');

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
if(notifikasi == "Diproses"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Pesanan Anda Sedang '+notifikasi,
	})
}
if(notifikasi == "Disimpan"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Data Berhasil '+notifikasi,
	})
}
if(notifikasi == "Diterima"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Pesanan Anda '+notifikasi,
	})
}
if(notifikasi == "Terkirim"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Ulasan Berhasil '+notifikasi,
	})
}
if(notifikasi == "Dihapus"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Produk '+notifikasi+' Dalam Keranjang'
	})
}
if(notifikasi == "Gagal Diproses"){
	Swal.fire({
		icon: 'error',
		title: 'Gagal',
		text: 'Pesanan Anda '+notifikasi+', Tambahkan Alamat dan No. HP pada Profil Anda',
	})
}
if(notifikasi == "Tidak Mencukupi"){
	Swal.fire({
		icon: 'error',
		title: 'Gagal',
		text: 'Stok '+notifikasi,
	})
}
if(notifikasi == "Gagal Diterima"){
	Swal.fire({
		icon: 'error',
		title: 'Gagal',
		text: 'Pesanan Anda '+notifikasi,
	})
}
if(notifikasi == "Gagal Disimpan" || notifikasi == "Gagal Dihapus"){
	Swal.fire({
		icon: 'error',
		title: 'Gagal',
		text: 'Data '+notifikasi,
	})
}
if(notifikasi == "Berhasil"){
	Swal.fire({
		icon: 'success',
		title: 'Sukses',
		text: 'Transaksi Anda '+notifikasi,
	})
}
if(notifikasi == "Uang Tidak Mencukupi"){
	Swal.fire({
		icon: 'error',
		title: 'Gagal',
		text: 'Transaksi Anda Gagal, '+notifikasi,
	})
}
if(notifikasi == "Tidak"){
	Swal.fire({
		icon: 'error',
		title: 'Gagal',
		text: 'Ulasan Anda '+notifikasi+' Terkirim',
	})
}

$('.delete-data').on('click', function(e){
	e.preventDefault();
	var getlink = $(this).attr('href');
	Swal.fire({
		title: 'Yakin Ingin di Hapus?',
		text: "Data Akan di Hapus Permanen!",
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