<?php

namespace App\Http\Controllers;
use App\Transaksi;
use App\Produk;
use DataTables;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
    	$data = Transaksi::all();
    	return view('pages/transaksi/index', ['data' => $data]);
    }

    public function pilih_produk()
    {
    	return view('pages/transaksi/pilih_produk');
    }
    public function tambah($id)
    {
    	$data = Produk::find($id);
    	return view('pages/transaksi/tambah', ['produk' => $data]);
    }
    public function simpan_transaksi(Request $request)
    {
        $data = Transaksi::create($request->all());

        return redirect('/transaksi')->with('berhasil', 'Data berhasil di simpan');
    }

    public function detail_transaksi($id)
    {
        $data = Transaksi::find($id);

        return view('pages/transaksi/detail', ['data' => $data]);
    }

    public function dataTable()
    {
        $data = Produk::query();

        return DataTables::of($data)
            ->addColumn('aksi', function($data){
                return view('layouts/includes/_pilih', [
                    'data' => $data,
                    'url_pilih' => route('transaksi.tambah', $data->id),

                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function getJoin()
    {
        $data = Transaksi::join('produk', 'transaksi.produk_id', '=', 'produk.id')->select(['transaksi.id', 'produk.nama', 'transaksi.jumlah', 'transaksi.harga', 'transaksi.total', 'transaksi.created_at']);

        return DataTables::of($data)
            ->addColumn('aksi', function($data){
                return view('layouts/includes/_aksi', [
                    'data' => $data,
                    'url_detail' => route('transaksi.detail', $data->id),
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['aksi'])
            ->make(true);
    }
}
