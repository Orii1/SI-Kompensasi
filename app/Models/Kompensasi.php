<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompensasi extends Model
{
    use HasFactory;

    protected $table = 'kompensasi';
    protected $fillable = ['kelas', 'pengawas', 'ruangan', 'status'];

    public function mhs()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_kompensasi', 'id');
    }

    public function kls()
    {
        return $this->belongsTo(Kelas::class, 'kelas', 'id');
    }

    public function ruang()
    {
        return $this->belongsTo(Ruangan::class, 'ruangan', 'id');
    }

    public function pengs()
    {
        return $this->belongsTo(Pengawas::class, 'pengawas', 'id');
    }
}
