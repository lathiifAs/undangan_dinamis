<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acaras extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal_wedding',
        'nama_laki',
        'nama_wanita',
        'alamat_weddding',
    ];
}
