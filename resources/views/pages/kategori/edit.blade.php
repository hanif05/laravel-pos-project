@extends('layouts/apps')

@section('content')

<div class="col-md-12">
	<section class="panel">
		<header class="panel-heading">
			<div class="panel-actions">
				<a href="#" class="fa fa-caret-down"></a>
				<a href="#" class="fa fa-times"></a>
			</div>

			<h2 class="panel-title">Edit Kategori {{$kategori->nama_kategori}}</h2>
		</header>
		<form class="form-horizontal form-bordered" method="POST" action="{{ route('kategori/update', $kategori->id) }}">
			@csrf
			<div class="panel-body">
				<div class="form-group">
					<label class="col-md-3 control-label" for="inputDefault">Nama Kategori</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="inputDefault" name="nama_kategori" value="{{$kategori->nama_kategori}}">
					</div>
				</div>			
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-md-3 control-label" for="inputDefault">Deskripsi</label>
					<div class="col-md-6">
						<textarea class="form-control" rows="3" data-plugin-maxlength="" maxlength="140" name="deskripsi">{{$kategori->deskripsi}}</textarea>
					</div>
				</div>			
			</div>
			<footer class="panel-footer">
				<div class="row">
					<div class="col-sm-9 col-sm-offset-3">
						<a href="{{ route('kategori.index') }}" class="btn btn-default">Kembali</a>
						<button class="btn btn-warning">Update</button>
					</div>
				</div>
			</footer>
		</form>
	</section>

@stop