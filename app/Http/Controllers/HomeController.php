<?php

namespace App\Http\Controllers;

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
        return view('admin.dashboard');
    }

    public function pengawasdash()
    {
        return view('pengawas.dashboard');
    }

    public function mahasiswadash()
    {
        return view('mahasiswa.dashboard');
    }
}
