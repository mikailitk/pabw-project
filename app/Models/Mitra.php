<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'mitras';

    protected $fillable = [
        'id_user', 'nama_mitra', 'nama_brand', 'jenis_mitra', 'alamat_mitra', 'email_mitra', 'telp_mitra'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
