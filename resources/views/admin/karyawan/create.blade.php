@extends('layouts.app')

@section('content')
<h3>Tambah Karyawan</h3>

<form action="{{ route('admin.karyawan.store') }}" method="POST">
    @csrf

    <label>Nama</label><br>
    <input type="text" name="nama"><br><br>

    <label>NIP</label><br>
    <input type="text" name="nip"><br><br>

    <label>Jabatan</label><br>
    <input type="text" name="jabatan"><br><br>

    <label>Email</label><br>
    <input type="email" name="email"><br><br>

    <button type="submit">Simpan</button>
</form>
@endsection
