@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-body">
        <h4>Dashboard Karyawan</h4>
        <p>Silakan lakukan presensi harian.</p>

        <a href="{{ route('karyawan.presensi') }}" class="btn btn-success">
            Presensi Hari Ini
        </a>
    </div>
</div>
@endsection
