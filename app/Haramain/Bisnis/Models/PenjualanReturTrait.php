<?php namespace App\Haramain\Bisnis\Models;

use App\Models\Bisnis\PenjualanRetur;

trait PenjualanReturTrait
{
    public function PenjualanRetur()
    {
        return $this->belongsTo(PenjualanRetur::class, 'penjualan_retur_id');
    }
}
