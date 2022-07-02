<?php namespace App\Haramain\Bisnis\Models;

use App\Models\Bisnis\Pembelian;

trait PembelianTrait
{
    public function pembelian()
    {
        return $this->belongsTo(Pembelian::class, 'pembelian_id');
    }
}
