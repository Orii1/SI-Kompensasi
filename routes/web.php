<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KompensasiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PengawasController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\SubmitController;
use App\Http\Controllers\UserController;
use App\Models\Kelas;
use App\Models\Kompensasi;
use App\Models\Mahasiswa;
use App\Models\Role;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login2');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('/admin/dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


Route::get('/admin/addmahasiswa', function () {
    return view('/mahasiswa/addmahasiswa', [
        'kelas' => Kelas::all()
    ]);
});
Route::post('/admin/addmahasiswa', [MahasiswaController::class, 'store']);
Route::get('/admin/datamahasiswa', [MahasiswaController::class, 'show']);
Route::get('/admin/editmahasiswa/{id}', [MahasiswaController::class, 'edit']);
Route::put('/admin/editmahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::get('/admin/deletemahasiswa/{id}', [MahasiswaController::class, 'delete']);


Route::get('/admin/addpengawas', function () {
    return view('pengawas.addpengawas');
});
Route::get('/admin/datapengawas', [PengawasController::class, 'show']);
Route::post('/admin/addpengawas', [PengawasController::class, 'store']);
Route::get('/admin/editpengawas/{id}', [PengawasController::class, 'edit']);
Route::put('/admin/editpengawas/{id}', [PengawasController::class, 'update']);
Route::get('/admin/deletepengawas/{id}', [PengawasController::class, 'delete']);


Route::get('/admin/addruangan', function () {
    return view('ruangan.addruangan');
});
Route::post('/admin/addruangan',[RuanganController::class, 'store']);
Route::get('/admin/dataruangan', [RuanganController::class, 'show']);
Route::get('/admin/editruangan/{id}', [RuanganController::class, 'edit']);
Route::put('/admin/editruangan/{id}', [RuanganController::class, 'update']);
Route::get('/admin/deleteruangan/{id}', [RuanganController::class, 'delete']);


Route::get('/admin/adduser', function () {
    return view('adduser', [
        'roles' => Role::all()
    ]);
});
Route::post('/admin/adduser', [UserController::class, 'store']);

Route::get('/admin/search', [KelasController::class, 'index'])->name('search');


Route::middleware(['auth', 'user-access:1'])->group(function () {

    Route::get('/mahasiswa/dashboard', [HomeController::class, 'mahasiswadash'])->name('mahasiswadash');
});

Route::middleware(['auth', 'user-access:3'])->group(function () {

    Route::get('/admin/dashboard', [HomeController::class, 'admindash'])->name('admindash');
});

Route::middleware(['auth', 'user-access:2'])->group(function () {

    Route::get('/pengawas/dashboard', [HomeController::class, 'pengawasdash'])->name('pengawasdash');
});


Route::get('/admin/datakompensasi', [KompensasiController::class, 'index']);
Route::get('/admin/addkompensasi', [KompensasiController::class, 'create']);
Route::post('/admin/addkompensasi', [KompensasiController::class, 'store']);
Route::get('/admin/cekstatus/{id}', [KompensasiController::class, 'status']);
Route::put('/admin/cekstatus/{id}', [KompensasiController::class, 'acc']);
Route::get('/admin/editkompensasi/{id}', [KompensasiController::class, 'edit']);
Route::put('/admin/editkompensasi/{id}', [KompensasiController::class, 'update']);

Route::get('/pengawas/detailpeng/{id}', [KompensasiController::class, 'showpeng']);

Route::get('/admin/historykompensasi', [KompensasiController::class, 'history']);

Route::get('/mahasiswa/submitmhs/{id}', [MahasiswaController::class, 'submit']);
Route::post('/mahasiswa/submitmhs/{id}', [SubmitController::class, 'store']);

Route::get('/pengawas/kompensasimhs', [SubmitController::class, 'index']);
Route::get('/pengawas/statuskompens/{id}', [PengawasController::class, 'status']);
Route::put('/pengawas/statuskompens/{id}', [PengawasController::class, 'setstatus']);

Route::get('/admin/kompenmhs', [AdminController::class, 'index']);
Route::get('/admin/statuskompen/{id}', [AdminController::class, 'status']);
Route::put('/admin/statuskompen/{id}', [AdminController::class, 'setstatus']);
