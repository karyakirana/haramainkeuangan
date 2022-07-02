<?php

namespace App\Models\Bisnis;

use App\Haramain\Master\Models\CustomerTrait;
use App\Haramain\Master\Models\GudangTrait;
use App\Haramain\Master\Models\UserTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory, CustomerTrait, GudangTrait, UserTrait;
    protected $table = 'penjualan';
    protected $fillable = [
        'kode',
        'active_cash',
        'customer_id',
        'gudang_id',
        'user_id',
        'tgl_nota',
        'tgl_tempo',
        'jenis_bayar',
        'status_bayar',
        'total_barang',
        'ppn',
        'biaya_lain',
        'total_bayar',
        'keterangan',
        'print',
    ];

    public function penjualanDetail()
    {
        return $this->hasMany(PenjualanDetail::class, 'penjualan_id');
    }
}
