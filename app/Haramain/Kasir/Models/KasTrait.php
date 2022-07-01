<?php namespace App\Haramain\Kasir\Models;

use App\Models\Akuntansi\Kas;

trait KasTrait
{
    public function kasMorph()
    {
        return $this->morphOne(Kas::class, 'kasable', 'jurnal_type', 'jurnal_id');
    }
}
