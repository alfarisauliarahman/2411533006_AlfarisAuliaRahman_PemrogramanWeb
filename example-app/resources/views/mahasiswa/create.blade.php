@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')

    <h2>Tambah Mahasiswa</h2>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf

        <label>NIM:</label><br>
        <input type="text" name="nim"><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan"><br><br>

        <label>Universitas:</label><br>
        <input type="text" name="universitas"><br><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('mahasiswa.index') }}">Batal</a>
    </form>

@endsection