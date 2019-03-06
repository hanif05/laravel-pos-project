@extends('layouts/apps')

@section('content')
<section class="panel">
	<div class="panel-body">
		<div class="invoice">
			<div class="bill-info">
				<div class="row">
					<div class="col-md-6">
						<div class="bill-to">
							<h2 class="h2 mt-none mb-sm text-dark text-bold">INVOICE</h2>
						<h4 class="h4 m-none text-dark text-bold">#{{ $data->id }}</h4>
						</div>
					</div>
					<div class="col-md-6">
						<div class="bill-data text-right">
							<p class="mb-none">
								<span class="text-dark">Tanggal Transaksi:</span>
								<span class="value">{{ $data->created_at }}</span>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="table-responsive">
				<table class="table invoice-items">
					<thead>
						<tr class="h4 text-dark">
							<th id="cell-item" class="text-semibold">Produk</th>
							<th id="cell-desc" class="text-semibold">Deskripsi</th>
							<th id="cell-price" class="text-center text-semibold">Jumlah</th>
							<th id="cell-qty" class="text-center text-semibold">Harga</th>
							<th id="cell-total" class="text-center text-semibold">Total</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="">{{ $data->produk->nama }}</td>
							<td class="">{{ $data->produk->deskripsi }}</td>
							<td class="text-center">{{ $data->jumlah }}</td>
							<td class="text-center">{{ $data->harga }}</td>
							<td class="text-center">{{ $data->total }}</td>
						</tr>
					</tbody>
				</table>
			</div>

			
		</div>

		<div class="text-right mr-lg">
			<a href="{{ route('transaksi') }}" class="btn btn-default">Kembali</a>
			<a href="#" class="btn btn-primary ml-sm"><i class="fa fa-print"></i> Print</a>
		</div>
	</div>
</section>




@stop