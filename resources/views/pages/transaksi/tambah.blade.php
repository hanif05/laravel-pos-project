@extends('layouts/apps')

@section('content')
<div class="col-md-12">
	<section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>

			<h2 class="panel-title">Transaksi Produk {{ $produk->nama }}</h2>
		</header>
		<form name="form" class="form-horizontal form-bordered" method="POST" action="/transaksi/simpan">
			@csrf
			<div class="panel-body">
				<div class="form-group">
					<label class="col-md-3 control-label" for="inputDefault">Kode Produk</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="inputDefault" name="produk_id" value="{{$produk->id}}" readonly="">
					</div>
				</div>			
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-md-3 control-label" for="inputDefault">Harga Produk</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="harga" name="harga" value="{{$produk->harga}}" readonly="">
					</div>
				</div>			
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-md-3 control-label" for="inputDefault">Jumlah</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="jumlah" name="jumlah" required="">
					</div>
				</div>			
			</div>
			<footer class="panel-footer">
				<div class="row">
					<div class="col-sm-9 col-sm-offset-3">
						<input type="button" class="btn btn-success" id="beli" value="BELI" onClick="kali()">
					</div>
				</div>
			</footer>
			<hr>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-md-3 control-label" for="inputDefault">Total Bayar</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="inputDefault" name="total" value="" readonly="">
					</div>
				</div>			
			</div>
			<footer class="panel-footer">
				<div class="row">
					<div class="col-sm-9 col-sm-offset-3">
						<a href="{{ route('transaksi') }}" class="btn btn-default">Kembali</a>
						<button class="btn btn-primary">Simpan</button>
					</div>
				</div>
			</footer>
		</form>
	</section>
</div>


@stop
@push('scripts')

<script LANGUAGE="JavaScript"> 
	function cek(){ 
		if(form.harga.value == "" || form.jumlah.value == ""){ 
	  		alert("Form Jumlah Tidak boleh kosong"); 
	  	exit; 
		} 
	} 
	function kali() { 
		cek(); 
		a=eval(form.harga.value); 
		b=eval(form.jumlah.value); 
		c=a*b 
		form.total.value = c; 
	} 
</script>  


@endpush