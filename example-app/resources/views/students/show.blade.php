@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0 text-primary fw-bold"><i class="bi bi-person-badge"></i> Detail Mahasiswa</h3>
                        <a href="{{ route('students.index') }}" class="btn btn-outline-secondary btn-sm">
                            &larr; Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <table class="table table-borderless table-hover mb-0">
                        <tbody>
                            <tr>
                                <th class="text-muted w-25">NIM</th>
                                <td class="fw-bold fs-5">{{ $student->nim }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Nama Lengkap</th>
                                <td>{{ $student->name }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Alamat</th>
                                <td>{{ $student->address }}</td>
                            </tr>
                            <tr>
                                <th class="text-muted">Jurusan</th>
                                <td>
                                    <span class="badge bg-primary px-3 py-2">{{ $student->major->name }}</span>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-muted align-middle">Mata Kuliah</th>
                                <td>
                                    @if($student->subjects->count() > 0)
                                        <ul class="list-group list-group-flush border rounded-3 mt-2">
                                            @foreach($student->subjects as $subject)
                                                <li class="list-group-item bg-light">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <strong>{{ $subject->name }}</strong>
                                                        <span class="badge bg-secondary rounded-pill">{{ $subject->sks }} SKS</span>
                                                    </div>
                                                    {{-- Jadwal untuk matkul ini --}}
                                                    @if($subject->jadwals->count() > 0)
                                                        <div class="mt-2">
                                                            @foreach($subject->jadwals as $jadwal)
                                                                <span class="badge bg-info text-dark me-1 mb-1 px-2 py-1">
                                                                    📅 {{ $jadwal->nama_hari }},
                                                                    {{ \Carbon\Carbon::parse($jadwal->jam_mulai)->format('H:i') }}–{{ \Carbon\Carbon::parse($jadwal->jam_selesai)->format('H:i') }}
                                                                    | 🚪 {{ $jadwal->ruangan }}
                                                                </span>
                                                            @endforeach
                                                        </div>
                                                    @else
                                                        <div class="mt-1 text-muted fst-italic small">Jadwal belum tersedia</div>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <span class="text-muted fst-italic">Belum mengambil mata kuliah</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="text-muted">Total SKS</th>
                                <td>
                                    <h4 class="mb-0">
                                        <span class="badge bg-success">{{ $student->subjects->sum('sks') }} SKS</span>
                                    </h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer bg-white border-top-0 pb-4 text-end">
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning px-4">
                        Edit Data
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
