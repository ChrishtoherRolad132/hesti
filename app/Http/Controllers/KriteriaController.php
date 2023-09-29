<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        $title = "Data Kriteria";
        $kriteria = Kriteria::all();
        return view('kriteria.index', compact('title', 'kriteria'));
    }

    public function edit($kd_kriteria)
    {
        $title = "Edit Kriteria";
        $data = Kriteria::where('kd_kriteria', $kd_kriteria)->get();
        return view('kriteria.edit', compact('data', 'title'));
    }

    public function update($kd_kriteria, Request $request)
    {
        Kriteria::where('kd_kriteria', $kd_kriteria)->update([
            'kd_kriteria' => $kd_kriteria,
            'kriteria' => $request->kriteria,
            'nilai' => $request->nilai,
        ]);
        return redirect('/data-kriteria');
    }
}
