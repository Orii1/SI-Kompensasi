<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(Request $request)
    {
        $class = $request->input('kelas');

        $results = null;
        if ($class) {
            $results = Mahasiswa::where('kelas', $class)->get();
        }

        $kelas = Kelas::with('mahasiswarel')->get();
        $mahasiswa = Mahasiswa::with('kelasrel')->get();
        return view('mahasiswa.datamahasiswa', compact('mahasiswa', 'kelas', 'results'));
    }
}
