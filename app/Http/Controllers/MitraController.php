<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\User;
use Illuminate\Http\Request;

class MitraController extends Controller
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
        $users = User::all();

        return view('mitra.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'nama_mitra' => 'required',
            'nama_brand' => 'required',
            'alamat_mitra' => 'required',
            'email_mitra' => 'required',
            'telp_mitra' => 'required',
        ]);
      
        Mitra::create($request->all());
       
        return redirect()->route('users.index')->with('success','Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mitra $mitra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mitras = Mitra::findOrFail($id);
        $users = User::all();

        return view('mitra.edit', compact('mitras', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_user' => 'required',
            'nama_mitra' => 'required',
            'nama_brand' => 'required',
            'alamat_mitra' => 'required',
            'email_mitra' => 'required',
            'telp_mitra' => 'required',
        ]);

        $mitras = Mitra::findOrFail($id);

        $mitras->update($request->all());

        return redirect()->route('users.index')->with('success','Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mitras = Mitra::findOrFail($id);

        $mitras->delete();

        return redirect()->route('users.index')->with('success','Success');
    }
}
