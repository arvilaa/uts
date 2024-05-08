<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UTSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('uts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uts.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
            'semester' => 'required',
        ]);
        
// Arahkan kembali ke halaman indeks setelah data berhasil disimpan
return redirect()->route('uts.index')->with('pass-key', 'Data mahasiswa berhasil disimpan.');
    }
}
