<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haji extends Model
{
    protected $fillable = [
        'kode_paket',
        'nama_paket',
        'jenis_paket',
        'hotel_mekkah',
        'hotel_madinah',
        'arafah',
        'aziziyah',
        'mabit',
        'program_hari',
        'bandara_keberangkatan',
        'keberangkatan',
        'tahun_keberangkatan',
        'kamar',
        'harga'
    ];
    
    use HasFactory;
}
