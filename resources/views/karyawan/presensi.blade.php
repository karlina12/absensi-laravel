@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-body">

        <h4 class="mb-3">Presensi Karyawan</h4>

        <form action="{{ route('karyawan.presensi.masuk') }}" method="POST" class="d-inline">
            @csrf
            <button class="btn btn-success">Presensi Masuk</button>
        </form>

        <form action="{{ route('karyawan.presensi.pulang') }}" method="POST" class="d-inline">
            @csrf
            <button class="btn btn-warning">Presensi Pulang</button>
        </form>

        <hr>

        <h5>Riwayat Presensi</h5>

        <table class="table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Tanggal</th>
                    <th>Masuk</th>
                    <th>Pulang</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($presensis as $p)
                <tr>
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
