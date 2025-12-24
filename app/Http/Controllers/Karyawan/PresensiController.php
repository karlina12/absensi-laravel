<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Presensi;
use Carbon\Carbon;

class PresensiController extends Controller
{
    public function index()
    {
        $presensis = Presensi::where('user_id', auth()->id())->get();
        return view('karyawan.presensi', compact('presensis'));
    }

    public function masuk()
    {
        Presensi::create([
            'user_id' => auth()->id(),
            'tanggal' => date('Y-m-d'),
            'jam_masuk' => Carbon::now()->format('H:i:s'),
            'status' => 'hadir'
        ]);

        return back()->with('success', 'Presensi masuk berhasil');
    }

    public function pulang()
    {
        Presensi::where('user_id', auth()->id())
            ->where('tanggal', date('Y-m-d'))
            ->update([
                'jam_pulang' => Carbon::now()->format('H:i:s')
            ]);

        return back()->with('success', 'Presensi pulang berhasil');
    }
}
