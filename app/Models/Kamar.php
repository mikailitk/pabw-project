<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'kamars';

    protected $fillable = [
        'no_ruangan', 'kapasitas_ruangan', 'tipe_ruangan'
    ];
}
