<?php

namespace App\Models\Bisnis;

use App\Haramain\Bisnis\Models\PenjualanTrait;
use App\Haramain\Master\Models\ProdukTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanDetail extends Model
{
    use HasFactory, PenjualanTrait, ProdukTrait;
    protected $table = 'penjualan_detail';
    protected $fillable = [
        'penjualan_id',
        'produk_id',
        'harga',
        'jumlah',
        'diskon',
        'sub_total',
    ];
}
