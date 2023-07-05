<?php

// app/Http/Controllers/KaryawanController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('karyawan.index', compact('karyawan'));
    }
    //tmbh absensi//

    public function create()
    {

        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'email' => 'required|email|unique:karyawan',
            'telepon' => 'required',
        ]);

        Karyawan::create($request->all());

        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil ditambahkan!');
    }

public function show($id)
{
    $karyawan = Karyawan::find($id);
    return view('karyawan.show', compact('karyawan'));
}

}
