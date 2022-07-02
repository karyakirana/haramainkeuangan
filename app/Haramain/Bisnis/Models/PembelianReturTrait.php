<?php namespace App\Haramain\Bisnis\Models;

use App\Models\Bisnis\PembelianRetur;

trait PembelianReturTrait
{
    public function pembelianRetur()
    {
        return $this->belongsTo(PembelianRetur::class, 'pembelian_retur_id');
    }
}
