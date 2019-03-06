@extends('layouts/apps')

@section('content')
<div class="col-md-12">
	<section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>

			<h2 class="panel-title">Pilih Produk</h2>
		</header>
		
			<div class="panel-body">
			<div class="table-responsive">

				<table class="table table-hover" id="datatable">
					<thead>
						<tr>
							
							<th>Nama</th>
							<th>Harga</th>
							<th>Stok</th>
							<th>Deskripsi</th>
							<th>Aksi</th>
							
							
						</tr>
					</thead>
					<tbody>
						
					</tbody>
					<tfoot>
						<tr>
							<th>Nama</th>
							<th>Harga</th>
							<th>Stok</th>
							<th>Deskripsi</th>
							<th>Aksi</th>
						</tr>
					</tfoot>
				</table>

			</div>

		</div>
		
	</section>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h5 class="modal-title" id="exampleModalLabel">Transaksi</h5>
			</div>
			<div class="modal-body">
				<div class="form-panel">
					<form class="form-horizontal style-form" method="POST" action="">
						@csrf
						<div class="form-group">
							<label class="col-md-3 control-label">Total Bayar</label>
							<div class="col-md-6">
								<input type="text" class="form-control input-rounded" name="nama_kategori" placeholder="Masukan Nama Kategori" required="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Bayar</label>
							<div class="col-md-6">
								<input type="text" class="form-control input-rounded" name="nama_kategori" placeholder="Masukan Nama Kategori" required="">
							</div>
						</div>
						
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
@stop
@push('scripts')
	
	<script >
		$('#datatable').DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			ajax: "{{ route('table.pilih') }}",
			columns: [
				{ data: 'DT_RowIndex', name: 'id' },
				{ data: 'nama', name: 'nama' },
				{ data: 'deskripsi', name: 'deskripsi' },
				{ data: 'harga', name: 'harga' },
				{ data: 'aksi', name: 'aksi' }
			]
		});
	</script>


@endpush