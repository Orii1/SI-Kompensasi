<?php

namespace App\Http\Controllers;

use App\Models\Kompensasi;
use App\Models\Pengawas;
use Illuminate\Http\Request;

class PengawasController extends Controller
{
    public function index()
    {
        $status = Kompensasi::where('status', ('Ongoing'))->with('kls', 'ruang', 'pengs')->get();
        return view('pengawas.dashboard', compact('status'));
    }

    public function store(Request $request)
    {
        Pengawas::create($request->all());
        return view('pengawas.addpengawas');
    }

    public function show()
    {
        $pengawas = Pengawas::all();
        return view('pengawas.datapengawas',compact('pengawas'));
    }

    public function edit($id)
    {
        $pengawas = Pengawas::find($id);
        return view('pengawas.editpengawas')->with('pengawas',$pengawas);
    }

    public function update(Request $request, $id)
    {
        $data = Pengawas::findOrFail($id);

        $data->update($request->all());
        return redirect('/admin/datapengawas');
    }

    public function delete($id)
    {
        $pengawas = Pengawas::findOrFail($id);
        $pengawas->delete();
        return redirect('/admin/datapengawas');
    }
}
