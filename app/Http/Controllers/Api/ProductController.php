<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kursi;
use App\Models\Kamar;

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

    public function getKamar(){
        $kamar = Kamar::all();

        return response()->json([
            'message' => "Data retrieve successfully",
            'error' => false,
            'product' => $kamar
        ]);

    }
}
