<?php

namespace App\Http\Controllers\Manajer;

use App\Http\Controllers\Controller;
use App\Models\Presensi;

class PresensiController extends Controller
{
    public function index()
    {
        $presensis = Presensi::with('user')->get();
        return view('manajer.presensi', compact('presensis'));
    }
}
