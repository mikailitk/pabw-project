<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'pemesanans';

    protected $fillable = [
        'id_mitra', 'id_produk', 'jenis_mitra', 'harga', 'status'
    ];

    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'id_mitra', 'id');
    }

    public function fromkursi()
    {
        return $this->belongsTo(Kursi::class, 'id_produk', 'id');
    }

    public function fromkamar()
    {
        return $this->belongsTo(Kamar::class, 'id_produk', 'id');
    }

}
