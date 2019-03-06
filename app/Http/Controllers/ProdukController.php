<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Kategori;
use DataTables;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('pages/produk/index', ['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Produk::create($request->all());
       
        return redirect('/produk')->with('berhasil', 'Data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Produk::find($id);
        $kategori = Kategori::all();
        return view('pages/produk/edit', ['produk' => $data, 'kategori' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Produk::find($id);

        $data->update($request->all());

        return redirect('/produk')->with('berhasil', 'Data berhasil di simpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Produk::find($id);

        $data->delete();
    }

    

    public function getJoin()
    {
        
        $data = Produk::join('kategori', 'produk.kategori_id', '=', 'kategori.id')->select(['produk.id', 'produk.nama', 'kategori.nama_kategori', 'produk.harga', 'produk.stok', 'produk.deskripsi']);

        return DataTables::of($data)
            ->addColumn('aksi', function($data){
                return view('layouts/includes/_action', [
                    'data' => $data,
                    'url_edit' => route('produk.edit', $data->id),
                    'url_destroy' => route('produk.destroy', $data->id)

                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['aksi'])
            ->make(true);
    }
}
