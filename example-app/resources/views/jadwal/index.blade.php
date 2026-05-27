@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">📅 Jadwal Mata Kuliah</h2>
    </div>

    @foreach($subjects as $subject)
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center py-3">
            <div>
                <h5 class="mb-0 fw-bold">{{ $subject->name }}</h5>
                <small class="opacity-75">{{ $subject->sks }} SKS</small>
            </div>
            <span class="badge bg-light text-primary fs-6 px-3 py-2">{{ $subject->jadwals->count() }} Jadwal</span>
        </div>
        <div class="card-body p-0">
            @if($subject->jadwals->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-4">Hari</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Ruangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subject->jadwals as $jadwal)
                            <tr>
                                <td class="ps-4">
                                    <span class="badge bg-success px-3 py-2">{{ $jadwal->nama_hari }}</span>
                                </td>
                                <td>{{ \Carbon\Carbon::parse($jadwal->jam_mulai)->format('H:i') }}</td>
                                <td>{{ \Carbon\Carbon::parse($jadwal->jam_selesai)->format('H:i') }}</td>
                                <td><i class="bi bi-door-open"></i> {{ $jadwal->ruangan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center text-muted py-4 fst-italic">
                    Belum ada jadwal untuk mata kuliah ini.
                </div>
            @endif
        </div>
    </div>
    @endforeach

</div>
@endsection
