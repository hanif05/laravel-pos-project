@extends('layouts/apps')

@section('content')
<div class="col-md-12">
	<section class="panel">
		<header class="panel-heading">
			@if(session('berhasil'))
				{{alertsukses()}}
			@endif
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" title="Tambah Data" class="fa fa-plus modal-show" data-toggle="modal" data-target="#exampleModal"></a>
			</div>
			<h2 class="panel-title">Data Kategori Produk</h2>
		</header>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover mb-none" id="datatable">
					<thead>
						<tr>
							<th>#</th>
							<th>Kategori</th>
							<th>Deskripsi</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>


					</tbody>
					<tfoot>
						<tr>
							<th>#</th>
							<th>Kategori</th>
							<th>Deskripsi</th>
							<th>Action</th>
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
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Kategori</h5>
			</div>
			<div class="modal-body">
				<div class="form-panel">
					<form class="form-horizontal style-form" method="POST" action="/kategori/tambah">
						@csrf
						<div class="form-group">
							<label class="col-md-3 control-label">Nama Kategori</label>
							<div class="col-md-6">
								<input type="text" class="form-control input-rounded" name="nama_kategori" placeholder="Masukan Nama Kategori" required="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="textareaDefault">Deskripsi Kategori</label>
							<div class="col-md-6">
								<textarea class="form-control" rows="3" data-plugin-maxlength="" maxlength="140" name="deskripsi"></textarea>

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
			ajax: "{{ route('table.kategori') }}",
			columns: [
				{ data: 'DT_RowIndex', name: 'id' },
				{ data: 'nama_kategori', name: 'nama_kategori' },
				{ data: 'deskripsi', name: 'deskripsi' },
				{ data: 'aksi', name: 'aksi' }
			]
		});
	</script>


@endpush