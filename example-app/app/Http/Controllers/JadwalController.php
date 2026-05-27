<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        // Ambil semua subject beserta jadwalnya (eager loading)
        $subjects = Subject::with('jadwals')->get();

        return view('jadwal.index', compact('subjects'));
    }
}
