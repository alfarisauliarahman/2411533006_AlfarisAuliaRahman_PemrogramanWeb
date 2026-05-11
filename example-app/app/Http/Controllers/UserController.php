<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $name = "Alfaris Aulia Rahman";
        $nim = "2411533006";
        $major = "Informatika";
        $university = "Universitas Teknologi Yogyakarta";

        return view('user.index', compact('name', 'nim', 'major', 'university'));
    }
}
