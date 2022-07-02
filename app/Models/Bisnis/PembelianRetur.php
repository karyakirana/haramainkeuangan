<?php

namespace App\Models\Bisnis;

use App\Haramain\Master\Models\GudangTrait;
use App\Haramain\Master\Models\SupplierTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianRetur extends Model
{
    use HasFactory, SupplierTrait, GudangTrait;
    protected $table = 'pembelian_retur';
    protected $fillable = [
        'kode',
        'active_cash',
        'supplier_id',
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

    public function returDetail()
    {
        return $this->hasMany(PembelianReturDetail::class, 'pembelian_retur_id');
    }
}
