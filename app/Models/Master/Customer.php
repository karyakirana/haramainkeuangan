<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $fillable = [
        'kode',
        'nama',
        'diskon',
        'telepon',
        'alamat',
        'keterangan',
    ];

    public function getLastNumMasterAttribute()
    {
        return substr($this->kode, 1, 5);
    }
}
