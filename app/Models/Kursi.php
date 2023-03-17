<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'kursis';

    protected $fillable = [
        'no_kursi', 'waktu_berangkat', 'waktu_sampai', 'tempat_asal', 'tempat_tujuan'
    ];
}
