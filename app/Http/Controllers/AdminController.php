<?php

namespace App\Http\Controllers;

use App\Models\Submit;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $status = Submit::all();
        return view('admin.kompenmhs    ', compact('status'));
    }

    public function status($id)
    {
        $kompens = Submit::find($id);
        return view('admin.statuskompen')->with('kompens', $kompens);
    }

    public function setstatus(Request $request, $id)
    {
        $data = Submit::findOrFail($id);

        $data->update($request->all());
        return redirect('/admin/kompenmhs');
    }
}
