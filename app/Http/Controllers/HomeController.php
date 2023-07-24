<?php

namespace App\Http\Controllers;

use App\Models\Kompensasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admindash()
    {
        $status = Kompensasi::where('status', ('Ongoing'))->with('kls', 'ruang', 'pengs')->get();
        return view('admin.dashboard', compact('status'));
    }

    public function pengawasdash()
    {
        $status = Kompensasi::where('status', ('Ongoing'))->with('kls', 'ruang', 'pengs')->get();
        return view('pengawas.dashboard', compact('status'));
    }

    public function mahasiswadash()
    {
        $status = Kompensasi::where('status', ('Ongoing'))->with('kls', 'ruang', 'pengs')->get();
        return view('mahasiswa.dashboard', compact('status'));
    }
}
