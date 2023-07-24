<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Kompensasi;
use App\Models\Mahasiswa;
use App\Models\Pengawas;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class KompensasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = Kompensasi::where('status', ('Ongoing'))->with('kls', 'ruang', 'pengs')->get();
        return view('kompensasi.datakompensasi', compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        $ruangan = Ruangan::all();
        $pengawas = Pengawas::all();

        return view('kompensasi.addkompensasi', compact('kelas', 'ruangan', 'pengawas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kompensasi::create([
            'kelas' => $request->kelas,
            'pengawas' => $request->pengawas,
            'ruangan' => $request->ruangan,
        ]);

        return redirect('/admin/datakompensasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showpeng($id)
    {
        $kompensasi = Kompensasi::find($id);
        $mhskls = Mahasiswa::all();
        $datamhs = null;
        if ($kompensasi->kelas == $mhskls->kelasrel->nama) {
            $datamhs = Mahasiswa::where('kelas', $kompensasi->kelas == $mhskls->kelas);
        }
        return view('pengawas.detail', compact('kompensasi'));
    }

    public function showmhs($id)
    {
        $kompensasi = Kompensasi::findOrFail($id)->with('kls', 'ruang', 'pengs')->get();
        return view('mahasiswa.detail', ['kompensasi' => $kompensasi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kompensasi = Kompensasi::find($id);
        $kelas = Kelas::all();
        $pengawas = Pengawas::all();
        $ruangan = Ruangan::all();
        return view('kompensasi.editkompensasi', compact('kompensasi', 'kelas', 'ruangan', 'pengawas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Kompensasi::findOrFail($id);

        $data->update($request->all());
        return redirect('/admin/datakompensasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function history()
    {
        $kompens = Kompensasi::all();
        return view('kompensasi.historykompensasi', compact('kompens'));
    }

    public function status($id)
    {
        $kompens = Kompensasi::find($id);
        return view('kompensasi.cekstatus')->with('kompens', $kompens);
    }

    public function acc(Request $request, $id)
    {
        $data = Kompensasi::findOrFail($id);

        $data->update($request->all());
        return redirect('/admin/datakompensasi');
    }
}
