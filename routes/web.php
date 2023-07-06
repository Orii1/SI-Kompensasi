<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PengawasController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\UserController;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\Role;
use Illuminate\Routing\Route as RoutingRoute;
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
});

Route::get('/dashboard', function () {
    return view('/admin/dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


Route::get('/addmahasiswa', function () {
    return view('/mahasiswa/addmahasiswa', [
        'kelas' => Kelas::all()
    ]);
});
Route::post('addmahasiswa', [MahasiswaController::class, 'store']);
Route::get('datamahasiswa', [MahasiswaController::class, 'show']);
Route::get('editmahasiswa/{id}', [MahasiswaController::class, 'edit']);
Route::put('editmahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::get('/deletemahasiswa/{id}', [MahasiswaController::class, 'delete']);


Route::get('/addpengawas', function () {
    return view('pengawas.addpengawas');
});
Route::get('datapengawas', [PengawasController::class, 'show']);
Route::post('addpengawas', [PengawasController::class, 'store']);
Route::get('editpengawas/{id}', [PengawasController::class, 'edit']);
Route::put('/editpengawas/{id}', [PengawasController::class, 'update']);
Route::get('/deletepengawas/{id}', [PengawasController::class, 'delete']);


Route::get('/addruangan', function () {
    return view('ruangan.addruangan');
});
Route::post('addruangan',[RuanganController::class, 'store']);
Route::get('dataruangan', [RuanganController::class, 'show']);
Route::get('editruangan/{id}', [RuanganController::class, 'edit']);
Route::put('/editruangan/{id}', [RuanganController::class, 'update']);
Route::get('/deleteruangan/{id}', [RuanganController::class, 'delete']);


Route::get('/adduser', function () {
    return view('adduser', [
        'roles' => Role::all()
    ]);
});
Route::post('adduser', [UserController::class, 'store']);
