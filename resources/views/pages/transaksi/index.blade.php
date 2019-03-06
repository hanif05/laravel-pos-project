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
				<a href="/transaksi/pilih" title="Tambah Data" class="fa fa-plus modal-show"></a>
			</div>

			<h2 class="panel-title">Transaksi</h2>
		</header>
		<div class="panel-body">
			<div class="table-responsive">

				<table class="table table-hover" id="datatable">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama Produk</th>
							<th>Jumlah</th>
							<th>Harga</th>
							<th>Total Bayar</th>
							<th>Tanggal Transaksi</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
					<tfoot>
						<tr>
							<th>#</th>
							<th>Nama Produk</th>
							<th>Jumlah</th>
							<th>Harga</th>
							<th>Total Bayar</th>
							<th>Tanggal Transaksi</th>
							<th>Aksi</th>
						</tr>
					</tfoot>
				</table>

			</div>

		</div>
	</section>
</div>


@stop
@push('scripts')

	<script >
		$('#datatable').DataTable({
			responsive: true,
			processing: true,
			serverSide: true,
			ajax: "{{ route('table.transaksi') }}",
			columns: [
				{ data: 'DT_RowIndex', name: 'transaksi.id' },
				{ data: 'nama', name: 'produk.nama' },
				{ data: 'jumlah', name: 'transaksi.jumlah' },
				{ data: 'harga', name: 'transaksi.harga' },
				{ data: 'total', name: 'transaksi.total' },
				{ data: 'created_at', name: 'transaksi.created_at' },
				{ data: 'aksi', name: 'aksi' }

			]
		});
	</script>


@endpush