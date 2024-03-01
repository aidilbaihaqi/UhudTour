<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'umrah_id',
        'haji_id',
        'nama',
        'umur',
        'alamat',
        'telp',
        'jamaah',
        'total'
    ];

    use HasFactory;
}
