@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')

<h2>Edit Mahasiswa</h2>

<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>NIM:</label><br>
    <input type="text" name="nim" value="{{ $mahasiswa->nim }}"><br><br>

    <label>Nama:</label><br>
    <input type="text" name="nama" value="{{ $mahasiswa->nama }}"><br><br>

    <label>Jurusan:</label><br>
    <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}"><br><br>

    <label>Universitas:</label><br>
    <input type="text" name="universitas" value="{{ $mahasiswa->universitas }}"><br><br>

    <button type="submit">Update</button>
    <a href="{{ route('mahasiswa.index') }}">Batal</a>
</form>

@endsection
