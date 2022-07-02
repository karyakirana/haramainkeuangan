<?php

namespace App\Models\Bisnis;

use App\Haramain\Bisnis\Models\PembelianTrait;
use App\Haramain\Master\Models\ProdukTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianDetail extends Model
{
    use HasFactory, PembelianTrait, ProdukTrait;
    protected $table = 'pembelian_detail';
    protected $fillable = [
        'pembelian_id',
        'produk_id',
        'harga',
        'jumlah',
        'diskon',
        'sub_total',
    ];
}
