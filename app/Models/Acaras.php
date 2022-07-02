<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acaras extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'tanggal_wedding',
        'nama_laki',
        'nama_panggilan_laki',
        'ayah_mempelai_laki',
        'ibu_mempelai_laki',
        'desc_laki',

        'nama_wanita',
        'nama_panggilan_wanita',
        'ayah_mempelai_wanita',
        'ibu_mempelai_wanita',
        'desc_wanita',

        'lokasi_hajat',

        'tgl_akad',
        'start_jam_akad',
        'end_jam_akad',
        'alamat_akad',
        'link_alamat_akad',

        'tgl_resepsi',
        'start_jam_resepsi',
        'end_jam_resepsi',
        'alamat_resepsi',
        'link_alamat_resepsi',
    ];
}
