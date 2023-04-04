<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\Kursi;

class ProductController extends Controller
{
    public function showKamar(){
        $data = Kamar::all();

        return response()->json([
            'msg' => 'Data Fetched Successfully',
            'error' => false,
            'data' => $data,
        ]);
    }

    public function showKursi(){
        $data = Kursi::all();

        return response()->json([
            'msg' => 'Data Fetched Successfully',
            'error' => false,
            'data' => $data,
        ]);
    }
}
