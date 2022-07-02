<?php namespace App\Haramain\Kasir\Models;

use App\Models\Akuntansi\Akun;

trait AkunTrait
{
    public function akun()
    {
        return $this->belongsTo(Akun::class, 'akun_id');
    }

    public function akunKas()
    {
        return $this->belongsTo(Akun::class, 'akun_kas_id');
    }

    public function akunPiutang()
    {
        return $this->belongsTo(Akun::class, 'akun_tujuan_id');
    }
}
