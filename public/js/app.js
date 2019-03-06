
$('body').on('click', '.btn-delete', function(event){
	event.preventDefault();

	var me = $(this),
		url = me.attr('href'),
		title = me.attr('title'),
		csrf_token = $('meta[name="csrf-token"]').attr('content');	

	swal({
		title: 'Peringatan!!' ,
		text: 'Apakah Anda Yakin Ingin Menghapus Data ' + title + '?' ,
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Batal',
		confirmButtonText: 'Ya, Hapus Data!'
	}).then((result) => {
		if(result.value){
			$.ajax({
				url: url,
				type: "POST",
				data: {
					'_method': 'DELETE',
					'_token': csrf_token
				},

				success: function(response){
					$('#datatable').DataTable().ajax.reload();

					swal({
						type: 'success',
						title: 'Berhasil',
						text: 'Data Berhasil Di Hapus'
					});
				},
				error: function(xhr){
					swal({
						type: 'error',
						title: 'Ooppss...',
						text: 'Something Wrong!'
					});
				}

			});
		}
	});
});
