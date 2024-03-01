<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umrah extends Model
{
    protected $fillable = [
        'kode_paket',
        'nama_paket',
        'jenis_paket',
        'hotel_mekkah',
        'hotel_madinah',
        'program_hari',
        'bandara_keberangkatan',
        'keberangkatan',
        'kamar',
        'harga'
    ];

    use HasFactory;
}
