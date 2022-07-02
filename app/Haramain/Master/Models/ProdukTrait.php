<?php namespace App\Haramain\Master\Models;

use App\Models\Master\Produk;

trait ProdukTrait
{
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
