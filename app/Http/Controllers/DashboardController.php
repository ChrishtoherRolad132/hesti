<?php

namespace App\Http\Controllers;

use App\Models\dataDosen;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "Dashboard";
        $dosen = dataDosen::count();
        return view('dashboard.index', compact('title', 'dosen'));
    }
}
