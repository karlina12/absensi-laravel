@extends('layouts.app')

@section('content')
<h3>Data Karyawan</h3>

<a href="{{ route('admin.karyawan.create') }}">Tambah Karyawan</a>

<table border="1" cellpadding="8">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIP</th>
        <th>Jabatan</th>
        <th>Email</th>
    </tr>

    @foreach ($karyawans as $karyawan)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $karyawan->nama }}</td>
        <td>{{ $karyawan->nip }}</td>
        <td>{{ $karyawan->jabatan }}</td>
        <td>{{ $karyawan->email }}</td>
    </tr>
    @endforeach
</table>
@endsection
