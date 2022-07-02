<?php

namespace App\Models\Bisnis;

use App\Haramain\Bisnis\Models\PembelianReturTrait;
use App\Haramain\Master\Models\ProdukTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianReturDetail extends Model
{
    use HasFactory, PembelianReturTrait, ProdukTrait;
    protected $table = 'pembelian_retur_detail';
    protected $fillable = [
        'pembelian_retur_id',
        'produk_id',
        'harga',
        'jumlah',
        'diskon',
        'sub_total',
    ];
}
