<?php

namespace App\Models\Bisnis;

use App\Haramain\Master\Models\CustomerTrait;
use App\Haramain\Master\Models\GudangTrait;
use App\Haramain\Master\Models\UserTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanRetur extends Model
{
    use HasFactory, CustomerTrait, GudangTrait, UserTrait;
    protected $table = 'penjualan_retur';
    protected $fillable = [
        'kode',
        'active_cash',
        'jenis_retur',
        'customer_id',
        'gudang_id',
        'user_id',
        'tgl_nota',
        'tgl_tempo',
        'status_bayar',
        'total_barang',
        'ppn',
        'biaya_lain',
        'total_bayar',
        'keterangan',
    ];

    public function returDetail()
    {
        return $this->hasMany(PenjualanReturDetail::class, 'penjualan_retur_id');
    }
}
