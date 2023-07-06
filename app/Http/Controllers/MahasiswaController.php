<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function store(Request $request)
    {
        Mahasiswa::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kelas' => $request->kelas,
            'email' => $request->email,
        ]);

        return redirect('addmahasiswa');
    }

    public function show(Request $request)
    {

        $kelas = Kelas::with('mahasiswarel')->get();
        $mahasiswa = Mahasiswa::with('kelasrel')->get();
        return view('mahasiswa.datamahasiswa', compact('mahasiswa', 'kelas'));
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.editmahasiswa')->with('mahasiswa',$mahasiswa);
    }

    public function update(Request $request, $id)
    {
        $data = Mahasiswa::findOrFail($id);

        $data->update($request->all());
        return redirect('/datamahasiswa');
    }

    public function delete($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect('/datamahasiswa');
    }

}
