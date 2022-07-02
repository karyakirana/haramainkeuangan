<?php

namespace App\Models\Akuntansi;

use App\Haramain\Kasir\Models\AkunTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class JurnalTransaksi extends Model
{
    use HasFactory, AkunTrait;
    protected $table = 'haramain_keuangan.jurnal_transaksi';
    protected $fillable = [
        'active_cash',
        'jurnal_type',
        'jurnal_id',
        'akun_id',
        'nominal_debet',
        'nominal_kredit',
        'keterangan'
    ];

    public function jurnalableTransaksi(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'jurnal_type', 'jurnal_id');
    }
}
