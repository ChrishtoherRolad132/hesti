<?php

namespace App\Http\Controllers;

use App\Models\dataDosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $title = "Data Dosen";
        $dosen = dataDosen::all();
        return view('dosen.index', compact('title', 'dosen'));
    }

    public function tambah(Request $request)
    {
        dataDosen::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'unit_kerja' => $request->unit_kerja,
            'k1' => $request->k1,
            'k2' => $request->k2,
            'k3' => $request->k3,
            'k4' => $request->k4,
            'k5' => $request->k5,
            'k6' => $request->k6,
            'k7' => $request->k7,
        ]);

        return redirect('/data-dosen');
    }

    public function hapus($nip)
    {
        dataDosen::where('nip', $nip)->delete();
        return redirect('/data-dosen');
    }

    public function edit($nip)
    {
        $title = "Edit Data Dosen";
        $data = dataDosen::where('nip', $nip)->get();
        return view('dosen.edit', compact('data', 'title'));
    }

    public function update($nip, Request $request)
    {
        dataDosen::where('nip', $nip)->update([
            'nip' => $nip,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'unit_kerja' => $request->unit_kerja,
            'k1' => $request->k1,
            'k2' => $request->k2,
            'k3' => $request->k3,
            'k4' => $request->k4,
            'k5' => $request->k5,
            'k6' => $request->k6,
            'k7' => $request->k7,
        ]);
        return redirect('/data-dosen');
    }
}
