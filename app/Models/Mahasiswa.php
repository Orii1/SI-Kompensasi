<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $fillable =['nama','jenis_kelamin','kelas','email'];


    public function kelasrel()
    {
        return $this->belongsTo(Kelas::class, 'kelas', 'id');
    }

    public function kompenrel()
    {
        return $this->belongsTo(Kompensasi::class, 'id_kompensasi', 'id');
    }
}
