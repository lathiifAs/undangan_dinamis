<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_pengajuans extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik',
        'rt_id',
        'jns_pengajuan',
        'nama_usaha',
        'alamat_usaha',
        'diperuntukan',
        'alamat_pertama',
        'alamat_kedua',
        'keterangan',
    ];
}
