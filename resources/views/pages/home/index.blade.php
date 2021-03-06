@extends('layouts/apps')

@section('content')
<div class="row">
	<div class="col-md-12 col-lg-6 col-xl-6">
		<section class="panel panel-featured-left panel-featured-primary">
			<div class="panel-body">
				<div class="widget-summary">
					<div class="widget-summary-col widget-summary-col-icon">
						<div class="summary-icon bg-primary">
							<i class="fa fa-tags"></i>
						</div>
					</div>
					<div class="widget-summary-col">
						<div class="summary">
							<h4 class="title">Total Produk</h4>
							<div class="info">
								<strong class="amount">{{totalproduk()}}</strong>

							</div>
						</div>
						<div class="summary-footer">
							<a class="text-muted text-uppercase" href="/produk">(view all)</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="col-md-12 col-lg-6 col-xl-6">
		<section class="panel panel-featured-left panel-featured-primary">
			<div class="panel-body">
				<div class="widget-summary">
					<div class="widget-summary-col widget-summary-col-icon">
						<div class="summary-icon bg-primary">
							<i class="fa fa-shopping-cart"></i>
						</div>
					</div>
					<div class="widget-summary-col">
						<div class="summary">
							<h4 class="title">Total Transaksi</h4>
							<div class="info">
								<strong class="amount">{{totaltransaksi()}}</strong>

							</div>
						</div>
						<div class="summary-footer">
							<a class="text-muted text-uppercase" href="/transaksi">(view all)</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	
</div>



@endsection