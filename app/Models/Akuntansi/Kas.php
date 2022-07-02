<?php

namespace App\Models\Akuntansi;

use App\Haramain\Bisnis\Models\KodeTraits;
use App\Haramain\Kasir\Models\AkunTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    use HasFactory, AkunTrait, KodeTraits;
    protected $table = 'haramain_keuangan.kas';

    protected $fillable = [
        'kode',
        'active_cash',
        'type',
        'jurnal_type',
        'jurnal_id',
        'akun_id',
        'nominal_debet',
        'nominal_kredit',
        'nominal_saldo'
    ];

    public function kasable()
    {
        return $this->morphTo(__FUNCTION__, 'jurnal_type', 'jurnal_id');
    }
}
