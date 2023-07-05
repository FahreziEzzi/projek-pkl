<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Models\Karyawan;

class AbsensiController extends Controller
{
    public function create()
    {
        $karyawan = Karyawan::all();
        return view('absensi.create', compact('karyawan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'karyawan_id' => 'required',
            'tanggal' => 'required|date',
            'jam_masuk' => 'required',
            'jam_keluar' => 'required',
        ]);

        Absensi::create([
            'karyawan_id' => $request->karyawan_id,
            'tanggal' => $request->tanggal,
            'jam_masuk' => $request->jam_masuk,
            'jam_keluar' => $request->jam_keluar,
        ]);

        return redirect()->route('absensi.create')->with('success', 'Absensi berhasil ditambahkan');
    }
}
