<?php

namespace App\Http\Controllers;

use App\Models\dataDosen;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function index()
    {
        $title = "Penilaian";
        $dosen = dataDosen::all();
        $kriteria = Kriteria::all();
        $jumlah = dataDosen::count();
        foreach ($dosen as $d) {
            $nip[] = $d->nip;
            $nama[] = $d->nama;
            $k1[] = $d->k1;
            $k2[] = $d->k2;
            $k3[] = $d->k3;
            $k4[] = $d->k4;
            $k5[] = $d->k5;
            $k6[] = $d->k6;
            $k7[] = $d->k7;
        }
        foreach ($kriteria as $k) {
            $nilai[] = $k->nilai;
        }
        $maxk1 = max($k1);
        $maxk2 = max($k2);
        $maxk3 = max($k3);
        $maxk4 = max($k4);
        $maxk5 = max($k5);
        $maxk6 = max($k6);
        $maxk7 = max($k7);

        for ($i = 0; $i < $jumlah; $i++) {
            $ev[] = ($k1[$i] / $maxk1) + ($k2[$i] / $maxk2) + ($k3[$i] / $maxk3) + ($k4[$i] / $maxk4) + ($k5[$i] / $maxk5) + ($k6[$i] / $maxk6) + ($k7[$i] / $maxk7);

            $hasil[] = [$nip[$i], $nama[$i], $ev[$i]];
        }

        return view('penilaian.index', compact('title', 'hasil'));
    }
}
