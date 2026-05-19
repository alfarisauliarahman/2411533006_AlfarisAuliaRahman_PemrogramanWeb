@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')

<h2>Daftar Mahasiswa</h2>

<a href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>

<table border="1" cellpadding="8" cellspacing="0" style="margin-top:10px; border-collapse:collapse;">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Universitas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswas as $index => $mahasiswa)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama }}</td>
            <td>{{ $mahasiswa->jurusan }}</td>
            <td>{{ $mahasiswa->universitas }}</td>
            <td>
                <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}">Detail</a> |
                <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}">Edit</a> |
                <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Hapus mahasiswa ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
