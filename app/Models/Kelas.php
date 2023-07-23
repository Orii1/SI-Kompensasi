<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    public function mahasiswarel()
    {
        return $this->hasMany(Mahasiswa::class, 'kelas', 'id');
    }

    public function kompen()
    {
        return $this->hasOne(Kompensasi::class, 'kelas', 'id');
    }
}
