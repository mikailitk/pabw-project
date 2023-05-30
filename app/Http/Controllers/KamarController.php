<?php

namespace App\Http\Controllers;

use App\Models\Kamar;   
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kamars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lastid = Kamar::max('id') + 1;
        $get_mitra_id = Auth::user()->id;
        $get_mitra_jenis = 'Perhotelan';
        $status = 'Tersedia';

        $request->validate([
            'no_ruangan' => ['required'],
            'kapasitas_ruangan' => ['required'],
            'tipe_ruangan' => ['required'],
            'harga' => ['required', 'numeric'],
        ]);
      
        Kamar::create([
            'no_ruangan' => $request['no_ruangan'],
            'kapasitas_ruangan' => $request['kapasitas_ruangan'],
            'tipe_ruangan' => $request['tipe_ruangan'],
        ]);

        Pemesanan::create([
            'id_mitra' => $get_mitra_id,
            'id_produk' => $lastid,
            'jenis_mitra' => $get_mitra_jenis,
            'harga'=> $request['harga'],
            'status' => $status,
        ]);
       
        return redirect()->route('adminc.hp')->with('success','Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kamar $kamar)
    {
        return view('kamars.edit', compact('kamar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kamar $kamar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $kamar = Kamar::where('id', $pemesanan->id_produk)->delete();
        $pemesanan->delete();

        return redirect()->route('adminc.hp')->with('success','Berhasil Hapus Produk');
    }
}
