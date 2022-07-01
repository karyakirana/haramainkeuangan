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
        return $this->akun();
    }

    public function akunPiutang()
    {
        return $this->akun();
    }
}
