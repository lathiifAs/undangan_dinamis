<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Love_stories extends Model
{
    use HasFactory;
    protected $fillable = [
        'acara_id',
        'jenis_story',
        'isi',
    ];
}
