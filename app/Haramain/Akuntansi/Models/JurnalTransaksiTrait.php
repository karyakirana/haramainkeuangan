<?php namespace App\Haramain\Akuntansi\Models;

use App\Models\Akuntansi\JurnalTransaksi;

trait JurnalTransaksiTrait
{
    public function jurnalTransaksiMorph()
    {
        return $this->morphMany(JurnalTransaksi::class, 'jurnalableTransaksi', 'jurnal_type', 'jurnal_id');
    }
}
