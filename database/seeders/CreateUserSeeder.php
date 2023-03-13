<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
               'wallet'=>10000,
            ],
            [
                'nama_user'=>'Mitra User',
                'email_user'=>'mitra@mitra.com',
                'role'=>1,
                'telp_user'=>'081208120812',
                'alamat_user'=>'Jl. Amogus',
                'password'=> bcrypt('12121212'),
                'wallet'=>10000,
            ],
            [
               'nama_user'=>'User Biasa',
               'email_user'=>'user@user.com',
               'role'=>0,
               'telp_user'=>'081208120812',
               'alamat_user'=>'Jl. Amogus',
               'password'=> bcrypt('12121212'),
               'wallet'=>10000,
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
