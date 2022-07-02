<?php

namespace App\Models\Kasir;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HutangPembelian extends Model
{
    use HasFactory;
    protected $table = 'haramain_keuangan.hutang_pembelian';
    protected $fillable = [
        'saldo_hutang_pembelian_id',
        'pembelian_type',
        'pembelian_id',
        'status_bayar',
        'total_bayar',
        'kurang_bayar',
    ];

    public function saldoHutang()
    {
        return $this->belongsTo(SaldoHutangPembelian::class, 'saldo_hutang_pembelian_id');
    }

    public function hutangPembelian()
    {
        return $this->morphTo(__FUNCTION__, 'pembelian_type', 'pembelian_id');
    }
}
