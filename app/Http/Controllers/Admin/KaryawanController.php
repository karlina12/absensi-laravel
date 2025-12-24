<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('admin.karyawan.index', compact('karyawans'));
    }

    public function create()
    {
        return view('admin.karyawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|unique:karyawans',
            'jabatan' => 'required',
            'email' => 'required|email|unique:karyawans',
        ]);

        Karyawan::create($request->all());

        return redirect()->route('admin.karyawan.index')
            ->with('success', 'Data karyawan berhasil ditambahkan');
    }
}
