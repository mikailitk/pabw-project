<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis';

    protected $fillable = [
        'id_pemesanan',
        'id_user',
        'total_bayar',
        'status_bayar',
        'tgl_dl',
        'tgl_bayar',
    ];

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
