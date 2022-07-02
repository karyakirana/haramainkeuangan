<?php

namespace App\Models\Bisnis;

use App\Haramain\Master\Models\GudangTrait;
use App\Haramain\Master\Models\SupplierTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory, SupplierTrait, GudangTrait;
    protected $table = 'pembelian';
    protected $fillable = [
        'kode',
        'nomor_nota',
        'nomor_surat_jalan',
        'jenis',
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

    public function pembelianDetail()
    {
        return $this->hasMany(PembelianDetail::class, 'pembelian_id');
    }
}
