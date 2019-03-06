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

			<h2 class="panel-title">Data Produk</h2>
		</header>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover mb-none" id="datatable">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama</th>
							<th>Kategori</th>
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
							<th>#</th>
							<th>Nama</th>
							<th>Kategori</th>
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
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Produk</h5>
			</div>
			<div class="modal-body">
				<div class="form-panel">
					<form class="form-horizontal style-form" method="POST" action="{{ route('produk.store') }}">
						@csrf
						<div class="form-group">
							<label class="col-md-3 control-label">Nama Produk</label>
							<div class="col-md-6">
								<input type="text" class="form-control input-rounded" name="nama" placeholder="Masukan Nama Produk" required="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Kategori</label>
							<div class="col-md-6">
								<select class="form-control " name="kategori_id">
									@foreach($kategori as $category)
									<option value="{{$category->id}}">{{$category->nama_kategori}}</option>
									@endforeach
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label">Harga</label>
							<div class="col-md-6">
								<input type="text" class="form-control input-rounded" name="harga" placeholder="Masukan Harga Produk" required="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Stok</label>
							<div class="col-md-6">
								<input type="text" class="form-control input-rounded" name="stok" placeholder="Masukan Stok Produk" required="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="textareaDefault">Deskripsi Produk</label>
							<div class="col-md-6">
								<textarea class="form-control" rows="3" data-plugin-maxlength="" maxlength="140" name="deskripsi"></textarea>

							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
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
			ajax: "{{ route('table.produk') }}",
			columns: [
				{ data: 'DT_RowIndex', name: 'produk.id' },
				{ data: 'nama', name: 'produk.nama' },
				{ data: 'nama_kategori', name: 'kategori.nama_kategori' },
				{ data: 'harga', name: 'produk.harga' },
				{ data: 'stok', name: 'produk.stok' },
				{ data: 'deskripsi', name: 'produk.deskripsi' },
				{ data: 'aksi', name: 'aksi' }

			]
		});
	</script>


@endpush