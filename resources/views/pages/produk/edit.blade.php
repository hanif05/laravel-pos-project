@extends('layouts/apps')


@section('content')
<div class="col-md-12">
	<section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>

			<h2 class="panel-title">Edit Kategori {{$produk->nama}}</h2>
		</header>
		<form class="form-horizontal form-bordered" method="POST" action="{{ route('produk/update', $produk->id) }}">
			@csrf
			<div class="panel-body">
				<div class="form-group">
					<label class="col-md-3 control-label" for="inputDefault">Nama Produk</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="inputDefault" name="nama" value="{{$produk->nama}}">
					</div>
				</div>			
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-md-3 control-label">Kategori</label>
					<div class="col-md-6">
						<select class="form-control" name="kategori_id">
							@foreach($kategori as $category)
							<option value="{{$category->id}}" @if($produk->kategori_id == "$category->id") selected @endif>{{$category->nama_kategori}}</option>
							@endforeach
						</select>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-md-3 control-label" for="inputDefault">Harga Produk</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="inputDefault" name="harga" value="{{$produk->harga}}">
					</div>
				</div>			
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-md-3 control-label" for="inputDefault">Stok Produk</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="inputDefault" name="stok" value="{{$produk->stok}}">
					</div>
				</div>			
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-md-3 control-label" for="inputDefault">Deskripsi</label>
					<div class="col-md-6">
						<textarea class="form-control" rows="3" data-plugin-maxlength="" maxlength="140" name="deskripsi">{{$produk->deskripsi}}</textarea>
					</div>
				</div>			
			</div>
			<footer class="panel-footer">
				<div class="row">
					<div class="col-sm-9 col-sm-offset-3">
						<a href="{{ route('produk.index') }}" class="btn btn-default">Kembali</a>
						<button class="btn btn-warning">Update</button>
					</div>
				</div>
			</footer>
		</form>
	</section>
</div>

@stop