@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')

<h2>Detail Mahasiswa</h2>

<p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
<p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
<p><strong>Jurusan:</strong> {{ $mahasiswa->jurusan }}</p>
<p><strong>Universitas:</strong> {{ $mahasiswa->universitas }}</p>

<a href="{{ route('mahasiswa.index') }}">Kembali</a>

@endsection
