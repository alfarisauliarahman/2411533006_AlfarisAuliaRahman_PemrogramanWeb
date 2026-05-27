@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white pt-3 pb-3">
                    <h4 class="mb-0 fw-bold">Edit Data Mahasiswa</h4>
                </div>
                <div class="card-body p-4">
                    
                    {{-- Menampilkan error validasi jika ada --}}
                    @if ($errors->any())
                        <div class="alert alert-danger rounded-3 shadow-sm">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('students.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nim" class="form-label fw-semibold">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="{{ old('nim', $student->nim) }}" placeholder="Masukkan NIM" required>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $student->name) }}" placeholder="Masukkan Nama Lengkap" required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label fw-semibold">Alamat</label>
                            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Masukkan Alamat Lengkap" required>{{ old('address', $student->address) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="major_id" class="form-label fw-semibold">Jurusan</label>
                            <select class="form-select" id="major_id" name="major_id" required>
                                <option value="" disabled>Pilih Jurusan</option>
                                @foreach($majors as $major)
                                    <option value="{{ $major->id }}" {{ old('major_id', $student->major_id) == $major->id ? 'selected' : '' }}>
                                        {{ $major->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">Mata Kuliah Pilihan</label>
                            <div class="card bg-light border-0">
                                <div class="card-body">
                                    <div class="row">
                                        @foreach($subjects as $subject)
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="subjects[]" value="{{ $subject->id }}" id="subject_{{ $subject->id }}" 
                                                        {{ in_array($subject->id, old('subjects', $student->subjects->pluck('id')->toArray())) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="subject_{{ $subject->id }}">
                                                        {{ $subject->name }} <span class="badge bg-secondary">{{ $subject->sks }} SKS</span>
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('students.index') }}" class="btn btn-outline-secondary px-4">Batal</a>
                            <button type="submit" class="btn btn-primary px-5 fw-bold shadow-sm">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
