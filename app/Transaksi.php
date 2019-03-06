<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['total', 'produk_id', 'jumlah', 'harga'];

    public function produk()
    {
    	return $this->belongsTo(Produk::class);
    }
}
