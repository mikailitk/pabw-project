<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mitra;
use App\Models\Kursi;
use App\Models\Kamar;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminControlController extends Controller
{
    public function user_mitra()
    {
        $users = User::where('role', 0)->orWhere('role', 1)->get();
        $mitras = Mitra::all();

        return view('admin_control.um', compact('users', 'mitras'));
    }

    public function hotel_pesawat()
    {
        $kursis = Pemesanan::where('jenis_mitra', 'Penerbangan')->get();
        $kamars = Pemesanan::where('jenis_mitra', 'Perhotelan')->get();

        return view('admin_control.hp', compact('kursis', 'kamars'));
    }
}
