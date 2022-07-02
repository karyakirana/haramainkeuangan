<?php

namespace App\Models\Bisnis;

use App\Haramain\Bisnis\Models\PenjualanReturTrait;
use App\Haramain\Master\Models\ProdukTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanReturDetail extends Model
{
    use HasFactory, PenjualanReturTrait, ProdukTrait;
    protected $table = 'penjualan_retur_detail';
    protected $fillable = [
        'penjualan_retur_id',
        'produk_id',
        'harga',
        'jumlah',
        'diskon',
        'sub_total',
    ];
}
