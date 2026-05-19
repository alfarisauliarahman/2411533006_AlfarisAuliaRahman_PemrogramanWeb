<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    // Menampilkan semua data mahasiswa
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    // Form tambah data
    public function create()
    {
        return view('mahasiswa.create');
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        Mahasiswa::create([
            'nim'         => $request->nim,
            'nama'        => $request->nama,
            'jurusan'     => $request->jurusan,
            'universitas' => $request->universitas,
        ]);
        return redirect('/mahasiswa');
    }

    // Menampilkan detail satu data
    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    // Form edit data
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // Mengubah data di database
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update([
            'nim'         => $request->nim,
            'nama'        => $request->nama,
            'jurusan'     => $request->jurusan,
            'universitas' => $request->universitas,
        ]);
        return redirect('/mahasiswa');
    }

    // Menghapus data dari database
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }
}
