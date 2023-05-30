<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kursi;
use App\Models\Kamar;
use App\Models\Pemesanan;


class ProductController extends Controller
{
    public function getKursi(){
        $kursis = Kursi::all(); // Retrieve all records from the "kursis" table

        return response()->json([
            'message' => "Data retrieve successfully",
            'error' => false,
            'product' => $kursis
        ]);
    }

    public function getKursiAvailable(Request $request){
        $idProduct = $request->input('id');

        if ($request->has('id')) {
            $idProduct = $request->input('id');
        }

        $kursis = Pemesanan::where('jenis_mitra', 'Penerbangan')->where('id_produk', $idProduct)->get();

        return response()->json([
            'message' => "Data retrieved successfully",
            'error' => false,
            'product' => $kursis
        ]);
    }

    public function getKamar(){
        $kamar = Kamar::all();


        return response()->json([
            'message' => "Data retrieve successfully",
            'error' => false,
            'product' => $kamar
        ]);

    }

    public function getKamarAvailable(Request $request)
    {
        $idProduct = $request->input('id');

        if ($request->has('id')) {
            $idProduct = $request->input('id');
        }

        $kamars = Pemesanan::where('jenis_mitra', 'Perhotelan')->where('id_produk', $idProduct)->get();

        return response()->json([
            'message' => "Data retrieved successfully",
            'error' => false,
            'product' => $kamars
        ]);
    }
}
