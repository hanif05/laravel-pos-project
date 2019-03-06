<?php

function totalproduk()
{
	return \App\Produk::count();
}

function totaltransaksi()
{
	return \App\Transaksi::count();
}

function alertsukses()
{
	 alert()->success('Berhasil','Data Berhasil Di Simpan' );
}