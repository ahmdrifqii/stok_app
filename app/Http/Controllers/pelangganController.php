<?php

namespace App\Http\Controllers;

use App\Models\palanggan;
use Illuminate\Http\Request;

class pelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Pelanggan.pelanggan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('Pelanggan.addPelanggan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valueData = $request->validate([
        'nama_pelanggan' => 'required',
        'telp' => 'required',
        'jenis_kelamin' => 'required',
        'alamat' => 'required',
        'kota' => 'required',
        'provinsi' => 'required',
        ],[
            'nama_pelanggan.required' => 'Data wajib diisi!!!', 
            'telp.required' => 'Data wajib diisi!!!',
            'jenis_kelamin.required' => 'Data wajib diisi!!!',
            'alamat.required' => 'Data wajib diisi!!!',
            'kota.required' => 'Data wajib diisi!!!',
            'provinsi.required' => 'Data wajib diisi!!!',
        ]);

        palanggan::create($valueData);

        return redirect('/pelanggan')->with(
            'message',
            ''. $request->nama_pelangan . ' Berhasil terdaftar'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
