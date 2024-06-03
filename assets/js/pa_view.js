console.log('tes ini pa view js');

const flashData = $('.flashdata').data("flashdata");

if (flashData) {

	Swal.fire({
		title: "Sukses!",
		text: flashData,
		icon: "success"
	  });
	
}

// //tombol hapus
// $('.tombol-hapus').on('click', function (e) {
// 	e.preventDefault();

// 	//ambil link untuk hapus
// 	const href = $(this).attr('href');

// 	Swal.fire({
// 		title: "Apakah Anda Yakin?",
// 		text: "data yg dihapus tidak dapat dikembalikan lagi!",
// 		icon: "warning",
// 		showCancelButton: true,
// 		confirmButtonColor: "#3085d6",
// 		cancelButtonColor: "#d33",
// 		confirmButtonText: "Yes, Hapus!"
// 	  }).then((result) => {
// 		if (result.isConfirmed) {
// 		  document.location.href = href;
// 		}
// 	  });
// })

