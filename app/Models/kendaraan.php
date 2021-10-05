<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'pemilik',
        'nama',
        'nomor',
        'tahun',
        'bahan_bakar',
        'transmisi',
        'seat',
        'cc',
        'harga',
    ];
}
