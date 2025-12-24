@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-body">
        <h4 class="card-title">Dashboard Admin</h4>
        <p>Kelola data karyawan dan sistem absensi.</p>

        <a href="{{ route('admin.karyawan.index') }}" class="btn btn-primary">
            Kelola Data Karyawan
        </a>
    </div>
</div>
@endsection
