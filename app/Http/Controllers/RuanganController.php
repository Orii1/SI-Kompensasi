<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function store(Request $request)
    {
        Ruangan::create($request->all());
        return redirect('dataruangan');
    }

    public function show()
    {
        $ruangan = Ruangan::all();
        return view('ruangan.dataruangan',compact('ruangan'));
    }

    public function edit($id)
    {
        $ruangan = Ruangan::find($id);
        return view('ruangan.editruangan')->with('ruangan',$ruangan);
    }

    public function update(Request $request, $id)
    {
        $data = Ruangan::findOrFail($id);

        $data->update($request->all());
        return redirect('/dataruangan');
    }

    public function delete($id)
    {
        $ruangan = Ruangan::findOrFail($id);
        $ruangan->delete();
        return redirect('/dataruangan');
    }
}
