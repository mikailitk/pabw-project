<?php

namespace App\Http\Controllers;

use App\Models\Kursi;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class KursiController extends Controller
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
        return view('kursis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lastid = Kursi::max('id') + 1;
        $get_mitra_id = Auth::user()->id;
        $get_mitra_jenis = 'Perhotelan';
        $status = 'Tersedia';

        $request->validate([
            'no_kursi' => ['required'],
            'waktu_berangkat' => ['required'],
            'waktu_sampai' => ['required'],
            'tempat_asal' => ['required'],
            'tempat_tujuan' => ['required'],
            'harga' => ['required', 'numeric'],
        ]);
      
        Kursi::create([
            'no_kursi' => $request['no_kursi'],
            'waktu_berangkat' => $request['waktu_berangkat'],
            'waktu_sampai' => $request['waktu_sampai'],
            'tempat_asal' => $request['tempat_asal'],
            'tempat_tujuan' => $request['tempat_tujuan'],
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
    public function show(Kursi $kursi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $p_kursi = Pemesanan::where('id', $id)->get();

        return view('kursis.edit', compact('p_kursi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $kursi = Kursi::where('id', $pemesanan->id_produk)->delete();
        $pemesanan->delete();

        return redirect()->route('adminc.hp')->with('success','Berhasil Hapus Produk');
    }
}
