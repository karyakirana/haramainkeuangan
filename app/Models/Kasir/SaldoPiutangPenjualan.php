<?php

namespace App\Models\Kasir;

use App\Haramain\Master\Models\CustomerTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaldoPiutangPenjualan extends Model
{
    use HasFactory, CustomerTrait;
    protected $table = 'haramain_keuangan.saldo_piutang_penjualan';
}
