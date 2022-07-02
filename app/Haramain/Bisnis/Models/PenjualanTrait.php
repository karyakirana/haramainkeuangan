<?php namespace App\Haramain\Bisnis\Models;

use App\Models\Bisnis\Penjualan;

trait PenjualanTrait
{
    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class, 'penjualan_id');
    }
}
