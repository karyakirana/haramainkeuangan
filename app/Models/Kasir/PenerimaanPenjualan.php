<?php

namespace App\Models\Kasir;

use App\Haramain\Kasir\Models\{AkunTrait, KasTrait};
use App\Haramain\Akuntansi\Models\JurnalTransaksiTrait;
use App\Haramain\Master\Models\CustomerTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaanPenjualan extends Model
{
    use HasFactory, KasTrait, AkunTrait, CustomerTrait, JurnalTransaksiTrait;
    protected $table = 'haramain_keuangan.penerimaan_penjualan';

    protected $fillable = [
        'active_cash',
        'kode',
        'customer_id',
        'akun_kas_id',
        'nominal_kas',
        'akun_piutang_id',
        'nominal_piutang'
    ];
}
