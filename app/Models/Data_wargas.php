<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_wargas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik',
        'rt_id',
        'no_kk',
        'nama',
        'jns_kel',
        'tmpt_lahir',
        'tgl_lahir',
        'agama',
        'gol_darah',
        'st_kawin',
        'kewarganegaraan',
        'alamat',
        'vaksin_level',
        'listrik',
        'pdam',
        'gang',
        'pekerjaan'
    ];
}
