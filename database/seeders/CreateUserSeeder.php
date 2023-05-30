<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Mitra;
use App\Models\Kursi;
use App\Models\Tempat;
use App\Models\Kamar;
use App\Models\Pemesanan;
use App\Models\Transaksi;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'nama_user'=>'Admin User',
               'email_user'=>'admin@admin.com',
               'role'=>2,
               'telp_user'=>'081208120812',
               'alamat_user'=>'Jl. Amogus',
               'password'=> bcrypt('12121212'),
               'api_token'=> null,
               'wallet'=>0,
            ],
            [
                'nama_user'=>'Mitra User',
                'email_user'=>'mitra@mitra.com',
                'role'=>1,
                'telp_user'=>'081208120812',
                'alamat_user'=>'Jl. Amogus',
                'password'=> bcrypt('12121212'),
                'api_token'=> null,
                'wallet'=>0,
            ],
            [
               'nama_user'=>'User Biasa',
               'email_user'=>'user@user.com',
               'role'=>0,
               'telp_user'=>'081208120812',
               'alamat_user'=>'Jl. Amogus',
               'password'=> bcrypt('12121212'),
               'api_token'=> null,
               'wallet'=>0,
            ],
        ];

        $mitras = [
            [
                'id_user' => 1,
                'nama_mitra' => 'PT. Admin Penerbangan',
                'nama_brand' => 'Penerbangan Admin',
                'jenis_mitra' => 'Penerbangan',
                'alamat_mitra' => 'JL. PT Penerbangan Admin',
                'email_mitra' => 'admin@admin.com',
                'telp_mitra' => '081208120812',
            ],
            [
                'id_user' => 1,
                'nama_mitra' => 'PT. Admin Perhotelan',
                'nama_brand' => 'Perhotelan Admin',
                'jenis_mitra' => 'Perhotelan',
                'alamat_mitra' => 'JL. PT Perhotelan Admin',
                'email_mitra' => 'admin@admin.com',
                'telp_mitra' => '081208120812',
            ],
        ];

        $tempats = [
            [
                'nama_tempat' => 'Balikpapan'
            ],
            [
                'nama_tempat' => 'Banjarmasin'
            ],
            [
                'nama_tempat' => 'Berau'
            ],
            [
                'nama_tempat' => 'Sangatta'
            ],
        ];

        $kursis = [
            [
                'id_tempat_asal' => 1,
                'id_tempat_tujuan' => 2,
                'no_kursi' => 'A1',
                'waktu_berangkat' => '2023-05-30 09:00:00',
                'waktu_sampai' => '2023-05-30 11:00:00',
            ],
            [
                'id_tempat_asal' => 2,
                'id_tempat_tujuan' => 1,
                'no_kursi' => 'B1',
                'waktu_berangkat' => '2023-05-30 10:00:00',
                'waktu_sampai' => '2023-05-30 12:00:00',
            ],
            [
                'id_tempat_asal' => 3,
                'id_tempat_tujuan' => 4,
                'no_kursi' => 'C1',
                'waktu_berangkat' => '2023-05-30 10:00:00',
                'waktu_sampai' => '2023-05-30 13:00:00',
            ],
        ];

        $kamars = [
            [
                'no_ruangan' => '1',
                'kapasitas_ruangan' => 4,
                'tipe_ruangan' => 'Suite'
            ],
            [
                'no_ruangan' => '2',
                'kapasitas_ruangan' => 2,
                'tipe_ruangan' => 'Room'
            ],
            [
                'no_ruangan' => '3',
                'kapasitas_ruangan' => 1,
                'tipe_ruangan' => 'Room'
            ],
        ];

        $pemesanans = [
            [
                'id_mitra' => 2,
                'id_produk' => 1,
                'jenis_mitra' => 'Penerbangan',
                'harga' => 15000,
                'status' => 'Tersedia'
            ],
            [
                'id_mitra' => 2,
                'id_produk' => 2,
                'jenis_mitra' => 'Penerbangan',
                'harga' => 20000,
                'status' => 'Tersedia'
            ],
            [
                'id_mitra' => 2,
                'id_produk' => 3,
                'jenis_mitra' => 'Penerbangan',
                'harga' => 18000,
                'status' => 'Tersedia'
            ],
            [
                'id_mitra' => 2,
                'id_produk' => 1,
                'jenis_mitra' => 'Perhotelan',
                'harga' => 200000,
                'status' => 'Tersedia'
            ],
            [
                'id_mitra' => 2,
                'id_produk' => 2,
                'jenis_mitra' => 'Perhotelan',
                'harga' => 900000,
                'status' => 'Tersedia'
            ],
            [
                'id_mitra' => 2,
                'id_produk' => 3,
                'jenis_mitra' => 'Perhotelan',
                'harga' => 130000,
                'status' => 'Tersedia'
            ],
        ];

        $transaksis = [
            [
                'id_pemesanan' => 1,
                'id_user' => 3,
                'total_bayar' => 150000
                'status_bayar' => 'Belum Lunas'
                'tgl_dl' => '2023-05-30 10:00:00'
                'tgl_bayar' => ''
            ],
            [
                'id_pemesanan' => 2,
                'id_user' => 3,
                'total_bayar' => 200000
                'status_bayar' => 'Belum Lunas'
                'tgl_dl' => '2023-05-30 10:00:00'
                'tgl_bayar' => ''
            ],
            [
                'id_pemesanan' => 3,
                'id_user' => 3,
                'total_bayar' => 300000
                'status_bayar' => 'Lunas'
                'tgl_dl' => '2023-05-30 10:00:00'
                'tgl_bayar' => '2023-05-15 10:00:00'
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }

        foreach ($mitras as $key => $mitra) {
            Mitra::create($mitra);
        }

        foreach ($tempats as $key => $tempats) {
            Tempat::create($tempats);
        }

        foreach ($kursis as $key => $kursi) {
            Kursi::create($kursi);
        }

        foreach ($kamars as $key => $kamar) {
            Kamar::create($kamar);
        }

        foreach ($pemesanans as $key => $pemesanan) {
            Pemesanan::create($pemesanan);
        }
    }
}
