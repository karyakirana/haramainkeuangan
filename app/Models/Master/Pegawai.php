<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $fillable = [
        'kode',
        'user_id',
        'nama',
        'gender',
        'jabatan',
        'telepon',
        'alamat',
        'keterangan',
    ];
}
