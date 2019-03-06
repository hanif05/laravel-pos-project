<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route login
Route::get('/', 'LoginController@index')->name('login');
Route::post('/', 'LoginController@validasi')->name('validasi');
Route::get('/logout', 'LoginController@logout');
Route::get('/daftar', 'LoginController@daftar');
Route::post('/proses_daftar', 'LoginController@proses_daftar');

Route::group(['middleware' => ['auth']], function(){

	// route home
	Route::get('/home', 'HomeController@index');

	// route kategori
	Route::resource('/kategori', 'KategoriController')->except(['create']);
	Route::get('/table/kategori', 'KategoriController@dataTable')->name('table.kategori');
	Route::post('/kategori/tambah', 'KategoriController@store');
	Route::post('/kategori/{id}/update', 'KategoriController@update')->name('kategori/update');
	Route::get('/kategori/{id}/hapus', 'KategoriController@hapus')->name('kategori.hapus');

	// route produk
	Route::resource('/produk', 'ProdukController')->except([
		'create'
	]);
	Route::get('/table/produk', 'ProdukController@getJoin')->name('table.produk');
	Route::post('/produk/{id}/update', 'ProdukController@update')->name('produk/update');


	// route transaksi
	Route::get('/transaksi', 'TransaksiController@index')->name('transaksi');
	Route::get('/transaksi/pilih', 'TransaksiController@pilih_produk');
	Route::get('/transaksi/{id}/tambah', 'TransaksiController@tambah')->name('transaksi.tambah');
	Route::post('/transaksi/simpan', 'TransaksiController@simpan_transaksi');
	Route::get('/transaksi/{id}/detail', 'TransaksiController@detail_transaksi')->name('transaksi.detail');
	Route::get('/table/transaksi', 'TransaksiController@getJoin')->name('table.transaksi');
	Route::get('/table/pilih', 'TransaksiController@dataTable')->name('table.pilih');
});