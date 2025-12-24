@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-body">
        <h4>Laporan Presensi Karyawan</h4>

        <table class="table table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Masuk</th>
                    <th>Pulang</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($presensis as $p)
                <tr>
                    <td>{{ $p->user->name ?? '-' }}</td>
                    <td>{{ $p->tanggal }}</td>
                    <td>{{ $p->jam_masuk }}</td>
                    <td>{{ $p->jam_pulang }}</td>
                    <td>{{ $p->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
