<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
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
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'role' => ['required'],
            'nama_user' => ['required'],
            'email_user' => ['required'],
            'password' => ['required'],
            'telp_user' => ['required'],
            'alamat_user' => ['required'],
        ]);
      
        User::create([
            'role' => $request['role'],
            'nama_user' => $request['nama_user'],
            'email_user' => $request['email_user'],
            'password' => Hash::make($request['password']),
            'telp_user' => $request['telp_user'],
            'alamat_user' => $request['alamat_user'],
        ]);
       
        return redirect()->route('adminc.um')->with('success','Success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);

        return view('users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'role' => ['required'],
            'nama_user' => ['required'],
            'email_user' => ['required'],
            'telp_user' => ['required'],
            'alamat_user' => ['required'],
        ]);

        $users = User::findOrFail($id);

        $users->update($request->all());

        return redirect()->route('adminc.um')->with('success','Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $users = User::findOrFail($id);

        $users->delete();

        return redirect()->route('adminc.um')->with('success','Success');
    }

    public function getwallet($id)
    {
        $users = User::findOrFail($id);
        
        return view('users.wallet',compact('users'));
    }

    public function addwallet(Request $request, User $users)
    {
        $request->validate([
            'wallet' => 'required',
        ]);

        $users->update(['wallet' => $request->wallet]);
      
        return redirect()->route('adminc.um')->with('success','Successfuly edit wallet');
    }
}
