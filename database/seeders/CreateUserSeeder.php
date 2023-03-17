<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Mitra;
use App\Models\Kursi;
use App\Models\Kamar;
use App\Models\Pemesanan;

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
               'wallet'=>0,
            ],
            [
                'nama_user'=>'Mitra User',
                'email_user'=>'mitra@mitra.com',
                'role'=>1,
                'telp_user'=>'081208120812',
                'alamat_user'=>'Jl. Amogus',
                'password'=> bcrypt('12121212'),
                'wallet'=>0,
            ],
            [
               'nama_user'=>'User Biasa',
               'email_user'=>'user@user.com',
               'role'=>0,
               'telp_user'=>'081208120812',
               'alamat_user'=>'Jl. Amogus',
               'password'=> bcrypt('12121212'),
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

        $kursis = [
            [
                'no_kursi' => 'A-1',
                'waktu_berangkat' => '2023-03-15 19:22:50',
                'waktu_sampai' => '2023-03-15 20:00:00',
                'tempat_asal' => 'Balikpapan',
                'tempat_tujuan' => 'Jakarta',
            ],
            [
                'no_kursi' => 'A-2',
                'waktu_berangkat' => '2023-03-15 19:22:50',
                'waktu_sampai' => '2023-03-15 20:00:00',
                'tempat_asal' => 'Balikpapan',
                'tempat_tujuan' => 'Jakarta',
            ],
            [
                'no_kursi' => 'A-3',
                'waktu_berangkat' => '2023-03-15 19:22:50',
                'waktu_sampai' => '2023-03-15 20:00:00',
                'tempat_asal' => 'Balikpapan',
                'tempat_tujuan' => 'Jakarta',
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

    
        foreach ($users as $key => $user) {
            User::create($user);
        }

        foreach ($mitras as $key => $mitra) {
            Mitra::create($mitra);
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
