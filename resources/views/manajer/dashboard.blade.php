@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-body">
        <h4>Dashboard Manajer</h4>
        <p>Monitoring dan laporan presensi karyawan.</p>

        <a href="{{ route('manajer.presensi') }}" class="btn btn-info">
            Lihat Laporan Presensi
        </a>
    </div>
</div>
@endsection
